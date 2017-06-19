jQuery(document).ready(function($) {

    getBesarAngsuran();
    getLabaRugi();
    getNeraca();
    getKapasitas();
});
function getBesarAngsuran(){
    var type = parseInt($('#jpr_type').val());

    var pb = parseInt($('#tab5_rekomen_pb').val());
    var margin = parseInt($('#tab5_margin_pb').val());
    var wkt = parseInt($('#tab5_waktu_pb').val());

    var n_bsr_angs = (pb + margin) / wkt;

    // set ke besar angsuran
    var bsr_angs = $('#tab5_angs_pb').val(n_bsr_angs);

    var n_eg_rate = (margin / pb / wkt ) * 100;

    var eg_rate = $('#tab5_eg_rate').html(n_eg_rate);
}
function getLabaRugi(){
    var pdptn = parseInt($('#t_pdptn').text());
    var pngl = parseInt($('#t_pngl').text());
    var pdptn_ln = parseInt($('#t_pdptn_ln').text());
    var pngl_ln = parseInt($('#t_pngl_ln').text());
    var bsr_angs = parseInt($('#tab5_angs_pb').val());

    var n_laba_rugi_usaha = pdptn - pngl;
    var laba_rugi_usaha = $('#laba_rugi_usaha').html(n_laba_rugi_usaha);

    var n_laba_rugi_bersih = n_laba_rugi_usaha + pdptn_ln;
    var laba_rugi_bersih = $('#laba_rugi_bersih').val(n_laba_rugi_bersih);
    // besara angsuran
    $('#tab5_jml_angs').val(bsr_angs);
    // incone coverage
    var n_income = (bsr_angs / n_laba_rugi_bersih) * 100 / 100;
    $('#tab5_income').val(n_income);
    // RPC
    var n_rpc = (n_laba_rugi_bersih * .75) / bsr_angs;
    $('#tab5_rpc').html(n_rpc);

    // update keputusan catatan

    if (n_rpc > 2 && n_income <= 35 ) {
        $('#kptsn_catatan').html("<font color='green'>Proses Dapat Dilanjutkan</font>");
    } else {
        $('#kptsn_catatan').html("<font color='red'>Proses Tidak Dapat Dilanjutkan</font>");
    }
}

function getNeraca(){
    var nrc_harta = parseInt($('#nrc_harta').text());
    var nrc_hutang = parseInt($('#nrc_hutang').text());
    var laba_rugi_usaha = parseInt($('#laba_rugi_usaha').text());

    var modal = nrc_harta - nrc_hutang - laba_rugi_usaha;
    var nrc_modal = $('#nrc_modal').text(modal);
    var nrc_laba_rugi = $('#nrc_laba_rugi').text(laba_rugi_usaha);
}
function getKapasitas(){
    var laba_rugi_bersih = parseInt($('#laba_rugi_bersih').val());
    var angsuran = parseInt($('#tab5_jml_angs').val());
    //. Laba Bersih / Kewajiban Angsuran
    $('#kp_1').html( (laba_rugi_bersih / angsuran) );

    //  Rugi/Laba Usaha/Omset
    var laba_rugi_usaha = $('#laba_rugi_usaha').text();
    var t_pdptn = $('#t_pdptn').text();
    $('#kp_2').html( (laba_rugi_usaha / t_pdptn) * 100 );

    //Dana Sendiri : Jml Pembiayaan
    var t_kas = $('#t_knb').val();
    var rekomen_pb = $('#tab5_rekomen_pb').val();
    $('#kp_3').html( (t_kas / rekomen_pb) * 100 );

    //4. Perputaran Piutang
    var t_pu = $('#t_pu').val();
    var t_pdptn = $('#t_pdptn').text();
    $('#kp_4').html( (t_pu / t_pdptn) * 30 );

    // Perputaran Persediaan
    var t_pbd = $('#t_pbd').val();
    var t_pdptn = $('#t_pdptn').text();
    $('#kp_5').html( (t_pbd / t_pdptn) * 30 );


    //1
    $('#ptrn_kas').html( (t_kas / t_pdptn * 30) );
    //2
    $('#ptrn_piutang').html( (t_pu / t_pdptn * 30) );
    //3
    $('#ptrn_sedia').html( (t_pbd / t_pdptn * 30) );
    var ptrn_kas =  parseInt($('#ptrn_kas').text());
    var ptrn_piutang = parseInt($('#ptrn_piutang').text());
    var ptrn_piutang = parseInt($('#ptrn_piutang').text());
    var hasil_topmk = ptrn_kas + ptrn_piutang + ptrn_piutang;
    $('#topmk').html(hasil_topmk);

    var t_pngl = parseInt($('#t_pngl').text());
    var topmk = parseInt($('#topmk').text());
    var nrc_hutang = parseInt($('#nrc_hutang').text());
    var hasil_kmk = .8 * ( t_pngl * topmk / 30 ) - nrc_hutang;

    $('#kmk').html(hasil_kmk);
}