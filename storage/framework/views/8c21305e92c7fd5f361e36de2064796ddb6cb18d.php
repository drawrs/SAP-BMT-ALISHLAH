<?php $__env->startSection('page', 'Tambah Aplikasi Baru'); ?>
<?php $__env->startSection('main-content'); ?>
<!-- <h3><i class="fa fa-angle-right"></i> Blank Page</h3> -->
<div class="row mt">
  <div class="col-md-12">
    <section class="task-panel tasks-widget">
    <form action="<?php echo e(url('tambah-aplikasi')); ?>" method="POST">
    <?php echo e(csrf_field()); ?>

      <div class="panel-heading panel-app">
          <i class="fa fa-tasks"></i> PRODUK : <select name="produk_id" id="tipe_produk" class="clean inputable">
            <?php $__empty_1 = true; $__currentLoopData = $produks->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <option value="<?php echo e($prd->id); ?>"><?php echo e($prd->nama); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <?php endif; ?>
          </select>
          <div class="pull-right">
            Nilai Pembiayaan Yang Diminta : Rp. <input type="text" name="nominal_pb" value="" id="nominal_pb" class="clean inputable" required>
            <br>
            Janga Waktu Pembayaran <input type="text" value="" name="waktu_pb" size="2" class="clean" required> bulan
          </div>
      </div>
      <div class="panel-body">

          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
          <li role="presentation"  class="normal-tabs <?php echo e(autoTab('tabInfo')); ?>"><a href="#tabInfo" aria-controls="profile" role="tab" data-toggle="tab">Info</a></li>
          <li role="presentation" class="disabled"><a  aria-controls="home" role="tab">Aplikasi (data mitra)</a></li>
          <li role="presentation" class="disabled"><a aria-controls="home" role="tab">Aplikasi (data keuangan)</a></li>
          <li role="presentation" class="disabled"><a aria-controls="profile" role="tab">LKM.1</a></li>
          <li role="presentation" class="disabled"><a aria-controls="profile" role="
          tab" id="tab_lkm_pc">LKM.2</a></li>
          <li role="presentation" class="disabled"><a aria-controls="profile" role="tab" id="tab_nap_one">NAP.1</a></li>
            
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane <?php echo e(autoTab('tabInfo')); ?>" id="tabInfo">
              <?php echo $__env->make('includes.tambah-app.info', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            
            
          </div>

        </div>
        <div class="panel-footer">
            <button class="btn btn-success" type="submit" id="" onclick="">Lanjutkan</button>
            <a class="btn btn-default" type="reset" href="todo_list.html#">Batalkan</a>
        </div>
      </div>
      </form>
    </section>
    <footer class="site-footer">
          <div class="text-center">
          <div id="app">
           
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
    $('.select2').select2({
      theme: "bootstrap",

    });
    $('.input2').select2({
      theme: "bootstrap",
      tags: true,
      tokenSeparators: [',', ' '],
      ajax: {
        url: "/get-data-ktp",
        dataType: 'json',
        delay: 250,
        data: function (params) {
            return {
                q: params.term // search term
            };
        },
        processResults: function (data) {
            // parse the results into the format expected by Select2.
            // since we are using custom formatting functions we do not need to
            // alter the remote JSON data
            //console.log(data);
            return {
                results: $.map(data, function(item) {

                  return {
                    text: item.no_ktp + " ( " + item.nama + " )",
                    id: item.no_ktp
                  }
                })
            };
        },
        cache: true
    },
    minimumInputLength: 2
    });
    $("[data-mask]").inputmask();
    $('.normal-tabs').click(function(event) {
      /* Act on the event */
      var tab = $(this).find('a').attr('href').substring(1, 100);
      var tab_url = window.location.pathname + "?v=" + tab;
      // change the url without reloading
      window.history.pushState('page2', '', tab_url);
      //console.log(tab_url);
    });
    $('#pilih_cabang').change(function(event) {
      /* Act on the event */
      var kode_kantor = $(this).val();
      $.post('/get-no-aplikasi/' + kode_kantor, {_token: '<?php echo e(csrf_token()); ?>' }, function(data, textStatus, xhr) {
        /*optional stuff to do after success */
        var result = JSON.parse(data);
        $('#no_aplikasi').text(result.result);
        $('.no_aplikasi').val(result.result);
        //console.log(result.result);
      });
    });
  });
</script>

<script>
 
  
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main-layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>