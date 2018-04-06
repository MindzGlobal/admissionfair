<?php

namespace App\Http\Controllers\College;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\College\courseOffers;

class AutoCompleteController extends Controller
{
    public function autoComplete(Request $request) {
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
}
