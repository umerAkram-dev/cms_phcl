<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $contents = Content::where('page', 'home')->get();
        $data = [];
        foreach ($contents as $value) {
            $data[$value->type] = $value->content;
        }
        if (strpos($data['btn_link'], 'http') !== false ) {
            dd(strpos($data['btn_link'], 'http'));
        }
        return view('index', compact('data'));
    }
}
