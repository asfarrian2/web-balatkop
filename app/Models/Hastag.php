<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hastag extends Model
{
    protected $table ='tb_hastag';
    protected $fillable = ['id_hastag', 'hastag', 'id_post'];
    
}
