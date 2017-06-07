<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NapSatu extends Model
{
    //
    protected $table = 'nap_satu';
    protected $fillable = ['adm_ush',
                            'no_aplikasi',
                            'jns_prdk',
                            'ktg_thd_pl',
                            'ktg_thd_sp',
                            'lm_ush',
                            'ps_usaha',
                            'rkn_sjnk',
                            'rkn_smpn',
                            'rpt_ush',
                            'rwyt_hbng_lbg',
                            'tmpt_tgl',
                            'tmpt_ush',
                            'usia',
                            'wly_pmsrn'];
}
