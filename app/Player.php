<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $table='player';
    protected $fillable= ['country_id','club_id','name_player','position','weight','height','number','stronger_foot'];
}
