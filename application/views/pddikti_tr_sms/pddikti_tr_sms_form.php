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
        <h2 style="margin-top:0px">Pddikti_tr_sms <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">Prodi Identifier <?php echo form_error('prodi_identifier') ?></label>
            <input type="text" class="form-control" name="prodi_identifier" id="prodi_identifier" placeholder="Prodi Identifier" value="<?php echo $prodi_identifier; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nm Lemb <?php echo form_error('nm_lemb') ?></label>
            <input type="text" class="form-control" name="nm_lemb" id="nm_lemb" placeholder="Nm Lemb" value="<?php echo $nm_lemb; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Id Sdm Kaprodi <?php echo form_error('id_sdm_kaprodi') ?></label>
            <input type="text" class="form-control" name="id_sdm_kaprodi" id="id_sdm_kaprodi" placeholder="Id Sdm Kaprodi" value="<?php echo $id_sdm_kaprodi; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Smt Mulai <?php echo form_error('smt_mulai') ?></label>
            <input type="text" class="form-control" name="smt_mulai" id="smt_mulai" placeholder="Smt Mulai" value="<?php echo $smt_mulai; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kode Prodi <?php echo form_error('kode_prodi') ?></label>
            <input type="text" class="form-control" name="kode_prodi" id="kode_prodi" placeholder="Kode Prodi" value="<?php echo $kode_prodi; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jln <?php echo form_error('jln') ?></label>
            <input type="text" class="form-control" name="jln" id="jln" placeholder="Jln" value="<?php echo $jln; ?>" />
        </div>
	    <div class="form-group">
            <label for="double">Rt <?php echo form_error('rt') ?></label>
            <input type="text" class="form-control" name="rt" id="rt" placeholder="Rt" value="<?php echo $rt; ?>" />
        </div>
	    <div class="form-group">
            <label for="double">Rw <?php echo form_error('rw') ?></label>
            <input type="text" class="form-control" name="rw" id="rw" placeholder="Rw" value="<?php echo $rw; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nm Dsn <?php echo form_error('nm_dsn') ?></label>
            <input type="text" class="form-control" name="nm_dsn" id="nm_dsn" placeholder="Nm Dsn" value="<?php echo $nm_dsn; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Ds Kel <?php echo form_error('ds_kel') ?></label>
            <input type="text" class="form-control" name="ds_kel" id="ds_kel" placeholder="Ds Kel" value="<?php echo $ds_kel; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Kode Pos <?php echo form_error('kode_pos') ?></label>
            <input type="text" class="form-control" name="kode_pos" id="kode_pos" placeholder="Kode Pos" value="<?php echo $kode_pos; ?>" />
        </div>
	    <div class="form-group">
            <label for="double">Lintang <?php echo form_error('lintang') ?></label>
            <input type="text" class="form-control" name="lintang" id="lintang" placeholder="Lintang" value="<?php echo $lintang; ?>" />
        </div>
	    <div class="form-group">
            <label for="double">Bujur <?php echo form_error('bujur') ?></label>
            <input type="text" class="form-control" name="bujur" id="bujur" placeholder="Bujur" value="<?php echo $bujur; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">No Tel <?php echo form_error('no_tel') ?></label>
            <input type="text" class="form-control" name="no_tel" id="no_tel" placeholder="No Tel" value="<?php echo $no_tel; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">No Fax <?php echo form_error('no_fax') ?></label>
            <input type="text" class="form-control" name="no_fax" id="no_fax" placeholder="No Fax" value="<?php echo $no_fax; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Email <?php echo form_error('email') ?></label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Website <?php echo form_error('website') ?></label>
            <input type="text" class="form-control" name="website" id="website" placeholder="Website" value="<?php echo $website; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Singkatan <?php echo form_error('singkatan') ?></label>
            <input type="text" class="form-control" name="singkatan" id="singkatan" placeholder="Singkatan" value="<?php echo $singkatan; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tgl Berdiri <?php echo form_error('tgl_berdiri') ?></label>
            <input type="text" class="form-control" name="tgl_berdiri" id="tgl_berdiri" placeholder="Tgl Berdiri" value="<?php echo $tgl_berdiri; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Sk Selenggara <?php echo form_error('sk_selenggara') ?></label>
            <input type="text" class="form-control" name="sk_selenggara" id="sk_selenggara" placeholder="Sk Selenggara" value="<?php echo $sk_selenggara; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tgl Sk Selenggara <?php echo form_error('tgl_sk_selenggara') ?></label>
            <input type="text" class="form-control" name="tgl_sk_selenggara" id="tgl_sk_selenggara" placeholder="Tgl Sk Selenggara" value="<?php echo $tgl_sk_selenggara; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tmt Sk Selenggara <?php echo form_error('tmt_sk_selenggara') ?></label>
            <input type="text" class="form-control" name="tmt_sk_selenggara" id="tmt_sk_selenggara" placeholder="Tmt Sk Selenggara" value="<?php echo $tmt_sk_selenggara; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tst Sk Selenggara <?php echo form_error('tst_sk_selenggara') ?></label>
            <input type="text" class="form-control" name="tst_sk_selenggara" id="tst_sk_selenggara" placeholder="Tst Sk Selenggara" value="<?php echo $tst_sk_selenggara; ?>" />
        </div>
	    <div class="form-group">
            <label for="double">Kpst Pd <?php echo form_error('kpst_pd') ?></label>
            <input type="text" class="form-control" name="kpst_pd" id="kpst_pd" placeholder="Kpst Pd" value="<?php echo $kpst_pd; ?>" />
        </div>
	    <div class="form-group">
            <label for="double">Sks Lulus <?php echo form_error('sks_lulus') ?></label>
            <input type="text" class="form-control" name="sks_lulus" id="sks_lulus" placeholder="Sks Lulus" value="<?php echo $sks_lulus; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Gelar Lulusan <?php echo form_error('gelar_lulusan') ?></label>
            <input type="text" class="form-control" name="gelar_lulusan" id="gelar_lulusan" placeholder="Gelar Lulusan" value="<?php echo $gelar_lulusan; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Stat Prodi <?php echo form_error('stat_prodi') ?></label>
            <input type="text" class="form-control" name="stat_prodi" id="stat_prodi" placeholder="Stat Prodi" value="<?php echo $stat_prodi; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Polesei Nilai <?php echo form_error('polesei_nilai') ?></label>
            <input type="text" class="form-control" name="polesei_nilai" id="polesei_nilai" placeholder="Polesei Nilai" value="<?php echo $polesei_nilai; ?>" />
        </div>
	    <div class="form-group">
            <label for="double">Luas Lab <?php echo form_error('luas_lab') ?></label>
            <input type="text" class="form-control" name="luas_lab" id="luas_lab" placeholder="Luas Lab" value="<?php echo $luas_lab; ?>" />
        </div>
	    <div class="form-group">
            <label for="double">Kapasitas Prak Satu Shift <?php echo form_error('kapasitas_prak_satu_shift') ?></label>
            <input type="text" class="form-control" name="kapasitas_prak_satu_shift" id="kapasitas_prak_satu_shift" placeholder="Kapasitas Prak Satu Shift" value="<?php echo $kapasitas_prak_satu_shift; ?>" />
        </div>
	    <div class="form-group">
            <label for="double">Jml Mhs Pengguna <?php echo form_error('jml_mhs_pengguna') ?></label>
            <input type="text" class="form-control" name="jml_mhs_pengguna" id="jml_mhs_pengguna" placeholder="Jml Mhs Pengguna" value="<?php echo $jml_mhs_pengguna; ?>" />
        </div>
	    <div class="form-group">
            <label for="double">Jml Jam Penggunaan <?php echo form_error('jml_jam_penggunaan') ?></label>
            <input type="text" class="form-control" name="jml_jam_penggunaan" id="jml_jam_penggunaan" placeholder="Jml Jam Penggunaan" value="<?php echo $jml_jam_penggunaan; ?>" />
        </div>
	    <div class="form-group">
            <label for="double">Jml Prodi Pengguna <?php echo form_error('jml_prodi_pengguna') ?></label>
            <input type="text" class="form-control" name="jml_prodi_pengguna" id="jml_prodi_pengguna" placeholder="Jml Prodi Pengguna" value="<?php echo $jml_prodi_pengguna; ?>" />
        </div>
	    <div class="form-group">
            <label for="double">Jml Modul Prak Sendiri <?php echo form_error('jml_modul_prak_sendiri') ?></label>
            <input type="text" class="form-control" name="jml_modul_prak_sendiri" id="jml_modul_prak_sendiri" placeholder="Jml Modul Prak Sendiri" value="<?php echo $jml_modul_prak_sendiri; ?>" />
        </div>
	    <div class="form-group">
            <label for="double">Jml Modul Prak Lain <?php echo form_error('jml_modul_prak_lain') ?></label>
            <input type="text" class="form-control" name="jml_modul_prak_lain" id="jml_modul_prak_lain" placeholder="Jml Modul Prak Lain" value="<?php echo $jml_modul_prak_lain; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Fungsi Selain Prak <?php echo form_error('fungsi_selain_prak') ?></label>
            <input type="text" class="form-control" name="fungsi_selain_prak" id="fungsi_selain_prak" placeholder="Fungsi Selain Prak" value="<?php echo $fungsi_selain_prak; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Penggunaan Lab <?php echo form_error('penggunaan_lab') ?></label>
            <input type="text" class="form-control" name="penggunaan_lab" id="penggunaan_lab" placeholder="Penggunaan Lab" value="<?php echo $penggunaan_lab; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Id Sp <?php echo form_error('id_sp') ?></label>
            <input type="text" class="form-control" name="id_sp" id="id_sp" placeholder="Id Sp" value="<?php echo $id_sp; ?>" />
        </div>
	    <div class="form-group">
            <label for="decimal">Id Jenj Didik <?php echo form_error('id_jenj_didik') ?></label>
            <input type="text" class="form-control" name="id_jenj_didik" id="id_jenj_didik" placeholder="Id Jenj Didik" value="<?php echo $id_jenj_didik; ?>" />
        </div>
	    <div class="form-group">
            <label for="decimal">Id Jns Sms <?php echo form_error('id_jns_sms') ?></label>
            <input type="text" class="form-control" name="id_jns_sms" id="id_jns_sms" placeholder="Id Jns Sms" value="<?php echo $id_jns_sms; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Id Fungsi Lab <?php echo form_error('id_fungsi_lab') ?></label>
            <input type="text" class="form-control" name="id_fungsi_lab" id="id_fungsi_lab" placeholder="Id Fungsi Lab" value="<?php echo $id_fungsi_lab; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Id Kel Usaha <?php echo form_error('id_kel_usaha') ?></label>
            <input type="text" class="form-control" name="id_kel_usaha" id="id_kel_usaha" placeholder="Id Kel Usaha" value="<?php echo $id_kel_usaha; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Id Wil <?php echo form_error('id_wil') ?></label>
            <input type="text" class="form-control" name="id_wil" id="id_wil" placeholder="Id Wil" value="<?php echo $id_wil; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Id Jur <?php echo form_error('id_jur') ?></label>
            <input type="text" class="form-control" name="id_jur" id="id_jur" placeholder="Id Jur" value="<?php echo $id_jur; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Id Induk Sms <?php echo form_error('id_induk_sms') ?></label>
            <input type="text" class="form-control" name="id_induk_sms" id="id_induk_sms" placeholder="Id Induk Sms" value="<?php echo $id_induk_sms; ?>" />
        </div>
	    <div class="form-group">
            <label for="double">A Kependidikan <?php echo form_error('a_kependidikan') ?></label>
            <input type="text" class="form-control" name="a_kependidikan" id="a_kependidikan" placeholder="A Kependidikan" value="<?php echo $a_kependidikan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nm Prodi English <?php echo form_error('nm_prodi_english') ?></label>
            <input type="text" class="form-control" name="nm_prodi_english" id="nm_prodi_english" placeholder="Nm Prodi English" value="<?php echo $nm_prodi_english; ?>" />
        </div>
	    <div class="form-group">
            <label for="double">Sistem Ajar <?php echo form_error('sistem_ajar') ?></label>
            <input type="text" class="form-control" name="sistem_ajar" id="sistem_ajar" placeholder="Sistem Ajar" value="<?php echo $sistem_ajar; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Added By <?php echo form_error('added_by') ?></label>
            <input type="text" class="form-control" name="added_by" id="added_by" placeholder="Added By" value="<?php echo $added_by; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Date Added <?php echo form_error('date_added') ?></label>
            <input type="text" class="form-control" name="date_added" id="date_added" placeholder="Date Added" value="<?php echo $date_added; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Modified By <?php echo form_error('modified_by') ?></label>
            <input type="text" class="form-control" name="modified_by" id="modified_by" placeholder="Modified By" value="<?php echo $modified_by; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Date Modified <?php echo form_error('date_modified') ?></label>
            <input type="text" class="form-control" name="date_modified" id="date_modified" placeholder="Date Modified" value="<?php echo $date_modified; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Sinkron <?php echo form_error('id_sinkron') ?></label>
            <input type="text" class="form-control" name="id_sinkron" id="id_sinkron" placeholder="Id Sinkron" value="<?php echo $id_sinkron; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Deleted <?php echo form_error('deleted') ?></label>
            <input type="text" class="form-control" name="deleted" id="deleted" placeholder="Deleted" value="<?php echo $deleted; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Pendaftaran <?php echo form_error('pendaftaran') ?></label>
            <input type="text" class="form-control" name="pendaftaran" id="pendaftaran" placeholder="Pendaftaran" value="<?php echo $pendaftaran; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Link2 <?php echo form_error('link2') ?></label>
            <input type="text" class="form-control" name="link2" id="link2" placeholder="Link2" value="<?php echo $link2; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Warna <?php echo form_error('warna') ?></label>
            <input type="text" class="form-control" name="warna" id="warna" placeholder="Warna" value="<?php echo $warna; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Muncul <?php echo form_error('muncul') ?></label>
            <input type="text" class="form-control" name="muncul" id="muncul" placeholder="Muncul" value="<?php echo $muncul; ?>" />
        </div>
	    <input type="hidden" name="id_sms" value="<?php echo $id_sms; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pddikti_tr_sms') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>