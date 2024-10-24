<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pelajaran extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $primaryKey = 'id_pelajaran';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_pelajaran',
        'nama_pelajaran',
        'deskripsi',
        'deadline',
        'background',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
}
