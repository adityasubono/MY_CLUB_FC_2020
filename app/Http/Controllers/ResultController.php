<?php

namespace App\Http\Controllers;

use App\Result;
use App\Standing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $data_standing = Standing::all()->sortByDesc('points');
        $data_result = DB::table('results')->paginate(5);
        return view('result', compact('data_result','data_standing'));
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        //
        $skor_home = rand(0,5);
        $skor_away = rand(0,5);
        $arsenal=array(
            "Bernd Leno",
            "Shkodran Mustafi",
            "Sokratis",
            "David Luiz",
            "Kieran Tierney",
            "Héctor Bellerín",
            "Granit Xhaka",
            "Bukayo Saka",
            "Nicolas Pépé",
            "Pierre-Emerick Aubameyang",
            "Alexandre Lacazette");

        $liverpool=array(
            "Alisson",
            "Virgil van Dijk",
            "Joe Gomez",
            "Joel Matip",
            "Naby Keïta",
            "Jordan Henderson",
            "Sadio Mané",
            "Mohamed Salah",
            "Divock Origi",
            "Jordan Henderson",
            "Georginio Wijnaldum");



        $gol_home ='';
        for($a=1; $a<=$skor_home; $a++){
            $minute = rand(1,110);
            $player_gol_home = $arsenal[mt_rand(0, count($arsenal) - 1)];
//            echo "Player ".$player_gol_home."\n";
            if($a == $skor_home){
                $gol_home .= $player_gol_home."(".$minute."'')"." ";
            }else{
                $gol_home .= $player_gol_home."(".$minute."'')".", ";
            }
        }

        $gol_away='';
        for($b=1; $b<=$skor_away; $b++){
            $minute = rand(1,110);
            $player_gol_away = $liverpool[mt_rand(0, count($liverpool) - 1)];
//            echo "Player ".$player_gol_away."\n";
            if($b == $skor_away){
                $gol_away .= $player_gol_away."(".$minute."'')"." ";
            }else{
                $gol_away .= $player_gol_away."(".$minute."'')".", ";
            }
        }

        Result::create([
            'home' => $request->home,
            'away' => $request->away,
            'skor_home' => $skor_home,
            'skor_away' => $skor_away,
            'player_gol_home' => $gol_home,
            'player_gol_away' => $gol_away,
            'date' => $request->date,
            'time' => $request->time,
            'stadium' => $request->stadium
        ]);
        $points_win  =3;
        $points_draw =1;
        $points_lose =0;
        $played = 1;
        if($gol_home > $gol_away){

            $data = Standing::find(1);
            $data->played += $played;
            $data->points += $points_win;
            $data->save();


            $data = Standing::find(2);
            $data->played += $played;
            $data->points += $points_lose;
            $data->save();

        }elseif ($gol_home < $gol_away) {

            $data = Standing::find(1);
            $data->played += $played;
            $data->points += $points_lose;
            $data->save();

            $data = Standing::find(2);
            $data->played += $played;
            $data->points += $points_win;
            $data->save();

        }elseif($gol_home == $gol_away){
            $played = 1;
            $data = Standing::find(1);
            $data->played += $played;
            $data->points += $points_draw;
            $data->save();

            $data = Standing::find(2);
            $data->played += $played;
            $data->points += $points_draw;
            $data->save();
        }



        return redirect()->action('ResultController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function show(Result $result)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function edit(Result $result)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Result $result)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function destroy(Result $result)
    {
        //
    }
}
