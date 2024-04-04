<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $fillable = [
        'nama_treatment',
        'harga',
        'deskripsi',
    ];
}
