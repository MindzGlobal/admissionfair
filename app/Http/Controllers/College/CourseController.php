<?php

namespace App\Http\Controllers\College;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\College\CollegeDetail;
use App\Model\College\courseOffers;
use App\Model\College\CollegeFaculties;
use App\Model\College\CollegeCourseGalleries;
use Illuminate\Support\Facades\Input;
use Image;

use Auth;

class CourseController extends Controller
{ 
    protected function addcourse()
    {
        return view('college.addcourse');
    }

    public function addcoursedetail(Request $request){
    //dd($request->all());
        $res = 'success';
        $msg = "Done";
        $reg_id = Auth::user()->reg_id;
        $courseDetails = new courseOffers;
        $courseDetails->reg_id = $reg_id;
        $courseDetails->course_offer = Input::get('course_offer');
        $courseDetails->course_duration = Input::get('course_duration');
        $courseDetails->course_total_fee = Input::get('course_total_fee');
        $courseDetails->fee_structure_file_name = Input::get('fee_structure_file_name');
        $courseDetails->course_department = Input::get('course_department');
        $courseDetails->available_seat = Input::get('available_seat');
        $courseDetails->course_description = Input::get('course_description');
        $courseDetails->what_we_offer = Input::get('what_we_offer');
        $courseDetails->why_join_us = Input::get('why_join_us');
        $courseDetails->fee_structure = Input::get('fee_structure');
        $courseDetails->Payment_mode = Input::get('Payment_mode');

        if(Input::hasFile('fee_structure_file_name'))
        {
            $file=Input::file('fee_structure_file_name');
            $file->move(public_path().'/college/images/docs', $file->getClientOriginalName());
            $courseDetails->fee_structure_file_url = 'college/images/docs/'.$file->getClientOriginalName();
            $courseDetails->fee_structure_file_name = $file->getClientOriginalName();
        }

        if($courseDetails->save())
        {
            //#################################################  Add Faculty #################################
            $faculty_name = Input::get('faculty_name');
            $specialization = Input::get('specialization');
            $designation = Input::get('designation');
            $about_faculty = Input::get('about_faculty');
            $files = Input::file('faculty_image');
            
            $insertData = array();
            if(!empty($faculty_name))
            {
                for($i=0; $i<count($faculty_name);$i++)
                {
                    $name = '';
                    $file_url='';
                    $specializationData = '';
                    $designationData = '';
                    $about_facultyData = '';
                    if(isset($files[$i]))
                    {
                        $name = str_random(6) . '_' . $files[$i]->getClientOriginalName();
                        $destination_path = '/college/images/faculty_images/';
                        $thumb_img = Image::make($files[$i]->getRealPath())->resize(300, 300);
                        $thumb_img->save(public_path().$destination_path.$name,80);
                        $file_url = $destination_path.$name;
                    }

                    if(isset($specialization[$i])) { $specializationData = $specialization[$i]; }
                    if(isset($designation[$i])) { $designationData = $designation[$i]; }
                    if(isset($about_faculty[$i])) { $about_facultyData = $about_faculty[$i]; }
            
                    $insertData[] = [
                        'faculty_name'  => $faculty_name[$i],
                        'specialization'   => $specializationData,
                        'designation'  => $designationData,
                        'faculty_image' => $file_url,
                        'about_faculty'  => $about_facultyData,
                        'course_id'  => $courseDetails->id,
                        ];
                }

                $courseDetails->faculties()->createMany($insertData);
                // $courses = new CollegeFaculties();
                // $courses->insert($insertData);   
            }
            
            //#################################################### Add Course Gallery Image #####################################
            $galleryData = array();
            $courseGalleryFile = array();
            if(Input::hasFile('course_gallery'))
            {
                $courseGalleryFile = Input::file('course_gallery');
                for($i=0; $i<count($courseGalleryFile);$i++)
                {
                    $file_url='';
                    $name = '';
                    if($courseGalleryFile[$i]!='')
                    {
                        $name = str_random(6) . '_' . $courseGalleryFile[$i]->getClientOriginalName();
                        $destination_path = '/college/images/course_gallery';
                        $courseGalleryFile[$i]->move(public_path().$destination_path, $name);
                        $file_url = 'college/images/course_gallery/'.$name;
                    }

                    $galleryData[] = [
                        'fileType'  => 'Image',
                        'fileName'   => $name,
                        'filePath'   => $file_url,
                        'course_id'  => $courseDetails->id,
                        ];
                }
            }

            //#################################################### Add Course Gallery Video #####################################

            $filePath = Input::get('filePath');
            for($i=0; $i<count($filePath);$i++)
            {
                if(isset($filePath[$i]) && $filePath[$i] != '')
                {
                    $galleryData[] = [
                        'fileType'  => 'YoutubeVideo',
                        'fileName'   => '',
                        'filePath'   => $filePath[$i],
                        'course_id'  => $courseDetails->id,
                        ];
                }    
            }
            $courseDetails->courseGallery()->createMany($galleryData);
            // $coursegalleries = new CollegeCourseGalleries();
            // $coursegalleries->insert($galleryData);
          
        }
        else
        {
            $res = 'Error';
            $msg = "Some Error Occurred!";
        }
       
        return $this->Result($res,$msg);
    }
}
