<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        session(['name' => 'Ashish']);
        $value = $request->session()->get('name');
        //dd(session()->all());
        $ses = session()->all();
        return view('home')->with(['data'=>$value]);
    }

    public function about()
    {
        return view('about');
    }
}
