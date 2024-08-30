<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    use HasFactory;
    
    protected $table = 'enroll';
    protected $primaryKey = 'enroll_id';

    protected $fillable = [
        'user_id',
        'koko_id',
        'roles',
        'admin',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function koko()
    {
        return $this->belongsTo(Koko::class, 'koko_id', 'koko_id');
    }
}
