<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 03/02/17
 * Time: 10:22 PM
 */

namespace App\Models;


use Webpatser\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;

class UserEvent extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'event_id'
    ];

    /**
     * @param $uuid
     * @throws \Exception
     */
    public function setUuidAttribute($uuid) {
        $this->attributes['uuid'] = Uuid::generate(4);
    }

}