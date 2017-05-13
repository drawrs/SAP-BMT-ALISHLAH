<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlamatMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempat_tinggal', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mitra_id')->unique();
            $table->string('alamat_sekarang')->default('####');
            $table->string('telepon');
            $table->string('no_hp');
            $table->string('alamat_ktp')->default('######');
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
        Schema::dropIfExists('tempat_tinggal');
    }
}
