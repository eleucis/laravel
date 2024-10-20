<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class Blogs2Controller extends Controller
{
    public function index(){

        $blogs = Blog::get()->all();
        // $blogs = Blog::with('category')->all();
        //         dd($blogs);
        return view('blogs', compact ('blogs'));
    }
}
