<?php

namespace App\Http\Controllers\college;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChatController extends Controller
{
    public function index()
    {
        return view('college.chat');
    }
}
