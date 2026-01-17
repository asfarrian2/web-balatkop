<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storganisasi extends Model
{
    protected $table = 'tb_storganisasi';
    protected $fillable = ['id_sto', 'keterangan', 'link'];
}
