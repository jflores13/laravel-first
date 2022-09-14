<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostsController extends Controller
{
    public function index () {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
    public function addNew () {
        return view('posts.new');
    }
    public function store () {
        $post = new Post();
        $post->title = request('title');
        $post->content = request('content');
        $post->save();
        return back();
    }
    public function viewPost ($id) {
        // $post = DB::table('posts')->where('id', $id)->first();
        $post = Post::find($id);
        if(! $post) {
            abort(404);
            // return redirect('/posts');
        }
        return view('posts.post', compact('post'));
    }
}
