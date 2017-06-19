
<br>
<table width="400px">
  <tr>
    <td><h4>Tanggal Penilaian</h4></td>
    <td>
      <input disabled='1' type="text" size="30" value="" class="clean"  data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
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
          <td><input disabled='1' type="text" class="form-control inputable" value="{{$app->mitra->nama_lengkap}}" disabled></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>
            <input disabled='1' type="radio" value="L" {{autoChecked($app->mitra->jk, 'L')}}> Laki-laki
            <input disabled='1' type="radio" value="P" {{autoChecked($app->mitra->jk, 'P')}}> Perempuan
          </td>
        </tr>
        <tr>
          <td>Alamat Rumah</td>
          <td><textarea name="" class="form-control inputable" id="" cols="" rows="2" disabled>{{getAlamat('blk', $app->mitra->alamat->alamat_sekarang) . " " . getAlamat('jl', $app->mitra->alamat->alamat_sekarang)}}</textarea></td>
        </tr>
        <tr>
          <td>No. Telp. / HP</td>
          <td><input disabled='1' type="text" class="form-control inputable" value="{{$app->mitra->no_telp}}" disabled></td>
        </tr>
        <tr>
          <td>Riwayat hub.dgn Lembaga Keuangan</td>
          <td>
            <select disabled='1' name="tab5_rwyt_hbng_lbg" id="" class="form-control inputable">
             @foreach(getEnum(new App\NapSatu, 'rwyt_hbng_lbg') as $m_key => $m_val)
             <option value="{{$m_val}}" {{autoSelect($nap_satu->rwyt_hbng_lbg, $m_val)}}>{{$m_val}}</option>
             @endforeach
           </select>
         </td>
       </tr>
       <tr>
        <td>Prospek Usaha</td>
        <td>
          <select disabled='1' name="tab5_ps_usaha" id="" class="form-control inputable">
           @foreach(getEnum(new App\NapSatu, 'ps_usaha') as $m_key => $m_val)
           <option value="{{$m_val}}" {{autoSelect($nap_satu->ps_usaha, $m_val)}}>{{$m_val}}</option>
           @endforeach
         </select>
       </td>
     </tr>
     <tr>
      <td>Ketergantungan thd Supplyer</td>
      <td>
        <select disabled='1' name="tab5_ktg_thd_sp" id="" class="form-control inputable">
         @foreach(getEnum(new App\NapSatu, 'ktg_thd_sp') as $m_key => $m_val)
         <option value="{{$m_val}}" {{autoSelect($nap_satu->ktg_thd_sp, $m_val)}}>{{$m_val}}</option>
         @endforeach
       </select>
     </td>
   </tr>
   <tr>
    <td>Ketergantungan thd Pelanggan</td>
    <td>
      <select disabled='1' name="tab5_ktg_thd_pl" id="" class="form-control inputable">
       @foreach(getEnum(new App\NapSatu, 'ktg_thd_pl') as $m_key => $m_val)
       <option value="{{$m_val}}" {{autoSelect($nap_satu->ktg_thd_pl, $m_val)}}>{{$m_val}}</option>
       @endforeach
     </select>
   </td>
 </tr>
 <tr>
  <td>Wilayah Pemasaran</td>
  <td>
    <select disabled='1' name="tab5_wly_pmsrn" id="" class="form-control inputable">
     @foreach(getEnum(new App\NapSatu, 'wly_pmsrn') as $m_key => $m_val)
     <option value="{{$m_val}}" {{autoSelect($nap_satu->wly_pmsrn, $m_val)}}>{{$m_val}}</option>
     @endforeach
   </select>
 </td>
</tr>
<tr>
  <td>Jenis Produk</td>
  <td>
    <select disabled='1' name="tab5_jns_prdk" id="" class="form-control inputable">
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
      <td><input disabled='1' type="text" class="form-control inputable" value="{{$app->nominal_pb}}" disabled=""></td>
    </tr>
    <tr>
      <td>Bidang Usaha</td>
      <td>
        <select disabled='1' name="" id="" class="form-control inputable" disabled>
         @foreach(getEnum(new App\Keuangan, 'bidang_usaha') as $m_key => $m_val)
         <option value="{{$m_val}}" {{autoSelect($app->keuangan->bidang_usaha, $m_val)}}>{{$m_val}}</option>
         @endforeach
       </select>
     </td>
   </tr>
   <tr>
    <td>Alamat Usaha</td>
    <td><input disabled='1' type="text" class="form-control inputable" value="{{$app->keuangan->alamat}}" disabled=""></td>
  </tr>
  <tr>
    <td>Lama Usaha</td>
    <td>
      <select disabled='1' name="tab5_lm_ush" id="" class="form-control inputable">
       @foreach(getEnum(new App\NapSatu, 'lm_ush') as $m_key => $m_val)
       <option value="{{$m_val}}" {{autoSelect($nap_satu->lm_ush, $m_val)}}>{{$m_val}}</option>
       @endforeach
     </select>
   </td>
 </tr>
 <tr>
  <td>Reputasi Usaha</td>
  <td>
    <select disabled='1' name="tab5_rpt_ush" id="" class="form-control inputable">
     @foreach(getEnum(new App\NapSatu, 'rpt_ush') as $m_key => $m_val)
     <option value="{{$m_val}}" {{autoSelect($nap_satu->rpt_ush, $m_val)}}>{{$m_val}}</option>
     @endforeach
   </select>
 </td>
</tr>
<tr>
  <td>Usia</td>
  <td>
    <select disabled='1' name="tab5_usia" id="" class="form-control inputable">
     @foreach(getEnum(new App\NapSatu, 'usia') as $m_key => $m_val)
     <option value="{{$m_val}}" {{autoSelect($nap_satu->usia, $m_val)}}>{{$m_val}}</option>
     @endforeach
   </select>
 </td>
</tr>
<tr>
  <td>Administrasi Usaha</td>
  <td>
    <select disabled='1' name="tab5_adm_ush" id="" class="form-control inputable">
     @foreach(getEnum(new App\NapSatu, 'adm_ush') as $m_key => $m_val)
     <option value="{{$m_val}}" {{autoSelect($nap_satu->adm_ush, $m_val)}}>{{$m_val}}</option>
     @endforeach
   </select>
 </td>
</tr>
<tr>
  <td>Tempat Tinggal</td>
  <td>
    <select disabled='1' name="tab5_tmpt_tgl" id="" class="form-control inputable">
     @foreach(getEnum(new App\NapSatu, 'tmpt_tgl') as $m_key => $m_val)
     <option value="{{$m_val}}" {{autoSelect($nap_satu->tmpt_tgl, $m_val)}}>{{$m_val}}</option>
     @endforeach
   </select>
 </td>
</tr>
<tr>
  <td>Tempat Usaha</td>
  <td>
    <select disabled='1' name="tab5_tmpt_ush" id="" class="form-control inputable">
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
      <input disabled='1' type="text" name="tab5_rkn_smpn" class="form-control inputable" value="{{$nap_satu->rkn_smpn}}">
    </div>
    <div class="form-group">
      <label for=""><small><strong>Sijangka</strong></small></label>
      <input disabled='1' type="text" name="tab5_rkn_sjnk" class="form-control inputable" value="{{$nap_satu->rkn_sjnk}}">
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
        <td><input disabled='1' type="text" class="form-control inputable" value="{{$app->keuangan->nama_usaha}}" disabled=""></td>
      </tr>
      <tr>
        <td>Rencana Penggunakan</td>
        <td><input disabled='1' type="text" class="form-control inputable" value="{{$app->keuangan->tujuan_pb_detail}}" disabled=""></td>
      </tr>
      <tr>
        <td>Jumlah Pembiayaan yang di Rekomendasikan</td>
        <td>
          <input disabled='1' type="number" class="clean inputable" name="tab5_rekomen_pb" value="{{$app->rekomen_pb}}">
          &nbsp;&nbsp;
          <strong>JK.Waktu</strong>
          <input disabled='1' type="number" class="clean inputable" name="tab5_waktu_pb" id="tab5_waktu_pb" value="{{$app->waktu_pb}}">
        </td>
      </tr>
      <tr>
        <td>Jumlah Margin / Bagi hasil</td>
        <td>
          <input disabled='1' type="text" class="clean inputable" name="tab5_margin_pb" value="{{$app->margin_pb}}">
          &nbsp;&nbsp;
          <strong>e. rate</strong> :
          <span>2 %</span>
        </td>
      </tr>
      <tr>
        <td>Besar angsuran perbulan</td>
        <td><input disabled='1' type="text" class="form-control inputable" name="tab5_angs_pb" value="{{$app->angs_pb}}"></td>
      </tr>

    </table>
  </div>
</div>
<div class="row">
  <hr>
  <div class="col-md-6 bordered">
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
             
            </td>
            <td><input disabled='1' type="text" class="form-control inputable" value="{{$pdptn->isi}}"></td>
          </tr>
          @endforeach

        </tbody>
      </form>
      <tr id="jml_row">
        <td>Jumlah</td>
        <td>{{$t_pdptn}}</td>
      </tr>
      

    </table>
  </div>
  <div class="col-md-6 bordered">
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
              
            </td>
            <td><input disabled='1' type="text" class="form-control inputable" value="{{$pngl->isi}}"></td>
          </tr>
          @endforeach

        </tbody>
      </form>
      <tr id="jml_row">
        <td>Jumlah</td>
        <td>{{$t_pngl}}</td>
      </tr>
      

    </table>
  </div>
</div>
<div class="row">
  <div class="col-md-6 bordered">
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
            </td>
            <td><input disabled='1' type="text" class="form-control inputable" value="{{$pdptn->isi}}"></td>
          </tr>
          @endforeach

        </tbody>
      </form>
      <tr id="jml_row">
        <td>Jumlah</td>
        <td>{{$t_pdptn}}</td>
      </tr>
      

    </table>
  </div>
  <div class="col-md-6 bordered">
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
              
            </td>
            <td><input disabled='1' type="text" class="form-control inputable" value="{{$pngl->isi}}"></td>
          </tr>
          @endforeach

        </tbody>
      </form>
      <tr id="jml_row">
        <td>Jumlah</td>
        <td>{{$t_pngl}}</td>
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
            <td width="100px">2.56</td>
          </tr>
          <tr>
            <td colspan="2">Proses Pembiayaan Datap Dilanjutkan</td>
          </tr>
        </table>
      </form>
    </div>
    <div class="col-md-6 bordered">
      <table class="table table-bordered table-responsive">
        <tr>
          <td>Jumlah Angsuran</td>
          <td>
            <input disabled='1' type="text" class="form-control inputable" value="{{$labaRugi->jml_angs}}" name="tab5_jml_angs">
          </td>
        </tr>
        <tr>
          <td>Laba / Rugi Bersih setelah angsuran</td>
          <td>
            <input disabled='1' type="text" class="form-control inputable"  value="{{$labaRugi->lb_rg}}" name="tab5_lb_rg">
          </td>
        </tr>
        <tr>
          <td>Income Coverage</td>
          <td>
            <input disabled='1' type="text" class="form-control inputable" value="{{$labaRugi->income}}"  name="tab5_income">
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
         @php $t_nrc_harta = 0; @endphp

         @forelse($neraca_harta->get() as $nrc)
         <!-- Total pendapatan -->
         @php $t_nrc_harta += $nrc->isi; @endphp
         <tr>
          <td width='150px'>
            <b>{{$nrc->judul}}</b>
            
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
        <td>{{$t_nrc_harta}}</td>
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
      @forelse($neraca_hutang->get() as $nrc)
      <!-- Total pendapatan -->
      @php $t_nrc_hutang_dan_modal += $nrc->isi; @endphp
      <tr>
        <td width='150px'>
          {{$nrc->judul}}
          
        </td>
        <td>
          {{$nrc->isi}}
        </td>
      </tr>
      @empty
      @endforelse
    </tbody>
    
  <tbody class="clone-area-modal">

    <tr>
      <td colspan='2'><strong><u>Modal</u></strong></td>
    </tr>
    @forelse($neraca_modal->get() as $nrc)
    <!-- Total pendapatan -->
    @php $t_nrc_hutang_dan_modal += $nrc->isi; @endphp
    <tr>
      <td width='150px'>
        {{$nrc->judul}}
       
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
            Laba Bersih
          </td>
          <td>
            Rp. 1001000
          </td>
          <td rowspan="2">
            22.41 %
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
          <td>23</td>
        </tr>
        

        <tr>
          <td rowspan="2">
            2. Rugi/Laba Usaha/Omset
          </td>
          <td>
            Laba Bersih
          </td>
          <td>
            Rp. 1001000
          </td>
          <td rowspan="2">
            3.3333333333 %
          </td>
          <td>
            Perputaran Piutang (ARTO)
          </td>
        </tr>
        <tr>
          <td>Angsuran</td>
          <td>
            Rp 202030
          </td>
          <td>0.2</td>
        </tr>
        

        <tr>
          <td rowspan="2">
            3. Dana Sendiri : Jml Pembiayaan
          </td>
          <td>
            Laba Bersih
          </td>
          <td>
            Rp. 1001000
          </td>
          <td rowspan="2">
            0.23 Hari
          </td>
          <td>
            Perputaran Persediaan (ITO)
          </td>
        </tr>
        <tr>
          <td>Angsuran</td>
          <td>
            Rp 202030
          </td>
          <td>22.6</td>
        </tr>
        

        <tr>
          <td rowspan="2">
            4. Perputaran Piutang
          </td>
          <td>
            Laba Bersih
          </td>
          <td>
            Rp. 1001000
          </td>
          <td rowspan="2">
            22.62 Hari
          </td>
          <td>
            Turn Over Period Modal Kerja
          </td>
        </tr>
        <tr>
          <td>Angsuran</td>
          <td>
            Rp 202030
          </td>
          <td><b>25.1</b></td>
        </tr>
        <tr>
          <td rowspan="2">
            5. Perputaran Persediaan
          </td>
          <td>
            Laba Bersih
          </td>
          <td>
            Rp. 1001000
          </td>
          <td rowspan="2">
            345 Kali
          </td>
          <td>
            Kebutuhan Modal Kerja
          </td>
        </tr>
        <tr>
          <td>Angsuran</td>
          <td>
            Rp 202030
          </td>
          <td>Rp. 341212412</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
</div>