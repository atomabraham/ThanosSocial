<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class TestControllers extends Controller
{
    //
    public function liste(){
        $test=Post::all();
        //dd($test);
        return view('liste',compact('test'));
    }
}
