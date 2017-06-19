<div class="blog">
    <form action="" class="form-inline">
        <div class="form-group">
            <input type="text" class="form-control" name="q" placeholder="ketikan sesuatu.." size="60%">
            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i> cari</button>
        </div>
    </form>
    <br>
    <?php if(Request::has('q')): ?>
        <div class="alert alert-info">
            Menampilkan hasil : <b><?php echo e(Request::get('q')); ?></b> &nbsp;&nbsp;&nbsp;<u><small><a  onclick='window.location.href = window.location.pathname;' style="cursor: pointer;"><i class="fa fa-times"></i> tutup</a></small></u>
        </div>
    <?php elseif(Request::has('no_ktp')): ?>
        <div class="alert alert-warning">
            Daftar Aplikasi : <b><?php echo e(gelar($single_mitra->jk)); ?>  <?php echo e($single_mitra->nama_lengkap); ?></b> ( <?php echo e(Request::get('no_ktp')); ?> ) &nbsp;&nbsp;&nbsp;<u><small><a href="<?php echo e(url('dashboard')); ?>"><i class="fa fa-times"></i> tutup</a></small></u>
        </div>
    <?php endif; ?>
</div>
<script>
    function tutupCari(){
        window.location.href = "lalal";
    }
</script>