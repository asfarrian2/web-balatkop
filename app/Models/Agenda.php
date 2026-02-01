<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Agenda extends Model
{
    protected $table='tb_agenda';
    protected $fillable = ['id_agenda', 'judul', 'tgl_awal', 'tgl_akhir', 'deskripsi', 'thumbail', 'tempat', 'alamat', 'id_kategori', 'slug', 'sumber_dana', 'status'];

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
