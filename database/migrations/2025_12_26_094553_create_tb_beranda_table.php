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
        Schema::create('tb_beranda', function (Blueprint $table) {
            $table->string('id_beranda', 6)->primary();
            $table->string('nama', 90);
            $table->text('keterangan_1');
            $table->text('keterangan_2')->nullable();
            $table->text('link')->nullable();
            $table->string('jenis', 30);
            $table->string('status', 4);
            $table->timestamps();
        });

        // Mengisi data tabel
        DB::table('tb_beranda')->insert([
            [
                'id_beranda' => 'BRD-01',
                'nama' => 'Sambutan Dinas/UPTD',
                'keterangan_1' => 'SELAMAT DATANG DI PORTAL',
                'keterangan_2' => '',
                'jenis' => 'Banner Primary',
                'status' => 'Text'
            ],
                        [
                'id_beranda' => 'BRD-02',
                'nama' => 'Nama Dinas/UPTD',
                'keterangan_1' => 'Balai Pelatihan Koperasi dan Usaha Kecil <br> Prov. Kalsel',
                'keterangan_2' => '',
                'jenis' => 'Banner Primary',
                'status' => 'Text'
            ],
            [
                'id_beranda' => 'BRD-03',
                'nama' => 'Motto Dinas/UPTD',
                'keterangan_1' => 'Koperasi Modern, UMKM Naik Kelas',
                'keterangan_2' => '',
                'jenis' => 'Banner Primary',
                'status' => 'Text'
            ],
            [
                'id_beranda' => 'BRD-04',
                'nama' => 'Gambar Utama',
                'keterangan_1' => 'about_1.png',
                'keterangan_2' => '',
                'jenis' => 'Banner Primary',
                'status' => 'File'
            ],
            [
                'id_beranda' => 'BRD-05',
                'nama' => 'Tombol Primary',
                'keterangan_1' => 'Gabung Diklat',
                'keterangan_2' => '',
                'jenis' => 'Banner Primary',
                'status' => 'Text'
            ],
            [
                'id_beranda' => 'BRD-06',
                'nama' => 'Tombol Secondary',
                'keterangan_1' => 'Informasi Lebih Lanjut',
                'keterangan_2' => '',
                'jenis' => 'Banner Primary',
                'status' => 'Text'
            ],
            [
                'id_beranda' => 'BRD-07',
                'nama' => 'Gambar Utama',
                'keterangan_1' => 'about_2.png',
                'keterangan_2' => '',
                'jenis' => 'Banner Secondary',
                'status' => 'File'
            ],
            [
                'id_beranda' => 'BRD-08',
                'nama' => 'Gambar Kedua',
                'keterangan_1' => 'about_3.png',
                'keterangan_2' => '',
                'jenis' => 'Banner Secondary',
                'status' => 'File'
            ],
            [
                'id_beranda' => 'BRD-09',
                'nama' => 'Tanggal',
                'keterangan_1' => '25',
                'keterangan_2' => 'Desember 2025',
                'jenis' => 'Banner Secondary',
                'status' => 'Text'
            ],
            [
                'id_beranda' => 'BRD-10',
                'nama' => 'Kalimat Tajuk',
                'keterangan_1' => 'Selamat Memperingati Hari Natal',
                'keterangan_2' => '',
                'jenis' => 'Banner Secondary',
                'status' => 'Text'
            ],
            [
                'id_beranda' => 'BRD-11',
                'nama' => 'Deskripsi',
                'keterangan_1' => '“Di bawah cahaya pohon Natal, semoga harapan barumu bersinar terang. Selamat merayakan Natal!”',
                'keterangan_2' => '',
                'jenis' => 'Banner Secondary',
                'status' => 'Text'
            ],
            [
                'id_beranda' => 'BRD-12',
                'nama' => 'Hastag 1',
                'keterangan_1' => '#selamatharinatal2025',
                'keterangan_2' => '',
                'jenis' => 'Banner Secondary',
                'status' => 'Text'
            ],
            [
                'id_beranda' => 'BRD-13',
                'nama' => 'Hastag 2',
                'keterangan_1' => '#koperasimodern',
                'keterangan_2' => '',
                'jenis' => 'Banner Secondary',
                'status' => 'Text'
            ],
            [
                'id_beranda' => 'BRD-14',
                'nama' => 'Hastag 3',
                'keterangan_1' => '#umkmnaikkelas',
                'keterangan_2' => '',
                'jenis' => 'Banner Secondary',
                'status' => 'Text'
            ],
            [
                'id_beranda' => 'BRD-15',
                'nama' => 'Kalimat Tajuk',
                'keterangan_1' => 'Balai Pelatihan Koperasi & Usaha Kecil Prov. Kalsel',
                'keterangan_2' => '',
                'jenis' => 'Tentang',
                'status' => 'Text'
            ],
            [
                'id_beranda' => 'BRD-16',
                'nama' => 'Deskripsi 1',
                'keterangan_1' => 'adalah unit pelaksana teknis di bawah Dinas Koperasi dan UKM Provinsi Kalimantan Selatan',
                'keterangan_2' => '',
                'jenis' => 'Tentang',
                'status' => 'Text'
            ],
            [
                'id_beranda' => 'BRD-17',
                'nama' => 'Deskripsi 2',
                'keterangan_1' => 'yang memiliki fungsi utama sebagai pusat pendidikan dan pelatihan untuk pengembangan sumber daya manusia (SDM) koperasi dan pelaku usaha kecil di Provinsi Kalimantan Selatan.',
                'keterangan_2' => '',
                'jenis' => 'Tentang',
                'status' => 'Text'
            ],
            [
                'id_beranda' => 'BRD-18',
                'nama' => 'Card 1',
                'keterangan_1' => 'Menyelenggarakan Pelatihan',
                'keterangan_2' => 'Kegiatan Pelatihan teknis dan manajerial untuk meningkatkan keterampilan SDM Koperasi dan UMKM',
                'jenis' => 'Tentang',
                'status' => 'Text'
            ],
            [
                'id_beranda' => 'BRD-19',
                'nama' => 'Card 2',
                'keterangan_1' => 'Meningkatkan Kapasitas SDM',
                'keterangan_2' => 'Mengembangkan kompetensi pelaku Koperasi dan UMKM agar lebih profesional, produktif dan mampu bersaing di pasar hingga era digital',
                'jenis' => 'Tentang',
                'status' => 'Text'
            ],
            [
                'id_beranda' => 'BRD-20',
                'nama' => 'Card 3',
                'keterangan_1' => 'Fasilitasi Pembinaan dan Pendampingan',
                'keterangan_2' => 'Berperan dalam membantu pendampingan, konsultasi, dan bimbingan teknis pasca pelatihan SDM Koperasi dan UMKM',
                'jenis' => 'Tentang',
                'status' => 'Text'
            ],
            [
                'id_beranda' => 'BRD-21',
                'nama' => 'Card 4',
                'keterangan_1' => 'Mendorong Transformasi Koperasi dan UMKM',
                'keterangan_2' => 'Bertransformasi menjadi SDM Koperasi dan UMKM yang modern dan berdaya saing, melalui pelatihan digitalisasi, tata kelola modern dan peningkatan sistem manajemen',
                'jenis' => 'Tentang',
                'status' => 'Text'
            ],
            [
                'id_beranda' => 'BRD-22',
                'nama' => 'Kalimat Tajuk',
                'keterangan_1' => 'Pendidikan dan Pelatihan ini diselenggarakan sebagai upaya peningkatan kompetensi sumber daya manusia Koperasi dan UMKM secara terencana, terarah, dan berkelanjutan.',
                'keterangan_2' => '',
                'jenis' => 'Agenda',
                'status' => 'Text'
            ],
            [
                'id_beranda' => 'BRD-23',
                'nama' => 'Kemitraan 1',
                'keterangan_1' => 'brand_1.png',
                'keterangan_2' => '',
                'jenis' => 'Kemitraan',
                'status' => 'file'
            ],
            [
                'id_beranda' => 'BRD-24',
                'nama' => 'Kemitraan 2',
                'keterangan_1' => 'brand_2.png',
                'keterangan_2' => '',
                'jenis' => 'Kemitraan',
                'status' => 'file'
            ],
            [
                'id_beranda' => 'BRD-25',
                'nama' => 'Kemitraan 3',
                'keterangan_1' => 'brand_3.png',
                'keterangan_2' => '',
                'jenis' => 'Kemitraan',
                'status' => 'file'
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
        Schema::dropIfExists('tb_beranda');
    }
};
