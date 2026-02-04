<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'id_role',
        'role_prefix',
        'role_name',
        'description',
    ];
}
