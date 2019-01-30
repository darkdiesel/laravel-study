<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($userId)
    {
        return view('user.show', compact('userId'));
    }
}
