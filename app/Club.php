<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    //
    protected $table='clubs';
    protected $fillable= ['country_id','club_name','stadium','information'];


}
