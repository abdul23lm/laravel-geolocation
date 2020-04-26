<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Space;
use Illuminate\Http\Request;

class SpaceController extends Controller
{
    public function getSpaces(Request $request)
    {
        $space = new Space();
        return $space->getSpaces($request->lat, $request->lng, $request->rad)->get();
    }
}
