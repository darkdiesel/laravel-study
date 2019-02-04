<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show($userId)
    {
        return view('pages.user.show', compact('userId'));
    }

    public function all() {
        $users = User::all();

        return view('pages.user.all', compact('users'));
    }
}
