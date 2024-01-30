<?php

namespace App\Http\Controllers\Admin;

use App\Content;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $contents = Content::where('page', 'home')->get();
        foreach ($contents as $value) {
            $data[$value->type] = $value->content;
        }
        return view('admin.home.index', compact('data'));
    }
}
