<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user) {
        
        $user = User::findOrFail($user); // Returns 404 if no user is found

        return view('home', [
            'user' => $user
            ]);
    }
}
