<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DropdownController extends Controller
{

    public function getCountry(Request $request)
    {
        $country = DB::table("country")
            ->where("continent_id",$request->continent_id)
            ->orderBy('name', 'ASC')
            ->pluck("name","id");
        return response()->json($country);
    }

    public function getClub(Request $request)
    {
        $club = DB::table("club")
            ->where("country_id",$request->country_id)
            ->pluck("name","id");
        return response()->json($club);
    }

    public function getPositionCode(Request $request)
    {
        $position_code = DB::table("position_code")
            ->where("position_id",$request->position_id)
            ->pluck("name_position","position_code");
        return response()->json($position_code);
    }
}
