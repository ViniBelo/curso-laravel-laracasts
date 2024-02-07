<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Validation\Rules\Unique;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->filter
            (
                request
                (
                    ['search', 'category', 'author']
                )
            )->paginate(6)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => 'required|image',
            'slug' => 'required|unique:posts',
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => 'required|exists:categories,id'
        ]);

        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        auth()->user()->posts()->create($attributes);

        return redirect('/');
    }

}
