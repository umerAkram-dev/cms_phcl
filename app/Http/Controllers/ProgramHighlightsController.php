<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramHighlightsController extends Controller
{
    public function index()
    {
        return view('programhighlights');
    }
}
