<br>
<div class="col-md-8">
    <table width="600px">
    <caption class="title">Diisi Oleh UJKS</caption>
    <tr>
        <td>
            NO.Aplikasi
        </td>
        <td>
        <div class="form-group">
            <font size="4.2em" style="font-weight: bolder;"><span id="no_applikasi"><?php echo e($app->no_aplikasi); ?></span></font>
            </div>
        </td>
    </tr>
    <tr>
        <td width="210px">
            Tanggal Diisi
        </td>
        <td>
        <div class="form-group">
            <input type="text" class="form-control" value="<?php echo e(readDate($app->tanggal)); ?>" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
            </div>
        </td>
    </tr>
    
    <tr>
        <td>
            Cabang
        </td>
        <td>
        <div class="form-group">
            <select name="" id="" class="form-control">
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
            <input type="text" class="form-control" value="<?php echo e($app->kode_sro); ?>">
            </div>
        </td>
    </tr>
    <tr>
        <td>
            Bagaimana perkenalan terjadi ?
        </td>
        <td>
         <div class="form-group">
           <select name="" id="" class="form-control">
               <?php $__currentLoopData = getEnum(new App\Aplikasi, 'perkenalan'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($m_key); ?>" <?php echo e(autoSelect($app->perkenalan, $m_val)); ?>><?php echo e($m_val); ?></option>
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
            <input type="text" class="form-control" value="<?php echo e($app->nama_sro); ?>">
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            Saya merekomendasikan agar aplikasi ini &nbsp;&nbsp;
            <select name="" id="" class="clean">
               <?php $__currentLoopData = getEnum(new App\Aplikasi, 'saran'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($m_key); ?>" <?php echo e(autoSelect($app->saran, $m_val)); ?>><?php echo e($m_val); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </td>
    </tr>
</table>
</div>
