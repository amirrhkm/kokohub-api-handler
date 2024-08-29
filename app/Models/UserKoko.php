<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UserKoko extends Pivot
{
    protected $table = 'user_koko';

    protected $fillable = [
        'roles',
        'admin',
    ];
}
