
<table class="table table-bordered">
    <caption><h3>KARAKTER PRIBADI</h3></caption>
    <tr>
        <td>1. Hutang / Kewajiban</td>
        <td>
            <select disabled='1' class="form-control inputable" name="tab5_htng_kwjb">
                 @foreach(getEnum(new App\NapDua, 'htng_kwjb') as $m_key => $m_val)
                    <option value="{{$m_val}}" {{autoSelect($nap_dua->htng_kwjb, $m_val)}}>{{$m_val}}</option>
                 @endforeach
            </select>
        </td>
        <td>4. Hubungan dgn Tetangga</td>
        <td>
            <select disabled='1' class="form-control inputable" name="tab5_hbng_tg">
                @foreach(getEnum(new App\NapDua, 'hbng_tg') as $m_key => $m_val)
                    <option value="{{$m_val}}" {{autoSelect($nap_dua->hbng_tg, $m_val)}}>{{$m_val}}</option>
                 @endforeach
            </select>
        </td>
    </tr>
    <tr>
        <td>2. Kegiatan Ibadah</td>
        <td>
            <select disabled='1' class="form-control inputable" name="tab5_kgtn_ibdh">
                @foreach(getEnum(new App\NapDua, 'kgtn_ibdh') as $m_key => $m_val)
                    <option value="{{$m_val}}" {{autoSelect($nap_dua->kgtn_ibdh, $m_val)}}>{{$m_val}}</option>
                 @endforeach
            </select>
        </td>
        <td>5. Hubungan dgn Tokoh</td>
        <td>
            <select disabled='1' class="form-control inputable" name="tab5_hbng_tk">
                @foreach(getEnum(new App\NapDua, 'hbng_tk') as $m_key => $m_val)
                    <option value="{{$m_val}}" {{autoSelect($nap_dua->hbng_tk, $m_val)}}>{{$m_val}}</option>
                 @endforeach
            </select>
        </td>
    </tr>
    <tr>
        <td>3. Rumah Tangga</td>
        <td>
            <select disabled='1' class="form-control inputable" name="tab5_rmh_tg">
                @foreach(getEnum(new App\NapDua, 'rmh_tg') as $m_key => $m_val)
                    <option value="{{$m_val}}" {{autoSelect($nap_dua->rmh_tg, $m_val)}}>{{$m_val}}</option>
                 @endforeach
            </select>
        </td>
        <td>6. Kemasyarakatan</td>
        <td>
            <select disabled='1' class="form-control inputable" name="tab5_kmsyrktn">
                @foreach(getEnum(new App\NapDua, 'kmsyrktn') as $m_key => $m_val)
                    <option value="{{$m_val}}" {{autoSelect($nap_dua->kmsyrktn, $m_val)}}>{{$m_val}}</option>
                 @endforeach
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
    @php 
        $no = 1;
        $market_total = 0;
    @endphp
        @forelse($jaminan as $jmn)
            @php
                $market_total += $jmn->market;
            @endphp
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $jmn->dokumen }}</td>
                <td>{{ $jmn->bentuk }}</td>
                <td>{{ $jmn->kuantitas }}</td>
                <td>{{ $jmn->harga }}</td>
                <td>{{ $jmn->market }}</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        @empty
        @endforelse
    <tr>
        <td colspan="5"></td>
        <td>{{ $market_total }}</td>
        <td colspan="3"></td>
    </tr>
    </tbody>

</table>
<hr>

<table class="table table-bordered">
    <caption><h3>Data Pemilik Jaminan</h3></caption>
    <thead>
        <tr>
            <th width="20px">
                NO
            </th>
            <th>Nama Pemilik</th>
            <th>Hubungan</th>
            <th>Alamat Pemilik</th>
            <th>Telepon</th>
            <th>Lokasi Jaminan</th>
        </tr>
    </thead>
    <tbody>
        @php $no = 1 @endphp
        @forelse($pemilik_jaminan as $pemilik)
        <tr>
            <td>
                {{ $no++ }}
                
            </td>
            <td>{{ $pemilik->nama }}</td>
            <td>{{ $pemilik->hubungan }}</td>
            <td>{{ $pemilik->alamat }}</td>
            <td>{{ $pemilik->telepon }}</td>
            <td>{{ $pemilik->lokasi_jaminan}}</td>
            
        </tr>
        @empty
        @endforelse
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
            @php $no = 1 @endphp
            @forelse($memo_komite as $memo)
                <tr>
                    <td>
                        {{ $no++ }}
                        <a href="{{ url('hapus-memo?id='. $memo->id) }}" onclick="return confirm('Hapus memo ini ?')" class="btn btn-danger btn-xs"><i class="fa fa-minus fa-xs"></i></a>
                    </td>
                    <td>{{ $memo->pembiayaan }}</td>
                    <td>{{ $memo->jkw_n }}</td>
                    <td>{{ $memo->jkw_p }}</td>
                    <td>{{ $memo->jml_pembiayaan }}</td>
                    <td>{{ $memo->jml_margin }}</td>
                    <td>{{ $memo->ir }}</td>
                    <td>{{ $memo->rwyt_pembayaran }}</td>
                    <td>{{ $memo->sisa_pembiayaan }}</td>
                </tr>
            @empty
            @endforelse
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
                    <select disabled='1' class="form-control">
                        @forelse($produks->all() as $prdk)
                          <option value="{{$prdk->id}}" {{ autoSelect($app->produk_id, $prdk->id)}}>{{$prdk->nama}}</option>
                        @empty
                        @endforelse
                    </select>
                </td>
                <td rowspan="9"></td>
                <td rowspan="9"></td>
            </tr>
            <tr>
                <td>2. Kegunaan Pembiayaan</td>
                <td><input type="text" class="form-control"  name="" value="{{$app->keuangan->tujuan_pb_detail}}"></td>
             </tr>
             <tr>
                <td>3. Jumlah Pembiaya class="form-control" an</td>
                <td><input type="text" class="form-control"  name="" value="{{$app->nominal_pb}}"></td>
             </tr>
             <tr>
                <td>4. Jangka Waktu</td>
                <td><input type="text" class="form-control"  value="{{$app->waktu_pb}}" name=""></td>
             </tr>
             <tr>
                <td>5. Pengikatan Akad</td>
                <td>
                    <select disabled='1' class="form-control inputable" name="tab5_pnk_akad">
                        @foreach(getEnum(new App\NapDua, 'pnk_akad') as $m_key => $m_val)
                            <option value="{{$m_val}}" {{autoSelect($nap_dua->pnk_akad, $m_val)}}>{{$m_val}}</option>
                        @endforeach
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
                    <input type="text" value="{{ $nap_dua->biaya_pc}}" class="form-control inputable" name="tab5_biaya_pc">
                </td>
             </tr>
              <tr>
                <td>9. Pengikatan Jaminan</td>
                <td>
                    <select disabled='1' class="form-control inputable" name="tab5_pnk_jaminan">
                        @foreach(getEnum(new App\NapDua, 'pnk_jaminan') as $m_key => $m_val)
                            <option value="{{$m_val}}" {{autoSelect($nap_dua->pnk_jaminan, $m_val)}}>{{$m_val}}</option>
                        @endforeach
                    </select>
                </td>
             </tr>
        </tbody>
        <tfoot>
            <tr>
                <td><b>SKOR PENILAIbiaya_pcAN</b></td>
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
          <form action="{{ url('tambah-jaminan') }}" method="POST" class="form-horizontal">
          <input type="hidden" name="no_aplikasi" value="" id="jmn_no_aplikasi">
          <input type="hidden" name="_token" value="{{ csrf_token() }}" id="_token">
          <div class="form-group">
            <label for="">Dokumen</label>
            
            <select disabled='1' type="text" name="dokumen" id="dokumen" class="form-control">
                @foreach(getEnum(new App\Jaminan, 'dokumen') as $m_key => $m_val)
                    <option value="{{$m_val}}">{{$m_val}}</option>
                @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="">Bentuk/Kondisi Jaminan</label>
            <select disabled='1' name="bentuk" id="bentuk" class="form-control">
              @foreach(getEnum(new App\Jaminan, 'bentuk') as $m_key => $m_val)
                    <option value="{{$m_val}}">{{$m_val}}</option>
               @endforeach
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
          <form action="{{ url('tambah-pemilik-jaminan') }}" method="POST" class="form-horizontal">
          <input type="hidden" name="no_aplikasi" value="" id="p_jmn_no_aplikasi">
          <input type="hidden" name="_token" value="{{ csrf_token() }}" id="_token">
          <div class="form-group">
            <label for="">Nama</label>
            <input type="text" class="form-control" name="nama">
          </div>
          <div class="form-group">
            <label for="">Hubungan</label>
            <select disabled='1' name="hubungan" id="hubungan" class="form-control">
              @foreach(getEnum(new App\PemilikJaminan, 'hubungan') as $m_key => $m_val)
                    <option value="{{$m_val}}">{{$m_val}}</option>
               @endforeach
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
          <form action="{{ url('tambah-memo') }}" method="POST" class="form-horizontal">
          <input type="hidden" name="no_aplikasi" value="" id="memo_no_aplikasi">
          <input type="hidden" name="_token" value="{{ csrf_token() }}" id="_token">
          
          <div class="form-group">
            <label for="">Pembiayaan</label>
            <select disabled='1' name="pembiayaan" id="pembiayaan" class="form-control">
              @foreach(getEnum(new App\MemoKomite, 'pembiayaan') as $m_key => $m_val)
                    <option value="{{$m_val}}">{{$m_val}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="">JKW</label>
            <input type="number" name="jkw_n" class="clean">
            <select disabled='1' name="jkw_p"  class="clean">
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
            <select disabled='1' name="rwyt_pembayaran" id="rwyt_pembayaran" class="form-control">
              @foreach(getEnum(new App\MemoKomite, 'rwyt_pembayaran') as $m_key => $m_val)
                    <option value="{{$m_val}}">{{$m_val}}</option>
              @endforeach
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