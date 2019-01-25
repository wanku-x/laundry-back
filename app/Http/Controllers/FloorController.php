<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Floor;
use App\Room;

class FloorController extends Controller
{
    public function getFloors()
    {
        return Floor::select('floors.*', 'dorms.name as dorm_name')
            ->leftJoin('dorms', 'floors.dorm_id', '=', 'dorms.id')
            ->get();
    }

    public function getFloor($id)
    {
        return Floor::select('floors.*', 'dorms.name as dorm_name')
            ->leftJoin('dorms', 'floors.dorm_id', '=', 'dorms.id')
            ->find($id);
    }

    public function getFloorRooms($id)
    {
        return Room::select(
            'rooms.*',
            'floors.number as floor_number',
            'floors.dorm_id',
            'dorms.name as dorm_name'
        )
            ->leftJoin('floors', 'rooms.floor_id', '=', 'floors.id')
            ->leftJoin('dorms', 'floors.dorm_id', '=', 'dorms.id')
            ->where('floors.id', $id)
            ->get();
    }
}
