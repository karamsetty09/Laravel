<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

use Symfony\Component\Yaml\Yaml;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('posts', [
         'posts' => Post::all()
    ]);

});

Route::get('posts/{post}', function($slug) {

//    $post = Post::find($slug);
//    ddd($post);
// Find a post by its slug and pass it to a view called "post"

    return view('post', [
        'post' => Post::findOrFail($slug)
    ]);
});
