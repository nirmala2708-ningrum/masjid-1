<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengeluaran extends Model
{
    use HasFactory;

    protected $fillable= [
       'id_user',
        'judul_pengeluaran',
        'deskripsi',
        'nominal', 
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(related: user::class, foreignKey: 'id_user');
    }
    }

