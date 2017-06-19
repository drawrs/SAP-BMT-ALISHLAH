<?php $__env->startSection('page', 'Dashboard'); ?>
<?php $__env->startSection('main-content'); ?>
<!-- <h3><i class="fa fa-angle-right"></i> Blank Page</h3> -->
<div class="row mt">
    <div class="col-md-12">
      <div class="box">
        <div class="box-body">
          <div class="alert alert-<?php echo e(Session::get('type')); ?>">
           <b><?php echo e(Session::get('msg')); ?></b>
          </div>
        </div>
      </div>
      <section class="task-panel tasks-widget">
        <div class="panel-heading">
                <div class="pull-left">
                <h5><i class="fa fa-tasks"></i> DAFTAR APLIKASI</h5>
            </div>
                
            <br>
        </div>
        <div class="panel-body">
        <?php echo $__env->make('includes.panel-cari', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          <div class="task-content">

              <ul class="task-list">
                  <li>
                      
                      <div class="task-title">
                      <?php $__currentLoopData = $apps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $app): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      
                      <div class="col-sm-4 round-border">
                          <table class="table table-borderless">
                          <tr>
                              <td>PEMOHON</td>
                              <td>:</td>
                              <td colspan="2"><a href="<?php echo e(url('detail-mitra?id=' . $app->mitra_id )); ?>" target="blank"><?php echo e($app->mitra->nama_lengkap); ?></a></td>
                              
                          </tr>
                          <tr>
                              <td width="100px">NO APLIKASI</td>
                              <td>:</td>
                              <td><strong><?php echo e($app->no_aplikasi); ?></strong></td>
                              <td><a href="<?php echo e(route('lihat_ap', ['no_ap' => $app->no_aplikasi])); ?>" class="btn btn-warning btn-block btn-xs"><i class="fa fa-book"></i> detail</a></td>
                              <!-- <td><button class="btn btn-success btn-block btn-xs"><i class="fa fa-pencil"></i> ubah</button></td> -->
                          </tr>
                          <tr>
                              <td width="100px">TGL DIISI</td>
                              <td>:</td>
                              <td><strong><?php echo e(readDate($app->tanggal)); ?></strong></td>
                              <td><a href="<?php echo e(route('hapus_ap', ['id' => $app->id])); ?>" onclick="return confirm('Anda yakin ingin menghapus aplikasi ini?')" class="btn btn-danger btn-block btn-xs"><i class="fa fa-trash-o"></i> hapus</a></td>
                              <!-- <td><button class="btn btn-success btn-block btn-xs"><i class="fa fa-pencil"></i> ubah</button></td> -->
                          </tr>
                          <tr>
                              <td>PRODUK</td>
                              <td>:</td>
                              <td><?php echo e($app->produk->nama); ?></td>
                              
                          </tr>
                          
                      </table>
                      </div>

                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </div>
                  </li>                                   
              </ul>
          </div>

          <div class=" add-task-row">
              <a class="btn btn-success btn-sm pull-left" href="<?php echo e(url('tambah-aplikasi')); ?>">Tambah Aplikasi</a>
              <a class="btn btn-default btn-sm pull-right" href="todo_list.html#">See All Tasks</a>
          </div>
          
      </div>
      <div class="container">
        <?php echo $apps->links(); ?>

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