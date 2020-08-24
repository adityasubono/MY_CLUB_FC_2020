<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(string[] $array)
 */
class Result extends Model
{
    //
    protected $table='results';
    protected $fillable=['home','away','skor_home','skor_away','stadium','player_gol_home',
                         'player_gol_away','date','time'];
}
