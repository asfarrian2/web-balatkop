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
        Schema::create('tb_tentang', function (Blueprint $table) {
            $table->string('id_tentang', 4)->primary();
            $table->string('nama', 90);
            $table->text('keterangan');
            $table->text('foto');
            $table->text('link')->nullable();
            $table->timestamps();
        });

         DB::table('tb_tentang')->insert([
            [
                'id_tentang' => 't-01',
                'nama' => 'Tentang',
                'keterangan' => 'Tentang Balatkop Kalsel',
                'foto' => 'Tentang.png',
                'link' => ''
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
        Schema::dropIfExists('tb_tentang');
    }
};
