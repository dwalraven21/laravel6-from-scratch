<?php

namespace App\Http\Controllers;

class PostsController extends Controller

{
    public function show($slug)
    {
        $post = \DB::table('posts')->where('slug', $slug)->first();

        //dd => "dump and die" inspects the var and kills execution.
        // dd($post);

        if (! $post) {
            abort(404);
        }

        return view('post', [
            'post' => $post
        ]);
    }
}