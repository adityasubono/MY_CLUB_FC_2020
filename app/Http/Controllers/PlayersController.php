<?php

namespace App\Http\Controllers;

use App\Club;
use App\Continent;
use App\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlayersController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $club = Club::find($id);

        $players = Player::where('club_id',$id)->get();

        $continent = DB::table("continent")->pluck("name", "id");

        $position = DB::table("position")->pluck("position_area", "id");

        return view('player', compact('club','continent','position','players'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        try {

            Player::create([
                'country_id' => $request->country_id,
                'club_id' => $request->club_id,
                'name_player' => $request->name_player,
                'dob' => $request->dob,
                'weight' => $request->weight,
                'height' => $request->height,
                'position' => $request->position_code,
                'number' => $request->number_player,
                'stronger_foot' => $request->stronger_foot
            ]);

            return redirect('/player-create/'.$request->club_id)->with('success', 'Data Successfully Insert');
//        } catch (\Exception $e) {
//            return redirect('/player-create/'.$request->club_id)->with('error', 'Data Not Successfully Insert');
//        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
