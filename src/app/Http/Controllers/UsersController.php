<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = \App\User::all();
        return view('users.index', compact('users'));
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
}
