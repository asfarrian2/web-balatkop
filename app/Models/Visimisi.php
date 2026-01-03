<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visimisi extends Model
{
    protected $table = 'tb_visimisi';
    protected $fillable = ['id_visimisi', 'deskripsi', 'jenis', 'status'];
}
