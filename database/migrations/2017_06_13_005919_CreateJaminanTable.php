<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJaminanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jaminan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_aplikasi');
            $table->enum('dokumen', ['SHM', 'SHGB', 'BPKB', 'Leter C', 'Lainnya']);
            $table->enum('bentuk', ['Tanah Produktif / Utk Bangunan', 'Bangunan ada IMB', 'Bangunan tanpa IMB','Tanah Kosong <1000 m2 (Produktif)', 'Tanah Kosong >= 1000 m2 (Tdk Produktif)', 'Tanah Kosong <1000 m2 (Tdk Produktif)', 'Kios / Lapak / dasaran / los','Barang elektronik/Peralatan dan sejenisnya','Mobil / motor','Bilyet Deposito', 'SHGB', 'BPKB', 'Leter C', 'Lainnya']);
            $table->integer('kuantitas');
            $table->bigInteger('harga');
            $table->bigInteger('market');
            $table->double('bobot');
            $table->double('ftv');
            $table->bigInteger('taksasi');
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
        Schema::dropIfExists('jaminan');
    }
}
