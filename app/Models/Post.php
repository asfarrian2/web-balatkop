<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $table='tb_post';
    protected $fillable = ['id_post', 'judul', 'konten', 'slug', 'thumbail', 'penulis', 'views_count', 'id_kategori', 'jenis', 'status'];

     /**
     * Relasi dengan model Kategori
     *
     * @return BelongsTo
     */
    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id_kategori');
    }

}

