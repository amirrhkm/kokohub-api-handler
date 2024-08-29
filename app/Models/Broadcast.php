<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Broadcast extends Model
{
    protected $table = 'broadcasts';
    use HasFactory;

    protected $fillable = [
        'title',
        'type',
        'content',
    ];

    public function koko()
    {
        return $this->belongsTo(Koko::class, 'koko_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
