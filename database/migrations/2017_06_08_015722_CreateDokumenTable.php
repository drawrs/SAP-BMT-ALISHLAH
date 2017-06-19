<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDokumenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('dokumen', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no_aplikasi');
            $table->text('judul');
            $table->enum('status', ['ya', 'tidak']);
            $table->enum('jenis', ['DI', 'IHDU', 'FKB', 'DPJ']);
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
        //
    }
}
