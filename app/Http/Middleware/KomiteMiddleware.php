<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Aplikasi;
class KomiteMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected $small_level = ['FEO', 'PINCAB', 'SPV', 'DPS'];
    protected $medium_level = ['LEGAL', 'FEM', 'FEO', 'PINCAB', 'DPS'];
    protected $high_level = ['LEGAL', 'GM', 'FEM', 'FEO', 'PINCAB', 'DPS'];

    public function handle($request, Closure $next)
    {
        $cek = Aplikasi::select('nominal_pb')->where('no_aplikasi', $request->route('no_ap'));
        if ($cek->count() <= 0) {
            //echo "ga ketemu" . $cek->count();
            return redirect('/');
        }
        $nominal_pengajuan = $cek->first()->nominal_pb;
        if ($nominal_pengajuan <= 25000000) {
            $level = $this->small_level;
        } elseif ($nominal_pengajuan > 25000000 && $nominal_pengajuan <= 50000000) {
            $level = $this->medium_level;
        } elseif ($nominal_pengajuan > 50000000) {
            $level = $this->high_level;
        }
        $user_level_now = Auth::user()->detail->jabatan;

        $cek_ijin = in_array($user_level_now, $level);

        if ($cek_ijin > 0) {
            return $next($request);
        } else {
            return redirect('/')->with(['msg' => 'Anda tidak memiliki izin untuk mengakses Halaman tersebut.', 
                                        'type' => 'warning']);
        }

    }
}
