<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function create(){
              return view('posts.create');
    }

    public function store(Request $request){

        $valid = $request->validate([
            'title' => 'required|unique:blogs|max:255|min:5',
            'details' => 'required|min:10',
        ]);

        Blog::create($valid);

        return redirect()->back()->with('message', 'Post Created');
    }

    public function edit($id){
        $blog = Blog::findOrFail($id);
        // dd($blog);
        return view('posts.edit', ['blog'=>$blog]);
    }

    public function update(Request $request, $id){
        // dd($blog);
        // dd($slug);
        $blog = Blog::findOrFail($id);

        $valid = $request->validate([
            'title' => ['required', 'max:255', 'min:5'],
            // 'slug' => ['required', Rule::unique('blogs')->ignore($blog)],
            // 'category_id' => 'required|exists:categories,id',
            'details' => ['required', 'min:10'],
            // 'image' => ['nullable', 'mimes:jpg,png,jpeg']
        ]);

        // dd($valid['slug']);
        // $slug = Str::slug($valid['slug'], '-');

        // if ($request->hasFile('image')){
        //     $blog->update(array_merge($valid, ['image'=> $request->file('image')->store('blog_images', 'public')]));
        // }
        // else{
        //     $blog->update(array_merge($valid, ['slug'=> $slug]));
        // }

        $blog->update(($valid));

        return redirect()->back()->with('message', 'Post Updated');
    }
}
