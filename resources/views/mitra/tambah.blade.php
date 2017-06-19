@extends('layouts.main-layout')
@section('page', 'Tambah Mitra Baru')
@section('main-content')
<!-- <h3><i class="fa fa-angle-right"></i> Blank Page</h3> -->
<div class="row mt">
    <div class="col-md-12">
      <section class="task-panel tasks-widget">
        <div class="panel-heading">
                <div class="pull-left">
              <!--  <h5><i class="fa fa-tasks"></i> DAFTAR APLIKASI</h5> -->
            </div>
                
            <br>
        </div>
        <div class="panel-body">
          <div class="task-content">

              
<br>
<div class="col-md-6">
    <table width="100%">
    <form action="{{ url('tambah-mitra') }}" method="POST">
    {!! csrf_field() !!}
    
    <caption class="title">DETAIL MITRA</caption>
    <tr>
        <td>
            Nama (Sesuai KTP)
        </td>
        <td>
        <div class="form-group">
            <input type="text" name="tab2_nama_lengkap" class="form-control inputable" value="">
            </div>
        </td>
    </tr>
    <tr>
        <td>
            Nama Panggilan
        </td>
        <td>
        <div class="form-group">
            <input type="text" name="tab2_nama_panggilan" class="form-control inputable" value="">
            </div>
        </td>
    </tr>
    <tr>
        <td>
            Jenis Kelamin
        </td>
        <td>
        <div class="form-group">
           <input type="radio" class="inputable" name="tab2_jk" value="L" > Laki-laki
           <input type="radio" class="inputable"  name="tab2_jk" value="P"> Perempuan
        </div>
        </td>
    </tr>
    <tr>
        <td>
            No. Telepon/ HP
        </td>
        <td>
         <div class="form-group">
            <input type="text" class="form-control inputable"  name="tab2_no_telp" value="">
            </div>
        </td>
    </tr>
    <tr>
        <td>
            No. KTP
        </td>
        <td>
         <div class="form-group">
            <input type="text" class="form-control inputable"  name="tab2_no_ktp" value="">
            </div>
        </td>
    </tr>
    <tr>
        <td>
            KTP Berlaku Sampai
        </td>
        <td>
         <div class="form-group">
            <input type="text" class="form-control inputable" name="tab2_tgl_aktif_ktp" value="" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
            </div>
        </td>
    </tr>
    <tr>
        <td>
           Tanggal Lahir
        </td>
        <td>
         <div class="form-group">
            <input type="text" class="form-control inputable" name="tab2_tgl_lahir" value="" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            Pendidikan Terakhir
        </td>
        <td>
         <div class="form-group">
            <select name="tab2_pendidikan" id="" class="form-control inputable">
               @foreach(getEnum($mitraModel, 'pendidikan') as $m_key => $m_val)
               <option value="{{$m_val}}">{{$m_val}}</option>
               @endforeach
            </select>
            
            </div>
        </td>
    </tr>
    <tr>
        <td>
            Status Perkawinan
        </td>
        <td>
         <div class="form-group">
            <select name="tab2_status_kawin" id="" class="form-control inputable">
               @foreach(getEnum($mitraModel, 'status_kawin') as $m_key => $m_val)
               <option value="{{$m_val}}" >{{$m_val}}</option>
               @endforeach
            </select>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            Nama Pasangan
        </td>
        <td>
         <div class="form-group">
            <input type="text" name="tab2_nama_pasangan" class="form-control inputable" value="">
            </div>
        </td>
    </tr>
    <tr>
        <td>
            Tanggal Lahir Pasangan
        </td>
        <td>
         <div class="form-group">
            <input type="text"  name="tab2_tgl_lahir_pasangan" class="form-control inputable" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            Nama Ibu Kandung
        </td>
        <td>
         <div class="form-group">
            <input type="text" name="tab2_nama_ibu"  class="form-control inputable" >
            </div>
        </td>
    </tr>
    <tr>
        <td>
            Jumlah Tanggungan
        </td>
        <td>
         <div class="form-group">
            <input type="text" name="tab2_jumlah_tanggungan"  class="form-control inputable" >
            </div>
        </td>
    </tr>
</table>
</div>
<div class="col-md-6">

    <table width="100%">
    <caption class="title">KETERANGAN TEMPAT TINGGAL</caption>
    <tr>
        <td colspan="2">
        <h4>Tempat Tinggal Sekarang</h4>
            <hr>
        <div class="form-group">
            <input type="text" name="tab2_alamat1" class="form-control inputable" placeholder="Nama blok">
            </div>
            <div class="form-group">
                <input type="text"  name="tab2_alamat2" class="form-control inputable"  placeholder="Nama jalan">
            </div>
        </td>
    </tr>
    <tr>
        <td>RT/RW</td>
        <td>
            <div class="col-sm-6 no-padding">
            <div class="form-grup">
                <input type="text"  name="tab2_alamat3" class="form-control inputable" >
            </div>
            </div>
            <div class="col-sm-6 no-padding">
                <div class="form-group">
                    <input type="text" name="tab2_alamat4" class="form-control inputable" >
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>Kode POS</td>
        <td>
            <div class="form-group">
                <input type="text" class="form-control inputable" name="tab2_alamat5">
            </div>
        </td>
    </tr>
    <tr>
        <td>Kecamatan</td>
        <td>
            <div class="form-group">
                <input type="text" class="form-control inputable" name="tab2_alamat6">
            </div>
        </td>
    </tr>
    <tr>
        <td>Kota/Kabupaten</td>
        <td>
            <div class="form-group">
                <input type="text" class="form-control inputable" name="tab2_alamat7"  >
            </div>
        </td>
    </tr>
    <!-- Batal tmpat tinggal -->
    <tr>
        <td colspan="2">
        <h4>Tempat Tinggal Sesuai KTP</h4>
            <hr>
        <div class="form-group">
            <input type="text" class="form-control inputable" name="tab2_alamat8"  placeholder="Nama blok">
            </div>
            <div class="form-group">
                <input type="text" class="form-control inputable" name="tab2_alamat9" placeholder="Nama jalan">
            </div>
        </td>
    </tr>
    <tr>
        <td>RT/RW</td>
        <td>
            <div class="col-sm-6 no-padding">
            <div class="form-grup">
                <input type="text" class="form-control inputable" name="tab2_alamat10">
            </div>
            </div>
            <div class="col-sm-6 no-padding">
                <div class="form-group">
                    <input type="text" class="form-control inputable" name="tab2_alamat11">
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>Kode POS</td>
        <td>
            <div class="form-group">
                <input type="text" class="form-control inputable" name="tab2_alamat12">
            </div>
        </td>
    </tr>
    <tr>
        <td>Kecamatan</td>
        <td>
            <div class="form-group">
                <input type="text" class="form-control inputable" name="tab2_alamat13" >
            </div>
        </td>
    </tr>
    <tr>
        <td>Kota/Kabupaten</td>
        <td>
            <div class="form-group">
                <input type="text" class="form-control inputable" name="tab2_alamat14">
            </div>
        </td>
    </tr>
</table>
</div>
          </div>

          <div class=" add-task-row">
              <a class="btn btn-default" href="" onclick="window.history.back()"><i class="fa fa-arrow-left"></i> Kembali</a>
              <button type="submit" class="btn btn-success" ><i class="fa fa-save"></i> SIMPAN</button>
          </div>
          </form>
      </div>
  </section>
</div>
</div>
@endsection
@section('bottscript')
<!-- InputMask -->
<script src="{{ url('plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ url('plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ url('plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
<script>
    $(function() {
        $("[data-mask]").inputmask();
    });
</script>
@endsection