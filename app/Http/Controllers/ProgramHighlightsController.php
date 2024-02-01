<?php

namespace App\Http\Controllers;

use App\Content;

class ProgramHighlightsController extends Controller
{
    public function index()
    {
        $contents = Content::where('page', 'programhighlights')->get();
        $data = [];
        foreach ($contents as $value) {
            $data[$value->type] = $value->content;
        }
        return view('programhighlights', compact('data'));
    }
}
