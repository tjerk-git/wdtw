<?php

use Illuminate\Support\Facades\Route;
use App\Models\BlogPost;

Route::get('/', function () {
    $updates = BlogPost::published()->where('type', 'update')->latest()->get();
    $events = BlogPost::published()->where('type', 'event')->latest()->get();
    return view('home', [
        'updates' => $updates,
        'events' => $events,
    ]);
});

Route::get('/blog/{slug}', function ($slug) {
    $post = BlogPost::published()->where('slug', $slug)->firstOrFail();
    return view('blog.show', ['post' => $post]);
})->name('blog.show');
