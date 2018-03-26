<?php

namespace App\Http\Controllers\College;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CollegeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    protected function dashboard()
    {
        return view('college/dashboard');
    }
}
