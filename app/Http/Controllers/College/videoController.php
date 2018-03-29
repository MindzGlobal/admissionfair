<?php

namespace App\Http\Controllers\College;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modle\College\College_media;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class videoController extends Controller
{
  public function insertvideo(){
  return view('college.video_gallery');
  }


  public function uploadvideo(Request $request){


    $input=$request->all();
    $insertData = array();
    if($files=$request->file('video')){
        foreach($files as $file)
        {
              $name = str_random(6) . '_' . $file->getClientOriginalName();
              $destination_path = '/college/images/gallery_videos';
              $file->move(public_path().$destination_path, $name);

              $file_url = 'college/images/gallery_videos/'.$name;

              $insertData[] = [
              'file_name'  => $name,
              'file_url'   => $file_url,
              'file_type'  => "video",
              ];
        }
        $user = new College_media;
        $user->insert($insertData);
    }       

    /* $user = new College_media;
     $user->file_name = Input::get('video');
     $user->file_type = 'video';
     
     if(Input::hasFile('video'))
     {
         $file=Input::file('video');
         $file->move(public_path().'/college/images/gallery_videos', $file->getClientOriginalName());

         $user->file_name = $file->getClientOriginalName();
         $user->file_url = 'public/college/images/gallery_videos/'.$file->getClientOriginalName();
     }*/

     return redirect("college/video_gallery");
   }

   public function showvideo(){
     $user=College_media::where(function($query) {
        $query->where('file_type', 'video');
        })->get(['file_type','file_name','file_url']); 
      return view('college.video_gallery', compact('user'));
   }
}