<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class RoomController extends Controller
{
    public function getRooms()
    {
        return Room::select(
                'rooms.*',
                'floors.number as floor_number',
                'floors.dorm_id',
                'dorms.name as dorm_name'
            )
            ->leftJoin('floors', 'rooms.floor_id', '=', 'floors.id')
            ->leftJoin('dorms', 'floors.dorm_id', '=', 'dorms.id')
            ->get();
    }

    public function getRoom($id)
    {
        return Room::select(
                'rooms.*',
                'floors.number as floor_number',
                'floors.dorm_id',
                'dorms.name as dorm_name'
            )
            ->leftJoin('floors', 'rooms.floor_id', '=', 'floors.id')
            ->leftJoin('dorms', 'floors.dorm_id', '=', 'dorms.id')
            ->find($id);
    }
}
