<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    protected $fillable = [
        'logo',
        'name',
        'email',
        'phone',
        'address',
        'from',
        'to',
    ];
}
