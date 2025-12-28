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
        Schema::create('tb_kategori', function (Blueprint $table) {
            $table->string('id_kategori', 4)->primary();
            $table->string('kategori', 40);
            $table->timestamps();
        });

        DB::table('tb_kategori')->insert([
            [
            'id_kategori'    => 'c-01',
            'kategori'       => 'Koperasi'
            ],
            [
            'id_kategori'    => 'c-02',
            'kategori'       => 'UMKM'
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
        Schema::dropIfExists('tb_kategori');
    }
};
