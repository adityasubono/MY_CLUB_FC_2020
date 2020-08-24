<?php

namespace App\Http\Controllers;

use App\Standing;
use Illuminate\Http\Request;

class StandingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Standing::create([

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Standing  $standing
     * @return \Illuminate\Http\Response
     */
    public function show(Standing $standing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Standing  $standing
     * @return \Illuminate\Http\Response
     */
    public function edit(Standing $standing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Standing  $standing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Standing $standing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Standing  $standing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Standing $standing)
    {
        //
    }
}
