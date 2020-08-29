<?php

namespace App\Http\Controllers;

use App\Continent;
use App\Country;
use Illuminate\Http\Request;

class ContinentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        //

        $dataContinent = Continent::all();
        $dataCountry = Country::all()->sortBy('name');
        return view('/continent', compact('dataContinent','dataCountry'));
    }

    public function dataTable()
    {
        //
        return Datatables::of(Continent::all())->make(true);
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            Continent::create([
                'name' => $request->name
            ]);

            return redirect('/continent')->with('status', 'Data Successfully Insert');

        } catch (\Exception $e) {
            return redirect('/continent')->with('error', 'Data Not Successfully Insert');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Continent $continent
     * @return \Illuminate\Http\Response
     */
    public function show(Continent $continent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Continent $continent
     * @return \Illuminate\Http\Response
     */
    public function edit(Continent $continent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Continent $continent
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        //
        try {
        Continent::where('id', $id)->update([
            'name' => $request->name
        ]);

            return redirect('/continent')->with('status', 'Data Successfully Update');
        } catch (\Exception $e) {
            return redirect('/continent')->with('error', 'Data Not Successfully Update');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Continent $continent
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            Continent::destroy('id',$id);
            return redirect('/continent')->with('status', 'Data Successfully Delete');
        } catch (\Exception $e) {
            return redirect('/continent')->with('error', 'Data Not Successfully Delete');
        }
    }
}
