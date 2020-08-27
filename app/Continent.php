<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 */
class Continent extends Model
{
    //
    protected $table ='continent';
    protected $fillable =['name'];

    public function continent()
    {
        return $this->hasMany('App\Country', 'continent_id');
    }
}
