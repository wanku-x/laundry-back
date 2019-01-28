<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Room;

class UserController extends Controller
{
    public function getCurrentUser()
    {
        $user = Auth::user();
        if (!$user) {
            return response()->json([
                'auth' => false,
            ], 200);
        }
        $user->auth = true;
        return $user;
    }

    public function updateCurrentUser(Request $request)
    {
        $user = Auth::user();
        if (!$user) {
            return response()->json([
                'success' => false,
                'auth' => false,
                'message' => 'Вы не авторизованы',
            ], 200);
        }
        if (!$request->room_id) {
            return response()->json([
                'success' => false,
                'auth' => true,
                'message' => 'Отсутствует поле "room_id"',
            ], 200);
        }
        if (Room::find(!$request->room_id)) {
            return response()->json([
                'success' => false,
                'auth' => true,
                'message' => 'Не существующий "room_id"',
            ], 200);
        }
        $user->room_id = $request->room_id;
        $user->save();

        return response()->json([
            'success' => true,
            'auth' => true,
            'message' => 'Обновление успешно завершено',
        ], 200);
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
