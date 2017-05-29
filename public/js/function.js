function addPdpRow(jenisPdp) {
    var dom = '<tr>';
    dom += '<td><input type="text" name="judul-' + jenisPdp + '[]" class="form-control judul-' + jenisPdp + '" placeholder="nama pendapatan"/></td>';
    dom += '<td><input type="number" name="isi-' + jenisPdp + '[]" class="form-control isi-' + jenisPdp + '" placeholder="nilai pendapatan"/></td>';
    dom += '</tr>';
    $(dom).appendTo('.clone-area-' + jenisPdp);
    //$('#pu_form').preventDefault
}

function submitPdp(jenisPdp) {
    var no_app = $('#no_applikasi').text();
    var judul = [];
    var isi = [];
    var tipe = jenisPdp;
    $.each($('.judul-' + jenisPdp), function() {
        judul.push($(this).val());
    });
    $.each($('.isi-' + jenisPdp), function() {
        isi.push($(this).val());
    });
    $.post('{{url('
        update - pendapatan ')}}', {
            _token: '{{csrf_token()}}',
            judul: judul,
            isi: isi,
            no_app: no_app,
            tipe: tipe
        },
        function(data, textStatus, xhr) {
            /*optional stuff to do after success */
            // console.log(data);
            //return;
            alert(data);
            location.reload();
        });

}

function hapusPdp(pdpId) {
    $.post('{{url('
        hapus - pendapatan ')}}', { _token: '{{csrf_token()}}', id: pdpId },
        function(data, textStatus, xhr) {
            /*optional stuff to do after success */
            //console.log(data);
            alert(data);
            location.reload();
        });
}