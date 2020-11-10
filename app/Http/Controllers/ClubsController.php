<?php

namespace App\Http\Controllers;

use App\Club;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClubsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $clubs = Club::all();
        $continent = DB::table("continent")->pluck("name", "id");
        return view('club', compact('clubs', 'continent'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {

            Club::create([
                'country_id' => $request->country_id,
                'club_name' => $request->club_name,
                'stadium' => $request->stadium,
                'information' => $request->information_club
            ]);

            return redirect('/club')->with('success', 'Data Successfully Insert');
        } catch (\Exception $e) {
            return redirect('/club')->with('error', 'Data Not Successfully Insert');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param \App\Club $club
     * @return \Illuminate\Http\Response
     */
    public function show(Club $club)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Club $club
     * @return \Illuminate\Http\Response
     */
    public function edit(Club $club)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Club $club
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Club $club)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Club $club
     * @return \Illuminate\Http\Response
     */
    public function destroy(Club $club)
    {
        //
    }
}
