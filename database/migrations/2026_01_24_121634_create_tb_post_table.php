<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_post', function (Blueprint $table) {
            $table->string('id_post', 10)->primary();
            $table->string('judul', 150);
            $table->text('konten');
            $table->text('slug');
            $table->text('thumbail');
            $table->string('penulis');
            $table->string('id_kategori', 4);
            $table->integer('views_count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_post');
    }
};
