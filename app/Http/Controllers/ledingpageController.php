<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ledingpageController extends Controller
{
    public function index ()
        {
            return view ('ledingpage');
        }
}
