@extends('layouts.main-layout')
@section('page', 'Aplikasi : ' . $app->mitra->nama_lengkap . ' (' . $app->no_aplikasi . ')')
@section('main-content')
<!-- <h3><i class="fa fa-angle-right"></i> Blank Page</h3> -->
<div class="row mt">
  <div class="col-md-12">
    <section class="task-panel tasks-widget">
      <div class="panel-heading panel-app">
          <!-- Applikasi ID -->
          <span id="no_applikasi" style="display: none;">{{ $app->no_aplikasi }}</span>
          <i class="fa fa-tasks"></i> PRODUK : <select name="tab1_produk_id" id="tipe_produk" class="clean inputable">
            @forelse($produks->all() as $prd)
              <option value="{{$prd->id}}" {{ autoSelect($app->produk_id, $prd->id)}}>{{$prd->nama}}</option>
            @empty
            @endforelse
          </select>
          <button class="btn btn-success" id="" onclick="updateAplikasi()">Perbaharui</button>
          <input type="hidden" class="inputable" name="tab1_no_app" value="{{$app->no_aplikasi}}">
          <div class="pull-right">
            Nilai Pembiayaan Yang Diminta : Rp. <input type="text" name="tab1_nominal_pb" value="{{$app->nominal_pb}}" id="nominal_pb" class="clean inputable">
            <br>
            Janga Waktu Pembayaran <input type="text" value="{{$app->waktu_pb}}" id="waktu_pb" size="2" class="clean inputable"> bulan
          </div>
      </div>
      <div class="panel-body">

          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
          <li role="presentation"  class="normal-tabs {{  autoTab('tabInfo')}} {{ mro() }}"><a href="#tabInfo" aria-controls="profile" role="tab" data-toggle="tab">Info</a></li>
          <li role="presentation" class="normal-tabs {{autoTab('tab1_1')}} {{ mro() }}"><a href="#tab1_1" aria-controls="home" role="tab" data-toggle="tab">Aplikasi (data mitra)</a></li>
          <li role="presentation" class="normal-tabs {{autoTab('tab1_2')}} {{ feo() }}"><a href="#tab1_2" aria-controls="home" role="tab" data-toggle="tab">Aplikasi (data keuangan)</a></li>
          <li role="presentation" class="normal-tabs {{autoTab('tab2')}} {{ feo() }}"><a href="#tab2" aria-controls="profile" role="tab" data-toggle="tab">LKM.1</a></li>
          <li role="presentation" class="{{autoTab('tab3')}} {{ pincab() }}"><a href="#tab3" aria-controls="profile" role="
          tab" data-toggle="tab" id="tab_lkm_pc">LKM.2</a></li>
          <li role="presentation" class="normal-tabs {{autoTab('tab4')}} {{ feo() }}"><a href="#tab4" aria-controls="profile" role="tab" data-toggle="tab" id="tab_nap_one">NAP.1</a></li>
          <li role="presentation" class="normal-tabs {{autoTab('tab5')}} {{ feo() }}"><a href="#tab5" aria-controls="profile" role="tab" data-toggle="tab" id="tab_nap_one">NAP.2</a></li>
          <li role="presentation" class="normal-tabs {{autoTab('tab6')}} {{ mro_legal() }}"><a href="#tab6" aria-controls="profile" role="tab" data-toggle="tab" id="tab_nap_one">Dokumen Ceklis</a></li>
            
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            @if(mro() !== 'disabled')
              <div role="tabpanel" class="tab-pane {{autoTab('tabInfo')}}" id="tabInfo">
                @include('includes.app-ubah.info')
              </div>
              <div role="tabpanel" class="tab-pane {{autoTab('tab1_1')}}" id="tab1_1">
                @include('includes.app-ubah.aplikasi', compact('app'))
              </div>
            @endif
            
            @if(feo() !== 'disabled')
              <div role="tabpanel" class="tab-pane {{autoTab('tab1_2')}}" id="tab1_2">
                @include('includes.app-ubah.keuangan', compact('app'))
              </div>
              <div role="tabpanel" class="tab-pane {{autoTab('tab2')}}" id="tab2">
                @include('includes.app-ubah.lkm_satu', compact('app'))
              </div>
              <div role="tabpanel" class="tab-pane {{autoTab('tab4')}}" id="tab4">
                @include('includes.app-ubah.nap_satu', compact('app'))
              </div>
              <div role="tabpanel" class="tab-pane {{autoTab('tab5')}}" id="tab5">
                @include('includes.app-ubah.nap_dua', compact('app'))
              </div>
            @endif
           
            @if(pincab() !== 'disabled')
              <div role="tabpanel" class="tab-pane {{autoTab('tab3')}}" id="tab3">
                @include('includes.app-ubah.lkm_dua', compact('app'))
              </div>
            @endif
            
            @if(mro_legal() !== 'disabled')
              <div role="tabpanel" class="tab-pane {{autoTab('tab6')}}" id="tab6">
                @include('includes.app-ubah.dokumen', compact('app'))
              </div>
            @endif
            
          </div>

        </div>
        <div class="panel-footer">
            <button class="btn btn-success" id="mainSubmitBtn" onclick="updateAplikasi()">Perbaharui</button>
            <a class="btn btn-default" href="todo_list.html#">Batalkan</a>
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
<!-- LARAVEL TOKEN -->
<input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
@endsection
@section('bottscript')
<!-- InputMask -->
<script src="{{ url('plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ url('plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ url('plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
<script src="{{ url('js/my_sap.js') }}"></script>
<script>

  $(function() {
    // konfirmasi dokumen
    $('.approve:checked').parent().append("  <i>valid</i>");
    
    // NAP 5
    $('tbody.dk_table td disabled').dblclick(function(e) {
      /* Act on the event */
      // kalo posisi lagi inputan maka langsung dikembalikan
      if ($("input").is(":focus")) {
        return;
      }
      e.stopPropagation();
      var curEl = $(this);
      var curElName = 'namenya';
      var curVal = $(this).html();
      updateVal(curEl, curVal);
      //console.log(curVal);
    });
    //Datemask dd/mm/yyyy
    $("[data-mask]").inputmask();
    $('#waktu_pb').change(function(event) {
      /* Act on the event */
      $('#tab6_waktu_pb').val($(this).val());
    });
    $('.normal-tabs').click(function(event) {
      /* Act on the event */
      var tab = $(this).find('a').attr('href').substring(1, 100);
      var tab_url = window.location.pathname + "?v=" + tab;
      // change the url without reloading
      window.history.pushState('page2', '', tab_url);
      //console.log(tab_url);
    });
    $('#submitLkmDua').click(function(event) {
      /* Act on the event */
      var lkm_pc_id = $('#tab4_lkm_pc_id').val();
      var tujuan_pb = $('#tab4_tujuan_pb').val();
      var penjelasan = $('#tab4_penjelasan').val(); 

      $.post('/update-aplikasi?lkm_pc=true', {_token: '{{csrf_token()}}', id: lkm_pc_id, tujuan_pb: tujuan_pb, penjelasan: penjelasan}, function(data, textStatus, xhr) {
       
        //console.log(data);
      });
      $.each($('.lkmDua'), function(index, val) {
         /* iterate through array or object */
         var form = $(this).serializeArray();
         var arr = {};
         $.each(form, function(index, val) {
            /* iterate through array or object */
            //console.log(form[index].name + " " + val.value);
           arr[form[index].name] = val.value;
         });
         $.post('/update-aplikasi?kon_kp=true', {_token: '{{csrf_token()}}', data: arr } , function(data, textStatus, xhr) {
           
           //console.log(data);
         });
         //console.log(arr);
      });
      // notifikasi pemberitahuan
      toastr.success('Berhasil !', 'Data telah disimpan ke database', {timeOut: 5000})
    });
  });
</script>

<script>

var no_app = $('#no_applikasi').text();
var is_update_val = false;
  function updateVal(curEl, curVal){
      is_update_val = true;

      var inpDOM = "<input type='text' class='form-control thVal' name='' value='" + curVal + "'>";
      var dokumenID = curEl.attr('dkid');
      curEl.html(inpDOM);
      $(".thVal").focus();
      $(".thVal").keyup(function (event) {
          if (event.keyCode == 13) {
              var newVal = $(".thVal").val().trim();
              $(curEl).html(newVal);
              // update tabel
              updateDKName(dokumenID, newVal);

              //updateDKName()
              // ubah jadi false
              //is_update_val = false;
              //console.log(is_update_val);
          }
      });

      $('html').click(function () {
              // ketika klik diluar input
              var newVal = curEl.find('input').val();
              //updateDKName(dokumenID, newVal);
              var mouseClick = false
              // biar ngga ilang ketika di klik input karena masuk ke dalam tag HTML
              if ($("input").is(":focus")) {
                  return;
                }
              console.log(mouseClick);
              if (is_update_val) {
                //console.log("val lama");
                curEl.html(curVal);
              } else {
                curEl.html(newVal);
              }
              is_update_val = false;
              //console.log(is_update_val);
              // update tabel
              //$(curEl).html();
      });
  }
  function updateDKName (dokumenID, newVal){
      var token = $('#_token').val();
      $.post('/update-nama-dokumen', {_token: token, id: dokumenID, judul: newVal}, function(data, textStatus, xhr) {
        /*optional stuff to do after success */
        console.log(data);
      });
      
  }
  function updateDK(){
      var status = {};
      var token = $('#_token').val();
      $.each($('.dp:checked'), function() {
          var id = $(this).attr('dkid');
          status[id] = $(this).val(); 
      });
      $.post('/update-dokumen', {_token: token, data: status, type: 'dk', no_app: no_app}, function(data, textStatus, xhr) {
        /*optional stuff to do after success */
          console.log(data);
      });
      
  }
  function updateDPK(){
      var status = {};
      var konfirmasi = {};
      var token = $('#_token').val();
      $.each($('.dpk:checked'), function() {
          var id = $(this).attr('dpkid');
          status[id] = $(this).val(); 
      });
      $.each($('.approve:checked'), function() {
          var id = $(this).attr('dkid');
          konfirmasi[id] = $(this).val(); 
      });
      console.log(status);
      $.post('/update-dokumen', {_token: token, data: status, konfirmasi: konfirmasi, type: 'dpk', no_app: no_app}, function(data, textStatus, xhr) {
        /*optional stuff to do after success */
          console.log(data);
      });
      
  }
  function updateCTN(){
      var isi = {};
      var token = $('#_token').val();
      $.each($('.ctn'), function() {
          var id = $(this).attr('ctnid');
          isi[id] = $(this).val(); 
      });
      console.log(isi);
      $.post('/update-catatan', {_token: token, data: isi, type: 'dpk', no_app: no_app}, function(data, textStatus, xhr) {
        /*optional stuff to do after success */
          console.log(data);
      });
      
  }
  function addPdpRow(jenisRow, table){
    var dom = '<tr>';
    dom += '<td><input type="text" class="form-control judul-'+ jenisRow +'-' + table + '" placeholder="nama pendapatan"/></td>';
    dom += '<td><input type="number" class="form-control isi-'+ jenisRow +'-' + table + '" placeholder="nilai pendapatan"/></td>';
    dom += '</tr>';
    //console.log(dom);
    $(dom).appendTo('.clone-area-' + jenisRow);
    //$('#pu_form').preventDefault
  }
  function submitPdp(jenisRow, table){
      var no_app = $('#no_applikasi').text();
      var judul = [];
      var isi = [];
      var tipe = jenisRow;
      $.each($('.judul-' + jenisRow + '-' + table), function() {
          judul.push($(this).val()); 
      });
      $.each($('.isi-' + jenisRow + '-' + table), function() {
          isi.push($(this).val()); 
      });
      
      /*console.log('.judul-' + jenisRow + '-' + table);
      console.log('.isi-' + jenisRow + '-' + table);      
      console.log(judul);
      console.log(isi);*/

       if(table == 'pdp'){
        var url = '{{url('update-pendapatan')}}';
      } else if(table == 'pngl') {
        var url = '{{url('update-pengeluaran')}}';
      } else if(table == 'neraca'){
        var url = '{{url('update-neraca')}}';
      } else {
        alert("Url tujuan tidak valid!");
        return;
      }
      $.post(""+ url, {
          _token: '{{csrf_token()}}',
          judul : judul,
          isi : isi,
          no_app: no_app,
          tipe : tipe
        }, function(data, textStatus, xhr) {
          /*optional stuff to do after success */
         //console.log(data);
        //return;
          alert(data);
          location.reload();
      });
      
  }
  function hapusPdp(id, table){
    var confirm = window.confirm("Anda yakin ?");
    if(confirm == false){
      return;
    }
     if(table == 'pdp'){
        var url = '{{url('hapus-pendapatan')}}';
      } else if(table == 'pngl') {
        var url = '{{url('hapus-pengeluaran')}}';
      } else if(table == 'neraca') {
        var url = '{{url('hapus-neraca')}}';
      } else {
        alert("Url tujuan tidak valid!");
        return;
      }
    $.post(""+ url, {_token: '{{csrf_token()}}', id : id}, function(data, textStatus, xhr) {
        /*optional stuff to do after success */
        //console.log(data);
        alert(data);
          location.reload();
    });
  }

  function updateAplikasi(){
    //console.log("submited");
    var form = $("#tab1_form");
    var data = form.serialize();
    var url = '/update-aplikasi';
    var map = {};
    $('.inputable').each(function(index, el) {
      if($(this).attr('name') == 'tab2_jk'){
        map[$(this).attr('name')] = $('input[type=radio]:checked').val();
      } else {
        map[$(this).attr('name')] = $(this).val();
      }
      
    });
    //console.log(map);
    //return;
    submitForm(map, function(data){
      // update tab Nap Dua : dokumen, Dokumen pk, catatan
      updateDK();
      updateDPK();
      updateCTN();
      
      alert(data);
      location.reload();
    });
  }
  function submitTab2(data, callback){
    //console.log("Udah dulu");
    callback(data);
  }
  function submitForm(data, callback){
    var url = '/update-aplikasi';
    $.post(""+ url, {_token: '{{csrf_token()}}', isi: data }, function(data, textStatus, xhr) {
        //console.log(data);
       /* $.each(data, function(key, val){
          var status = val.status;
          
        });*/
        callback(data);
        //return data;
        // notifikasi pemberitahuan
        /*toastr.success('Berhasil !', "Data telah di perbaharui", {
          timeOut: 5000});*/
        
      });
  }

  function tambahJaminan(){
    $('#jmn_no_aplikasi').val($('#no_applikasi').text());
    $('#addJaminan').modal('show');
  }
  function tambahPemilikJaminan(){
    $('#p_jmn_no_aplikasi').val($('#no_applikasi').text());
    $('#addPemilikJaminan').modal('show');
  }
  function tambahMemo(){
    $('#memo_no_aplikasi').val($('#no_applikasi').text());
    $('#addMemoKomite').modal('show');
  }
  function tambahDokumen(){
    $('#dok_no_aplikasi').val($('#no_applikasi').text());
    $('#addDokumen').modal('show');
  }
  function tambahRekomen(){
    $('#rek_no_aplikasi').val($('#no_applikasi').text());
    $('#addRekomen').modal('show');
  }
</script>
@endsection