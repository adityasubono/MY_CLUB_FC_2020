<?php

namespace App\Http\Controllers;

use App\Continent;
use App\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $dataContinent = Continent::all()->sortBy('name');
        $dataAsia = DB::table('country')->where('continent_id','2')->orderBy('name')->paginate(10);
        $dataAfrica =DB::table('country')->where('continent_id','3')->orderBy('name')->paginate(10);
        $dataEuropa = DB::table('country')->where('continent_id','6')->orderBy('name')->paginate(10);
        $dataAmerica = DB::table('country')->where('continent_id','5')->orderBy('name')->paginate(10);
        $dataAustralia = DB::table('country')->where('continent_id','4')->orderBy('name')->paginate(10);
        return view('/country', compact('dataContinent',
            'dataAsia','dataAfrica','dataEuropa','dataAmerica','dataAustralia'));
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
//        dd($request->country);
        try {
            foreach ($request->country as $key => $value) {
                Country::create($value);
            }


            return redirect('/country')->with('status', 'Data Country Successfully Insert');

        } catch (\Exception $e) {
            return redirect('/country')->with('error', 'Data Country Not Successfully Insert');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        //
    }
}
