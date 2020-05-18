<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TriviaController extends Controller
{
    public function index()
    {
        return view('pages.trivia.satu');
    }

    public function satu(Request $request)
    {
        $jml = $request->status;

        return view('pages.trivia.dua', ['jml' => $jml]);
    }

    public function dua(Request $request)
    {
        $jml = $request->status;

        return view('pages.trivia.tiga', ['jml' => $jml]);
    }

    public function tiga(Request $request)
    {
        $jml = $request->status;

        return view('pages.trivia.empat', ['jml' => $jml]);
    }

    public function empat(Request $request)
    {
        $jml = $request->status;

        return view('pages.trivia.lima', ['jml' => $jml]);
    }

    public function lima(Request $request)
    {
        $jml = $request->status;

        return view('pages.trivia.enam', ['jml' => $jml]);
    }

    public function result(Request $request)
    {
        $jml = $request->status;

        return view('pages.trivia.result', ['jml' => $jml]);
    } 
}
