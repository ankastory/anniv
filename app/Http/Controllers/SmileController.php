<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmileController extends Controller
{
    public function index()
    {
        return view('pages.smile');
    }
}
