<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rekam extends Model
{
    use HasFactory;
    protected $fillable = ['dokterID', 'pasienID', 'kondisi', 'suhu', 'image_path'];
}

