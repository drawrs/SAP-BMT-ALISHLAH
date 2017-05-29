@extends('layouts.main-layout')
@section('page', 'Beranda')
@section('main-content')
<!-- <h3><i class="fa fa-angle-right"></i> Blank Page</h3> -->
<div class="row mt">
  <div class="col-md-12">
    <section class="task-panel tasks-widget">
      <div class="panel-heading panel-app">
          <i class="fa fa-tasks"></i> PRODUK : <select name="" id="tipe_produk" class="clean">
            @forelse($produks->all() as $prd)
            <option value="{{$prd->id}}" {{ autoSelect($app->produk_id, $prd->id)}}>{{$prd->nama}}</option>
            @empty
            @endforelse
          </select>
          <div class="pull-right">
            Nilai Pembiayaan Yang Diminta : Rp. <input type="text" value="{{$app->nominal_pb}}" id="nominal_pb" class="clean">
            <br>
            Janga Waktu Pembayaran <input type="text" value="{{$app->waktu_pb}}" id="waktu_pb" size="2" class="clean"> bulan
          </div>
      </div>
      <div class="panel-body">

          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
          <li role="presentation"  class="{{autoTab('tabInfo')}}"><a href="#tabInfo" aria-controls="profile" role="tab" data-toggle="tab">Info</a></li>
          <li role="presentation" class="{{autoTab('tab1_1')}}"><a href="#tab1_1" aria-controls="home" role="tab" data-toggle="tab">Aplikasi (data mitra)</a></li>
          <li role="presentation" class="{{autoTab('tab1_2')}}"><a href="#tab1_2" aria-controls="home" role="tab" data-toggle="tab">Aplikasi (data keuangan)</a></li>
          <li role="presentation" class="{{autoTab('tab2')}}"><a href="#tab2" aria-controls="profile" role="tab" data-toggle="tab">LKM.1</a></li>
          <li role="presentation" class="{{autoTab('tab3')}}"><a href="#tab3" aria-controls="profile" role="
          tab" data-toggle="tab">LKM.2</a></li>
          <li role="presentation" class="{{autoTab('tab4')}}"><a href="#tab4" aria-controls="profile" role="tab" data-toggle="tab">NAP.1</a></li>
            
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane {{autoTab('tabInfo')}}" id="tabInfo">
              @include('includes.app.info')
            </div>
            <div role="tabpanel" class="tab-pane {{autoTab('tab1_1')}}" id="tab1_1">
              @include('includes.app.aplikasi', compact('app'))
            </div>
            <div role="tabpanel" class="tab-pane {{autoTab('tab1_2')}}" id="tab1_2">
              @include('includes.app.keuangan', compact('app'))
            </div>
            <div role="tabpanel" class="tab-pane {{autoTab('tab2')}}" id="tab2">
              @include('includes.app.lkm_satu', compact('app'))
            </div>
            <div role="tabpanel" class="tab-pane {{autoTab('tab3')}}" id="tab3">
              @include('includes.app.lkm_dua', compact('app'))
            </div>
            <div role="tabpanel" class="tab-pane {{autoTab('tab4')}}" id="tab4">
              @include('includes.app.nap_satu', compact('app'))
            </div>
            
          </div>

        </div>
        <div class="panel-footer">
            <a class="btn btn-success btn-sm" href="todo_list.html#">Perbaharui</a>
            <a class="btn btn-default btn-sm" href="todo_list.html#">Batalkan</a>
        </div>
      </div>
    </section>
    <footer class="site-footer">
          <div class="text-center">
          <div id="app">
            @{{ message }}
          </div>
              Footer
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
  </div>
</div>
@endsection
@section('bottscript')
<!-- InputMask -->
<script src="{{ url('plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ url('plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ url('plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
<script src="https://unpkg.com/vue"></script>
<script>
  $(function() {
    //Datemask dd/mm/yyyy
    $("[data-mask]").inputmask();
  });
</script>
<script>
Vue.component('my-form', {
  template: '#my-form'
});

new Vue({
  el: '#app',
  data: {
    range:0
  },
  
  methods: {
    addForm: function() {
      this.range += 1;
    }
  }
})
</script>
<script>
  function addPdpRow(jenisPdp){
    var dom = '<tr>';
    dom += '<td><input type="text" name="judul-'+ jenisPdp +'[]" class="form-control judul-'+ jenisPdp +'" placeholder="nama pendapatan"/></td>';
    dom += '<td><input type="number" name="isi-'+ jenisPdp +'[]" class="form-control isi-'+ jenisPdp +'" placeholder="nilai pendapatan"/></td>';
    dom += '</tr>';
    $(dom).appendTo('.clone-area-' + jenisPdp);
    //$('#pu_form').preventDefault
  }
  function submitPdp(jenisPdp){
      var no_app = $('#no_applikasi').text();
      var judul = [];
      var isi = [];
      var tipe = jenisPdp;
      $.each($('.judul-' + jenisPdp), function() {
          judul.push($(this).val()); 
      });
      $.each($('.isi-' + jenisPdp), function() {
          isi.push($(this).val()); 
      });
      $.post('{{url('update-pendapatan')}}', {
          _token: '{{csrf_token()}}',
          judul : judul,
          isi : isi,
          no_app: no_app,
          tipe : tipe
        }, function(data, textStatus, xhr) {
          /*optional stuff to do after success */
         // console.log(data);
          //return;
          alert(data);
          location.reload();
      });
      
  }
  function hapusPdp(pdpId){
    $.post('{{url('hapus-pendapatan')}}', {_token: '{{csrf_token()}}', id : pdpId}, function(data, textStatus, xhr) {
        /*optional stuff to do after success */
        //console.log(data);
        alert(data);
          location.reload();
    });
  }
</script>
@endsection