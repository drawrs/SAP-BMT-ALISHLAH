<?php $__env->startSection('page', 'Aplikasi : ' . $app->mitra->nama_lengkap . ' (' . $app->no_aplikasi . ')'); ?>
<?php $__env->startSection('main-content'); ?>
<!-- <h3><i class="fa fa-angle-right"></i> Blank Page</h3> -->
<div class="row mt">
  <div class="col-md-12">
    <section class="task-panel tasks-widget">
      <div class="panel-heading panel-app">
          <i class="fa fa-tasks"></i> PRODUK : <select name="tab1_produk_id" id="tipe_produk" class="clean inputable" disabled="">
            <?php $__empty_1 = true; $__currentLoopData = $produks->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
              <option value="<?php echo e($prd->id); ?>" <?php echo e(autoSelect($app->produk_id, $prd->id)); ?>><?php echo e($prd->nama); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <?php endif; ?>
          </select>
          <a href="<?php echo e(url('/ubah-aplikasi/'. $app->no_aplikasi )); ?>" class="btn btn-primary"><i class="fa fa-edit"></i> UBAH DATA</a>
          <div class="pull-right">
            Nilai Pembiayaan Yang Diminta : Rp. <input type="text" disabled='1' name="tab1_nominal_pb" value="<?php echo e($app->nominal_pb); ?>" id="nominal_pb" class="clean inputable">
            <br>
            Janga Waktu Pembayaran <input type="text" disabled='1' value="<?php echo e($app->waktu_pb); ?>" id="waktu_pb" size="2" class="clean inputable"> bulan
          </div>
      </div>
      <div class="panel-body">

          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
          <li role="presentation"  class="normal-tabs <?php echo e(autoTab('tabInfo')); ?>"><a href="#tabInfo" aria-controls="profile" role="tab" data-toggle="tab">Info</a></li>
          <li role="presentation" class="normal-tabs <?php echo e(autoTab('tab1_1')); ?>"><a href="#tab1_1" aria-controls="home" role="tab" data-toggle="tab">Aplikasi (data mitra)</a></li>
          <li role="presentation" class="normal-tabs <?php echo e(autoTab('tab1_2')); ?>"><a href="#tab1_2" aria-controls="home" role="tab" data-toggle="tab">Aplikasi (data keuangan)</a></li>
          <li role="presentation" class="normal-tabs <?php echo e(autoTab('tab2')); ?>"><a href="#tab2" aria-controls="profile" role="tab" data-toggle="tab">LKM.1</a></li>
          <li role="presentation" class="<?php echo e(autoTab('tab3')); ?>"><a href="#tab3" aria-controls="profile" role="
          tab" data-toggle="tab" id="tab_lkm_pc">LKM.2</a></li>
          <li role="presentation" class="normal-tabs <?php echo e(autoTab('tab4')); ?>"><a href="#tab4" aria-controls="profile" role="tab" data-toggle="tab" id="tab_nap_one">NAP.1</a></li>
          <li role="presentation" class="normal-tabs <?php echo e(autoTab('tab5')); ?>"><a href="#tab5" aria-controls="profile" role="tab" data-toggle="tab" id="tab_nap_one">NAP.2</a></li>
          <li role="presentation" class="normal-tabs <?php echo e(autoTab('tab6')); ?>"><a href="#tab6" aria-controls="profile" role="tab" data-toggle="tab" id="tab_nap_one">Dokumen Ceklis</a></li>
            
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
            <div role="tabpanel" class="tab-pane <?php echo e(autoTab('tab5')); ?>" id="tab5">
              <?php echo $__env->make('includes.app.nap_dua', compact('app'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div role="tabpanel" class="tab-pane <?php echo e(autoTab('tab6')); ?>" id="tab6">
              <?php echo $__env->make('includes.app.dokumen', compact('app'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            
          </div>

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
<!-- LARAVEL TOKEN -->
<input type="hidden" name="_token" id="_token" value="<?php echo e(csrf_token()); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('bottscript'); ?>
<!-- InputMask -->
<script src="<?php echo e(url('plugins/input-mask/jquery.inputmask.js')); ?>"></script>
<script src="<?php echo e(url('plugins/input-mask/jquery.inputmask.date.extensions.js')); ?>"></script>
<script src="<?php echo e(url('plugins/input-mask/jquery.inputmask.extensions.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main-layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>