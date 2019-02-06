<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index() {
        $users = User::all();

        return view('pages.user.index', compact('users'));
    }

    public function show($locale, $id)
    {
        $user = User::find($id);

        return view('pages.user.show', compact('user'));
    }
}
