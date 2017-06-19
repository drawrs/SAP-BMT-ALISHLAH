<br>
<div class="col-md-8">
    <table width="600px">
    <!-- <caption class="title">Diisi Oleh UJKS</caption> -->
    <tr>
        <td>
            NO.Aplikasi
        </td>
        <td>
        <div class="form-group">
            <input type="hidden" class="no_aplikasi inputable" name="no_aplikasi" value="{{$no_app}}" required>
            <font size="4.2em" style="font-weight: bolder;" name="" class="no_aplikasi"><span id="no_aplikasi">{{$no_app}}</span></font>
            </div>
        </td>
    </tr>
    
    <tr>
        <td width="210px">
            NO KTP Mitra
        </td>
        <td>
        <div class="form-group">
            <select class="form-control inputable input2" value=""  name="no_ktp" required>
            </select>
            </div>
        </td>
    </tr>
    <tr>
        <td width="210px">
            Tanggal Diisi
        </td>
        <td>
        <div class="form-group">
            <input type="text" class="form-control inputable" value=""  name="tanggal" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask required>
            </div>
        </td>
    </tr>
    
    <tr>
        <td>
            Cabang
        </td>
        <td>
        <div class="form-group">
            <select name="cabang_id" id="pilih_cabang" class="form-control inputable select2" required>
                @forelse($cabangs->all() as $cabang)
                    <option value="{{$cabang->id}}">{{$cabang->nama}}</option>
                @empty
                @endforelse
            </select>
        </div>
        </td>
    </tr>
    <tr>
        <td>
            Kode SRO
        </td>
        <td>
         <div class="form-group">
            <input type="text"  name="kode_sro" class="form-control inputable" value="" required>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            Bagaimana perkenalan terjadi ?
        </td>
        <td>
         <div class="form-group">
           <select name="perkenalan" id="" class="form-control inputable" required>
               @foreach(getEnum(new App\Aplikasi, 'perkenalan') as $m_key => $m_val)
                    <option value="{{$m_val}}">{{$m_val}}</option>
               @endforeach
            </select>
            </div>
        </td>
    </tr>
    <tr>
        <td>
           Nama SRO
        </td>
        <td>
         <div class="form-group">
            <input type="text"  name="nama_sro" class="form-control inputable" value="" required>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            Saya merekomendasikan agar aplikasi ini &nbsp;&nbsp;
            <select name="saran" id="" class="clean inputable" required>
               @foreach(getEnum(new App\Aplikasi, 'saran') as $m_key => $m_val)
                    <option value="{{$m_val}}">{{$m_val}}</option>
               @endforeach
            </select>
        </td>
    </tr>
</table>
</div>
