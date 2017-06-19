
<br>
<div class="col-md-6">
    <table width="100%">
    <caption class="title">INFORMASI PEKERJAAN dan KEUANGAN</caption>
    <tr>
        <td>
            Tipe Pendapatan
        </td>
        <td>
        <div class="form-group">
            <select name="tab3_tipe_pendapatan" id="" class="form-control inputable">
               @foreach(getEnum(new App\Keuangan, 'tipe_pendapatan') as $m_key => $m_val)
                    <option value="{{$m_key}}" {{autoSelect($app->keuangan->tipe_pendapatan, $m_val)}}>{{$m_val}}</option>
               @endforeach
            </select>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            Nama Usaha
        </td>
        <td>
        <div class="form-group">
            <input name="tab3_nama_usaha" type="text" class="form-control inputable" value="{{$app->keuangan->nama_usaha}}">
            </div>
        </td>
    </tr>
    <tr>
        <td>
            Bidang Usaha
        </td>
        <td>
        <div class="form-group">
            <select name="tab3_bidang_usaha" id="" class="form-control inputable">
               @foreach(getEnum(new App\Keuangan, 'bidang_usaha') as $m_key => $m_val)
                    <option value="{{$m_key}}" {{autoSelect($app->keuangan->bidang_usaha, $m_val)}}>{{$m_val}}</option>
               @endforeach
            </select>
        </div>
        </td>
    </tr>
    <tr>
        <td>
            Alamat
        </td>
        <td>
         <div class="form-group">
            <input type="text"  name="tab3_alamat" class="form-control inputable" value="{{$app->keuangan->alamat}}">
            </div>
        </td>
    </tr>
    <tr>
        <td>
            Kelurahan/Kecamatan
        </td>
        <td>
         <div class="form-group">
            <input type="text"  name="tab3_kecamatan" class="form-control inputable" value="{{$app->keuangan->kecamatan}}">
            </div>
        </td>
    </tr>
    
    <tr>
        <td>
            Telepon/Fax
        </td>
        <td>
         <div class="form-group">
            <input type="text" name="tab3_telepon" class="form-control inputable" value="{{$app->keuangan->telepon}}">
            </div>
        </td>
    </tr>
    <tr>
        <td>
            No. NPWP (jika ada)
        </td>
        <td>
         <div class="form-group">
            <input type="text"  name="tab3_no_npwp" class="form-control inputable" value="{{$app->keuangan->no_npwp}}">
            </div>
        </td>
    </tr>
    <tr>
        <td>
            Kode Pos
        </td>
        <td>
         <div class="form-group">
            <input type="text" name="tab3_kode_pos" class="form-control inputable" value="{{$app->keuangan->kode_pos}}">
            </div>
        </td>
    </tr>
    
</table>
</div>
<div class="col-md-6">

    <table width="100%">
    <caption class="title">INFORMASI PERUNTUKAN</caption>
    
    <tr>
        <td>Tujuan Pengajuan Pembiayaan</td>
        <td>
            <div class="form-group">
                <select name="tab3_tujuan_pb" id="" class="form-control inputable">
                   @foreach(getEnum(new App\Keuangan, 'tujuan_pb') as $m_key => $m_val)
                        <option value="{{$m_key}}" {{autoSelect($app->keuangan->tujuan_pb, $m_val)}}>{{$m_val}}</option>
                   @endforeach
                </select>
            </div>
        </td>
    </tr>
    <tr>
        <td>Detail Tujuan Pembiayaan</td>
        <td>
            <div class="form-group">
                <input  name="tab3_tujuan_pb_detail" type="text" class="form-control inputable" value="{{$app->keuangan->tujuan_pb_detail}}">
            </div>
        </td>
    </tr>

</table>
</div>