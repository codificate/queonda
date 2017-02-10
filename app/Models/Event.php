<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 03/02/17
 * Time: 10:26 PM
 */

namespace App\Models;

use Webpatser\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;


class Event extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'start', 'end', 'isPaid', 'price', 'place_id'
    ];

    public function eventsByPlace()
    {
        return $this->belongsTo('App\Models\Place', 'place_id', 'id');
    }

    /**
     * @param $uuid
     * @throws \Exception
     */
    public function setUuidAttribute($uuid) {
        $this->attributes['uuid'] = Uuid::generate(4);
    }

    public function user()
    {
        return $this->belongsToMany('App\User');
    }

}