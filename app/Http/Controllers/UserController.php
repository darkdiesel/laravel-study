<?php

namespace App\Http\Controllers;

use App\User;
use Barryvdh\Debugbar\Twig\Extension\Debug;
use DebugBar\DebugBar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show($userId)
    {
        return view('user.show', compact('userId'));
    }

    public function all() {
        $users = DB::table('users')->get();

        return view('user.all', compact('users'));
    }
}
