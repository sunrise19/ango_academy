<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function create(){
        $categories = Category::all();
        return view('posts.create', ['categories'=>$categories]);
    }

    public function store(Request $request){

        $valid = $request->validate([
            'title' => 'required|unique:blogs|max:255|min:5',
            'category_id' => 'required|exists:categories,id',
            'details' => 'required|min:10',
        ]);

        Blog::create($valid);

        session()->flash('message', 'Post Created Successfully!');
        return redirect()->back();
    }

    public function edit($id){
        $blog = Blog::findOrFail($id);
        $categories = Category::all();
        // dd($blog);
        return view('posts.edit', ['blog'=>$blog, 'categories'=>$categories]);
    }

    public function update(Request $request, $id){
        // dd($blog);
        // dd($slug);
        $blog = Blog::findOrFail($id);

        $valid = $request->validate([
            'title' => ['required', 'max:255', 'min:5'],
            // 'slug' => ['required', Rule::unique('blogs')->ignore($blog)],
            'category_id' => 'required|exists:categories,id',
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

        session()->flash('message', 'Post Updated Successfully!');
        return redirect()->back();
    }

    public function destroy($id){
        $blog = Blog::findOrFail($id);
        $blog->delete();
        //return redirect()->route('home')->with('message', 'Post Deleted');
        session()->flash('message', 'Post Deleted Successfully!');
        return redirect()->back();
    }
}
