<?php

namespace App\Http\Controllers;

class PostsController extends Controller

{
    public function show($slug)
    {
        $post = \DB::table('posts')->where('slug', $slug)->first();

        //dd => "dump and die" inspects the var and kills execution.
        // dd($post);

        // if (! array_key_exists($post, $posts)) {
        //     abort(404, 'Sorry, that post was not found.');
        // }

        return view('post', [
            'post' => $post
        ]);
    }
}