<?php

namespace App\Containers\User\Models;

use App\Ship\Parents\Models\Model;

class User extends Model
{


    protected $fillable = [
        'login',
        'email',
        'password'
    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'users';
}
