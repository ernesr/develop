<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Pddikti_tr_sms Read</h2>
        <table class="table">
	    <tr><td>Prodi Identifier</td><td><?php echo $prodi_identifier; ?></td></tr>
	    <tr><td>Nm Lemb</td><td><?php echo $nm_lemb; ?></td></tr>
	    <tr><td>Id Sdm Kaprodi</td><td><?php echo $id_sdm_kaprodi; ?></td></tr>
	    <tr><td>Smt Mulai</td><td><?php echo $smt_mulai; ?></td></tr>
	    <tr><td>Kode Prodi</td><td><?php echo $kode_prodi; ?></td></tr>
	    <tr><td>Jln</td><td><?php echo $jln; ?></td></tr>
	    <tr><td>Rt</td><td><?php echo $rt; ?></td></tr>
	    <tr><td>Rw</td><td><?php echo $rw; ?></td></tr>
	    <tr><td>Nm Dsn</td><td><?php echo $nm_dsn; ?></td></tr>
	    <tr><td>Ds Kel</td><td><?php echo $ds_kel; ?></td></tr>
	    <tr><td>Kode Pos</td><td><?php echo $kode_pos; ?></td></tr>
	    <tr><td>Lintang</td><td><?php echo $lintang; ?></td></tr>
	    <tr><td>Bujur</td><td><?php echo $bujur; ?></td></tr>
	    <tr><td>No Tel</td><td><?php echo $no_tel; ?></td></tr>
	    <tr><td>No Fax</td><td><?php echo $no_fax; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $email; ?></td></tr>
	    <tr><td>Website</td><td><?php echo $website; ?></td></tr>
	    <tr><td>Singkatan</td><td><?php echo $singkatan; ?></td></tr>
	    <tr><td>Tgl Berdiri</td><td><?php echo $tgl_berdiri; ?></td></tr>
	    <tr><td>Sk Selenggara</td><td><?php echo $sk_selenggara; ?></td></tr>
	    <tr><td>Tgl Sk Selenggara</td><td><?php echo $tgl_sk_selenggara; ?></td></tr>
	    <tr><td>Tmt Sk Selenggara</td><td><?php echo $tmt_sk_selenggara; ?></td></tr>
	    <tr><td>Tst Sk Selenggara</td><td><?php echo $tst_sk_selenggara; ?></td></tr>
	    <tr><td>Kpst Pd</td><td><?php echo $kpst_pd; ?></td></tr>
	    <tr><td>Sks Lulus</td><td><?php echo $sks_lulus; ?></td></tr>
	    <tr><td>Gelar Lulusan</td><td><?php echo $gelar_lulusan; ?></td></tr>
	    <tr><td>Stat Prodi</td><td><?php echo $stat_prodi; ?></td></tr>
	    <tr><td>Polesei Nilai</td><td><?php echo $polesei_nilai; ?></td></tr>
	    <tr><td>Luas Lab</td><td><?php echo $luas_lab; ?></td></tr>
	    <tr><td>Kapasitas Prak Satu Shift</td><td><?php echo $kapasitas_prak_satu_shift; ?></td></tr>
	    <tr><td>Jml Mhs Pengguna</td><td><?php echo $jml_mhs_pengguna; ?></td></tr>
	    <tr><td>Jml Jam Penggunaan</td><td><?php echo $jml_jam_penggunaan; ?></td></tr>
	    <tr><td>Jml Prodi Pengguna</td><td><?php echo $jml_prodi_pengguna; ?></td></tr>
	    <tr><td>Jml Modul Prak Sendiri</td><td><?php echo $jml_modul_prak_sendiri; ?></td></tr>
	    <tr><td>Jml Modul Prak Lain</td><td><?php echo $jml_modul_prak_lain; ?></td></tr>
	    <tr><td>Fungsi Selain Prak</td><td><?php echo $fungsi_selain_prak; ?></td></tr>
	    <tr><td>Penggunaan Lab</td><td><?php echo $penggunaan_lab; ?></td></tr>
	    <tr><td>Id Sp</td><td><?php echo $id_sp; ?></td></tr>
	    <tr><td>Id Jenj Didik</td><td><?php echo $id_jenj_didik; ?></td></tr>
	    <tr><td>Id Jns Sms</td><td><?php echo $id_jns_sms; ?></td></tr>
	    <tr><td>Id Fungsi Lab</td><td><?php echo $id_fungsi_lab; ?></td></tr>
	    <tr><td>Id Kel Usaha</td><td><?php echo $id_kel_usaha; ?></td></tr>
	    <tr><td>Id Wil</td><td><?php echo $id_wil; ?></td></tr>
	    <tr><td>Id Jur</td><td><?php echo $id_jur; ?></td></tr>
	    <tr><td>Id Induk Sms</td><td><?php echo $id_induk_sms; ?></td></tr>
	    <tr><td>A Kependidikan</td><td><?php echo $a_kependidikan; ?></td></tr>
	    <tr><td>Nm Prodi English</td><td><?php echo $nm_prodi_english; ?></td></tr>
	    <tr><td>Sistem Ajar</td><td><?php echo $sistem_ajar; ?></td></tr>
	    <tr><td>Added By</td><td><?php echo $added_by; ?></td></tr>
	    <tr><td>Date Added</td><td><?php echo $date_added; ?></td></tr>
	    <tr><td>Modified By</td><td><?php echo $modified_by; ?></td></tr>
	    <tr><td>Date Modified</td><td><?php echo $date_modified; ?></td></tr>
	    <tr><td>Id Sinkron</td><td><?php echo $id_sinkron; ?></td></tr>
	    <tr><td>Deleted</td><td><?php echo $deleted; ?></td></tr>
	    <tr><td>Pendaftaran</td><td><?php echo $pendaftaran; ?></td></tr>
	    <tr><td>Link2</td><td><?php echo $link2; ?></td></tr>
	    <tr><td>Warna</td><td><?php echo $warna; ?></td></tr>
	    <tr><td>Muncul</td><td><?php echo $muncul; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pddikti_tr_sms') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>