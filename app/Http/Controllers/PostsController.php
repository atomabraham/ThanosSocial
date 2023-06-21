<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\User_Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //I return the posts
        //return view('dashboard',[
        //    'post'=>$post
        //]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$image=$request->file('inputFile');
        //$profileImage=0;
        /*if($image){
            $destinationPath='images/';
            $profileImage=date('ymdHis').".".$image->getClientOriginalExtension();
            $image->move($destinationPath,$profileImage);
            //$post->image=$profileImage;
        }*/


        Post::create(['text'=>$request->InputPost,'user_id'=>$request->id_user]);
        return to_route('dashboard');
    }

    /**
     * Display the specified resource.
     */


    public function show(Post $posts)
    {
        $posts=Post::all()->sortByDesc('created_at');

        // print_r($pub) ;
        return view('dashboard',compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
        $post->delete();
        return to_route('dashboard');
    }
}
