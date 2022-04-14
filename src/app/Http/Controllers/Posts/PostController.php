<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posts\PostModel;

class PostController extends Controller
{
    public function getPost (Request $request) {
        $posts = PostModel::get();

        return view('home', compact('posts'));
    }

    public function createPost (Request $request) {
        $post = $request->validate([
            'title' => 'Required|max:100',
            'body' => 'Required|max:1000'
        ]);

        

        PostModel::create($post);

        return redirect('home');
    }
}
