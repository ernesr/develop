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
        <h2 style="margin-top:0px">Pddikti_tr_mahasiswa <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">Id Permohonan Daftar Mhs <?php echo form_error('id_permohonan_daftar_mhs') ?></label>
            <input type="text" class="form-control" name="id_permohonan_daftar_mhs" id="id_permohonan_daftar_mhs" placeholder="Id Permohonan Daftar Mhs" value="<?php echo $id_permohonan_daftar_mhs; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nm Pd <?php echo form_error('nm_pd') ?></label>
            <input type="text" class="form-control" name="nm_pd" id="nm_pd" placeholder="Nm Pd" value="<?php echo $nm_pd; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Jk <?php echo form_error('jk') ?></label>
            <input type="text" class="form-control" name="jk" id="jk" placeholder="Jk" value="<?php echo $jk; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nisn <?php echo form_error('nisn') ?></label>
            <input type="text" class="form-control" name="nisn" id="nisn" placeholder="Nisn" value="<?php echo $nisn; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Nik <?php echo form_error('nik') ?></label>
            <input type="text" class="form-control" name="nik" id="nik" placeholder="Nik" value="<?php echo $nik; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Npwp <?php echo form_error('npwp') ?></label>
            <input type="text" class="form-control" name="npwp" id="npwp" placeholder="Npwp" value="<?php echo $npwp; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tmpt Lahir <?php echo form_error('tmpt_lahir') ?></label>
            <input type="text" class="form-control" name="tmpt_lahir" id="tmpt_lahir" placeholder="Tmpt Lahir" value="<?php echo $tmpt_lahir; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tgl Lahir <?php echo form_error('tgl_lahir') ?></label>
            <input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tgl Lahir" value="<?php echo $tgl_lahir; ?>" />
        </div>
	    <div class="form-group">
            <label for="smallint">Id Agama <?php echo form_error('id_agama') ?></label>
            <input type="text" class="form-control" name="id_agama" id="id_agama" placeholder="Id Agama" value="<?php echo $id_agama; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Kk <?php echo form_error('id_kk') ?></label>
            <input type="text" class="form-control" name="id_kk" id="id_kk" placeholder="Id Kk" value="<?php echo $id_kk; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jln <?php echo form_error('jln') ?></label>
            <input type="text" class="form-control" name="jln" id="jln" placeholder="Jln" value="<?php echo $jln; ?>" />
        </div>
	    <div class="form-group">
            <label for="decimal">Rt <?php echo form_error('rt') ?></label>
            <input type="text" class="form-control" name="rt" id="rt" placeholder="Rt" value="<?php echo $rt; ?>" />
        </div>
	    <div class="form-group">
            <label for="decimal">Rw <?php echo form_error('rw') ?></label>
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
            <label for="char">Id Wil <?php echo form_error('id_wil') ?></label>
            <input type="text" class="form-control" name="id_wil" id="id_wil" placeholder="Id Wil" value="<?php echo $id_wil; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Kode Pos <?php echo form_error('kode_pos') ?></label>
            <input type="text" class="form-control" name="kode_pos" id="kode_pos" placeholder="Kode Pos" value="<?php echo $kode_pos; ?>" />
        </div>
	    <div class="form-group">
            <label for="decimal">Id Jns Tinggal <?php echo form_error('id_jns_tinggal') ?></label>
            <input type="text" class="form-control" name="id_jns_tinggal" id="id_jns_tinggal" placeholder="Id Jns Tinggal" value="<?php echo $id_jns_tinggal; ?>" />
        </div>
	    <div class="form-group">
            <label for="decimal">Id Alat Transport <?php echo form_error('id_alat_transport') ?></label>
            <input type="text" class="form-control" name="id_alat_transport" id="id_alat_transport" placeholder="Id Alat Transport" value="<?php echo $id_alat_transport; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">No Tel Rmh <?php echo form_error('no_tel_rmh') ?></label>
            <input type="text" class="form-control" name="no_tel_rmh" id="no_tel_rmh" placeholder="No Tel Rmh" value="<?php echo $no_tel_rmh; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">No Hp <?php echo form_error('no_hp') ?></label>
            <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="No Hp" value="<?php echo $no_hp; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Email <?php echo form_error('email') ?></label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
        </div>
	    <div class="form-group">
            <label for="decimal">A Terima Kps <?php echo form_error('a_terima_kps') ?></label>
            <input type="text" class="form-control" name="a_terima_kps" id="a_terima_kps" placeholder="A Terima Kps" value="<?php echo $a_terima_kps; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">No Kps <?php echo form_error('no_kps') ?></label>
            <input type="text" class="form-control" name="no_kps" id="no_kps" placeholder="No Kps" value="<?php echo $no_kps; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Stat Pd <?php echo form_error('stat_pd') ?></label>
            <input type="text" class="form-control" name="stat_pd" id="stat_pd" placeholder="Stat Pd" value="<?php echo $stat_pd; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nm Ayah <?php echo form_error('nm_ayah') ?></label>
            <input type="text" class="form-control" name="nm_ayah" id="nm_ayah" placeholder="Nm Ayah" value="<?php echo $nm_ayah; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tgl Lahir Ayah <?php echo form_error('tgl_lahir_ayah') ?></label>
            <input type="text" class="form-control" name="tgl_lahir_ayah" id="tgl_lahir_ayah" placeholder="Tgl Lahir Ayah" value="<?php echo $tgl_lahir_ayah; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Nik Ayah <?php echo form_error('nik_ayah') ?></label>
            <input type="text" class="form-control" name="nik_ayah" id="nik_ayah" placeholder="Nik Ayah" value="<?php echo $nik_ayah; ?>" />
        </div>
	    <div class="form-group">
            <label for="decimal">Id Jenjang Pendidikan Ayah <?php echo form_error('id_jenjang_pendidikan_ayah') ?></label>
            <input type="text" class="form-control" name="id_jenjang_pendidikan_ayah" id="id_jenjang_pendidikan_ayah" placeholder="Id Jenjang Pendidikan Ayah" value="<?php echo $id_jenjang_pendidikan_ayah; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Pekerjaan Ayah <?php echo form_error('id_pekerjaan_ayah') ?></label>
            <input type="text" class="form-control" name="id_pekerjaan_ayah" id="id_pekerjaan_ayah" placeholder="Id Pekerjaan Ayah" value="<?php echo $id_pekerjaan_ayah; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Penghasilan Ayah <?php echo form_error('id_penghasilan_ayah') ?></label>
            <input type="text" class="form-control" name="id_penghasilan_ayah" id="id_penghasilan_ayah" placeholder="Id Penghasilan Ayah" value="<?php echo $id_penghasilan_ayah; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Kebutuhan Khusus Ayah <?php echo form_error('id_kebutuhan_khusus_ayah') ?></label>
            <input type="text" class="form-control" name="id_kebutuhan_khusus_ayah" id="id_kebutuhan_khusus_ayah" placeholder="Id Kebutuhan Khusus Ayah" value="<?php echo $id_kebutuhan_khusus_ayah; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nm Ibu Kandung <?php echo form_error('nm_ibu_kandung') ?></label>
            <input type="text" class="form-control" name="nm_ibu_kandung" id="nm_ibu_kandung" placeholder="Nm Ibu Kandung" value="<?php echo $nm_ibu_kandung; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tgl Lahir Ibu <?php echo form_error('tgl_lahir_ibu') ?></label>
            <input type="text" class="form-control" name="tgl_lahir_ibu" id="tgl_lahir_ibu" placeholder="Tgl Lahir Ibu" value="<?php echo $tgl_lahir_ibu; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Nik Ibu <?php echo form_error('nik_ibu') ?></label>
            <input type="text" class="form-control" name="nik_ibu" id="nik_ibu" placeholder="Nik Ibu" value="<?php echo $nik_ibu; ?>" />
        </div>
	    <div class="form-group">
            <label for="decimal">Id Jenjang Pendidikan Ibu <?php echo form_error('id_jenjang_pendidikan_ibu') ?></label>
            <input type="text" class="form-control" name="id_jenjang_pendidikan_ibu" id="id_jenjang_pendidikan_ibu" placeholder="Id Jenjang Pendidikan Ibu" value="<?php echo $id_jenjang_pendidikan_ibu; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Pekerjaan Ibu <?php echo form_error('id_pekerjaan_ibu') ?></label>
            <input type="text" class="form-control" name="id_pekerjaan_ibu" id="id_pekerjaan_ibu" placeholder="Id Pekerjaan Ibu" value="<?php echo $id_pekerjaan_ibu; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Penghasilan Ibu <?php echo form_error('id_penghasilan_ibu') ?></label>
            <input type="text" class="form-control" name="id_penghasilan_ibu" id="id_penghasilan_ibu" placeholder="Id Penghasilan Ibu" value="<?php echo $id_penghasilan_ibu; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Kebutuhan Khusus Ibu <?php echo form_error('id_kebutuhan_khusus_ibu') ?></label>
            <input type="text" class="form-control" name="id_kebutuhan_khusus_ibu" id="id_kebutuhan_khusus_ibu" placeholder="Id Kebutuhan Khusus Ibu" value="<?php echo $id_kebutuhan_khusus_ibu; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nm Wali <?php echo form_error('nm_wali') ?></label>
            <input type="text" class="form-control" name="nm_wali" id="nm_wali" placeholder="Nm Wali" value="<?php echo $nm_wali; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tgl Lahir Wali <?php echo form_error('tgl_lahir_wali') ?></label>
            <input type="text" class="form-control" name="tgl_lahir_wali" id="tgl_lahir_wali" placeholder="Tgl Lahir Wali" value="<?php echo $tgl_lahir_wali; ?>" />
        </div>
	    <div class="form-group">
            <label for="decimal">Id Jenjang Pendidikan Wali <?php echo form_error('id_jenjang_pendidikan_wali') ?></label>
            <input type="text" class="form-control" name="id_jenjang_pendidikan_wali" id="id_jenjang_pendidikan_wali" placeholder="Id Jenjang Pendidikan Wali" value="<?php echo $id_jenjang_pendidikan_wali; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Pekerjaan Wali <?php echo form_error('id_pekerjaan_wali') ?></label>
            <input type="text" class="form-control" name="id_pekerjaan_wali" id="id_pekerjaan_wali" placeholder="Id Pekerjaan Wali" value="<?php echo $id_pekerjaan_wali; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Penghasilan Wali <?php echo form_error('id_penghasilan_wali') ?></label>
            <input type="text" class="form-control" name="id_penghasilan_wali" id="id_penghasilan_wali" placeholder="Id Penghasilan Wali" value="<?php echo $id_penghasilan_wali; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Kewarganegaraan <?php echo form_error('kewarganegaraan') ?></label>
            <input type="text" class="form-control" name="kewarganegaraan" id="kewarganegaraan" placeholder="Kewarganegaraan" value="<?php echo $kewarganegaraan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Telepon Seluler <?php echo form_error('telepon_seluler') ?></label>
            <input type="text" class="form-control" name="telepon_seluler" id="telepon_seluler" placeholder="Telepon Seluler" value="<?php echo $telepon_seluler; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Telepon Rumah <?php echo form_error('telepon_rumah') ?></label>
            <input type="text" class="form-control" name="telepon_rumah" id="telepon_rumah" placeholder="Telepon Rumah" value="<?php echo $telepon_rumah; ?>" />
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
            <label for="varchar">No Hp Ortu <?php echo form_error('no_hp_ortu') ?></label>
            <input type="text" class="form-control" name="no_hp_ortu" id="no_hp_ortu" placeholder="No Hp Ortu" value="<?php echo $no_hp_ortu; ?>" />
        </div>
	    <input type="hidden" name="id_pd" value="<?php echo $id_pd; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pddikti_tr_mahasiswa') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>