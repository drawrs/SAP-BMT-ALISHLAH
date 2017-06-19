<?php $__env->startSection('page', 'Daftar Akun'); ?>
<?php $__env->startSection('main-content'); ?>
<!-- <h3><i class="fa fa-angle-right"></i> Blank Page</h3> -->
<div class="row mt">
    <div class="col-md-12">
      <section class="task-panel tasks-widget">
        <div class="panel-heading">
                <div class="pull-left">
                <h5><i class="fa fa-tasks"></i> DAFTAR AKUN</h5>
            </div>
                
            <br>
        </div>
        <div class="panel-body">
        <?php echo $__env->make('includes.panel-cari', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          <div class="task-content">
          <?php echo $__env->make('includes.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Email</td>
                <td>Jabatan</td>
                <td>Level</td><!-- 
                <td>NO TELP / HP</td>
                <td>APLIKASI</td> -->
                <td>act</td>
              </tr>
            </thead>
            <tbody>
            <?php  $no = 1;  ?>
              <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                  <td><?php echo e($no++); ?></td>
                  <td><?php echo e($user->name); ?></td>
                  <td><?php echo e($user->email); ?></td>
                  <td><?php echo e($user->detail->jabatan); ?></td>
                  <td><?php echo e($user->detail->level); ?></td>
                  <td>
                    <button href="" class="btn btn-success btn-xs" onclick="btnUbah(<?php echo e($user->id); ?>)"> Ubah</button>
                    <a href="" class="btn btn-danger btn-xs" onclick="return confirm('Anda yakin akan menghapus mitra ini? Semua data yang berkaitan dengan mitra ini juga akan dihapus!')"><i class="fa fa-trash"></i> Hapus</a>
                  </td>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
              <?php endif; ?>
            </tbody>
          </table>
          <?php echo $users->links(); ?>

          </div>

          <div class=" add-task-row">
              <a class="btn btn-success btn-sm pull-left" href="<?php echo e(url('tambah-mitra')); ?>"><i class="fa fa-plus"></i> Tambah Mitra</a>
              <!-- <a class="btn btn-default btn-sm pull-right" href="todo_list.html#">See All Tasks</a> -->
          </div>
          
      </div>
  </section>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalUbah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <div class="wrapper" style="margin-top: 0">
          <form action="<?php echo e(url('ubah-akun')); ?>" method="POST" class="form-horizontal">
          <input type="hidden" name="id" value="" id="id">
          <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" id="_token">
          <div class="form-group">
            <label for="">Nama lengkap</label>
            <input type="text" name="name" id="name" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Jabatan</label>
            <select name="jabatan" id="jabatan" class="form-control">
              <?php $__currentLoopData = getEnum(new App\UserDetail, 'jabatan'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($m_val); ?>"><?php echo e($m_val); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
          <div class="form-group">
            <label for="">Level</label>
            <select name="level" id="level" class="form-control">
              <?php $__currentLoopData = getEnum(new App\UserDetail, 'level'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($m_val); ?>"><?php echo e($m_val); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
          <div class="form-group">
            <label for="">
              <b>Klik <a href="#" id="ubahSandi">disini</a> untuk mengubah katasandi</b>
            </label>
          </div>
        
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan perubahan</button></form>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modalUbahPwd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <div class="wrapper" style="margin-top: 0">
          <form action="<?php echo e(url('ubah-sandi')); ?>" method="POST" class="form-horizontal">
          <input type="hidden" name="id" value="" id="id2">
          <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" id="_token2">
          <div class="form-group">
            <label for="">Katasandi Baru</label>
            <input type="password" name="password" id="password" class="form-control">
          </div>
          
        
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan perubahan</button></form>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('bottscript'); ?>
<script>
  $(function() {
    $('#ubahSandi').click(function(event) {
      /* Act on the event */
      $('#modalUbah').modal('hide');
      $('#modalUbahPwd').modal('show');
    });
  });
</script>
<script>
   function btnUbah(id){
      getAkun(id, function(){
        //console.log('baru sini');
        $('#modalUbah').modal('show');
      })
   }
   function getAkun(id, callback){
    var token = $('#_token').val();
    $.post('/get-akun', {_token: token, id: id}, function(data, textStatus, xhr) {
      /*optional stuff to do after success */
      $('#id').val(id);
      $('#id2').val(id);
      $('#name').val(data.name);
      $('#jabatan').val(data.jabatan);
      $('#level').val(data.level);
      //console.log(data.name);
    });
    callback(callback);
   }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main-layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>