<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    //
    public function home()
    {
        //
        // $posts = Category::where('name', 'Laliga')
        //     ->first()
        //     ?->posts()
        //     ->latest()
        //     ->get() ?? collect();
        // dd($posts);
        // Lấy ra những category có tên là Laliga và Ngoại hạng anh
        $categories = Category::whereIn('name', ['Laliga', 'Ngoại hạng anh'])->get();
        // Duyệt qua từng category
        $posts = $categories->mapWithKeys(function ($category) {
            // Lấy ra 3 bài viết mới nhất từ category đó
            return [
                $category->name => $category->posts()->latest()->take(3)->get()
            ];
        });
        // dd($posts['Laliga']->first());
        return view('home', compact('posts'));
    }

    public function getPost($post_id)
    {
        $post = Post::find($post_id);
        // dd($post);
        return view('post', compact('post'));
    }

    public function getCategory($category_slug)
    {
        $category = Category::where('slug', $category_slug)->first();
        // dd($category);
        $posts = Category::where('slug', $category_slug)
            ->first()
            ->posts()
            ->get();
        return view('category', compact('posts', 'category'));
    }

    public function search(Request $request)
    {
        $find = $request->input('find');
        // dd($find);
        $posts = Post::where('name', 'like', "%$find%")
        ->orWhere('description', 'like', "%$find%")
        ->orWhere('content', 'like', "%$find%")
        ->get();
        // dd($posts);
        return view('result', compact('posts', 'find'));
    }
}
