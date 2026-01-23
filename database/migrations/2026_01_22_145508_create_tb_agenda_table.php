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
        Schema::create('tb_agenda', function (Blueprint $table) {
            $table->string('id_agenda', 9)->primary();
            $table->text('judul');
            $table->date('tgl_awal');
            $table->date('tgl_akhir');
            $table->text('deskripsi');
            $table->text('foto');
            $table->string('id_kategori', 4);
            $table->text('link')->nullable();;
            $table->timestamps();
        });

        DB::table('tb_agenda')->insert([
            [
                'id_agenda' => 'g2026-001',
                'judul'     => 'Pelatihan Tata Kelola Koperasi Modern Bagi Pengurus Koperasi dan Akuntansi Berbasis Teknologi bagi Pengurus Koperasi',
                'tgl_awal'  => '2026-03-01',
                'tgl_akhir' => '2026-03-03',
                'deskripsi' => 'Tentang Balatkop Kalsel Loerep Isum',
                'foto'      => 'Pelatihan Tata Kelola Koperasi Modern Bagi Pengurus Koperasi dan Akuntansi Berbasis Teknologi bagi Pengurus Koperasi 2026-03-01.png',
                'id_kategori'=> 'c-01',
                'link'      => ''
            ],
            [
                'id_agenda' => 'g2026-002',
                'judul'     => 'Pelatihan Tata Kelola UMKM Modern Bagi UKM dan Pemasaran Berbasis Teknologi bagi UKM',
                'tgl_awal'  => '2026-04-01',
                'tgl_akhir' => '2026-04-03',
                'deskripsi' => 'Tentang Balatkop Kalsel Loerep Isum',
                'foto'      => 'Pelatihan Tata Kelola UMKM Modern Bagi UKM dan Pemasaran Berbasis Teknologi bagi UKM 2026-04-01.png',
                'id_kategori'=> 'c-02',
                'link'      => ''
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_agenda');
    }
};
