<br>
<div class="col-md-8">
    <table width="600px">
    <caption class="title">Diisi Oleh UJKS</caption>
    <tr>
        <td>
            NO.Aplikasi
        </td>
        <td>
        <div class="form-group">
            <font size="4.2em" style="font-weight: bolder;"><span id="no_applikasi">{{$app->no_aplikasi}}</span></font>
            </div>
        </td>
    </tr>
    <tr>
        <td width="210px">
            Tanggal Diisi
        </td>
        <td>
        <div class="form-group">
            <input type="text" class="form-control" value="{{readDate($app->tanggal)}}" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
            </div>
        </td>
    </tr>
    
    <tr>
        <td>
            Cabang
        </td>
        <td>
        <div class="form-group">
            <select name="" id="" class="form-control">
                @forelse($cabangs->all() as $cabang)
                    <option value="{{$cabang->id}}" {{autoSelect($app->cabang_id, $cabang->id)}}>{{$cabang->nama}}</option>
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
            <input type="text" class="form-control" value="{{$app->kode_sro}}">
            </div>
        </td>
    </tr>
    <tr>
        <td>
            Bagaimana perkenalan terjadi ?
        </td>
        <td>
         <div class="form-group">
           <select name="" id="" class="form-control">
               @foreach(getEnum(new App\Aplikasi, 'perkenalan') as $m_key => $m_val)
                    <option value="{{$m_key}}" {{autoSelect($app->perkenalan, $m_val)}}>{{$m_val}}</option>
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
            <input type="text" class="form-control" value="{{$app->nama_sro}}">
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            Saya merekomendasikan agar aplikasi ini &nbsp;&nbsp;
            <select name="" id="" class="clean">
               @foreach(getEnum(new App\Aplikasi, 'saran') as $m_key => $m_val)
                    <option value="{{$m_key}}" {{autoSelect($app->saran, $m_val)}}>{{$m_val}}</option>
               @endforeach
            </select>
        </td>
    </tr>
</table>
</div>
