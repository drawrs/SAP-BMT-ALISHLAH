<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemilikJaminanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemilik_jaminan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_aplikasi');
            $table->string('nama');
            $table->enum('hubungan', ['Diri Sendiri', 'Suami', 'Istri', 'Adik', 'Kakak', 'Orang Tua']);
            $table->string('alamat');
            $table->string('telepon');
            $table->string('lokasi_jaminan');
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
        Schema::dropIfExists('pemilik_jaminan');
    }
}
