<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maklumat extends Model
{
    protected $table = 'tb_maklumat';
    protected $fillable = ['id_maklumat', 'nama', 'keterangan', 'status', 'link'];
}
