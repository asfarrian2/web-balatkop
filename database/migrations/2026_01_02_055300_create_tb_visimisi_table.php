<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_visimisi', function (Blueprint $table) {
            $table->string('id_visimisi', 5)->primary();
            $table->text('deskripsi');
            $table->string('jenis', 4);
            $table->string('status', 4);
        });

        DB::table('tb_visimisi')->insert([
            [
                'id_visimisi' => 'vm-01',
                'deskripsi' => 'visi.png',
                'jenis' => 'visi',
                'status' => 'file'
            ],
            [
                'id_visimisi' => 'vm-02',
                'deskripsi' => 'misi.png',
                'jenis' => 'misi',
                'status' => 'file'
            ],
            [
                'id_visimisi' => 'vm-03',
                'deskripsi' => 'Koperasi Kuat, Didukung oleh UMKM Unggul.',
                'jenis' => 'visi',
                'status' => 'text'
            ],
            [
                'id_visimisi' => 'vm-04',
                'deskripsi' => 'Merevitalisasi Kelembagaan Koperasi dan Usaha Kecil sebagai Pelaku Ekonomi;',
                'jenis' => 'misi',
                'status' => 'text'
            ],
            [
                'id_visimisi' => 'vm-05',
                'deskripsi' => 'Meningkatkan perana Koperasi dan Usaha Kecil dalam Pembangunan Koperasi;',
                'jenis' => 'misi',
                'status' => 'text'
            ],
            [
                'id_visimisi' => 'vm-06',
                'deskripsi' => 'Meningkatkan Kompetensi SDM Perkoperasian dan Usaha Kecil.',
                'jenis' => 'visi',
                'status' => 'text'
            ],
                        [
                'id_visimisi' => 'vm-07',
                'deskripsi' => 'logo.png',
                'jenis' => 'visi',
                'status' => 'file'
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_visimisi');
    }
};
