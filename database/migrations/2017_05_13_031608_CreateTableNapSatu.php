<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableNapSatu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nap_satu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_aplikasi');
            $table->enum('rwyt_hbng_lbg', ['Sering terjadi tunggakan', 'Pernah terjadi Tunggakan', 'Pembayaran selalu tepat waktu']);
            $table->enum('ps_usaha', ['Stabil', 'Berkembang', 'Maju']);
            $table->enum('ktg_thd_sp', ['Terbatas', 'Beberapa', 'Banyak beragam']);
            $table->enum('ktg_thd_pl', ['Terbatas', 'Beberapa', 'Banyak beragam']);
            $table->enum('wly_pmsrn', ['Lokal', 'Dalam Kota', 'Hingga luar kota']);
            $table->enum('jns_prdk', ['Barang Mewah', 'Barang & Jasa Sekunder', 'Barang & Jasa Primer']);
            $table->enum('lm_ush', ['< 2th', '2 - 5th', '> 5th']);
            $table->enum('rpt_ush', ['Opini negatif dari pelanggan', 'Opini positif/negatif', 'Opini Positif']);
            $table->enum('usia', ['21 - 30th', '31 - 65th', '< 21th > 65th']);
            $table->enum('adm_ush', ['Kurang Rapih', 'Cukup Rapi', 'Rapih']);
            $table->enum('tmpt_tgl', ['Sewa', 'Milik Orang Tua', 'Sdr Kandung', 'Anak', 'Milik Sendiri']);
            $table->enum('tmpt_ush', ['Sewa', 'Milik Orang Tua', 'Sdr Kandung', 'Anak', 'Milik Sendiri']);
            $table->string('rkn_smpn');
            $table->string('rkn_sjnk');
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
        Schema::dropIfExists('nap_satu');
    }
}
