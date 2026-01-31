<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    protected $table='tb_fasilitas';
    protected $fillable = ['id_fasilitas', 'fasilitas', 'keterangan', 'gambar', 'status'];
}
