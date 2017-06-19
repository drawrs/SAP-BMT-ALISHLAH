<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataMitraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_mitra', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no_ktp')->unique();
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->enum('jk', ['L', 'P']);
            $table->date('tgl_aktif_ktp');
            $table->date('tgl_lahir');
            $table->string('tempat_lahir');
            $table->enum('pendidikan', ['SD', 'SLTP', 'SLTA', 'Diploma', 'Sarjana']);
            $table->enum('status_kawin', ['Menikah', 'Lajang', 'Duda/Janda']);
            $table->string('nama_pasangan');
            $table->date('tgl_lahir_pasangan');
            $table->string('nama_ibu');
            $table->integer('jumlah_tanggungan');
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
        Schema::dropIfExists('data_mitra');
    }
}
