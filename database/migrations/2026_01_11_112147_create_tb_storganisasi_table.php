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
        Schema::create('tb_storganisasi', function (Blueprint $table) {
            $table->string('id_sto', 5)->primary();
            $table->string('nama', 90);
            $table->text('keterangan');
            $table->string('jenis', 4);
            $table->string('status', 4);
            $table->text('link')->nullable();
            $table->timestamps();
        });

        DB::table('tb_storganisasi')->insert([
            [
                'id_sto' => 'so-01',
                'nama' => 'Logo Utama',
                'keterangan' => 'sto.png',
                'jenis' => 'logo',
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
        Schema::dropIfExists('tb_storganisasi');
    }
};
