
<br>
<div class="col-md-6">
    <table width="100%">
    <caption class="title">DATA PEMOHON</caption>
    <tr>
        <td>
            Nama (Sesuai KTP)
        </td>
        <td>
        <div class="form-group">
            <input type="text" name="tab2_nama_lengkap" class="form-control inputable" value="<?php echo e($app->mitra->nama_lengkap); ?>">
            </div>
        </td>
    </tr>
    <tr>
        <td>
            Nama Panggilan
        </td>
        <td>
        <div class="form-group">
            <input type="text" name="tab2_nama_panggilan" class="form-control inputable" value="<?php echo e($app->mitra->nama_panggilan); ?>">
            </div>
        </td>
    </tr>
    <tr>
        <td>
            Jenis Kelamin
        </td>
        <td>
        <div class="form-group">
           <input type="radio" class="inputable" name="tab2_jk" value="L" <?php echo e(autoChecked($app->mitra->jk, 'L')); ?>> Laki-laki
           <input type="radio" class="inputable"  name="tab2_jk" value="P" <?php echo e(autoChecked($app->mitra->jk, 'P')); ?>> Perempuan
        </div>
        </td>
    </tr>
    <tr>
        <td>
            No. Telepon/ HP
        </td>
        <td>
         <div class="form-group">
            <input type="text" class="form-control inputable"  name="tab2_no_telp" value="<?php echo e($app->mitra->no_telp); ?>">
            </div>
        </td>
    </tr>
    <tr>
        <td>
            No. KTP
        </td>
        <td>
         <div class="form-group">
            <input type="text" class="form-control inputable"  name="tab2_no_ktp" value="<?php echo e($app->mitra->no_ktp); ?>">
            </div>
        </td>
    </tr>
    <tr>
        <td>
            KTP Berlaku Sampai
        </td>
        <td>
         <div class="form-group">
            <input type="text" class="form-control inputable" name="tab2_tgl_aktif_ktp" value="<?php echo e(readDate($app->mitra->tgl_aktif_ktp)); ?>"data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
            </div>
        </td>
    </tr>
    <tr>
        <td>
           Tanggal Lahir
        </td>
        <td>
         <div class="form-group">
            <input type="text" class="form-control inputable" name="tab2_tgl_lahir" value="<?php echo e(readDate($app->mitra->tgl_lahir)); ?>"data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            Pendidikan Terakhir
        </td>
        <td>
         <div class="form-group">
            <select name="tab2_pendidikan" id="" class="form-control inputable">
               <?php $__currentLoopData = getEnum($mitraModel, 'pendidikan'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <option value="<?php echo e($m_val); ?>" <?php echo e(autoSelect($app->mitra->pendidikan, $m_val)); ?>><?php echo e($m_val); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <!-- <input type="text" class="form-control inputable" value="<?php echo e($app->mitra->pendidikan); ?>"> -->
            </div>
        </td>
    </tr>
    <tr>
        <td>
            Status Perkawinan
        </td>
        <td>
         <div class="form-group">
            <select name="tab2_status_kawin" id="" class="form-control inputable">
               <?php $__currentLoopData = getEnum($mitraModel, 'status_kawin'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <option value="<?php echo e($m_val); ?>" <?php echo e(autoSelect($app->mitra->status_kawin, $m_val)); ?>><?php echo e($m_val); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            Nama Pasangan
        </td>
        <td>
         <div class="form-group">
            <input type="text" name="tab2_nama_pasangan" class="form-control inputable" value="<?php echo e($app->mitra->nama_pasangan); ?>">
            </div>
        </td>
    </tr>
    <tr>
        <td>
            Tanggal Lahir Pasangan
        </td>
        <td>
         <div class="form-group">
            <input type="text"  name="tab2_tgl_lahir_pasangan" class="form-control inputable" value="<?php echo e(readDate($app->mitra->tgl_lahir_pasangan)); ?>" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            Nama Ibu Kandung
        </td>
        <td>
         <div class="form-group">
            <input type="text" name="tab2_nama_ibu"  class="form-control inputable" value="<?php echo e($app->mitra->nama_ibu); ?>">
            </div>
        </td>
    </tr>
    <tr>
        <td>
            Jumlah Tanggungan
        </td>
        <td>
         <div class="form-group">
            <input type="text" name="tab2_jumlah_tanggungan"  class="form-control inputable" value="<?php echo e($app->mitra->jumlah_tanggungan); ?>">
            </div>
        </td>
    </tr>
</table>
</div>
<div class="col-md-6">

    <table width="100%">
    <caption class="title">KETERANGAN TEMPAT TINGGAL</caption>
    <tr>
        <td colspan="2">
        <h4>Tempat Tinggal Sekarang</h4>
            <hr>
        <div class="form-group">
            <input type="text" name="tab2_alamat1" class="form-control inputable" value="<?php echo e(getAlamat('blk', $app->mitra->alamat->alamat_sekarang)); ?>" placeholder="Nama blok">
            </div>
            <div class="form-group">
                <input type="text"  name="tab2_alamat2" class="form-control inputable" value="<?php echo e(getAlamat('jl', $app->mitra->alamat->alamat_sekarang)); ?>" placeholder="Nama jalan">
            </div>
        </td>
    </tr>
    <tr>
        <td>RT/RW</td>
        <td>
            <div class="col-sm-6 no-padding">
            <div class="form-grup">
                <input type="text"  name="tab2_alamat3" class="form-control inputable" value="<?php echo e(getAlamat('rt', $app->mitra->alamat->alamat_sekarang)); ?>">
            </div>
            </div>
            <div class="col-sm-6 no-padding">
                <div class="form-group">
                    <input type="text" name="tab2_alamat4" class="form-control inputable" value="<?php echo e(getAlamat('rw', $app->mitra->alamat->alamat_sekarang)); ?>">
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>Kode POS</td>
        <td>
            <div class="form-group">
                <input type="text" class="form-control inputable" name="tab2_alamat5" value="<?php echo e(getAlamat('pos', $app->mitra->alamat->alamat_sekarang)); ?>">
            </div>
        </td>
    </tr>
    <tr>
        <td>Kecamatan</td>
        <td>
            <div class="form-group">
                <input type="text" class="form-control inputable" name="tab2_alamat6" value="<?php echo e(getAlamat('kec', $app->mitra->alamat->alamat_sekarang)); ?>">
            </div>
        </td>
    </tr>
    <tr>
        <td>Kota/Kabupaten</td>
        <td>
            <div class="form-group">
                <input type="text" class="form-control inputable" name="tab2_alamat7"  value="<?php echo e(getAlamat('kot', $app->mitra->alamat->alamat_sekarang)); ?>">
            </div>
        </td>
    </tr>
    <!-- Batal tmpat tinggal -->
    <tr>
        <td colspan="2">
        <h4>Tempat Tinggal Sesuai KTP</h4>
            <hr>
        <div class="form-group">
            <input type="text" class="form-control inputable" name="tab2_alamat8"  value="<?php echo e(getAlamat('blk', $app->mitra->alamat->alamat_ktp)); ?>" placeholder="Nama blok">
            </div>
            <div class="form-group">
                <input type="text" class="form-control inputable" name="tab2_alamat9" value="<?php echo e(getAlamat('jl', $app->mitra->alamat->alamat_ktp)); ?>" placeholder="Nama jalan">
            </div>
        </td>
    </tr>
    <tr>
        <td>RT/RW</td>
        <td>
            <div class="col-sm-6 no-padding">
            <div class="form-grup">
                <input type="text" class="form-control inputable" name="tab2_alamat10"  value="<?php echo e(getAlamat('rt', $app->mitra->alamat->alamat_ktp)); ?>">
            </div>
            </div>
            <div class="col-sm-6 no-padding">
                <div class="form-group">
                    <input type="text" class="form-control inputable" name="tab2_alamat11" value="<?php echo e(getAlamat('rw', $app->mitra->alamat->alamat_ktp)); ?>">
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>Kode POS</td>
        <td>
            <div class="form-group">
                <input type="text" class="form-control inputable" name="tab2_alamat12" value="<?php echo e(getAlamat('pos', $app->mitra->alamat->alamat_ktp)); ?>">
            </div>
        </td>
    </tr>
    <tr>
        <td>Kecamatan</td>
        <td>
            <div class="form-group">
                <input type="text" class="form-control inputable" name="tab2_alamat13" value="<?php echo e(getAlamat('kec', $app->mitra->alamat->alamat_ktp)); ?>">
            </div>
        </td>
    </tr>
    <tr>
        <td>Kota/Kabupaten</td>
        <td>
            <div class="form-group">
                <input type="text" class="form-control inputable" name="tab2_alamat14" value="<?php echo e(getAlamat('kot', $app->mitra->alamat->alamat_ktp)); ?>">
            </div>
        </td>
    </tr>
</table>
</div>