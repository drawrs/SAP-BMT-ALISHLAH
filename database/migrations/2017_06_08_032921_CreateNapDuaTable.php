<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNapDuaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nap_dua', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_aplikasi');
            $table->date('tgl_satu');
            $table->string('mark_satu');
            $table->string('nama_satu');
            $table->string('jabatan_satu');
            $table->date('tgl_dua`');
            $table->string('mark_dua`');
            $table->string('nama_dua`');
            $table->string('jabatan_dua`');
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
        Schema::dropIfExists('nap_dua');
    }
}

