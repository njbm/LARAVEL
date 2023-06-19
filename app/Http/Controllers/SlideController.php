<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function Slide()
    {
        return view('backend.slide');
    }
}
