<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 * @method static where(string $string, $id)
 * @method static find(string $string, $home)
 */
class Standing extends Model
{
    //
    protected $table='standings';
    protected $fillable = ['club','played','win','draw','lose','goal_scored','goal_conceded',
        'goal_difference','points'];
}
