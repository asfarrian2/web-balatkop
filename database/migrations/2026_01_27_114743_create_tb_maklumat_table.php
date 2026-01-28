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
        Schema::create('tb_maklumat', function (Blueprint $table) {
           $table->string('id_maklumat', 5)->primary();
            $table->string('nama', 90);
            $table->text('keterangan');
            $table->string('status', 4);
            $table->text('link')->nullable();
            $table->timestamps();
        });
        DB::table('tb_maklumat')->insert([
            [
                'id_maklumat' => 'mp-01',
                'nama' => 'Deskripsi',
                'keterangan' => 'Lorep Ipsum Maklumat Pelayanan',
                'status' => 'text',
                'link' => '',
            ],
            [
                'id_maklumat' => 'mp-02',
                'nama' => 'Gambar',
                'keterangan' => 'Maklumat Pelayanan.png',
                'status' => 'file',
                'link' => '',
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
        Schema::dropIfExists('tb_maklumat');
    }
};
