<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Kategori extends Model
{
    protected $table='tb_kategori';
    protected $fillable = ['id_kategori', 'kategori'];

     public function posts()
    {
        return $this->hasMany(Post::class, 'id_kategori', 'id_kategori')->where('status', 1);
    }
}
