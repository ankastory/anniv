<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpDownController extends Controller
{
    public function index()
    {
        return view('pages.updown');
    }
}
