<?php

use Illuminate\Support\Facades\Route;
use App\Models\BlogPost;

Route::get('/', function () {
    $posts = BlogPost::latest()->get();
    return view('home', ['posts' => $posts]);
});

Route::get('/blog/{slug}', function ($slug) {
    $post = BlogPost::where('slug', $slug)->firstOrFail();
    return view('blog.show', ['post' => $post]);
})->name('blog.show');
