<?php

namespace App\Http\Controllers\College;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\College\College_media;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Auth;
use File;


class MediaController extends Controller
{
  public function insertimages(){
  return view('college.image_gallery');
  }

  public function uploadimage(Request $request) {
    $reg_id = Auth::user()->reg_id;
    $input=$request->all();
    $insertData = array();
    if($files=$request->file('image')){
        foreach($files as $file)
        {
              $name = str_random(6) . '_' . $file->getClientOriginalName();
              $destination_path = '/college/images/gallery_images';
              $file->move(public_path().$destination_path, $name);
              $file_url = 'college/images/gallery_images/'.$name;

              $insertData[] = [
              'reg_id'     => $reg_id,  
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
}
