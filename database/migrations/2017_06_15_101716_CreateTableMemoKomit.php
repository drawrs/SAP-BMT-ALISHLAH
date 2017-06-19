<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMemoKomit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memo_komite', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_aplikasi');
            $table->enum('pembiayaan', ['Murabahah', 'Multijasa', 'Musyarakah', 'Qardh', 'Hawalah']);
            $table->integer('jkw_n');
            $table->enum('jkw_p', ['B', 'M', 'H', 'T']);
            $table->bigInteger('jml_pembiayaan');
            $table->bigInteger('jml_margin');
            $table->enum('rwyt_pembayaran', ['Sering Terjadi Tunggakan', 'Pernah ada tunggakan', 'Pembayaran tepat waktu telat hari', 'Pembayaran selalu tepat waktu']);
            $table->double('ir');
            $table->bigInteger('sisa_pembiayaan');
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
        Schema::dropIfExists('memo_komite');
    }
}
