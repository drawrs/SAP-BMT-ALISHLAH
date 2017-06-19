@extends('layouts.main-layout')
@section('page', 'Daftar Mitra')
@section('main-content')
<!-- <h3><i class="fa fa-angle-right"></i> Blank Page</h3> -->
<div class="row mt">
    <div class="col-md-12">
      <section class="task-panel tasks-widget">
        <div class="panel-heading">
                <div class="pull-left">
                <h5><i class="fa fa-tasks"></i> DAFTAR MITRA</h5>
            </div>
                
            <br>
        </div>
        <div class="panel-body">
        @include('includes.panel-cari')
          <div class="task-content">
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <td>NO</td>
                <td>NO KTP</td>
                <td>NAMA LENGKAP</td>
                <td>TANGGAL LAHIR</td>
                <td>STATUS</td>
                <td>JENIS KELAMIN</td>
                <td>NO TELP / HP</td>
                <td>APLIKASI</td>
                <td>AKSI</td>
              </tr>
            </thead>
            <tbody>
            @php $no = 1; @endphp
              @forelse($mitras as $mitra)
                <tr>
                  <td>{{$no++}}</td>
                  <td>{{$mitra->no_ktp}}</td>
                  <td>{{$mitra->nama_lengkap}}</td>
                  <td>{{$mitra->tgl_lahir}}</td>
                  <td>{{$mitra->status_kawin}}</td>
                  <td>{{$mitra->jk}}</td>
                  <td>{{$mitra->no_telp}}</td>
                  <td>
                    <u><a href="{{ url('dashboard?no_ktp='. $mitra->no_ktp) }}">Lihat aplikasi</a></u>
                  </td>
                  <td>
                    <a href="{{ url('detail-mitra?id='.$mitra->id) }}" class="btn btn-success btn-xs"><i class="fa fa-list"></i> Detail</a>
                    <a href="{{ url('hapus-mitra/' . $mitra->id) }}" class="btn btn-danger btn-xs" onclick="return confirm('Anda yakin akan menghapus mitra ini? Semua data yang berkaitan dengan mitra ini juga akan dihapus!')"><i class="fa fa-trash"></i> Hapus</a>
                  </td>
                </tr>
              @empty
              @endforelse
            </tbody>
          </table>
          {!! $mitras->links() !!}
          </div>

          <div class=" add-task-row">
              <a class="btn btn-success btn-sm pull-left" href="{{url('tambah-mitra')}}"><i class="fa fa-plus"></i> Tambah Mitra</a>
              <!-- <a class="btn btn-default btn-sm pull-right" href="todo_list.html#">See All Tasks</a> -->
          </div>
          
      </div>
  </section>
</div>
</div>
@endsection
@section('bottscript')
<script>
    const Foo = { template: '<div>Foo</div>'}
    const Bar = { template: '<div>Bar</div>'}

    const routes = [
    { path: '/foo', component: Foo},
    { path: '/bar', component: Bar},
    ]

    const router = new VueRouter({
        routes //short for routes
    })
    const app = new Vue({
        router
    }).$mount('#app');
</script>
@endsection