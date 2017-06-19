
<br>
<div class="col-md-8">
    <table width="600px">
    <form action="{{url('update-aplikasi')}}" method="POST" id="tabl_form">
    <!-- <caption class="title">Diisi Oleh UJKS</caption> -->
    {!! csrf_field() !!}
    <tr>
        <td>
            NO.Aplikasi
        </td>
        <td>
        <div class="form-group">
            
            <font size="4.2em" style="font-weight: bolder;" name=""><span id="no_applikasi">{{$app->no_aplikasi}}</span></font>
            </div>
        </td>
    </tr>
    <tr>
        <td width="210px">
            Tanggal Diisi
        </td>
        <td>
        <div class="form-group">
            <input type="text" class="form-control inputable" value="{{readDate($app->tanggal)}}"  name="tab1_tanggal" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
            </div>
        </td>
    </tr>
    
    <tr>
        <td>
            Cabang
        </td>
        <td>
        <div class="form-group">
            <select name="tab1_cabang_id" id="" class="form-control inputable">
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
            <input type="text"  name="tab1_kode_sro" class="form-control inputable" value="{{$app->kode_sro}}">
            </div>
        </td>
    </tr>
    <tr>
        <td>
            Bagaimana perkenalan terjadi ?
        </td>
        <td>
         <div class="form-group">
           <select name="tab1_perkenalan" id="" class="form-control inputable">
               @foreach(getEnum(new App\Aplikasi, 'perkenalan') as $m_key => $m_val)
                    <option value="{{$m_val}}" {{autoSelect($app->perkenalan, $m_val)}}>{{$m_val}}</option>
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
            <input type="text"  name="tab1_nama_sro" class="form-control inputable" value="{{$app->nama_sro}}">
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            Saya merekomendasikan agar aplikasi ini &nbsp;&nbsp;
            <select name="tab1_saran" id="" class="clean inputable">
               @foreach(getEnum(new App\Aplikasi, 'saran') as $m_key => $m_val)
                    <option value="{{$m_val}}" {{autoSelect($app->saran, $m_val)}}>{{$m_val}}</option>
               @endforeach
            </select>
        </td>
    </tr>
    </form>
</table>
</div>