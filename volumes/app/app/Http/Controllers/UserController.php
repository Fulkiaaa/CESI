<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getRolesByUserId($userId)
    {
        $user = User::find($userId);
        $roles = $user->roles;
        // dd($roles);

        return view('user_role', ['roles' => $roles]);
    }
}
