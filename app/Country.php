<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table='country';
    protected $fillable=['continent_id','name'];

    public function country()
    {
        return $this->belongsTo('App\Continent');
    }
}
