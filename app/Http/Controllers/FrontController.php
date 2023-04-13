<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class FrontController extends Controller
{
    //
    public function index(){
        $blogs = Blog::take(3)->orderBy('created_at', 'desc')->get();
        // $blogs = Blog::all();
        // dd($blogs);
        return view('index')->with(['blogs' => $blogs]);
    }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }


    public function management(){
        return view('pages.management');
    }

    public function gallery(){
        return view('pages.gallery');
    }

    public function newsBlog(){
        return view('pages.newsblog');
    }
}
