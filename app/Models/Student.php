<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'id_user',
        'id_career',
        'general_credit',
        'flight_credit',
        'simulator_credit',
        'emergency_contact',
        'enrollment_date',
        'afac_user',
        'afac_password',
        'afac_emission',
        'afac_expiration',
    ];
}
