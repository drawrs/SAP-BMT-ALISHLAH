@extends('layouts.main-layout')
@section('page', 'Daftar Akun')
@section('main-content')
<!-- <h3><i class="fa fa-angle-right"></i> Blank Page</h3> -->
<div class="row mt">
    <div class="col-md-12">
      <section class="task-panel tasks-widget">
        <div class="panel-heading">
                <div class="pull-left">
                <h5><i class="fa fa-tasks"></i> DAFTAR AKUN</h5>
            </div>
                
            <br>
        </div>
        <div class="panel-body">
        @include('includes.panel-cari')
          <div class="task-content">
          @include('includes.messages')
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Email</td>
                <td>Jabatan</td>
                <td>Level</td><!-- 
                <td>NO TELP / HP</td>
                <td>APLIKASI</td> -->
                <td>act</td>
              </tr>
            </thead>
            <tbody>
            @php $no = 1; @endphp
              @forelse($users as $user)
                <tr>
                  <td>{{$no++}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->detail->jabatan}}</td>
                  <td>{{$user->detail->level}}</td>
                  <td>
                    <button href="" class="btn btn-success btn-xs" onclick="btnUbah({{$user->id}})"> Ubah</button>
                    <a href="" class="btn btn-danger btn-xs" onclick="return confirm('Anda yakin akan menghapus mitra ini? Semua data yang berkaitan dengan mitra ini juga akan dihapus!')"><i class="fa fa-trash"></i> Hapus</a>
                  </td>
                </tr>
              @empty
              @endforelse
            </tbody>
          </table>
          {!! $users->links() !!}
          </div>

          <div class=" add-task-row">
              <a class="btn btn-success btn-sm pull-left" href="{{url('tambah-mitra')}}"><i class="fa fa-plus"></i> Tambah Mitra</a>
              <!-- <a class="btn btn-default btn-sm pull-right" href="todo_list.html#">See All Tasks</a> -->
          </div>
          
      </div>
  </section>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalUbah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <div class="wrapper" style="margin-top: 0">
          <form action="{{ url('ubah-akun') }}" method="POST" class="form-horizontal">
          <input type="hidden" name="id" value="" id="id">
          <input type="hidden" name="_token" value="{{ csrf_token() }}" id="_token">
          <div class="form-group">
            <label for="">Nama lengkap</label>
            <input type="text" name="name" id="name" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Jabatan</label>
            <select name="jabatan" id="jabatan" class="form-control">
              @foreach(getEnum(new App\UserDetail, 'jabatan') as $m_key => $m_val)
                    <option value="{{$m_val}}">{{$m_val}}</option>
               @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="">Level</label>
            <select name="level" id="level" class="form-control">
              @foreach(getEnum(new App\UserDetail, 'level') as $m_key => $m_val)
                    <option value="{{$m_val}}">{{$m_val}}</option>
               @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="">
              <b>Klik <a href="#" id="ubahSandi">disini</a> untuk mengubah katasandi</b>
            </label>
          </div>
        
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan perubahan</button></form>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modalUbahPwd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <div class="wrapper" style="margin-top: 0">
          <form action="{{ url('ubah-sandi') }}" method="POST" class="form-horizontal">
          <input type="hidden" name="id" value="" id="id2">
          <input type="hidden" name="_token" value="{{ csrf_token() }}" id="_token2">
          <div class="form-group">
            <label for="">Katasandi Baru</label>
            <input type="password" name="password" id="password" class="form-control">
          </div>
          
        
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan perubahan</button></form>
      </div>
    </div>
  </div>
</div>
@endsection
@section('bottscript')
<script>
  $(function() {
    $('#ubahSandi').click(function(event) {
      /* Act on the event */
      $('#modalUbah').modal('hide');
      $('#modalUbahPwd').modal('show');
    });
  });
</script>
<script>
   function btnUbah(id){
      getAkun(id, function(){
        //console.log('baru sini');
        $('#modalUbah').modal('show');
      })
   }
   function getAkun(id, callback){
    var token = $('#_token').val();
    $.post('/get-akun', {_token: token, id: id}, function(data, textStatus, xhr) {
      /*optional stuff to do after success */
      $('#id').val(id);
      $('#id2').val(id);
      $('#name').val(data.name);
      $('#jabatan').val(data.jabatan);
      $('#level').val(data.level);
      //console.log(data.name);
    });
    callback(callback);
   }
</script>
@endsection