
<br>
<div class="col-md-8">
    <table width="600px">
    <form action="<?php echo e(url('update-aplikasi')); ?>" method="POST" id="tabl_form">
    <!-- <caption class="title">Diisi Oleh UJKS</caption> -->
    <?php echo csrf_field(); ?>

    <tr>
        <td>
            NO.Aplikasi
        </td>
        <td>
        <div class="form-group">
            
            <font size="4.2em" style="font-weight: bolder;" name=""><span id="no_applikasi"><?php echo e($app->no_aplikasi); ?></span></font>
            </div>
        </td>
    </tr>
    <tr>
        <td width="210px">
            Tanggal Diisi
        </td>
        <td>
        <div class="form-group">
            <input type="text" class="form-control inputable" value="<?php echo e(readDate($app->tanggal)); ?>"  name="tab1_tanggal" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
            </div>
        </td>
    </tr>
    
    <tr>
        <td>
            Cabang
        </td>
        <td>
        <div class="form-group">
            <select name="tab1_cabang_id" id="" class="form-control inputable">
                <?php $__empty_1 = true; $__currentLoopData = $cabangs->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cabang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <option value="<?php echo e($cabang->id); ?>" <?php echo e(autoSelect($app->cabang_id, $cabang->id)); ?>><?php echo e($cabang->nama); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <?php endif; ?>
            </select>
        </div>
        </td>
    </tr>
    <tr>
        <td>
            Kode SRO
        </td>
        <td>
         <div class="form-group">
            <input type="text"  name="tab1_kode_sro" class="form-control inputable" value="<?php echo e($app->kode_sro); ?>">
            </div>
        </td>
    </tr>
    <tr>
        <td>
            Bagaimana perkenalan terjadi ?
        </td>
        <td>
         <div class="form-group">
           <select name="tab1_perkenalan" id="" class="form-control inputable">
               <?php $__currentLoopData = getEnum(new App\Aplikasi, 'perkenalan'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($m_val); ?>" <?php echo e(autoSelect($app->perkenalan, $m_val)); ?>><?php echo e($m_val); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            </div>
        </td>
    </tr>
    <tr>
        <td>
           Nama SRO
        </td>
        <td>
         <div class="form-group">
            <input type="text"  name="tab1_nama_sro" class="form-control inputable" value="<?php echo e($app->nama_sro); ?>">
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            Saya merekomendasikan agar aplikasi ini &nbsp;&nbsp;
            <select name="tab1_saran" id="" class="clean inputable">
               <?php $__currentLoopData = getEnum(new App\Aplikasi, 'saran'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($m_val); ?>" <?php echo e(autoSelect($app->saran, $m_val)); ?>><?php echo e($m_val); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </td>
    </tr>
    </form>
</table>
</div>