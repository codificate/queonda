<?php

/**
 * Created by PhpStorm.
 * User: andres
 * Date: 03/02/17
 * Time: 10:05 PM
 */

namespace App\Models;

use Webpatser\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'dni', 'name', 'lastname', 'organization_id'
    ];

    /**
     * @param $uuid
     * @throws \Exception
     */
    public function setUuidAttribute($uuid) {
        $this->attributes['uuid'] = Uuid::generate(4);
    }

}