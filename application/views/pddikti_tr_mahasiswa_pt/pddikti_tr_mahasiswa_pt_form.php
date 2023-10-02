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
        <h2 style="margin-top:0px">Pddikti_tr_mahasiswa_pt <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="char">Id Reg Pd <?php echo form_error('id_reg_pd') ?></label>
            <input type="text" class="form-control" name="id_reg_pd" id="id_reg_pd" placeholder="Id Reg Pd" value="<?php echo $id_reg_pd; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nipd <?php echo form_error('nipd') ?></label>
            <input type="text" class="form-control" name="nipd" id="nipd" placeholder="Nipd" value="<?php echo $nipd; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Id Pd <?php echo form_error('id_pd') ?></label>
            <input type="text" class="form-control" name="id_pd" id="id_pd" placeholder="Id Pd" value="<?php echo $id_pd; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Id Sms <?php echo form_error('id_sms') ?></label>
            <input type="text" class="form-control" name="id_sms" id="id_sms" placeholder="Id Sms" value="<?php echo $id_sms; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Id Sp <?php echo form_error('id_sp') ?></label>
            <input type="text" class="form-control" name="id_sp" id="id_sp" placeholder="Id Sp" value="<?php echo $id_sp; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tgl Masuk Sp <?php echo form_error('tgl_masuk_sp') ?></label>
            <input type="text" class="form-control" name="tgl_masuk_sp" id="tgl_masuk_sp" placeholder="Tgl Masuk Sp" value="<?php echo $tgl_masuk_sp; ?>" />
        </div>
	    <div class="form-group">
            <label for="decimal">Id Jns Daftar <?php echo form_error('id_jns_daftar') ?></label>
            <input type="text" class="form-control" name="id_jns_daftar" id="id_jns_daftar" placeholder="Id Jns Daftar" value="<?php echo $id_jns_daftar; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Id Jns Keluar <?php echo form_error('id_jns_keluar') ?></label>
            <input type="text" class="form-control" name="id_jns_keluar" id="id_jns_keluar" placeholder="Id Jns Keluar" value="<?php echo $id_jns_keluar; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tgl Keluar <?php echo form_error('tgl_keluar') ?></label>
            <input type="text" class="form-control" name="tgl_keluar" id="tgl_keluar" placeholder="Tgl Keluar" value="<?php echo $tgl_keluar; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Ket <?php echo form_error('ket') ?></label>
            <input type="text" class="form-control" name="ket" id="ket" placeholder="Ket" value="<?php echo $ket; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Skhun <?php echo form_error('skhun') ?></label>
            <input type="text" class="form-control" name="skhun" id="skhun" placeholder="Skhun" value="<?php echo $skhun; ?>" />
        </div>
	    <div class="form-group">
            <label for="decimal">A Pernah Paud <?php echo form_error('a_pernah_paud') ?></label>
            <input type="text" class="form-control" name="a_pernah_paud" id="a_pernah_paud" placeholder="A Pernah Paud" value="<?php echo $a_pernah_paud; ?>" />
        </div>
	    <div class="form-group">
            <label for="decimal">A Pernah Tk <?php echo form_error('a_pernah_tk') ?></label>
            <input type="text" class="form-control" name="a_pernah_tk" id="a_pernah_tk" placeholder="A Pernah Tk" value="<?php echo $a_pernah_tk; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Kategori <?php echo form_error('id_kategori') ?></label>
            <input type="text" class="form-control" name="id_kategori" id="id_kategori" placeholder="Id Kategori" value="<?php echo $id_kategori; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Mulai Smt <?php echo form_error('mulai_smt') ?></label>
            <input type="text" class="form-control" name="mulai_smt" id="mulai_smt" placeholder="Mulai Smt" value="<?php echo $mulai_smt; ?>" />
        </div>
	    <div class="form-group">
            <label for="decimal">Sks Diakui <?php echo form_error('sks_diakui') ?></label>
            <input type="text" class="form-control" name="sks_diakui" id="sks_diakui" placeholder="Sks Diakui" value="<?php echo $sks_diakui; ?>" />
        </div>
	    <div class="form-group">
            <label for="decimal">Jalur Skripsi <?php echo form_error('jalur_skripsi') ?></label>
            <input type="text" class="form-control" name="jalur_skripsi" id="jalur_skripsi" placeholder="Jalur Skripsi" value="<?php echo $jalur_skripsi; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Judul Skripsi <?php echo form_error('judul_skripsi') ?></label>
            <input type="text" class="form-control" name="judul_skripsi" id="judul_skripsi" placeholder="Judul Skripsi" value="<?php echo $judul_skripsi; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Bln Awal Bimbingan <?php echo form_error('bln_awal_bimbingan') ?></label>
            <input type="text" class="form-control" name="bln_awal_bimbingan" id="bln_awal_bimbingan" placeholder="Bln Awal Bimbingan" value="<?php echo $bln_awal_bimbingan; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Bln Akhir Bimbingan <?php echo form_error('bln_akhir_bimbingan') ?></label>
            <input type="text" class="form-control" name="bln_akhir_bimbingan" id="bln_akhir_bimbingan" placeholder="Bln Akhir Bimbingan" value="<?php echo $bln_akhir_bimbingan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Sk Yudisium <?php echo form_error('sk_yudisium') ?></label>
            <input type="text" class="form-control" name="sk_yudisium" id="sk_yudisium" placeholder="Sk Yudisium" value="<?php echo $sk_yudisium; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tgl Sk Yudisium <?php echo form_error('tgl_sk_yudisium') ?></label>
            <input type="text" class="form-control" name="tgl_sk_yudisium" id="tgl_sk_yudisium" placeholder="Tgl Sk Yudisium" value="<?php echo $tgl_sk_yudisium; ?>" />
        </div>
	    <div class="form-group">
            <label for="double">Ipk <?php echo form_error('ipk') ?></label>
            <input type="text" class="form-control" name="ipk" id="ipk" placeholder="Ipk" value="<?php echo $ipk; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">No Seri Ijazah <?php echo form_error('no_seri_ijazah') ?></label>
            <input type="text" class="form-control" name="no_seri_ijazah" id="no_seri_ijazah" placeholder="No Seri Ijazah" value="<?php echo $no_seri_ijazah; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Sert Prof <?php echo form_error('sert_prof') ?></label>
            <input type="text" class="form-control" name="sert_prof" id="sert_prof" placeholder="Sert Prof" value="<?php echo $sert_prof; ?>" />
        </div>
	    <div class="form-group">
            <label for="decimal">A Pindah Mhs Asing <?php echo form_error('a_pindah_mhs_asing') ?></label>
            <input type="text" class="form-control" name="a_pindah_mhs_asing" id="a_pindah_mhs_asing" placeholder="A Pindah Mhs Asing" value="<?php echo $a_pindah_mhs_asing; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Id Pt Asal <?php echo form_error('id_pt_asal') ?></label>
            <input type="text" class="form-control" name="id_pt_asal" id="id_pt_asal" placeholder="Id Pt Asal" value="<?php echo $id_pt_asal; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Id Prodi Asal <?php echo form_error('id_prodi_asal') ?></label>
            <input type="text" class="form-control" name="id_prodi_asal" id="id_prodi_asal" placeholder="Id Prodi Asal" value="<?php echo $id_prodi_asal; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nm Pt Asal <?php echo form_error('nm_pt_asal') ?></label>
            <input type="text" class="form-control" name="nm_pt_asal" id="nm_pt_asal" placeholder="Nm Pt Asal" value="<?php echo $nm_pt_asal; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nm Prodi Asal <?php echo form_error('nm_prodi_asal') ?></label>
            <input type="text" class="form-control" name="nm_prodi_asal" id="nm_prodi_asal" placeholder="Nm Prodi Asal" value="<?php echo $nm_prodi_asal; ?>" />
        </div>
	    <div class="form-group">
            <label for="decimal">Id Jalur Masuk <?php echo form_error('id_jalur_masuk') ?></label>
            <input type="text" class="form-control" name="id_jalur_masuk" id="id_jalur_masuk" placeholder="Id Jalur Masuk" value="<?php echo $id_jalur_masuk; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">No Peserta Ujian <?php echo form_error('no_peserta_ujian') ?></label>
            <input type="text" class="form-control" name="no_peserta_ujian" id="no_peserta_ujian" placeholder="No Peserta Ujian" value="<?php echo $no_peserta_ujian; ?>" />
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
            <label for="int">Id Cabang <?php echo form_error('id_cabang') ?></label>
            <input type="text" class="form-control" name="id_cabang" id="id_cabang" placeholder="Id Cabang" value="<?php echo $id_cabang; ?>" />
        </div>
	    <input type="hidden" name="" value="<?php echo $; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pddikti_tr_mahasiswa_pt') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>