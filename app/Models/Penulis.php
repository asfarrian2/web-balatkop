<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Penulis extends Model
{
    protected $table ='tb_penulis';
    protected $fillable = ['id_penulis', 'id_pegawai', 'nickname', 'status', 'username', 'password'];

        /**
     * Relasi dengan model Pegawai
     *
     * @return BelongsTo
     */
    public function pegawai(): BelongsTo
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai', 'id_pegawai');
    }
}
