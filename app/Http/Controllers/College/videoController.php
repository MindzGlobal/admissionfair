<?php

namespace App\Http\Controllers\College;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\College\College_media;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Auth;
use File;

class videoController extends Controller
{
  public function insertvideo(){
  return view('college.video_gallery');
  }


  public function uploadvideo(Request $request){
    $reg_id = Auth::user()->reg_id;
    $insertData = array();
    if($files=$request->file('video')){
        foreach($files as $file)
        {
              $name = str_random(6) . '_' . $file->getClientOriginalName();
              $destination_path = '/college/images/gallery_videos';
              $file->move(public_path().$destination_path, $name);

              $file_url = 'college/images/gallery_videos/'.$name;

              $insertData[] = [
              'reg_id'     => $reg_id,  
              'file_name'  => $name,
              'file_url'   => $file_url,
              'file_type'  => "video",
              ];
        }
        $user = new College_media;
        $user->insert($insertData);
    }       
     return redirect("college/video_gallery");
   }

   public function showvideo(){
      $reg_id = Auth::user()->reg_id;
      $user = College_media::where(['file_type'=>'Video','reg_id'=>$reg_id])
                              ->orderBy('created_at', 'DESC')
                              ->get();
      return view('college.video_gallery', compact('user'));
   }

   public function deleteVideo(Request $request){
    $reg_id = Auth::user()->reg_id;
    $id = $request->id;
    $College_media = College_media::where(['reg_id'=>$reg_id,'id'=>$id,'file_type'=>'video']);
    $fileUrl = $College_media->first()->file_url;
    if(File::exists(public_path().'/'.$fileUrl)){
      File::delete(public_path().'/'.$fileUrl);
    }
    $delFile = $College_media->delete();
    if($delFile)
    {
      return redirect('college/video_gallery')->with(['status'=>'Success','msg'=>'Video Deleted Successfuly.']);
    }
   
 }
}