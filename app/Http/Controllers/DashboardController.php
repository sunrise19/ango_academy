<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class DashboardController extends Controller
{
    //
    public function index(){
        // dd(auth()->user()->name);
        // $user = User::findOrFail(auth()->user()->id);
        // $user = auth()->user();
        // $users = User::all();
        // $blogs = Blog::take(3)->orderBy('created_at', 'desc')->get();
        $blogs = Blog::all()->sortByDesc(function ($item) {
            return $item->updated_at ?? $item->created_at;
        })->take(5);

        return view('dashboard')->with (['blogs' => $blogs]);

    }
}
