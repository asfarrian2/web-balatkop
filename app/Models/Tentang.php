<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tentang extends Model
{
    protected $table = 'tb_tentang';
    protected $fillable = ['id_tentang', 'nama', 'keterangan', 'foto', 'link'];
}
