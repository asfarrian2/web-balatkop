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
        Schema::create('tb_footer', function (Blueprint $table) {
           $table->string('id_footer', 5)->primary();
            $table->string('nama', 90);
            $table->text('keterangan');
            $table->text('link')->nullable();
            $table->text('jenis');
            $table->text('status');
            $table->timestamps();
        });

        // Mengisi data tabel
        DB::table('tb_footer')->insert([
            [
                'id_footer' => 'FT-01',
                'nama' => 'Deskripsi',
                'keterangan' => 'Balai Pelatihan Koperasi & Usaha Kecil Prov. Kalsel
                memiliki fungsi utama sebagai pusat pendidikan dan pelatihan untuk
                pengembangan sumber daya manusia (SDM) koperasi dan pelaku usaha kecil
                di Provinsi Kalimantan Selatan.',
                'link' => '',
                'jenis' => 'Tentang',
                'status' => 'Text'
            ],
            [
                'id_footer' => 'FT-02',
                'nama' => 'Logo 1',
                'keterangan' => 'FT-02',
                'link' => '',
                'jenis' => 'Motto',
                'status' => 'file'
            ],
            [
                'id_footer' => 'FT-03',
                'nama' => 'Logo 2',
                'keterangan' => 'FT-03',
                'link' => '',
                'jenis' => 'Motto',
                'status' => 'file'
            ],
            [
                'id_footer' => 'FT-04',
                'nama' => 'Tahun Pembuatan',
                'keterangan' => '2025',
                'link' => '',
                'jenis' => 'Copyright',
                'status' => 'text'
            ],
            [
                'id_footer' => 'FT-05',
                'nama' => 'Nama Pembuat',
                'keterangan' => 'Balatkop-uk Prov. Kalsel',
                'link' => '',
                'jenis' => 'Copyright',
                'status' => 'text'
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
        Schema::dropIfExists('tb_footer');
    }
};
