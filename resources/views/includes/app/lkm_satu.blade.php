
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
    <div class="alert alert-info">
    
        <span style="font-size: 1.4em"><i class="fa fa-info"></i>info : Latar Belakang Pengajuan Fasilitas Pembiayaan</span><br>
          Penjelasan singkat mengenai tujuan pinjaman, latar belakang usaha dan perkembangan usaha mitra
    </div>
  <ol class="task-list" style="list-style: none;">
      <li>

          <div class="task-title">
              <span class="task-title-sp"><h3>Latar Belakang Usaha</h3></span>
          </div>
          <div class="task-content">
            <form action="{{url('update-lkm-one')}}" method="POST">
            {!! csrf_field() !!}
            <input type="hidden" name="id" value="{{$lbu->id}}">
            <textarea name="pesan" id="" cols="30" rows="5" class="form-control">{{$lbu->pesan}}</textarea>
            <br>
           
            </form>
        </div>
    </li>
    <li>

      <div class="task-title">
          <span class="task-title-sp"><h3>Kondisi Usaha Saat Ini</h3></span>
      </div>
      <div class="task-content">
      <div class="task-content">
            <form action="{{url('update-lkm-one')}}" method="POST">
            {!! csrf_field() !!}
            <input type="hidden" name="id" value="{{$kusi->id}}">
        <textarea name="pesan" id="" cols="30" rows="5" class="form-control">{{$kusi->pesan}}</textarea>
        <br>
           
            </form>
    </div>
</li>
</ol>
<br>
<div class="alert alert-info">
        <span style="font-size: 1.4em"><i class="fa fa-info"></i>info : Resiko Usaha dan Mitigasi</span><br>
         Penjelasan singkat mengenai pesaing, resiko usaha (suply, demand dan lainnya) dan upaya mengatasinya
    </div>
<ol class="task-list" style="list-style: none;">
<li>

  <div class="task-title">
      <span class="task-title-sp"><h3>Pesaing</h3></span>
  </div>
  <div class="task-content">
  <div class="task-content">
            <form action="{{url('update-lkm-one')}}" method="POST">
            {!! csrf_field() !!}
            <input type="hidden" name="id" value="{{$ps->id}}">
    <textarea name="pesan" id="" cols="30" rows="5" class="form-control">{{$ps->pesan}}</textarea>
    <br>
           
            </form>
</div>
</li>
<li>

  <div class="task-title">
    <span class="task-title-sp"><h3>Resiko Usaha</h3></span>
    <div class="task-content">
    <div class="task-content">
            <form action="{{url('update-lkm-one')}}" method="POST">
            {!! csrf_field() !!}
            <input type="hidden" name="id" value="{{$ru->id}}">
        <textarea name="pesan" id="" cols="30" rows="5" class="form-control">{{$ru->pesan}}</textarea>
        <br>
           
            </form>
    </div>
</div>
</li>
<li>

  <div class="task-title">
      <span class="task-title-sp"><h3>Upaya Untuk Mengatasi Resiko Usaha</h3></span>
  </div>
  <div class="task-content">
  <div class="task-content">
            <form action="{{url('update-lkm-one')}}" method="POST">
            {!! csrf_field() !!}
            <input type="hidden" name="id" value="{{$uumru->id}}">
    <textarea name="pesan" id="" cols="30" rows="5" class="form-control">{{$uumru->pesan}}</textarea>
    <br>
           
            </form>
</div>
</li>                                      
</ol>
</div>