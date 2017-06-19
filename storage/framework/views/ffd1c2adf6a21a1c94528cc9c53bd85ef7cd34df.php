
<div class="control-panel">
<br>
    <button class="btn btn-primary" onclick="tambahDokumen()"><i class="fa fa-plus"></i> Dokumen</button>
    <!-- <button class="btn btn-primary" onclick="tambahCatatan()"><i class="fa fa-plus"></i> Catatan</button> -->
<br><br>
</div>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Jenis Dokumen</th>
            <th colspan="3">STATUS</th>
            <th>KETERANGAN</th>
            <th rowspan="2" valign="top">PIC</th>
        </tr>
        <tr>
            <th>A</th>
            <th>DOKUMEN IDENTITAS <button class="btn btn-success btn-xs pull-right"><i class="fa fa-plus"></i> tambah</button></th>
            <th>ADA</th>
            <th>TIDAK ADA</th>
            <th>KONFIRMASI</th>
            <th></th>
        </tr>
    </thead>
    <tbody class="dk_table">
        <?php  $no = 1;  ?>
        <?php $__currentLoopData = $dk_DI; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($no++); ?></td>
                <td dkid="<?php echo e($dk->id); ?>"><?php echo e($dk->judul); ?></td>
                <td><input type="radio" class="dp" name="<?php echo e($dk->id); ?>[]" value="ya" <?php echo e(autoChecked($dk->status, 'ya')); ?> dkid="<?php echo e($dk->id); ?>"></td>
                <td><input type="radio" class="dp" name="<?php echo e($dk->id); ?>[]" value="tidak" <?php echo e(autoChecked($dk->status, 'tidak')); ?> dkid="<?php echo e($dk->id); ?>"></td>
                <td>
                    <input type="checkbox" class="approve" dkid="<?php echo e($dk->id); ?>" <?php echo e(autoChecked($dk->valid, 'ya')); ?> >
                </td>
                <td></td>
                <td></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
    <thead>
        <tr>
            <th>B</th>
            <th>IZIN USAHA & DOKUMEN USAHA</th>
            <th>ADA</th>
            <th>TIDAK ADA</th>
            <th>KONFIRMASI</th>
            <th></th>
        </tr>
    </thead>
    <tbody class="dk_table">
        <?php  $no = 1;  ?>
        <?php $__currentLoopData = $dk_IHDU; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($no++); ?></td>
                <td dkid="<?php echo e($dk->id); ?>"><?php echo e($dk->judul); ?></td>
                <td><input type="radio" class="dp" name="<?php echo e($dk->id); ?>[]" value="ya" <?php echo e(autoChecked($dk->status, 'ya')); ?> dkid="<?php echo e($dk->id); ?>"></td>
                <td><input type="radio" class="dp" name="<?php echo e($dk->id); ?>[]" value="tidak" <?php echo e(autoChecked($dk->status, 'tidak')); ?> dkid="<?php echo e($dk->id); ?>"></td>
                <td>
                    <input type="checkbox" class="approve" dkid="<?php echo e($dk->id); ?>" <?php echo e(autoChecked($dk->valid, 'ya')); ?> >
                </td>
                <td></td>
                <td></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    <thead>
        <tr>
            <th>C</th>
            <th>FORM KELENGKAPAN PEMBIAYAAN</th>
            <th>ADA</th>
            <th>TIDAK ADA</th>
            <th>KONFIRMASI</th>
            <th></th>
        </tr>
    </thead>
    <tbody class="dk_table">
        <?php  $no = 1;  ?>
        <?php $__currentLoopData = $dk_FKB; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($no++); ?></td>
                <td dkid="<?php echo e($dk->id); ?>"><?php echo e($dk->judul); ?></td>
                <td><input type="radio" class="dp" name="<?php echo e($dk->id); ?>[]" value="ya" <?php echo e(autoChecked($dk->status, 'ya')); ?> dkid="<?php echo e($dk->id); ?>"></td>
                <td><input type="radio" class="dp" name="<?php echo e($dk->id); ?>[]" value="tidak" <?php echo e(autoChecked($dk->status, 'tidak')); ?> dkid="<?php echo e($dk->id); ?>"></td>
                <td>
                    <input type="checkbox" class="approve" dkid="<?php echo e($dk->id); ?>" <?php echo e(autoChecked($dk->valid, 'ya')); ?> >
                </td>

                <td></td>
                <td></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    <thead>
        <tr>
            <th>E</th>
            <th>DOKUMEN PENGIKATAN DAN JAMINAN</th>
            <th></th>
            <th>    </th>
            <th></th>
        </tr>
        <tr>
            <th>E 1</th>
            <th>DOKUMEN PENGIKATAN </th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Jaminan Tanah & Bangunan / Tanah kosong</td>
            <td colspan="2">
                <ol>
                    <?php $__currentLoopData = $dpk_JTBT; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dpk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><input class="dpk" name="<?php echo e($dpk->id); ?>[]" type="checkbox" <?php echo e(dpk_checked($dpk->status)); ?> dpkid="<?php echo e($dpk->id); ?>"> <?php echo e($dpk->judul); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ol>
            </td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Jaminan Kios</td>
            <td colspan="2">
                <ol>
                    <?php $__currentLoopData = $dpk_JK; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dpk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><input class="dpk" name="<?php echo e($dpk->id); ?>[]" type="checkbox" <?php echo e(dpk_checked($dpk->status)); ?> dpkid="<?php echo e($dpk->id); ?>"> <?php echo e($dpk->judul); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ol>
            </td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Jaminan Kendaraan bermotor</td>
            <td colspan="2">
                <ol>
                    <?php $__currentLoopData = $dpk_JKB; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dpk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <li><input class="dpk" name="<?php echo e($dpk->id); ?>[]" type="checkbox" <?php echo e(dpk_checked($dpk->status)); ?> dpkid="<?php echo e($dpk->id); ?>"> <?php echo e($dpk->judul); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ol>
            </td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>4</td>
            <td>Deposito </td>
            <td colspan="2">
                <ol>
                    <?php $__currentLoopData = $dpk_DP; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dpk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><input class="dpk" name="<?php echo e($dpk->id); ?>[]" type="checkbox" <?php echo e(dpk_checked($dpk->status)); ?> dpkid="<?php echo e($dpk->id); ?>"> <?php echo e($dpk->judul); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ol>
            </td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
    <thead>
        <tr>
            <th colspan="5">DOKUMEN TAMBAHAN</th>
        </tr>
    </thead>
    <tbody class="">
        <?php  $no = 1;  ?>
        <?php $__currentLoopData = $dk_ETC; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td width="20px">
                    <?php echo e($no++); ?>

                    <a href="<?php echo e(url('hapus-dokumen?id='. $dk->id)); ?>" onclick="return confirm('Hapus dokumen ini ?')" class="btn btn-danger btn-xs pull-right"><i class="fa fa-minus"></i></a>
                </td>
                <td dkid="<?php echo e($dk->id); ?>"><?php echo e($dk->judul); ?></td>
                <td><input type="radio" class="dp" name="<?php echo e($dk->id); ?>[]" value="ya" <?php echo e(autoChecked($dk->status, 'ya')); ?> dkid="<?php echo e($dk->id); ?>"></td>
                <td><input type="radio" class="dp" name="<?php echo e($dk->id); ?>[]" value="tidak" <?php echo e(autoChecked($dk->status, 'tidak')); ?> dkid="<?php echo e($dk->id); ?>"></td>
                <td></td>
                <td></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    <thead>
        <tr>
            <th colspan="6">CATATAN:</th>
        </tr>
    </thead>
    <tbody>
        <?php  $no = 1  ?>
        <?php $__currentLoopData = $dokumen_ceklis->catatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ctn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($no++); ?></td>
            <td colspan="5"><input type="text" class="form-control ctn" value="<?php echo e($ctn->isi); ?>" ctnid="<?php echo e($ctn->id); ?>"></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    <tbody>
        <tr>
            <td>
                Tanggal :
            </td>
            <td colspan="2">
                <input type="text" class="form-control inputable" name="tab6_tgl_satu" value="<?php echo e(readDate($dokumen_ceklis->tgl_satu)); ?>" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
            </td>
            <td >
                Tanggal : 
             </td>
             <td colspan="2">
                <input type="text" class="form-control inputable" name="tab6_tgl_dua" value="<?php echo e(readDate($dokumen_ceklis->tgl_dua)); ?>" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
            </td>
        </tr>
        <tr>
            <td>
                Disusun Oleh :
            </td>
            <td colspan="2">
                <input type="text" class="form-control inputable" name="tab6_mark_satu" value="<?php echo e($dokumen_ceklis->mark_satu); ?>">
            </td>
            <td >
                Disusun Oleh : 
             </td>
             <td colspan="2">
                <input type="text" class="form-control inputable" name="tab6_mark_dua" value="<?php echo e($dokumen_ceklis->mark_dua); ?>">
            </td>
        </tr>
        <tr>
            <td>
                Nama :
            </td>
            <td colspan="2">
                <input type="text" class="form-control inputable" name="tab6_nama_satu" value="<?php echo e($dokumen_ceklis->nama_satu); ?>">
            </td>
            <td >
                Nama : 
             </td>
             <td colspan="2">
                <input type="text" class="form-control inputable" name="tab6_nama_dua" value="<?php echo e($dokumen_ceklis->nama_dua); ?>">
            </td>
        </tr>
        <tr>
            <td>
                Jabatan :
            </td>
            <td colspan="2">
                <input type="text" class="form-control inputable" name="tab6_jabatan_satu" value="<?php echo e($dokumen_ceklis->jabatan_satu); ?>">
            </td>
            <td >
                Jabatan : 
             </td>
             <td colspan="2">
                <input type="text" class="form-control inputable" name="tab6_jabatan_dua" value="<?php echo e($dokumen_ceklis->jabatan_dua); ?>">
            </td>
        </tr>
    </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="addDokumen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <div class="wrapper" style="margin-top: 0">
          <form action="<?php echo e(url('tambah-dokumen')); ?>" method="POST" class="form-horizontal">
          <input type="hidden" name="no_aplikasi" value="" id="dok_no_aplikasi">
          <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" id="_token">
          <div class="form-group">
            <label for="">Judul</label>
            <input type="text" name="judul" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Jenis</label>
            <select name="jenis" class="form-control">
              <?php $__currentLoopData = getEnum(new App\Dokumen, 'jenis'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($m_val); ?>"><?php echo e($m_val); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
          <div class="form-group">
            <label for="">Status</label>
            <select name="status"  class="form-control">
                <option value="ya">Ada</option>
                <option value="tidak">Tidak</option>
            </select>
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