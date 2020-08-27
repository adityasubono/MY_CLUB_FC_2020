<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 * @method static where()
 * @method static firstOrCreate(string $string)
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
