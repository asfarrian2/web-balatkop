<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beranda extends Model
{
    protected $table='tb_beranda';
    protected $filetable = ['id_beranda', 'nama', 'keterangan_1', 'keterangan_2', 'link', 'jenis', 'status',];
}
