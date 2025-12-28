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
        Schema::create('tb_jabatan', function (Blueprint $table) {
            $table->string('id_jabatan', 4)->primary();
            $table->string('jabatan', 180);
            $table->tinyInteger('kelas');
            $table->timestamps();
        });

        DB::table('tb_jabatan')->insert([
            [
            'id_jabatan'    => 'j-01',
            'jabatan'       => 'Kepala Balai Pelatihan Koperasi dan Usaha Kecil Prov. Kalsel',
            'kelas'         =>  '1'
            ],
            [
            'id_jabatan'    => 'j-02',
            'jabatan'       => 'Widyaiswara Ahli Madya',
            'kelas'         =>  '2'
            ],
            [
            'id_jabatan'    => 'j-03',
            'jabatan'       => 'Kepala Sub Bagian Tata Usaha',
            'kelas'         =>  '2'
            ],
            [
            'id_jabatan'    => 'j-04',
            'jabatan'       => 'Kepala Seksi Pendidikan dan Pelatihan SDM Koperasi',
            'kelas'         =>  '2'
            ],
            [
            'id_jabatan'    => 'j-05',
            'jabatan'       => 'Kepala Seksi Pendidikan dan Pelatihan SDM Usaha Kecil',
            'kelas'         =>  '2'
            ],
            [
            'id_jabatan'    => 'j-06',
            'jabatan'       => 'Pranata Komputer Ahli Pertama',
            'kelas'         =>  '3'
            ],
            [
            'id_jabatan'    => 'j-07',
            'jabatan'       => 'Penelaah Teknis Kebijakan',
            'kelas'         =>  '3'
            ],
            [
            'id_jabatan'    => 'j-08',
            'jabatan'       => 'Pengadministrasi Perkantoran',
            'kelas'         =>  '3'
            ],
            [
            'id_jabatan'    => 'j-09',
            'jabatan'       => 'Penata Layanan Operasional',
            'kelas'         =>  '3'
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
        Schema::dropIfExists('tb_jabatan');
    }
};
