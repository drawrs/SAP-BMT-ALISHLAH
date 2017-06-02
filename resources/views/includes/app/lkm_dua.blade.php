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
  @foreach($konfirmasi_pk as $kpk)
    <form action="" id="kpk_{{$kpk->id}}" class="form lkmDua">
    <input type="hidden" name="id" value="{{$kpk->id}}">
    <input type="hidden" name="tab4_lkm_pc_id" id="tab4_lkm_pc_id" value="{{$kpk->lkm_pc_id}}">
    <div class="col-md-6 bordered">
    <span>Konfirmasi Dengan Pihak Ketiga</span>
    <hr>
    <table class="table table-responsive table-borderless">
      <tr>
        <td width="150px">Nama Orang Yang Ditemui</td>
        <td><input name="tab4_nama" type="text" class="form-control" value="{{$kpk->nama}}"></td>
      </tr>
      <tr>
        <td>Hubungan</td>
        <td>
          <select name="tab4_hbng" id="" class="form-control">
             @foreach(getEnum(new App\KonPK, 'hbng') as $m_key => $m_val)
                    <option value="{{$m_key}}" {{autoSelect($kpk->hbng, $m_val)}}>{{$m_val}}</option>
            @endforeach
           </select>
        </td>
      </tr>
      <tr>
        <td>Lama berhubungan</td>
        <td>
          <select name="tab4_lm_hbng" id="" class="form-control">
             @foreach(getEnum(new App\KonPK, 'lm_hbng') as $m_key => $m_val)
                    <option value="{{$m_val}}" {{autoSelect($kpk->lm_hbng, $m_val)}}>{{$m_val}}</option>
            @endforeach
           </select>
        </td>
      </tr>
      <tr>
        <td>Apakah Karakter Pemohon Baik?</td>
        <td>
          <select name="tab4_krkt_baik" id="" class="form-control">
             @foreach(getEnum(new App\KonPK, 'krkt_baik') as $m_key => $m_val)
                    <option value="{{$m_val}}" {{autoSelect($kpk->krkt_baik, $m_val)}}>{{$m_val}}</option>
            @endforeach
           </select>
        </td>
      </tr>
      <tr>
        <td>Apakah Usaha Dikelola Dengan Baik?</td>
        <td>
          <select name="tab4_kl_baik" id="" class="form-control">
             @foreach(getEnum(new App\KonPK, 'kl_baik') as $m_key => $m_val)
                    <option value="{{$m_val}}" {{autoSelect($kpk->kl_baik, $m_val)}}>{{$m_val}}</option>
            @endforeach
           </select>
        </td>
      </tr>
      <tr>
        <td>Nomor telepon / handphone</td>
        <td><input name="tab4_telp"  type="text" class="form-control" value="{{$kpk->telp}}"></td>
      </tr>
    </table>
  </div>
  </form>
  @endforeach
  <div class="col-md-6 bordered">
    <span>Konfirmasi Dengan Pihak Ketiga</span>
    <hr>
    <table class="table table-responsive table-borderless">
      <tr>
        <td width="150px">Tujuan Pengajuan Pembiayaan</td>
        <td><select name="tab4_tujuan_pb" id="tab4_tujuan_pb" class="form-control">
              @foreach(getEnum(new App\LkmPC, 'tujuan_pb') as $m_key => $m_val)
                    <option value="{{$m_key}}" {{autoSelect($lkm_pc->tujuan_pb, $m_val)}}>{{$m_val}}</option>
               @endforeach
        </select></td>
      </tr>
    </table>
  </div>
  </div>
  <div class="row">
    <div class="col-md-12">
    <hr>
      <div class="form-group">
        <label for="">Penjelasan Singkat Tentang Karakter Calon Nasabah dan Tujuan Pembiayaan</label>
        <textarea name="tab4_penjelasan" id="tab4_penjelasan" cols="30" rows="7" class="form-control">{{$lkm_pc->penjelasan}}</textarea>
      </div>
    </div>
  </div>
</div>
<button class="btn btn-alert" id="submitLkmDua"><i class="fa fa-save"></i> Simpan</button>