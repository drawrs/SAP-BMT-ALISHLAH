<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataKeuanganMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_keuangan', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('tipe_pendapatan', ['Wiraswasta', 'Wiraswasta & Pendapatan Tetap', 'Pendapatan Tetap']);
            $table->string('nama_usaha');
            $table->enum('bidang_usaha', ['Perdagangan', 'Perindustrian', 'Peternakan', 'Jasa', 'Pertanian']);
            $table->text('alamat');
            $table->string('kecamatan');
            $table->string('telepon');
            $table->string('no_npwp');
            $table->string('kode_pos');
            /*$table->string('lama_usaha');
            $table->double('avg_omset', 15, 2);
            $table->double('avg_untung', 15, 2);
            $table->string('jml_usaha')->default("#");
            $table->enum('pickup', ['Ya', 'Tidak']);
            $table->enum('fr_pickup', ['Harian', 'Mingguan', 'Dwimingguan', 'Bulanan']);*/
            $table->enum('tabungan', ['Ya', 'Tidak']);
            $table->string('thn_tabungan');
            $table->string('avg_saldo');
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
        Schema::dropIfExists('data_keuangan');
    }
}
