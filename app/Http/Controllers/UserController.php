<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function getCurrentUser()
    {
        $user = Auth::user();
        if (!$user) {
            return [
                'auth' => false,
            ];
        }
        $user->auth = true;
        return $user;
    }

    public function getUsers()
    {
        // only admin
        return User::all();
    }

    public function getUser($id)
    {
        // only admin
        return User::find($id);
    }

    public function getUserByVKId($vk_id)
    {
        // only admin
        return User::where('vk_id', $vk_id)->first();
    }
}
