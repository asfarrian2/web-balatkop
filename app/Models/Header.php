<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    protected $table = 'tb_header';
    protected $fillable = ['id_header', 'nama', 'keterangan', 'link'];
}
