<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        $posts = Post::query()->get()->toArray();
        if($posts)
        {
            return view('admin.posts', compact('posts'));
        }
    }

    public function store()
    {
        dd('store');
    }

    public function create()
    {
        return view('admin.create');
    }

    public function update(Request $request, $post)
    {
        dd('update' . $post);
    }
    public function destroy($post)
    {
        dd('destroy' . $post);
    }
}
