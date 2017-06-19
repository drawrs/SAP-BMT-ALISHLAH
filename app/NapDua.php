<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NapDua extends Model
{
    //
    protected $table = 'nap_dua';

    protected $fillable = [
    						'no_aplikasi',
							'htng_kwjb',
							'hbng_tg',
							'kgtn_ibdh',
							'hbng_tk',
							'rmh_tg',
							'kmsyrktn',
                            'pnk_akad',
                            'biaya_pc',
                            'pnk_jaminan'
						];
}
