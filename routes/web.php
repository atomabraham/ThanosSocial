<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
    //return view('welcome');
    //return view('header');
    //return view('auth.login');
//});
//route::get('/',[App\Http\Controllers\PostsController::class,'show']);
route::post('/CreatePost',[App\Http\Controllers\PostsController::class,'store'])->name('post.store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', [App\Http\Controllers\PostsController::class,'show'])->name('dashboard');
        //return view('dashboard')
});

route::get('/dashboard',[App\Http\Controllers\PostsController::class,'destroy'])->name('deletePost');
route::get('/post/{userId}/{postId}/{postText}{userName}',[App\Http\Controllers\CommentsControllers::class,'show'])->name('comment.show');
