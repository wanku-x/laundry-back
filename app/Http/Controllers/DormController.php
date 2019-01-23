<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Dorm;

class DormController extends Controller
{
    public function getDormsList()
    {
        return Dorm::all();
    }
}
