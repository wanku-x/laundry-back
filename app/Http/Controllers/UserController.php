<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUserInfo()
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
}
