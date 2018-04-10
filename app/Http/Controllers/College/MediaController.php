<?php

namespace App\Http\Controllers\College;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\College\College_media;
use App\Model\College\courseOffers;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use File;


class MediaController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function insertimages(){
      return view('college.image_gallery');
  }

  public function uploadimage(Request $request) {
    $reg_id = Auth::user()->reg_id;
    $insertData = array();
    //dd($request->file('file'));
    if($file=$request->file('file'))
    {
        $name = str_random(6) . '_' . $file->getClientOriginalName();
        $destination_path = '/college/images/gallery_images';
        $file->move(public_path().$destination_path, $name);
        $file_url = 'college/images/gallery_images/'.$name;

        $user = new College_media;
        $user->reg_id = $reg_id;
        $user->file_name = $name;
        $user->file_url = $file_url;
        $user->file_type = "Image";
        $user->save();
    }

    //return redirect("college/image_gallery");
  }

  public function showimages(){
    $reg_id = Auth::user()->reg_id;
    $user = College_media::where(['file_type'=>'Image','reg_id'=>$reg_id])
                            ->orderBy('created_at', 'DESC')
                            ->get();
    return view('college.image_gallery', compact('user'));
  }

  public function deleteImage(Request $request){
    $reg_id = Auth::user()->reg_id;
    $id = $request->id;
    $College_media = College_media::where(['reg_id'=>$reg_id,'id'=>$id,'file_type'=>'Image']);
    $fileUrl = $College_media->first()->file_url;
    if(File::exists(public_path().'/'.$fileUrl)){
      File::delete(public_path().'/'.$fileUrl);
    }
    $delFile = $College_media->delete();
    if($delFile)
    {
      return redirect('college/image_gallery')->with(['status'=>'Success','msg'=>'Image Deleted Successfuly.']);
    }
   
 }
  public function uploadprofile_image(Request $request){
     $regid = Auth::user()->id;
     $user = User::find($regid);
     $course = courseOffers::find($regid);
     if(Input::hasFile('image'))
    {
        $file=Input::file('image');
        $file->move(public_path().'/college/images/clg_images', $file->getClientOriginalName());
        $user->profile_image = 'college/images/clg_images/'.$file->getClientOriginalName();
    }

     $user->update();
     return redirect("college/myprofile");
   }

   public function showprofile_image(){
     $regid = Auth::user()->reg_id;
     $user=User::where('reg_id',$regid)->first();
     // $course = courseOffers::where('reg_id',$regid)->get();
     $course=courseOffers::where('reg_id',$regid)->get(['course_offer','course_duration','course_total_fee','fee_structure_file_name','fee_structure_file_url','course_department']);
     // dd($course->all());
     return view("college.index")->with(['user' => $user, 'course' => $course]);
   }
}