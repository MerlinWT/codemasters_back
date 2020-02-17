<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'username', 'first_name', 'last_name'
    ];

    protected $hidden = [
        'updated_at'
    ];
}
