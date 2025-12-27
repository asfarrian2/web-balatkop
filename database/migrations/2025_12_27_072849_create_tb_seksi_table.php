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
        Schema::create('tb_seksi', function (Blueprint $table) {
            $table->string('id_seksi', 5)->primary();
            $table->string('seksi', 180);
            $table->tinyInteger('status');
            $table->timestamps();
        });

        // Mengisi data tabel
        DB::table('tb_seksi')->insert([
            [
                'id_seksi' => 'se-01',
                'seksi' => 'Kepala Balai Pelatihan Koperasi dan Usaha Kecil Provinsi Kalimantan Selatan',
                'status' => 1
            ],
            [
                'id_seksi' => 'se-02',
                'seksi' => 'Fungsional Widyaiswara',
                'status' => 1
            ],
            [
                'id_seksi' => 'se-03',
                'seksi' => 'Sub Bagian Tata Usaha',
                'status' => 1
            ],
            [
                'id_seksi' => 'se-04',
                'seksi' => 'Seksi Pendidikan dan Pelatihan SDM Koperasi',
                'status' => 1
            ],
            [
                'id_seksi' => 'se-05',
                'seksi' => 'Seksi Pendidikan dan Pelatihan SDM Usaha Kecil',
                'status' => 1
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
        Schema::dropIfExists('tb_seksi');
    }
};
