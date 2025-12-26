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
        Schema::create('tb_header', function (Blueprint $table) {
            $table->string('id_header', 6)->primary();
            $table->string('nama', 90);
            $table->text('keterangan');
            $table->text('link')->nullable();
            $table->timestamps();
        });

        // Mengisi data tabel
        DB::table('tb_header')->insert([
            [
                'id_header' => 'HDR-01',
                'nama' => 'Logo Website',
                'keterangan' => 'logo_1.png',
                'link' => '/'
            ],
            [
                'id_header' => 'HDR-02',
                'nama' => 'Logo Shorcut Website',
                'keterangan' => 'favicon.png',
                'link' => ''
            ],
            [
                'id_header' => 'HDR-03',
                'nama' => 'Logo Landing Website',
                'keterangan' => 'pre.png',
                'link' => ''
            ],
            [
                'id_header' => 'HDR-04',
                'nama' => 'Tombol Header',
                'keterangan' => 'Ingin Ikut Diklat ? Gabung Disini',
                'link' => ''
            ],
            [
                'id_header' => 'HDR-05',
                'nama' => 'Telepon',
                'keterangan' => '(0511) 4707559',
                'link' => ''
            ],
            [
                'id_header' => 'HDR-06',
                'nama' => 'Email',
                'keterangan' => 'web.balatkopuk@gmail.com',
                'link' => ''
            ],
            [
                'id_header' => 'HDR-07',
                'nama' => 'Alamat',
                'keterangan' => 'Jl. Ahmad Yani KM. 18.200 Kec. Liang Anggang Kota Banjarbaru',
                'link' => 'https://maps.app.goo.gl/FUaeDrXhwijyqEcTA'
            ],
            [
                'id_header' => 'HDR-08',
                'nama' => 'Instagram',
                'keterangan' => '@balatkop.kalselprov',
                'link' => 'https://www.instagram.com/balatkop.provkalsel/'
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
        Schema::dropIfExists('tb_header');
    }
};
