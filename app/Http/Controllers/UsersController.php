<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class UsersController extends Controller
{
    //
    public function index(): View
    {
        $users = DB::table('users')->get();

        return view('auth.login', ['users' => $users]);
       // return view('dashboard', ['users' => $users]);
    }
}
