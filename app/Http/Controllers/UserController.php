<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show($userId)
    {
        return view('user.show', compact('userId'));
    }

    public function all() {
        $users = User::all();

        return view('user.all', compact('users'));
    }
}
