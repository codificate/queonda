<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 03/02/17
 * Time: 10:18 PM
 */

namespace App\Models;

use Webpatser\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{

    protected $table = 'organization';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'cuil'
    ];

    /**
     * @param $uuid
     * @throws \Exception
     */
    public function setUuidAttribute($uuid) {
        $this->attributes['uuid'] = Uuid::generate(4);
    }

}