<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CirsubController extends Controller
{
    public function index()
    {
        return view('layouts.cirsub');
    }
}
