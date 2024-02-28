<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->input('user');

        $query = AuthController::query();

        if(!empty($user)) {
            $query->where('shop', 'LIKE', "%{$user}%")
                ->orWhere('user', 'LIKE', "%{$user}%");
        }

        $posts = $query->get();

        return view('index', compact('posts', 'user'));
    }
}