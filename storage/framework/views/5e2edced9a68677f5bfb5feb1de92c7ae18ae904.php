<?php $__env->startSection('page', 'Daftar Mitra'); ?>
<?php $__env->startSection('main-content'); ?>
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
        <?php echo $__env->make('includes.panel-cari', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
            <?php  $no = 1;  ?>
              <?php $__empty_1 = true; $__currentLoopData = $mitras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mitra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                  <td><?php echo e($no++); ?></td>
                  <td><?php echo e($mitra->no_ktp); ?></td>
                  <td><?php echo e($mitra->nama_lengkap); ?></td>
                  <td><?php echo e($mitra->tgl_lahir); ?></td>
                  <td><?php echo e($mitra->status_kawin); ?></td>
                  <td><?php echo e($mitra->jk); ?></td>
                  <td><?php echo e($mitra->no_telp); ?></td>
                  <td>
                    <u><a href="<?php echo e(url('dashboard?no_ktp='. $mitra->no_ktp)); ?>">Lihat aplikasi</a></u>
                  </td>
                  <td>
                    <a href="<?php echo e(url('detail-mitra?id='.$mitra->id)); ?>" class="btn btn-success btn-xs"><i class="fa fa-list"></i> Detail</a>
                    <a href="<?php echo e(url('hapus-mitra/' . $mitra->id)); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Anda yakin akan menghapus mitra ini? Semua data yang berkaitan dengan mitra ini juga akan dihapus!')"><i class="fa fa-trash"></i> Hapus</a>
                  </td>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
              <?php endif; ?>
            </tbody>
          </table>
          <?php echo $mitras->links(); ?>

          </div>

          <div class=" add-task-row">
              <a class="btn btn-success btn-sm pull-left" href="<?php echo e(url('tambah-mitra')); ?>"><i class="fa fa-plus"></i> Tambah Mitra</a>
              <!-- <a class="btn btn-default btn-sm pull-right" href="todo_list.html#">See All Tasks</a> -->
          </div>
          
      </div>
  </section>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('bottscript'); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main-layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>