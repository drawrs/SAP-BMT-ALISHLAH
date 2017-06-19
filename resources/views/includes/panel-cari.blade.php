<div class="blog">
    <form action="" class="form-inline">
        <div class="form-group">
            <input type="text" class="form-control" name="q" placeholder="ketikan sesuatu.." size="60%">
            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i> cari</button>
        </div>
    </form>
    <br>
    @if(Request::has('q'))
        <div class="alert alert-info">
            Menampilkan hasil : <b>{{Request::get('q')}}</b> &nbsp;&nbsp;&nbsp;<u><small><a  onclick='window.location.href = window.location.pathname;' style="cursor: pointer;"><i class="fa fa-times"></i> tutup</a></small></u>
        </div>
    @elseif(Request::has('no_ktp'))
        <div class="alert alert-warning">
            Daftar Aplikasi : <b>{{gelar($single_mitra->jk)}}  {{$single_mitra->nama_lengkap}}</b> ( {{ Request::get('no_ktp')}} ) &nbsp;&nbsp;&nbsp;<u><small><a href="{{url('dashboard')}}"><i class="fa fa-times"></i> tutup</a></small></u>
        </div>
    @endif
</div>
<script>
    function tutupCari(){
        window.location.href = "lalal";
    }
</script>