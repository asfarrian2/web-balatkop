<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    protected $table = 'tb_layanan';
    protected $fillable = ['id_layanan', 'nama', 'keterangan', 'gambar', 'status', 'slug']; 
}
