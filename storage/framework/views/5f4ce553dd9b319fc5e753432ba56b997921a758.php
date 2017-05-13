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
            <a class="btn btn-success btn-sm" href="todo_list.html#">Perbaharui</a>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main-layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>