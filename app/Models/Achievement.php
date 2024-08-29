<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    protected $table = 'achievements';
    use HasFactory;


    protected $fillable = [
        'name',
        'years',
        'tier',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function koko()
    {
        return $this->belongsTo(Koko::class, 'koko_id');
    }}
