<div class="control-panel">
<br>
    <button class="btn btn-primary" onclick="tambahJaminan()"><i class="fa fa-plus"></i> Jaminan</button>
    <button class="btn btn-primary" onclick="tambahPemilikJaminan()"><i class="fa fa-plus"></i> Pemilik Jaminan</button>
    <button class="btn btn-primary" onclick="tambahMemo()"><i class="fa fa-plus"></i> Memo</button>
</div>
<table class="table table-bordered">
    <caption><h3>KARAKTER PRIBADI</h3></caption>
    <tr>
        <td>1. Hutang / Kewajiban</td>
        <td>
            <select class="form-control inputable" name="tab5_htng_kwjb">
                 <?php $__currentLoopData = getEnum(new App\NapDua, 'htng_kwjb'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($m_val); ?>" <?php echo e(autoSelect($nap_dua->htng_kwjb, $m_val)); ?>><?php echo e($m_val); ?></option>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </td>
        <td>4. Hubungan dgn Tetangga</td>
        <td>
            <select class="form-control inputable" name="tab5_hbng_tg">
                <?php $__currentLoopData = getEnum(new App\NapDua, 'hbng_tg'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($m_val); ?>" <?php echo e(autoSelect($nap_dua->hbng_tg, $m_val)); ?>><?php echo e($m_val); ?></option>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>2. Kegiatan Ibadah</td>
        <td>
            <select class="form-control inputable" name="tab5_kgtn_ibdh">
                <?php $__currentLoopData = getEnum(new App\NapDua, 'kgtn_ibdh'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($m_val); ?>" <?php echo e(autoSelect($nap_dua->kgtn_ibdh, $m_val)); ?>><?php echo e($m_val); ?></option>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </td>
        <td>5. Hubungan dgn Tokoh</td>
        <td>
            <select class="form-control inputable" name="tab5_hbng_tk">
                <?php $__currentLoopData = getEnum(new App\NapDua, 'hbng_tk'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($m_val); ?>" <?php echo e(autoSelect($nap_dua->hbng_tk, $m_val)); ?>><?php echo e($m_val); ?></option>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>3. Rumah Tangga</td>
        <td>
            <select class="form-control inputable" name="tab5_rmh_tg">
                <?php $__currentLoopData = getEnum(new App\NapDua, 'rmh_tg'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($m_val); ?>" <?php echo e(autoSelect($nap_dua->rmh_tg, $m_val)); ?>><?php echo e($m_val); ?></option>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </td>
        <td>6. Kemasyarakatan</td>
        <td>
            <select class="form-control inputable" name="tab5_kmsyrktn">
                <?php $__currentLoopData = getEnum(new App\NapDua, 'kmsyrktn'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($m_val); ?>" <?php echo e(autoSelect($nap_dua->kmsyrktn, $m_val)); ?>><?php echo e($m_val); ?></option>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </td>
    </tr>
</table>
<table class="table table-bordered">
    <caption><h3>JAMINAN</h3></caption>
    <thead>
        <tr>
            <th>NO</th>
            <th>Dokumen</th>
            <th>Bentuk/Kondisi Jaminan</th>
            <th>Luas / Jml</th>
            <th>Harga/m2/Harga</th>
            <th>Market</th>
            <th>Bobot</th>
            <th>FTV</th>
            <th>Taksasi</th>
        </tr>
    </thead>
    <tbody>
    <?php  
        $no = 1;
        $market_total = 0;
     ?>
        <?php $__empty_1 = true; $__currentLoopData = $jaminan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jmn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <?php 
                $market_total += $jmn->market;
             ?>
            <tr>
                <td><?php echo e($no); ?></td>
                <td><?php echo e($jmn->dokumen); ?></td>
                <td><?php echo e($jmn->bentuk); ?></td>
                <td><?php echo e($jmn->kuantitas); ?></td>
                <td><?php echo e($jmn->harga); ?></td>
                <td><?php echo e($jmn->market); ?></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <?php endif; ?>
    <tr>
        <td colspan="5"></td>
        <td><?php echo e($market_total); ?></td>
        <td colspan="3"></td>
    </tr>
    </tbody>

</table>
<hr>

<table class="table table-bordered">
    <caption><h3>Data Pemilik Jaminan</h3></caption>
    <thead>
        <tr>
            <th>NO</th>
            <th>Nama Pemilik</th>
            <th>Hubungan</th>
            <th>Alamat Pemilik</th>
            <th>Telepon</th>
            <th>Lokasi Jaminan</th>
        </tr>
    </thead>
    <tbody>
        <?php  $no = 1  ?>
        <?php $__empty_1 = true; $__currentLoopData = $pemilik_jaminan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pemilik): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
            <td><?php echo e($no); ?></td>
            <td><?php echo e($pemilik->nama); ?></td>
            <td><?php echo e($pemilik->hubungan); ?></td>
            <td><?php echo e($pemilik->alamat); ?></td>
            <td><?php echo e($pemilik->telepon); ?></td>
            <td><?php echo e($pemilik->lokasi_jaminan); ?></td>
            
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <?php endif; ?>
    </tbody>
    <tbody>
        <tr>
            <td colspan="3" rowspan="2"></td>
            <td>Total Likuiditasi Jaminan</td>
            <td>10.200.000</td>
            <td rowspan="2">X 100 % = 178 %</td>
        </tr>
        <tr>
            <td>Jumlah Pembiayaan</td>
            <td>60.000.000</td>
        </tr>
        <tr>
            <td rowspan="3">
                Kesimpulan Jamiman
            </td>
            <td></td>
            <td colspan="4">[5] Jaminan sangat menckupi (> 120%), dokumentasi sempurna</td>
        </tr>
        <tr>
            <td>Point = 5</td>
            <td colspan="4">[4] Jaminan mencukupi antara 110 - 120 %, dokumentasi sempurna</td>
        </tr>
        <tr>
            <td></td>
            <td colspan="4">[3] Jaminan santara 100 - 110 %, dokumentasi sempurna</td>
        </tr>
    </tbody>
</table>
<div class="col-md-6 no-padding">
    <table class="table table-bordered col-md-6">
    <thead>
        <tr>
            <th colspan="4" align="center">KESIMPULAN ANALISA</th>
        </tr>
        <tr>
            <th>Komponen Analisa</th>
            <th>Bobot</th>
            <th>Nilai</th>
            <th>B x N</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Karakter</td>
            <td>30%</td>
            <td>100</td>
            <td>30,00</td>
        </tr>
        <tr>
            <td>Karakter</td>
            <td>30%</td>
            <td>100</td>
            <td>30,00</td>
        </tr>
        <tr>
            <td>Karakter</td>
            <td>30%</td>
            <td>100</td>
            <td>30,00</td>
        </tr>
        
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3">Total Nilai</td>
            <td>90,00</td>
        </tr>
    </tfoot>
</table>
</div>
<div class="col-md-6 ">
<table class="table table-bordered ">
    <thead>
        <tr>
            <th>Dibuat oleh</th>
            <th>Disetujui Oleh</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>RONIM MAFBULLA</td>
            <td>IIK KUSAIRI</td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td>Financing Office</td>
            <td>Pinca /  Pincapem</td>
        </tr>
    </tfoot>
</table>    
</div>
<div class="col-md-12">
    <table class="table table-bordered">
        <caption><h3>MEMO KOMITE PEMBIAYAAN</h3></caption>
        <thead>
            <tr>
                <th colspan="9">A. Fasilitas Pembiayaan Yang Pernah Diberikan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>No</td>
                <td>Pembiayaan</td>
                <td colspan="2">Jkw</td>
                <td>Jumlah Pembiayaan</td>
                <td>Jml Margin/Basil</td>
                <td>Riwayat Pembayaran</td>
                <td>IR</td>
                <td>Sisa Pembiayaan</td>
            </tr>
            <?php  $no = 1  ?>
            <?php $__empty_1 = true; $__currentLoopData = $memo_komite; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $memo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($no++); ?></td>
                    <td><?php echo e($memo->pembiayaan); ?></td>
                    <td><?php echo e($memo->jkw_n); ?></td>
                    <td><?php echo e($memo->jkw_p); ?></td>
                    <td><?php echo e($memo->jml_pembiayaan); ?></td>
                    <td><?php echo e($memo->jml_margin); ?></td>
                    <td><?php echo e($memo->ir); ?></td>
                    <td><?php echo e($memo->rwyt_pembayaran); ?></td>
                    <td><?php echo e($memo->sisa_pembiayaan); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <?php endif; ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="6"></td>
                <td colspan="2">Jumlah Fasilitas Sebelumnya</td>
                <td>-</td>
            </tr>
        </tfoot>
    </table>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th colspan="2">B.Fasilitas Pembiaaan Yang Akan Diberikan</th>
                <th>Rekomendasi & Persyaratan Tambahan</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1. Jenis Pembiayaan</td>
                <td>
                    <select class="form-control">
                        <?php $__empty_1 = true; $__currentLoopData = $produks->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prdk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                          <option value="<?php echo e($prdk->id); ?>" <?php echo e(autoSelect($app->produk_id, $prdk->id)); ?>><?php echo e($prdk->nama); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?>
                    </select>
                </td>
                <td rowspan="5"></td>
                <td rowspan="5"></td>
            </tr>
            <tr>
                <td>2. Kegunaan Pembiayaan</td>
                <td><input type="text" class="form-control"  name="" value="<?php echo e($app->keuangan->tujuan_pb_detail); ?>"></td>
             </tr>
             <tr>
                <td>3. Jumlah Pembiaya class="form-control" an</td>
                <td><input type="text" class="form-control"  name="" value="<?php echo e($app->nominal_pb); ?>"></td>
             </tr>
             <tr>
                <td>4. Jangka Waktu</td>
                <td><input type="text" class="form-control"  value="<?php echo e($app->waktu_pb); ?>" name=""></td>
             </tr>
             <tr>
                <td>5. Pengikatan Akad</td>
                <td>
                    <select class="form-control">
                        <?php $__currentLoopData = getEnum(new App\NapDua, 'pnk_akad'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($m_val); ?>" <?php echo e(autoSelect($nap_dua->pnk_akad, $m_val)); ?>><?php echo e($m_val); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </td>
             </tr>
             <tr>
                <td>6. Keuntungan / Ribhun</td>
                <td>Hawalah</td>
             </tr>
             <tr>
                <td>7. Bagi Hasil (Mdrb & Msyr)</td>
                <td>Hawalah</td>
             </tr>
              <tr>
                <td>8. Biaya - biaya Pencairan</td>
                <td>
                    <input type="text" value="<?php echo e($nap_dua->biaya_pc); ?>" class="form-control" name="">
                </td>
             </tr>
              <tr>
                <td>9. Pengikatan Jaminan</td>
                <td>
                    <select class="form-control">
                        <?php $__currentLoopData = getEnum(new App\NapDua, 'pnk_jaminan'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($m_val); ?>" <?php echo e(autoSelect($nap_dua->pnk_jaminan, $m_val)); ?>><?php echo e($m_val); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </td>
             </tr>
        </tbody>
        <tfoot>
            <tr>
                <td><b>SKOR PENILAIAN</b></td>
                <td><b>> Layak</b></td>
                <td>RISIKO</td>
                <td>MEDIUM RISK</td>
            </tr>
        </tfoot>
    </table>
    <table class="table table-bordered">
        <caption><h3>Persetujuan Komite Pembiayaan (Sesuai Batas Kewenangan Memutus Pembiayaan)</h3></caption>
        <tbody>
            <tr>
               <td rowspan="3">
                   Komite 1
               </td> 
               <td>GENERAL MANAGER</td>
               <td>BISNIS MANAGER</td>
               <td>FSO</td>
               <td>FO</td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Nama:</td>
                <td>Nama:</td>
                <td>Nama:</td>
                <td>Nama:</td>
            </tr>
            <tr>
                <td></td>
                <td>Tanggal</td>
                <td colspan="4"></td>
            </tr>
        </tbody>
        <tbody>
            <tr>
               <td rowspan="3">
                   Komite 1
               </td> 
               <td>GENERAL MANAGER</td>
               <td>BISNIS MANAGER</td>
               <td>FSO</td>
               <td>FO</td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Nama:</td>
                <td>Nama:</td>
                <td>Nama:</td>
                <td>Nama:</td>
            </tr>
            <tr>
                <td></td>
                <td>Tanggal</td>
                <td colspan="4"></td>
            </tr>
        </tbody>
    </table>

</div>

<!-- Modal -->
<div class="modal fade" id="addJaminan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <div class="wrapper" style="margin-top: 0">
          <form action="<?php echo e(url('tambah-jaminan')); ?>" method="POST" class="form-horizontal">
          <input type="hidden" name="no_aplikasi" value="" id="jmn_no_aplikasi">
          <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" id="_token">
          <div class="form-group">
            <label for="">Dokumen</label>
            
            <select type="text" name="dokumen" id="dokumen" class="form-control">
                <?php $__currentLoopData = getEnum(new App\Jaminan, 'dokumen'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($m_val); ?>"><?php echo e($m_val); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
          <div class="form-group">
            <label for="">Bentuk/Kondisi Jaminan</label>
            <select name="bentuk" id="bentuk" class="form-control">
              <?php $__currentLoopData = getEnum(new App\Jaminan, 'bentuk'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($m_val); ?>"><?php echo e($m_val); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
          <div class="form-group">
            <label for="">Luas / Jml</label>
            <input type="text" id="kuantitas" name="kuantitas" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Harga/m2/Harga</label>
            <input type="text" id="harga" name="harga" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Market</label>
            <input type="text" id="market" name="market" class="form-control">
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
<div class="modal fade" id="addPemilikJaminan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <div class="wrapper" style="margin-top: 0">
          <form action="<?php echo e(url('tambah-pemilik-jaminan')); ?>" method="POST" class="form-horizontal">
          <input type="hidden" name="no_aplikasi" value="" id="p_jmn_no_aplikasi">
          <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" id="_token">
          <div class="form-group">
            <label for="">Nama</label>
            <input type="text" class="form-control" name="nama">
          </div>
          <div class="form-group">
            <label for="">Hubungan</label>
            <select name="hubungan" id="hubungan" class="form-control">
              <?php $__currentLoopData = getEnum(new App\PemilikJaminan, 'hubungan'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($m_val); ?>"><?php echo e($m_val); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
          <div class="form-group">
            <label for="">Alamat</label>
            <textarea  name="alamat" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label for="">Telepon</label>
            <input type="text" name="telepon" class="form-control">
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
<div class="modal fade" id="addMemoKomite" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <div class="wrapper" style="margin-top: 0">
          <form action="<?php echo e(url('tambah-memo')); ?>" method="POST" class="form-horizontal">
          <input type="hidden" name="no_aplikasi" value="" id="memo_no_aplikasi">
          <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" id="_token">
          
          <div class="form-group">
            <label for="">Pembiayaan</label>
            <select name="pembiayaan" id="pembiayaan" class="form-control">
              <?php $__currentLoopData = getEnum(new App\MemoKomite, 'pembiayaan'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($m_val); ?>"><?php echo e($m_val); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
          <div class="form-group">
            <label for="">JKW</label>
            <input type="number" name="jkw_n" class="clean">
            <select name="jkw_p"  class="clean">
                <option value="B">B</option>
                <option value="M">M</option>
                <option value="H">H</option>
                <option value="T">T</option>
            </select>
          </div>
          <div class="form-group">
            <label for="">Jumlah Pembiayaan</label>
            <input type="text" name="jml_pembiayaan" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Jumlah Margin</label>
            <input type="text" name="jml_margin" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Riwayat Pembayaran</label>
            <select name="rwyt_pembayaran" id="rwyt_pembayaran" class="form-control">
              <?php $__currentLoopData = getEnum(new App\MemoKomite, 'rwyt_pembayaran'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($m_val); ?>"><?php echo e($m_val); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
          <div class="form-group">
            <label for="">IR</label>
            <input type="text" name="ir" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Sisa Pembiyaan</label>
            <input type="text" name="sisa_pembiayaan" class="form-control">
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