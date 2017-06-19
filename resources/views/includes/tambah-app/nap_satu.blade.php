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
          <td><input type="text" class="form-control inputable" value="" disabled></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>
            <input type="radio" value="L"> Laki-laki
            <input type="radio" value="P"> Perempuan
          </td>
        </tr>
        <tr>
          <td>Alamat Rumah</td>
          <td><textarea name="" class="form-control inputable" id="" cols="" rows="2" disabled></textarea></td>
        </tr>
        <tr>
          <td>No. Telp. / HP</td>
          <td><input type="text" class="form-control inputable" value="" disabled></td>
        </tr>
        <tr>
          <td>Riwayat hub.dgn Lembaga Keuangan</td>
          <td>
            <select name="tab5_rwyt_hbng_lbg" id="" class="form-control inputable">
             @foreach(getEnum(new App\NapSatu, 'rwyt_hbng_lbg') as $m_key => $m_val)
             <option value="{{$m_val}}">{{$m_val}}</option>
             @endforeach
           </select>
         </td>
       </tr>
       <tr>
        <td>Prospek Usaha</td>
        <td>
          <select name="tab5_ps_usaha" id="" class="form-control inputable">
           @foreach(getEnum(new App\NapSatu, 'ps_usaha') as $m_key => $m_val)
           <option value="{{$m_val}}">{{$m_val}}</option>
           @endforeach
         </select>
       </td>
     </tr>
     <tr>
      <td>Ketergantungan thd Supplyer</td>
      <td>
        <select name="tab5_ktg_thd_sp" id="" class="form-control inputable">
         @foreach(getEnum(new App\NapSatu, 'ktg_thd_sp') as $m_key => $m_val)
         <option value="{{$m_val}}">{{$m_val}}</option>
         @endforeach
       </select>
     </td>
   </tr>
   <tr>
    <td>Ketergantungan thd Pelanggan</td>
    <td>
      <select name="tab5_ktg_thd_pl" id="" class="form-control inputable">
       @foreach(getEnum(new App\NapSatu, 'ktg_thd_pl') as $m_key => $m_val)
       <option value="{{$m_val}}">{{$m_val}}</option>
       @endforeach
     </select>
   </td>
 </tr>
 <tr>
  <td>Wilayah Pemasaran</td>
  <td>
    <select name="tab5_wly_pmsrn" id="" class="form-control inputable">
     @foreach(getEnum(new App\NapSatu, 'wly_pmsrn') as $m_key => $m_val)
     <option value="{{$m_val}}">{{$m_val}}</option>
     @endforeach
   </select>
 </td>
</tr>
<tr>
  <td>Jenis Produk</td>
  <td>
    <select name="tab5_jns_prdk" id="" class="form-control inputable">
     @foreach(getEnum(new App\NapSatu, 'jns_prdk') as $m_key => $m_val)
     <option value="{{$m_val}}">{{$m_val}}</option>
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
      <td><input type="text" class="form-control inputable" value="" disabled=""></td>
    </tr>
    <tr>
      <td>Bidang Usaha</td>
      <td>
        <select name="" id="" class="form-control inputable" disabled>
         @foreach(getEnum(new App\Keuangan, 'bidang_usaha') as $m_key => $m_val)
          <option value="{{$m_val}}">{{$m_val}}</option>
         @endforeach
       </select>
     </td>
   </tr>
   <tr>
    <td>Alamat Usaha</td>
    <td><input type="text" class="form-control inputable" value="" disabled=""></td>
  </tr>
  <tr>
    <td>Lama Usaha</td>
    <td>
      <select name="tab5_lm_ush" id="" class="form-control inputable">
       @foreach(getEnum(new App\NapSatu, 'lm_ush') as $m_key => $m_val)
       <option value="{{$m_val}}">{{$m_val}}</option>
       @endforeach
     </select>
   </td>
 </tr>
 <tr>
  <td>Reputasi Usaha</td>
  <td>
    <select name="tab5_rpt_ush" id="" class="form-control inputable">
     @foreach(getEnum(new App\NapSatu, 'rpt_ush') as $m_key => $m_val)
     <option value="{{$m_val}}">{{$m_val}}</option>
     @endforeach
   </select>
 </td>
</tr>
<tr>
  <td>Usia</td>
  <td>
    <select name="tab5_usia" id="" class="form-control inputable">
     @foreach(getEnum(new App\NapSatu, 'usia') as $m_key => $m_val)
     <option value="{{$m_val}}">{{$m_val}}</option>
     @endforeach
   </select>
 </td>
</tr>
<tr>
  <td>Administrasi Usaha</td>
  <td>
    <select name="tab5_adm_ush" id="" class="form-control inputable">
     @foreach(getEnum(new App\NapSatu, 'adm_ush') as $m_key => $m_val)
     <option value="{{$m_val}}">{{$m_val}}</option>
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
     <option value="{{$m_val}}">{{$m_val}}</option>
     @endforeach
   </select>
 </td>
</tr>
<tr>
  <td>Rekening di UJKS BMT Al Ishlah</td>
  <td>
    <div class="form-group">
      <label for=""><small><strong>Simpanan</strong></small></label>
      <input type="text" name="tab5_rkn_smpn" class="form-control inputable" value="">
    </div>
    <div class="form-group">
      <label for=""><small><strong>Sijangka</strong></small></label>
      <input type="text" name="tab5_rkn_sjnk" class="form-control inputable" value="">
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
        <td><input type="text" class="form-control inputable" value="" disabled=""></td>
      </tr>
      <tr>
        <td>Rencana Penggunakan</td>
        <td><input type="text" class="form-control inputable" value="" disabled=""></td>
      </tr>
      <tr>
        <td>Jumlah Pembiayaan yang di Rekomendasikan</td>
        <td>
          <input type="number" class="clean inputable" name="tab5_rekomen_pb" value="">
          &nbsp;&nbsp;
          <strong>JK.Waktu</strong>
          <input type="number" class="clean inputable" name="tab5_waktu_pb" value="">
        </td>
      </tr>
      <tr>
        <td>Jumlah Margin / Bagi hasil</td>
        <td>
          <input type="text" class="clean inputable" name="tab5_margin_pb" value="">
          &nbsp;&nbsp;
          <strong>e. rate</strong> :
          <span>2 %</span>
        </td>
      </tr>
      <tr>
        <td>Besar angsuran perbulan</td>
        <td><input type="text" class="form-control inputable" name="tab5_angs_pb" value=""></td>
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
          

        </tbody>
      </form>
      <tr id="jml_row">
        <td>Jumlah</td>
        <td></td>
      </tr>
      <tr>
        <td colspan="2">
          <button class="btn btn-primary btn-sm" onClick="addPdpRow('pu', 'pdp')" type="button">Tambah baris</button>
          <button class="btn btn-success btn-sm" onClick="submitPdp('pu', 'pdp')" type="button">Simpan</button>
        </td>
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
          

        </tbody>
      </form>
      <tr id="jml_row">
        <td>Jumlah</td>
        <td></td>
      </tr>
      <tr>
        <td colspan="2">
          <button class="btn btn-primary btn-sm" onClick="addPdpRow('pu_hhp', 'pngl')" type="button">Tambah baris</button>
          <button class="btn btn-success btn-sm" onClick="submitPdp('pu_hhp', 'pngl')" type="button">Simpan</button>
        </td>
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
          

        </tbody>
      </form>
      <tr id="jml_row">
        <td>Jumlah</td>
        <td></td>
      </tr>
      <tr>
        <td colspan="2">
          <button class="btn btn-primary btn-sm" onClick="addPdpRow('pl', 'pdp')" type="button">Tambah baris</button>
          <button class="btn btn-success btn-sm" onClick="submitPdp('pl', 'pdp')" type="button">Simpan</button>
        </td>
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
          
        </tbody>
      </form>
      <tr id="jml_row">
        <td>Jumlah</td>
        <td></td>
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
                <textarea name="tab5_catatan" id="" rows="3" class="form-control inputable"></textarea>
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
            <input type="text" class="form-control inputable" value="" name="tab5_jml_angs">
          </td>
        </tr>
        <tr>
          <td>Laba / Rugi Bersih setelah angsuran</td>
          <td>
            <input type="text" class="form-control inputable"  value="" name="tab5_lb_rg">
          </td>
        </tr>
        <tr>
          <td>Income Coverage</td>
          <td>
            <input type="text" class="form-control inputable" value=""  name="tab5_income">
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
        
      </tbody>
      <tr id="jml_row">
        <td>Jumlah</td>
        <td></td>
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
       
    </tbody>
    <tr>
     <td colspan="2">
      <button class="btn btn-primary btn-sm" onClick="addPdpRow('hutang', 'neraca')" type="button">Tambah baris</button>
      <button class="btn btn-success btn-sm" onClick="submitPdp('hutang', 'neraca')" type="button">Simpan</button>
    </td>
  </tr>
  <tbody class="clone-area-modal">

    <tr>
      <td colspan='2'><strong><u>Modal</u></strong></td>
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
  <td></td>
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