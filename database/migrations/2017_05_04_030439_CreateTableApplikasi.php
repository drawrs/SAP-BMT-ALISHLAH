<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableApplikasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_applikasi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no_app');
            $table->integer('no_ktp');
            $table->integer('no_keuangan');
            $table->integer('produk_id');
            $table->double('nominal_pb', 15, 2);
            $table->integer('waktu_pb');
            $table->date('tanggal');
            $table->string('cabang');
            $table->enum('perkenalan', ['SRO Mendatangi Pemohon', 'Pemohon Mendatangi SRO', 'Mitra Lama', 'Referensi dari Mitra', 'Referensi dari Orang lain']);
            $table->string('kode_sro');
            $table->string('nama_sro');
            $table->enum('saran', ['Disetujui', 'Tidak Disetujui']);
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
        Schema::dropIfExists('data_applikasi');
    }
}
