<br>
<table width="400px">
    <tr>
        <td><h4>Tanggal Penilaian</h4></td>
        <td>
            <input disabled='1' type="text" size="30" value="" class="clean"  data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
            <button class="btn btn-primary" title="Perbaharui tanggal Penilaian"><i class="fa fa-refresh"></i></button>
        </td>
    </tr>
</table>
<div class="task-content">
<br>
  <div class="row">
  <?php $__currentLoopData = $konfirmasi_pk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kpk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <form action="" id="kpk_<?php echo e($kpk->id); ?>" class="form lkmDua">
    <input disabled='1' type="hidden" name="id" value="<?php echo e($kpk->id); ?>">
    <input disabled='1' type="hidden" name="tab4_lkm_pc_id" id="tab4_lkm_pc_id" value="<?php echo e($kpk->lkm_pc_id); ?>">
    <div class="col-md-6 bordered">
    <span>Konfirmasi Dengan Pihak Ketiga</span>
    <hr>
    <table class="table table-responsive table-borderless">
      <tr>
        <td width="150px">Nama Orang Yang Ditemui</td>
        <td><input disabled='1' name="tab4_nama" type="text" class="form-control" value="<?php echo e($kpk->nama); ?>"></td>
      </tr>
      <tr>
        <td>Hubungan</td>
        <td>
          <select disabled='1' name="tab4_hbng" id="" class="form-control">
             <?php $__currentLoopData = getEnum(new App\KonPK, 'hbng'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($m_key); ?>" <?php echo e(autoSelect($kpk->hbng, $m_val)); ?>><?php echo e($m_val); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </select>
        </td>
      </tr>
      <tr>
        <td>Lama berhubungan</td>
        <td>
          <select disabled='1' name="tab4_lm_hbng" id="" class="form-control">
             <?php $__currentLoopData = getEnum(new App\KonPK, 'lm_hbng'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($m_val); ?>" <?php echo e(autoSelect($kpk->lm_hbng, $m_val)); ?>><?php echo e($m_val); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </select>
        </td>
      </tr>
      <tr>
        <td>Apakah Karakter Pemohon Baik?</td>
        <td>
          <select disabled='1' name="tab4_krkt_baik" id="" class="form-control">
             <?php $__currentLoopData = getEnum(new App\KonPK, 'krkt_baik'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($m_val); ?>" <?php echo e(autoSelect($kpk->krkt_baik, $m_val)); ?>><?php echo e($m_val); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </select>
        </td>
      </tr>
      <tr>
        <td>Apakah Usaha Dikelola Dengan Baik?</td>
        <td>
          <select disabled='1' name="tab4_kl_baik" id="" class="form-control">
             <?php $__currentLoopData = getEnum(new App\KonPK, 'kl_baik'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($m_val); ?>" <?php echo e(autoSelect($kpk->kl_baik, $m_val)); ?>><?php echo e($m_val); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </select>
        </td>
      </tr>
      <tr>
        <td>Nomor telepon / handphone</td>
        <td><input disabled='1' name="tab4_telp"  type="text" class="form-control" value="<?php echo e($kpk->telp); ?>"></td>
      </tr>
    </table>
  </div>
  </form>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <div class="col-md-6 bordered">
    <span>Konfirmasi Dengan Pihak Ketiga</span>
    <hr>
    <table class="table table-responsive table-borderless">
      <tr>
        <td width="150px">Tujuan Pengajuan Pembiayaan</td>
        <td><select disabled='1' name="tab4_tujuan_pb" id="tab4_tujuan_pb" class="form-control">
              <?php $__currentLoopData = getEnum(new App\LkmPC, 'tujuan_pb'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($m_key); ?>" <?php echo e(autoSelect($lkm_pc->tujuan_pb, $m_val)); ?>><?php echo e($m_val); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select></td>
      </tr>
    </table>
  </div>
  </div>
  <div class="row">
    <div class="col-md-12">
    <hr>
      <div class="form-group">
        <label for="">Penjelasan Singkat Tentang Karakter Calon Nasabah dan Tujuan Pembiayaan</label>
        <textarea name="tab4_penjelasan" id="tab4_penjelasan" cols="30" rows="7" class="form-control"><?php echo e($lkm_pc->penjelasan); ?></textarea>
      </div>
    </div>
  </div>
</div>