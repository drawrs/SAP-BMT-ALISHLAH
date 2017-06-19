<br>
<div class="col-md-8">
    <table width="600px">
    <!-- <caption class="title">Diisi Oleh UJKS</caption> -->
    <tr>
        <td>
            NO.Aplikasi
        </td>
        <td>
        <div class="form-group">
            <input type="hidden" class="no_aplikasi inputable" name="no_aplikasi" value="<?php echo e($no_app); ?>" required>
            <font size="4.2em" style="font-weight: bolder;" name="" class="no_aplikasi"><span id="no_aplikasi"><?php echo e($no_app); ?></span></font>
            </div>
        </td>
    </tr>
    
    <tr>
        <td width="210px">
            NO KTP Mitra
        </td>
        <td>
        <div class="form-group">
            <select class="form-control inputable input2" value=""  name="no_ktp" required>
            </select>
            </div>
        </td>
    </tr>
    <tr>
        <td width="210px">
            Tanggal Diisi
        </td>
        <td>
        <div class="form-group">
            <input type="text" class="form-control inputable" value=""  name="tanggal" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask required>
            </div>
        </td>
    </tr>
    
    <tr>
        <td>
            Cabang
        </td>
        <td>
        <div class="form-group">
            <select name="cabang_id" id="pilih_cabang" class="form-control inputable select2" required>
                <?php $__empty_1 = true; $__currentLoopData = $cabangs->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cabang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <option value="<?php echo e($cabang->id); ?>"><?php echo e($cabang->nama); ?></option>
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
            <input type="text"  name="kode_sro" class="form-control inputable" value="" required>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            Bagaimana perkenalan terjadi ?
        </td>
        <td>
         <div class="form-group">
           <select name="perkenalan" id="" class="form-control inputable" required>
               <?php $__currentLoopData = getEnum(new App\Aplikasi, 'perkenalan'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($m_val); ?>"><?php echo e($m_val); ?></option>
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
            <input type="text"  name="nama_sro" class="form-control inputable" value="" required>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            Saya merekomendasikan agar aplikasi ini &nbsp;&nbsp;
            <select name="saran" id="" class="clean inputable" required>
               <?php $__currentLoopData = getEnum(new App\Aplikasi, 'saran'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($m_val); ?>"><?php echo e($m_val); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </td>
    </tr>
</table>
</div>
