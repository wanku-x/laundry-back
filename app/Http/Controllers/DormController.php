<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Dorm;
use App\Floor;
use App\Room;

class DormController extends Controller
{
    public function getDorms()
    {
        return Dorm::all();
    }

    public function getDorm($id)
    {
        return Dorm::find($id);
    }

    public function getDormFloors($id)
    {
        return Floor::select('floors.*', 'dorms.name as dorm_name')
            ->leftJoin('dorms', 'floors.dorm_id', '=', 'dorms.id')
            ->where('floors.dorm_id', $id)
            ->get();
    }

    public function getDormFloor($id, $number)
    {
        return Floor::select('floors.*', 'dorms.name as dorm_name')
            ->leftJoin('dorms', 'floors.dorm_id', '=', 'dorms.id')
            ->where('floors.dorm_id', $id)
            ->where('floors.number', $number)
            ->get();
    }

    public function getDormFloorRooms($id, $number)
    {
        return Room::select(
                'rooms.*',
                'floors.number as floor_number',
                'floors.dorm_id',
                'dorms.name as dorm_name'
            )
            ->leftJoin('floors', 'rooms.floor_id', '=', 'floors.id')
            ->leftJoin('dorms', 'floors.dorm_id', '=', 'dorms.id')
            ->where('floors.dorm_id', $id)
            ->where('floors.number', $number)
            ->get();
    }
}
