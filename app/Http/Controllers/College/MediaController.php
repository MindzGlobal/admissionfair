<?php

namespace App\Http\Controllers\College;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modle\College\College_media;
use App\Modle\College\Course_offer;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


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

    $input=$request->all();
    $insertData = array();
    if($files=$request->file('image')){
 //      $this->validate($request,['image' => 'required',
 // 'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048']);

        foreach($files as $file)
        {
              $name = str_random(6) . '_' . $file->getClientOriginalName();
              $destination_path = '/college/images/gallery_images';
              $file->move(public_path().$destination_path, $name);
              $file_url = 'college/images/gallery_images/'.$name;

              $insertData[] = [
              'file_name'  => $name,
              'file_url'   => $file_url,
              'file_type'  => "Image",
              ];
        }
        $user = new College_media;
        $user->insert($insertData);
    }

    return redirect("college/image_gallery");
  }

  public function showimages(){

    $user=College_media::where(function($query) {
       $query->where('file_type', 'Image');
       })->get(['file_type','file_name','file_url']);

    return view('college.image_gallery', compact('user'));
  }

  public function uploadprofile_image(Request $request){
     $regid = Auth::user()->id;
     $user = User::find($regid);
     $course = Course_offer::find($regid);
     if(Input::hasFile('image'))
    {
        $file=Input::file('image');
        $file->move(public_path().'/college/images/profile_images', $file->getClientOriginalName());
        $user->profile_image = 'college/images/profile_images/'.$file->getClientOriginalName();
    }

     $user->update();
     return redirect("college/myprofile");
   }

   public function showprofile_image(){
     $regid = Auth::user()->reg_id;
     $user=User::where('reg_id',$regid)->first();
     // $course = Course_offer::where('reg_id',$regid)->get();
     $course=Course_offer::where('reg_id',$regid)->get(['course_offer','course_duration','course_total_fee','fee_structure_file_name','fee_structure_file_url']);
     // dd($course->all());
     return view("college.index")->with(['user' => $user, 'course' => $course]);
   }
}
