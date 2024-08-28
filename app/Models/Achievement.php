<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    protected $table = 'achievements';
    use HasFactory;
    protected $primaryKey = 'achievement_id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['achievement_id', 'name', 'year', 'tier', 'user_id'];
}
