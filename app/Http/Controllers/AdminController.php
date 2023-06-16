<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function laporankeuangan()
    {
        return view('admin.laporankeuangan.index');
    }
}
