<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemoKomite extends Model
{
    //
    protected $table = 'memo_komite';
    protected $fillable = [
							'no_aplikasi',
							'pembiayaan',
							'jkw_n',
							'jkw_p',
							'jml_pembiayaan',
							'jml_margin',
							'rwyt_pembayaran',
							'sisa_pembiayaan',
							'ir'
						];
}
