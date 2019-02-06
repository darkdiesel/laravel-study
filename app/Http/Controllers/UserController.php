<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        $users = User::all();

        return view('pages.user.index', compact('users'));
    }

    public function show($locale, User $user)
    {
        return view('pages.user.show', compact('user'));
    }

    public function edit($locale){
        $user = Auth::user();

        return view('pages.user.edit', compact('user'));
    }
}
