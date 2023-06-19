<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function Forms()
    {
        return view('backend.forms');
    }
}
