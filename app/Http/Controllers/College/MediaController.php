<?php

namespace App\Http\Controllers\College;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modle\College\College_media;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class MediaController extends Controller
{
  public function insertimages(){
  return view('college.image_gallery');
  }

  public function uploadimage(Request $request) {

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

     /*$user = new College_media;
     $user->file_name = Input::get('image');
     $user->file_type = 'Image';
     
     if(Input::hasFile('image'))
     {
         $file=Input::file('image');
         $file->move(public_path().'/college/images/gallery_images', $file->getClientOriginalName());

         $user->file_name = $file->getClientOriginalName();
         $user->file_url = 'public/college/images/gallery_images/'.$file->getClientOriginalName();
     }*/

   public function showimages(){

    $user=College_media::where(function($query) {
       $query->where('file_type', 'Image');
       })->get(['file_type','file_name','file_url']);

    return view('college.image_gallery', compact('user'));
  }
}
