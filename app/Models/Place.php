<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 03/02/17
 * Time: 10:30 PM
 */

namespace App\Models;

use Webpatser\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;


class Place extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lat', 'lon'
    ];
    
    /**
     * @param $uuid
     * @throws \Exception
     */
    public function setUuidAttribute($uuid) {
        $this->attributes['uuid'] = Uuid::generate(4);
    }

}