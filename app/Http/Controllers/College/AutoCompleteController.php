<?php

namespace App\Http\Controllers\College;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\College\courseOffers;

class AutoCompleteController extends Controller
{
    public function autoCourseComplete(Request $request) {
        $query = $request->get('term','');
        
        $products=courseOffers::where('course_offer','LIKE','%'.$query.'%')->select('course_offer')->groupBy('course_offer')->get();
        
        $data=array();
        foreach ($products as $product) {
                $data[]=array('value'=>$product->course_offer,'id'=>$product->course_offer);
        }
        if(count($data))
             return $data;
        else
            return ['value'=>'No Result Found','id'=>''];
    }

    public function autoDepartmentComplete(Request $request) {
        $query = $request->get('term','');
        
        $products=courseOffers::where('course_department','LIKE','%'.$query.'%')->select('course_department')->groupBy('course_department')->get();
        
        $data=array();
        foreach ($products as $product) {
                $data[]=array('value'=>$product->course_department,'id'=>$product->course_department);
        }
        if(count($data))
             return $data;
        else
            return ['value'=>'No Result Found','id'=>''];
    }
}
