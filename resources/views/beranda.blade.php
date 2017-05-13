@extends('layouts.main-layout')
@section('page', 'Beranda')
@section('main-content')
<!-- <h3><i class="fa fa-angle-right"></i> Blank Page</h3> -->
<div class="row mt">
    <div class="col-md-12">
      <section class="task-panel tasks-widget">
        <div class="panel-heading">
                <div class="pull-left">
                <h5><i class="fa fa-tasks"></i> DAFTAR APLIKASI</h5>
            </div>
                
            <br>
        </div>
        <div class="panel-body">
          <div class="task-content">

              <ul class="task-list">
                  <li>
                      
                      <div class="task-title">
                      @foreach($app as $app)
                      
                      <div class="col-sm-4 round-border">
                          <table class="table table-borderless">
                          <tr>
                              <td width="100px">NO APLIKASI</td>
                              <td>:</td>
                              <td><strong>{{$app->no_aplikasi}}</strong></td>
                              <td><button class="btn btn-success btn-block btn-xs"><i class="fa fa-pencil"></i> ubah</button></td>
                          </tr>
                          <tr>
                              <td>PRODUK</td>
                              <td>:</td>
                              <td>{{$app->produk->nama}}</td>
                              <td><button class="btn btn-danger btn-block btn-xs"><i class="fa fa-trash-o"></i> hapus</button></td>
                          </tr>
                          <tr>
                              <td>PEMOHON</td>
                              <td>:</td>
                              <td>{{$app->mitra->nama_lengkap}}</td>
                              <td><a href="{{route('lihat_ap', ['no_ap' => $app->no_aplikasi])}}" class="btn btn-warning btn-block btn-xs"><i class="fa fa-book"></i> detail</a></td>
                          </tr>
                      </table>
                      </div>

                      @endforeach
                      </div>
                  </li>                                   
              </ul>
          </div>

          <div class=" add-task-row">
              <a class="btn btn-success btn-sm pull-left" href="todo_list.html#">Tambah Aplikasi</a>
              <a class="btn btn-default btn-sm pull-right" href="todo_list.html#">See All Tasks</a>
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