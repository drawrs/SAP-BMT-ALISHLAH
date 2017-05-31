<?php $__env->startSection('page', 'Beranda'); ?>
<?php $__env->startSection('main-content'); ?>
<!-- <h3><i class="fa fa-angle-right"></i> Blank Page</h3> -->
<div class="row mt">
  <div class="col-md-12">
    <section class="task-panel tasks-widget">
      <div class="panel-heading panel-app">
          <i class="fa fa-tasks"></i> PRODUK : <select name="" id="tipe_produk" class="clean">
            <?php $__empty_1 = true; $__currentLoopData = $produks->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <option value="<?php echo e($prd->id); ?>" <?php echo e(autoSelect($app->produk_id, $prd->id)); ?>><?php echo e($prd->nama); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <?php endif; ?>
          </select>
          <div class="pull-right">
            Nilai Pembiayaan Yang Diminta : Rp. <input type="text" value="<?php echo e($app->nominal_pb); ?>" id="nominal_pb" class="clean">
            <br>
            Janga Waktu Pembayaran <input type="text" value="<?php echo e($app->waktu_pb); ?>" id="waktu_pb" size="2" class="clean"> bulan
          </div>
      </div>
      <div class="panel-body">

          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
          <li role="presentation"  class="<?php echo e(autoTab('tabInfo')); ?>"><a href="#tabInfo" aria-controls="profile" role="tab" data-toggle="tab">Info</a></li>
          <li role="presentation" class="<?php echo e(autoTab('tab1_1')); ?>"><a href="#tab1_1" aria-controls="home" role="tab" data-toggle="tab">Aplikasi (data mitra)</a></li>
          <li role="presentation" class="<?php echo e(autoTab('tab1_2')); ?>"><a href="#tab1_2" aria-controls="home" role="tab" data-toggle="tab">Aplikasi (data keuangan)</a></li>
          <li role="presentation" class="<?php echo e(autoTab('tab2')); ?>"><a href="#tab2" aria-controls="profile" role="tab" data-toggle="tab">LKM.1</a></li>
          <li role="presentation" class="<?php echo e(autoTab('tab3')); ?>"><a href="#tab3" aria-controls="profile" role="
          tab" data-toggle="tab">LKM.2</a></li>
          <li role="presentation" class="<?php echo e(autoTab('tab4')); ?>"><a href="#tab4" aria-controls="profile" role="tab" data-toggle="tab">NAP.1</a></li>
            
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane <?php echo e(autoTab('tabInfo')); ?>" id="tabInfo">
              <?php echo $__env->make('includes.app.info', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div role="tabpanel" class="tab-pane <?php echo e(autoTab('tab1_1')); ?>" id="tab1_1">
              <?php echo $__env->make('includes.app.aplikasi', compact('app'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div role="tabpanel" class="tab-pane <?php echo e(autoTab('tab1_2')); ?>" id="tab1_2">
              <?php echo $__env->make('includes.app.keuangan', compact('app'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div role="tabpanel" class="tab-pane <?php echo e(autoTab('tab2')); ?>" id="tab2">
              <?php echo $__env->make('includes.app.lkm_satu', compact('app'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div role="tabpanel" class="tab-pane <?php echo e(autoTab('tab3')); ?>" id="tab3">
              <?php echo $__env->make('includes.app.lkm_dua', compact('app'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div role="tabpanel" class="tab-pane <?php echo e(autoTab('tab4')); ?>" id="tab4">
              <?php echo $__env->make('includes.app.nap_satu', compact('app'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            
          </div>

        </div>
        <div class="panel-footer">
            <button class="btn btn-success btn-sm" onclick="updateAplikasi()">Perbaharui</button>
            <a class="btn btn-default btn-sm" href="todo_list.html#">Batalkan</a>
        </div>
      </div>
    </section>
    <footer class="site-footer">
          <div class="text-center">
          <div id="app">
            {{ message }}
          </div>
              Footer
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('bottscript'); ?>
<!-- InputMask -->
<script src="<?php echo e(url('plugins/input-mask/jquery.inputmask.js')); ?>"></script>
<script src="<?php echo e(url('plugins/input-mask/jquery.inputmask.date.extensions.js')); ?>"></script>
<script src="<?php echo e(url('plugins/input-mask/jquery.inputmask.extensions.js')); ?>"></script>

<script>
  $(function() {
    //Datemask dd/mm/yyyy
    $("[data-mask]").inputmask();
  });
</script>

<script>
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
      
      console.log('.judul-' + jenisRow + '-' + table);
      console.log('.isi-' + jenisRow + '-' + table);      
      console.log(judul);
      console.log(isi);

       if(table == 'pdp'){
        var url = '<?php echo e(url('update-pendapatan')); ?>';
      } else if(table == 'pngl') {
        var url = '<?php echo e(url('update-pengeluaran')); ?>';
      } else if(table == 'neraca'){
        var url = '<?php echo e(url('update-neraca')); ?>';
      } else {
        alert("Url tujuan tidak valid!");
        return;
      }
      $.post(""+ url, {
          _token: '<?php echo e(csrf_token()); ?>',
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
        var url = '<?php echo e(url('hapus-pendapatan')); ?>';
      } else if(table == 'pngl') {
        var url = '<?php echo e(url('hapus-pengeluaran')); ?>';
      } else if(table == 'neraca') {
        var url = '<?php echo e(url('hapus-neraca')); ?>';
      } else {
        alert("Url tujuan tidak valid!");
        return;
      }
    $.post(""+ url, {_token: '<?php echo e(csrf_token()); ?>', id : id}, function(data, textStatus, xhr) {
        /*optional stuff to do after success */
        //console.log(data);
        alert(data);
          location.reload();
    });
  }

  function updateAplikasi(){
    console.log("submited");
    var form = $("#tab1_form");
    var data = form.serialize();
    var url = '/update-aplikasi';
    var map = {};
    $('.inputable').each(function(index, el) {
      map[$(this).attr('name')] = $(this).val();
    });
    console.log(map);
    $.post(""+ url, {_token: '<?php echo e(csrf_token()); ?>', isi: map }, function(data, textStatus, xhr) {
    
      console.log(data);
    });
  }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main-layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>