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
        $data = [];
        foreach ($contents as $value) {
            $data[$value->type] = $value->content;
        }
        return view('admin.home.index', compact('data'));
    }
    public function about_us()
    {
        $data = [];
        $contents = Content::where('page', 'about_us')->get();
        foreach ($contents as $value) {
            $data[$value->type] = $value->content;
        }
        // dd($data);
        return view('admin.home.about_us', compact('data'));
    }
    public function donation()
    {
        $data = [];
        $contents = Content::where('page', 'donation')->get();
        foreach ($contents as $value) {
            $data[$value->type] = $value->content;
        }
        // dd($data);
        return view('admin.home.donation', compact('data'));
    }
    public function programhighlights()
    {
        $data = [];
        $contents = Content::where('page', 'programhighlights')->get();
        foreach ($contents as $value) {
            $data[$value->type] = $value->content;
        }

        return view('admin.home.program_highlights', compact('data'));
    }
    public function contact()
    {
        $data = [];
        $contents = Content::where('page', 'contact')->get();
        foreach ($contents as $value) {
            $data[$value->type] = $value->content;
        }
        return view('admin.home.contact', compact('data'));
    }
}
