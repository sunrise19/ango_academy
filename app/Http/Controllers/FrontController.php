<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class FrontController extends Controller
{
    //
    public function index(){
        $blogs = Blog::all()->sortByDesc(function ($item) {
            return $item->updated_at ?? $item->created_at;
        })->take(3);
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

    public function show($id){
        $blog = Blog::findOrFail($id);
        $comments = Comment::all();
        // $comment = Comment::where('post_id', $id)->get();
        // return view('post', ['comments' => $comment]);
        return view('posts.blog', compact('blog', 'comments'));
    }
}
