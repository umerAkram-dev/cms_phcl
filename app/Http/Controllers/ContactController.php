<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contents = Content::where('page', 'contact')->get();
        $data = [];
        foreach ($contents as $value) {
            $data[$value->type] = $value->content;
        }
        return view('contact', compact('data'));
    }
}
