
<br>
<table width="400px">
  <tr>
    <td><h4>Tanggal Penilaian</h4></td>
    <td>
      <input type="text" size="30" value="" class="clean"  data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
      <button class="btn btn-primary" title="Perbaharui tanggal Penilaian"><i class="fa fa-refresh"></i></button>
    </td>
  </tr>
</table>
<div class="task-content">
  <br>
  <div class="row">
    <div class="col-md-12"><span><h4 align="center">DATA PEMOHON</h4></span><hr></div>
    <div class="col-md-6 bordered">
      <table class="table table-responsive table-borderless">
        <tr>
          <td width="150px">Nama</td>
          <td><input type="text" class="form-control inputable" value="{{$app->mitra->nama_lengkap}}" disabled></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>
            <input type="radio" value="L" {{autoChecked($app->mitra->jk, 'L')}}> Laki-laki
            <input type="radio" value="P" {{autoChecked($app->mitra->jk, 'P')}}> Perempuan
          </td>
        </tr>
        <tr>
          <td>Alamat Rumah</td>
          <td><textarea name="" class="form-control inputable" id="" cols="" rows="2" disabled>{{getAlamat('blk', $app->mitra->alamat->alamat_sekarang) . " " . getAlamat('jl', $app->mitra->alamat->alamat_sekarang)}}</textarea></td>
        </tr>
        <tr>
          <td>No. Telp. / HP</td>
          <td><input type="text" class="form-control inputable" value="{{$app->mitra->no_telp}}" disabled></td>
        </tr>
        <tr>
          <td>Riwayat hub.dgn Lembaga Keuangan</td>
          <td>
            <select name="tab5_rwyt_hbng_lbg" id="" class="form-control inputable">
             @foreach(getEnum(new App\NapSatu, 'rwyt_hbng_lbg') as $m_key => $m_val)
             <option value="{{$m_val}}" {{autoSelect($nap_satu->rwyt_hbng_lbg, $m_val)}}>{{$m_val}}</option>
             @endforeach
           </select>
         </td>
       </tr>
       <tr>
        <td>Prospek Usaha</td>
        <td>
          <select name="tab5_ps_usaha" id="" class="form-control inputable">
           @foreach(getEnum(new App\NapSatu, 'ps_usaha') as $m_key => $m_val)
           <option value="{{$m_val}}" {{autoSelect($nap_satu->ps_usaha, $m_val)}}>{{$m_val}}</option>
           @endforeach
         </select>
       </td>
     </tr>
     <tr>
      <td>Ketergantungan thd Supplyer</td>
      <td>
        <select name="tab5_ktg_thd_sp" id="" class="form-control inputable">
         @foreach(getEnum(new App\NapSatu, 'ktg_thd_sp') as $m_key => $m_val)
         <option value="{{$m_val}}" {{autoSelect($nap_satu->ktg_thd_sp, $m_val)}}>{{$m_val}}</option>
         @endforeach
       </select>
     </td>
   </tr>
   <tr>
    <td>Ketergantungan thd Pelanggan</td>
    <td>
      <select name="tab5_ktg_thd_pl" id="" class="form-control inputable">
       @foreach(getEnum(new App\NapSatu, 'ktg_thd_pl') as $m_key => $m_val)
       <option value="{{$m_val}}" {{autoSelect($nap_satu->ktg_thd_pl, $m_val)}}>{{$m_val}}</option>
       @endforeach
     </select>
   </td>
 </tr>
 <tr>
  <td>Wilayah Pemasaran</td>
  <td>
    <select name="tab5_wly_pmsrn" id="" class="form-control inputable">
     @foreach(getEnum(new App\NapSatu, 'wly_pmsrn') as $m_key => $m_val)
     <option value="{{$m_val}}" {{autoSelect($nap_satu->wly_pmsrn, $m_val)}}>{{$m_val}}</option>
     @endforeach
   </select>
 </td>
</tr>
<tr>
  <td>Jenis Produk</td>
  <td>
    <select name="tab5_jns_prdk" id="" class="form-control inputable">
     @foreach(getEnum(new App\NapSatu, 'jns_prdk') as $m_key => $m_val)
     <option value="{{$m_val}}" {{autoSelect($nap_satu->jns_prdk, $m_val)}}>{{$m_val}}</option>
     @endforeach
   </select>
 </td>
</tr>
</table>
</div>
<div class="col-md-6 bordered">
  <table class="table table-responsive table-borderless">
    <tr>
      <td width="150px">Jml. Permohonan Pembiayaan</td>
      <td><input type="text" class="form-control inputable" value="{{$app->nominal_pb}}" disabled=""></td>
    </tr>
    <tr>
      <td>Bidang Usaha</td>
      <td>
        <select name="" id="" class="form-control inputable" disabled>
         @foreach(getEnum(new App\Keuangan, 'bidang_usaha') as $m_key => $m_val)
         <option value="{{$m_val}}" {{autoSelect($app->keuangan->bidang_usaha, $m_val)}}>{{$m_val}}</option>
         @endforeach
       </select>
     </td>
   </tr>
   <tr>
    <td>Alamat Usaha</td>
    <td><input type="text" class="form-control inputable" value="{{$app->keuangan->alamat}}" disabled=""></td>
  </tr>
  <tr>
    <td>Lama Usaha</td>
    <td>
      <select name="tab5_lm_ush" id="" class="form-control inputable">
       @foreach(getEnum(new App\NapSatu, 'lm_ush') as $m_key => $m_val)
       <option value="{{$m_val}}" {{autoSelect($nap_satu->lm_ush, $m_val)}}>{{$m_val}}</option>
       @endforeach
     </select>
   </td>
 </tr>
 <tr>
  <td>Reputasi Usaha</td>
  <td>
    <select name="tab5_rpt_ush" id="" class="form-control inputable">
     @foreach(getEnum(new App\NapSatu, 'rpt_ush') as $m_key => $m_val)
     <option value="{{$m_val}}" {{autoSelect($nap_satu->rpt_ush, $m_val)}}>{{$m_val}}</option>
     @endforeach
   </select>
 </td>
</tr>
<tr>
  <td>Usia</td>
  <td>
    <select name="tab5_usia" id="" class="form-control inputable">
     @foreach(getEnum(new App\NapSatu, 'usia') as $m_key => $m_val)
     <option value="{{$m_val}}" {{autoSelect($nap_satu->usia, $m_val)}}>{{$m_val}}</option>
     @endforeach
   </select>
 </td>
</tr>
<tr>
  <td>Administrasi Usaha</td>
  <td>
    <select name="tab5_adm_ush" id="" class="form-control inputable">
     @foreach(getEnum(new App\NapSatu, 'adm_ush') as $m_key => $m_val)
     <option value="{{$m_val}}" {{autoSelect($nap_satu->adm_ush, $m_val)}}>{{$m_val}}</option>
     @endforeach
   </select>
 </td>
</tr>
<tr>
  <td>Tempat Tinggal</td>
  <td>
    <select name="tab5_tmpt_tgl" id="" class="form-control inputable">
     @foreach(getEnum(new App\NapSatu, 'tmpt_tgl') as $m_key => $m_val)
     <option value="{{$m_val}}" {{autoSelect($nap_satu->tmpt_tgl, $m_val)}}>{{$m_val}}</option>
     @endforeach
   </select>
 </td>
</tr>
<tr>
  <td>Tempat Usaha</td>
  <td>
    <select name="tab5_tmpt_ush" id="" class="form-control inputable">
     @foreach(getEnum(new App\NapSatu, 'tmpt_ush') as $m_key => $m_val)
     <option value="{{$m_val}}" {{autoSelect($nap_satu->tmpt_ush, $m_val)}}>{{$m_val}}</option>
     @endforeach
   </select>
 </td>
</tr>
<tr>
  <td>Rekening di UJKS BMT Al Ishlah</td>
  <td>
    <div class="form-group">
      <label for=""><small><strong>Simpanan</strong></small></label>
      <input type="text" name="tab5_rkn_smpn" class="form-control inputable" value="{{$nap_satu->rkn_smpn}}">
    </div>
    <div class="form-group">
      <label for=""><small><strong>Sijangka</strong></small></label>
      <input type="text" name="tab5_rkn_sjnk" class="form-control inputable" value="{{$nap_satu->rkn_sjnk}}">
    </div>
  </td>
</tr>
</table>
</div>
</div>
{{-- END ROW --}}
<div class="row">
  <div class="co-md-12"><span><h4 align="center">INFORMASI KEUANGAN PEMOHON</h4></span><hr></div>
  <div class="col-md-7 bordered col-md-offset-2">
    <table class="table table-borderless" width="" align="center">
      <tr>
        <td width="200px">Produk Jasa Yag Dihasilkan</td>
        <td><input type="text" class="form-control inputable" value="{{$app->keuangan->nama_usaha}}" disabled=""></td>
      </tr>
      <tr>
        <td>Rencana Penggunakan</td>
        <td><input type="text" class="form-control inputable" value="{{$app->keuangan->tujuan_pb_detail}}" disabled=""></td>
      </tr>
      <tr>
        <td>Jumlah Pembiayaan yang di Rekomendasikan</td>
        <td>
          <input type="number" class="form-control inputable" name="tab5_rekomen_pb" id="tab5_rekomen_pb" value="{{$app->rekomen_pb}}">
          &nbsp;&nbsp;<br>
          <strong>JK.Waktu</strong>
          <input type="number" class="clean inputable" name="tab5_waktu_pb" id="tab5_waktu_pb" value="{{$app->waktu_pb}}">
          <select class="clean inputable" name="" id="jpr_type">
            <option value="jpr_1">Bulan (diangsur)</option>
            <option value="jpr_2">Bulan (diinvestasi akhir)</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Jumlah Margin / Bagi hasil</td>
        <td>
          <input type="text" class="clean inputable" id="tab5_margin_pb" name="tab5_margin_pb" value="{{$app->margin_pb}}">
          &nbsp;&nbsp;
          <strong>e. rate</strong> :
          <span id="tab5_eg_rate"></span> %
        </td>
      </tr>
      <tr>
        <td>Besar angsuran perbulan</td>
      </tr>
        <td><input type="number" class="form-control inputable" id="tab5_angs_pb" name="tab5_angs_pb" value="{{$app->angs_pb}}"></td>

    </table>
  </div>
</div>
<div class="row">
  <hr>
  <div class="col-md-6 bordered no-padding">
    <table class="table table-responsive table-bordered clonedInput">
      <form method="post" action="{{ url('update-pendapatan') }}" id="pu_form">
        {!! csrf_field() !!}
        <thead>
          <tr>
            <td colspan="2"><b>Pendapatan Usaha</b></td>
          </tr>
        </thead>
        <tbody class="clone-area-pu">
          @php $t_pdptn = 0; @endphp
          @foreach($pendapatan->where(['no_aplikasi' => $app->no_aplikasi, 'tipe' => 'pu'])->get() as $pdptn)
          <!-- Total pendapatan -->
          @php $t_pdptn += $pdptn->isi; @endphp
          <tr>
            <td width="150px">
              <b>{{$pdptn->judul}}</b>
              <button type="button" onClick="hapusPdp('{{$pdptn->id}}','pdp')" class="btn btn-danger btn-xs pull-right"><i class="fa fa-minus"></i></button>
            </td>
            <td><input type="text" class="form-control inputable" value="{{$pdptn->isi}}"></td>
          </tr>
          @endforeach

        </tbody>
      </form>
      <tr id="jml_row">
        <td>Jumlah</td>
        <td><span id="t_pdptn">{{$t_pdptn}}</span></td>
      </tr>
      <tr>
        <td colspan="2">
          <button class="btn btn-primary btn-sm" onClick="addPdpRow('pu', 'pdp')" type="button">Tambah baris</button>
          <button class="btn btn-success btn-sm" onClick="submitPdp('pu', 'pdp')" type="button">Simpan</button>
        </td>
      </tr>

    </table>
  </div>
  <div class="col-md-6 bordered no-padding">
    <table class="table table-responsive table-bordered clonedInput">
      <form method="post" action="{{ url('update-pendapatan') }}" id="pu_form">
        {!! csrf_field() !!}
        <thead>
          <tr>
            <td colspan="2"><b>Pengeluaran Usaha (HPP)</b></td>
          </tr>
        </thead>
        <tbody class="clone-area-pu_hhp">
          @php $t_pngl = 0; @endphp
          @foreach($pengeluaran->where(['no_aplikasi' => $app->no_aplikasi, 'tipe' => 'pu_hhp'])->get() as $pngl)
          <!-- Total pendapatan -->
          @php $t_pngl += $pngl->isi; @endphp
          <tr>
            <td width="150px">
              <b>{{$pngl->judul}}</b>
              <button type="button" onClick="hapusPdp('{{$pngl->id}}', 'pngl')" class="btn btn-danger btn-xs pull-right"><i class="fa fa-minus"></i></button>
            </td>
            <td><input type="text" class="form-control inputable" value="{{$pngl->isi}}"></td>
          </tr>
          @endforeach

        </tbody>
      </form>
      <tr id="jml_row">
        <td>Jumlah</td>
        <td><span id="t_pngl">{{$t_pngl}}</span></td>
      </tr>
      <tr>
        <td colspan="2">
          <button class="btn btn-primary btn-sm" onClick="addPdpRow('pu_hhp', 'pngl')" type="button">Tambah baris</button>
          <button class="btn btn-success btn-sm" onClick="submitPdp('pu_hhp', 'pngl')" type="button">Simpan</button>
        </td>
      </tr>

    </table>
  </div>
  <div class="col-md-12">
    <b>Laba / Rugi Usaha : <span id="laba_rugi_usaha"></span></b>
  </div>
</div>
<div class="row">
  <div class="col-md-6 bordered no-padding">
    <table class="table table-responsive table-bordered clonedInput">
      <form method="post" action="{{ url('update-pendapatan') }}" id="">
        {!! csrf_field() !!}
        <thead>
          <tr>
            <td colspan="2"><b>Pendapatan Lain</b></td>
          </tr>
        </thead>
        <tbody class="clone-area-pl">
          @php $t_pdptn = 0; @endphp
          @foreach($pendapatan->where(['no_aplikasi' => $app->no_aplikasi, 'tipe' => 'pl'])->get() as $pdptn)
          <!-- Total pendapatan -->
          @php $t_pdptn += $pdptn->isi; @endphp
          <tr>
            <td width="150px">
              <b>{{$pdptn->judul}}</b>
              <button type="button" onClick="hapusPdp('{{$pdptn->id}}','pdp')" class="btn btn-danger btn-xs pull-right"><i class="fa fa-minus"></i></button>
            </td>
            <td><input type="text" class="form-control inputable" value="{{$pdptn->isi}}"></td>
          </tr>
          @endforeach

        </tbody>
      </form>
      <tr id="jml_row">
        <td>Jumlah</td>
        <td><span id="t_pdptn_ln">{{$t_pdptn}}</span></td>
      </tr>
      <tr>
        <td colspan="2">
          <button class="btn btn-primary btn-sm" onClick="addPdpRow('pl', 'pdp')" type="button">Tambah baris</button>
          <button class="btn btn-success btn-sm" onClick="submitPdp('pl', 'pdp')" type="button">Simpan</button>
        </td>
      </tr>

    </table>
  </div>
  <div class="col-md-6 bordered no-padding">
    <table class="table table-responsive table-bordered clonedInput">
      <form method="post" action="{{ url('update-pendapatan') }}" id="pu_form">
        {!! csrf_field() !!}
        <thead>
          <tr>
            <td colspan="2"><b>Pengeluara Rumah Tangga</b></td>
          </tr>
        </thead>
        <tbody class="clone-area-pu_rt">
          @php $t_pngl = 0; @endphp
          @foreach($pengeluaran->where(['no_aplikasi' => $app->no_aplikasi, 'tipe' => 'pu_rt'])->get() as $pngl)
          <!-- Total pendapatan -->
          @php $t_pngl += $pngl->isi; @endphp
          <tr>
            <td width="150px">
              <b>{{$pngl->judul}}</b>
              <button type="button" onClick="hapusPdp('{{$pngl->id}}', 'pngl')" class="btn btn-danger btn-xs pull-right"><i class="fa fa-minus"></i></button>
            </td>
            <td><input type="text" class="form-control inputable" value="{{$pngl->isi}}"></td>
          </tr>
          @endforeach

        </tbody>
      </form>
      <tr id="jml_row">
        <td>Jumlah</td>
        <td><span id="t_pngl_ln">{{$t_pngl}}</span></td>
      </tr>
      <tr>
        <td colspan="2">
          <button class="btn btn-primary btn-sm" onClick="addPdpRow('pu_rt', 'pngl')" type="button">Tambah baris</button>
          <button class="btn btn-success btn-sm" onClick="submitPdp('pu_rt', 'pngl')" type="button">Simpan</button>
        </td>
      </tr>

    </table>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h4 align="center">Laba/Rugi Bersih Per Bulan</h4><hr>
    <div class="col-md-6 bordered">
      <form action="" class="form">
        <table class="table table-bordered table-responsive table-striped">
          <tr>
            <td colspan="2">
              <div class="form-group">
                <label for="">Catatan</label>
                <textarea name="tab5_catatan" id="" rows="3" class="form-control inputable">{{$labaRugi->catatan}}</textarea>
              </div>
            </td>
          </tr>
          <tr>
            <td></td>
            <td width="100px"><b>RPC</b></td>
          </tr>
          <tr>
            <td></td>
            <td width="100px"><span id="tab5_rpc"></span></td>
          </tr>
          <tr>
            <td colspan="2"><span id="kptsn_catatan"></span></td>
          </tr>
        </table>
      </form>
    </div>
    <div class="col-md-6 bordered">
      <table class="table table-bordered table-responsive">
        <tr>
          <td>Jumlah Angsuran</td>
          <td>
            <input type="text" class="form-control inputable" value="{{$labaRugi->jml_angs}}" id="tab5_jml_angs" name="tab5_jml_angs">
          </td>
        </tr>
        <tr>
          <td>Laba / Rugi Bersih setelah angsuran</td>
          <td>
            <input type="text" class="form-control inputable"  id="laba_rugi_bersih" name="tab5_lb_rg">
          </td>
        </tr>
        <tr>
          <td>Income Coverage</td>
          <td>
            <input type="text" class="form-control inputable" value="{{$labaRugi->income}}" id="tab5_income" name="tab5_income">
          </td>
        </tr>
      </table>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <h4 align="center">NERACA</h4><hr>
    <div class="col-md-6 bordered">
     <table  class="table table-responsive table-bordered">
       <caption>HARTA</caption>
       <tbody class="clone-area-harta">
        @php 
          $t_nrc_harta = 0;
          $t_knb = 0;
          $t_pu = 0;
          $t_pbd = 0;
          $t_lain = 0;
        @endphp

         @forelse($neraca_harta->get() as $nrc)
         <!-- Total pendapatan -->
        @php 
            $t_nrc_harta += $nrc->isi; 
            switch ($nrc->tipe_harta) {
              case 'knb':
                $t_knb += $nrc->isi;
                break;
              case 'pu':
                $t_pu += $nrc->isi;
                break;
              case 'pbd':
                $t_pbd += $nrc->isi;
                break;
              
              default:
                $t_lain += $nrc->isi;
                break;
            }
        @endphp
         <tr>
          <td width='150px'>
            <b>{{$nrc->judul}}</b>
            <button type="button" onClick="hapusPdp('{{$nrc->id}}', 'neraca')" class="btn btn-danger btn-xs pull-right"><i class="fa fa-minus"></i></button>
          </td>
          <td>
            {{$nrc->isi}}
          </td>
        </tr>
        @empty
        @endforelse
      </tbody>
      <tr id="jml_row">
        <td>Jumlah</td>
        <td><span id="nrc_harta">{{$t_nrc_harta}}</span></td>
        <!-- disini input hidden semua buat neraca disimpen -->
        <input type="hidden" id="t_knb" value="{{ $t_knb }}">
        <input type="hidden" id="t_pu" value="{{ $t_pu }}">
        <input type="hidden" id="t_pbd" value="{{ $t_pbd }}">
        <input type="hidden" id="t_lain" value="{{ $t_lain }}">
        <!-- disini input hidden semua buat neraca disimpen -->
      </tr>
      <tr>
        <td colspan="2">
          <button class="btn btn-primary btn-sm" onClick="addPdpRow('harta', 'neraca')" type="button">Tambah baris</button>
          <button class="btn btn-success btn-sm" onClick="submitPdp('harta', 'neraca')" type="button">Simpan</button>
        </td>
      </tr>
    </table>
  </div>
  <div class="col-md-6 bordered">
   <table  class="table table-responsive table-bordered">
     <caption>HUTANG DAN MODAL</caption>
     <tbody class="clone-area-hutang">
       @php $t_nrc_hutang_dan_modal = 0; @endphp

       <tr>
        <td colspan='2'><strong><u>Hutang</u></strong></td>
      </tr>
       @php $t_nrc_hutang = 0; @endphp
      @forelse($neraca_hutang->get() as $nrc)
      <!-- Total pendapatan -->
      @php $t_nrc_hutang += $nrc->isi; @endphp
      @php $t_nrc_hutang_dan_modal += $nrc->isi; @endphp
      <tr>
        <td width='150px'>
          {{$nrc->judul}}
          <button type="button" onClick="hapusPdp('{{$nrc->id}}', 'neraca')" class="btn btn-danger btn-xs pull-right"><i class="fa fa-minus"></i></button>
        </td>
        <td>
          {{$nrc->isi}}
        </td>
      </tr>
      @empty
      @endforelse
      <tr>
        <td>
          Total Hutang
        </td>
        <td>
          <span id="nrc_hutang">{{ $t_nrc_hutang }}</span>
        </td>
      </tr>
    </tbody>
    <tr>
     <td colspan="2">
      <button class="btn btn-primary btn-sm" onClick="addPdpRow('hutang', 'neraca')" type="button">Tambah baris</button>
      <button class="btn btn-success btn-sm" onClick="submitPdp('hutang', 'neraca')" type="button">Simpan</button>
    </td>
  </tr>
  <tbody class="clone-area-modal">
    <tr>
      <td>
        <b>Modal</b>
      </td>
      <td><span id="nrc_modal"></span></td>
    </tr>
    <tr>
      <td>
        <b>Rugi / Laba bulan berjalan</b>
      </td>
      <td><span id="nrc_laba_rugi"></span></td>
    </tr>
  </tbody>
  <tr>
   <td colspan="2">
    <button class="btn btn-primary btn-sm" onClick="addPdpRow('modal', 'neraca')" type="button">Tambah baris</button>
    <button class="btn btn-success btn-sm" onClick="submitPdp('modal', 'neraca')" type="button">Simpan</button>
  </td>
</tr>
<tr id="jml_row">
  <td>Jumlah</td>
  <td>{{$t_nrc_hutang_dan_modal}}</td>
</tr>
</table>
</div>
</div>

</div>
<div class="row">
  <div class="col-md-12">
    <hr>
    <table class="table table-bordered table-hovered">
      <thead>
        <tr>
          <td colspan="4">
            KAPASITAS
          </td>
          <td>
            KEBUTUHAN MODAL
          </td>
        </tr>
      </thead>
      <tbody>

        <tr>
          <td rowspan="2">
            1. Laba Bersih / Kewajiban Angsuran
          </td>
          <td>
            Laba Usaha
          </td>
          <td>
            Rp. 1001000
          </td>
          <td rowspan="2">
            <span id="kp_1">3.4</span> Kali
          </td>
          <td>
            Perputaran kas
          </td>
        </tr>
        <tr>
          <td>Angsuran</td>
          <td>
            Rp 202030
          </td>
          <td>
            <span id="ptrn_kas">23</span>
          </td>
        </tr>
        

        <tr>
          <td rowspan="2">
            2. Rugi/Laba Usaha/Omset
          </td>
          <td>
            Laba Usaha
          </td>
          <td>
            Rp. 1001000
          </td>
          <td rowspan="2">
            <span id="kp_2">33.3</span> %
          </td>
          <td>
            Perputaran Piutang (ARTO)
          </td>
        </tr>
        <tr>
          <td>Omset</td>
          <td>
            Rp 202030
          </td>
          <td><span id="ptrn_piutang">0.2</span></td>
        </tr>
        

        <tr>
          <td rowspan="2">
            3. Dana Sendiri : Jml Pembiayaan
          </td>
          <td>
            Kas
          </td>
          <td>
            Rp. 1001000
          </td>
          <td rowspan="2">
            <span id="kp_3">3.33333333</span> %
          </td>
          <td>
            Perputaran Persediaan (ITO)
          </td>
        </tr>
        <tr>
          <td>Pembiayaan</td>
          <td>
            Rp 202030
          </td>
          <td>
           <span id="ptrn_sedia">22</span>
          </td>
        </tr>
        

        <tr>
          <td rowspan="2">
            4. Perputaran Piutang
          </td>
          <td>
            Piutang
          </td>
          <td>
            Rp. 1001000
          </td>
          <td rowspan="2">
             <span id="kp_4">22</span> Hari
          </td>
          <td>
            Turn Over Period Modal Kerja
          </td>
        </tr>
        <tr>
          <td>Omset</td>
          <td>
            Rp 202030
          </td>
          <td><b><span id="topmk">25.1</span></b></td>
        </tr>
        <tr>
          <td rowspan="2">
            5. Perputaran Persediaan
          </td>
          <td>
            Persediaan
          </td>
          <td>
            Rp. 1001000
          </td>
          <td rowspan="2">
             <span id="kp_5">21</span> Hari
          </td>
          <td>
            Kebutuhan Modal Kerja
          </td>
        </tr>
        <tr>
          <td>Omset</td>
          <td>
            Rp 202030
          </td>
          <td><span id="kmk">1212</span></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
</div>