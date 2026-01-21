<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pegawai extends Model
{
    protected $table= 'tb_pegawai';
    protected $fillable = ['id_pegawai', 'nama', 'nip', 'golongan', 'id_jabatan', 'id_seksi', 'foto', 'status'];

        /**
     * Relasi dengan model Jabatan
     *
     * @return BelongsTo
     */
    public function jabatan(): BelongsTo
    {
        return $this->belongsTo(Jabatan::class, 'id_jabatan', 'id_jabatan');
    }

    /**
     * Relasi dengan model Seksi
     *
     * @return Belongs = BelongsTo
     */
    public function seksi(): BelongsTo
    {
        return $this->belongsTo(Seksi::class, 'id_seksi', 'id_seksi');
    }

}
