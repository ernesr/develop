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
        <h2 style="margin-top:0px">Permohonan_daftar_mhs <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="char">Id Cust <?php echo form_error('id_cust') ?></label>
            <input type="text" class="form-control" name="id_cust" id="id_cust" placeholder="Id Cust" value="<?php echo $id_cust; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama Lengkap <?php echo form_error('nama_lengkap') ?></label>
            <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" value="<?php echo $nama_lengkap; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Email <?php echo form_error('email') ?></label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Password <?php echo form_error('password') ?></label>
            <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" />
        </div>
	    <div class="form-group">
            <label for="binary">Id Sp <?php echo form_error('id_sp') ?></label>
            <input type="text" class="form-control" name="id_sp" id="id_sp" placeholder="Id Sp" value="<?php echo $id_sp; ?>" />
        </div>
	    <div class="form-group">
            <label for="binary">Id Sms <?php echo form_error('id_sms') ?></label>
            <input type="text" class="form-control" name="id_sms" id="id_sms" placeholder="Id Sms" value="<?php echo $id_sms; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Jns Daftar <?php echo form_error('id_jns_daftar') ?></label>
            <input type="text" class="form-control" name="id_jns_daftar" id="id_jns_daftar" placeholder="Id Jns Daftar" value="<?php echo $id_jns_daftar; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Foto Images <?php echo form_error('foto_images') ?></label>
            <input type="text" class="form-control" name="foto_images" id="foto_images" placeholder="Foto Images" value="<?php echo $foto_images; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tempat Lahir <?php echo form_error('tempat_lahir') ?></label>
            <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $tempat_lahir; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tanggal Lahir <?php echo form_error('tanggal_lahir') ?></label>
            <input type="text" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $tanggal_lahir; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jenis Kelamin <?php echo form_error('jenis_kelamin') ?></label>
            <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" placeholder="Jenis Kelamin" value="<?php echo $jenis_kelamin; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Alamat Rumah <?php echo form_error('alamat_rumah') ?></label>
            <input type="text" class="form-control" name="alamat_rumah" id="alamat_rumah" placeholder="Alamat Rumah" value="<?php echo $alamat_rumah; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">No Hp <?php echo form_error('no_hp') ?></label>
            <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="No Hp" value="<?php echo $no_hp; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">No Hp Ortu <?php echo form_error('no_hp_ortu') ?></label>
            <input type="text" class="form-control" name="no_hp_ortu" id="no_hp_ortu" placeholder="No Hp Ortu" value="<?php echo $no_hp_ortu; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Asal Sekolah <?php echo form_error('asal_sekolah') ?></label>
            <input type="text" class="form-control" name="asal_sekolah" id="asal_sekolah" placeholder="Asal Sekolah" value="<?php echo $asal_sekolah; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tahun Lulus <?php echo form_error('tahun_lulus') ?></label>
            <input type="text" class="form-control" name="tahun_lulus" id="tahun_lulus" placeholder="Tahun Lulus" value="<?php echo $tahun_lulus; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jurusan Sma <?php echo form_error('jurusan_sma') ?></label>
            <input type="text" class="form-control" name="jurusan_sma" id="jurusan_sma" placeholder="Jurusan Sma" value="<?php echo $jurusan_sma; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tinggi Badan <?php echo form_error('tinggi_badan') ?></label>
            <input type="text" class="form-control" name="tinggi_badan" id="tinggi_badan" placeholder="Tinggi Badan" value="<?php echo $tinggi_badan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Berat Badan <?php echo form_error('berat_badan') ?></label>
            <input type="text" class="form-control" name="berat_badan" id="berat_badan" placeholder="Berat Badan" value="<?php echo $berat_badan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Agama <?php echo form_error('agama') ?></label>
            <input type="text" class="form-control" name="agama" id="agama" placeholder="Agama" value="<?php echo $agama; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tahun Masuk <?php echo form_error('tahun_masuk') ?></label>
            <input type="text" class="form-control" name="tahun_masuk" id="tahun_masuk" placeholder="Tahun Masuk" value="<?php echo $tahun_masuk; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Gelombang <?php echo form_error('gelombang') ?></label>
            <input type="text" class="form-control" name="gelombang" id="gelombang" placeholder="Gelombang" value="<?php echo $gelombang; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Status Complete <?php echo form_error('status_complete') ?></label>
            <input type="text" class="form-control" name="status_complete" id="status_complete" placeholder="Status Complete" value="<?php echo $status_complete; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Bukti Transfer <?php echo form_error('bukti_transfer') ?></label>
            <input type="text" class="form-control" name="bukti_transfer" id="bukti_transfer" placeholder="Bukti Transfer" value="<?php echo $bukti_transfer; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Bukti Transfer Dari <?php echo form_error('bukti_transfer_dari') ?></label>
            <input type="text" class="form-control" name="bukti_transfer_dari" id="bukti_transfer_dari" placeholder="Bukti Transfer Dari" value="<?php echo $bukti_transfer_dari; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Bukti Transfer2 <?php echo form_error('bukti_transfer2') ?></label>
            <input type="text" class="form-control" name="bukti_transfer2" id="bukti_transfer2" placeholder="Bukti Transfer2" value="<?php echo $bukti_transfer2; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Bukti Transfer2 Dari <?php echo form_error('bukti_transfer2_dari') ?></label>
            <input type="text" class="form-control" name="bukti_transfer2_dari" id="bukti_transfer2_dari" placeholder="Bukti Transfer2 Dari" value="<?php echo $bukti_transfer2_dari; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Ip Address <?php echo form_error('ip_address') ?></label>
            <input type="text" class="form-control" name="ip_address" id="ip_address" placeholder="Ip Address" value="<?php echo $ip_address; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Date Added <?php echo form_error('date_added') ?></label>
            <input type="text" class="form-control" name="date_added" id="date_added" placeholder="Date Added" value="<?php echo $date_added; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Date Modified <?php echo form_error('date_modified') ?></label>
            <input type="text" class="form-control" name="date_modified" id="date_modified" placeholder="Date Modified" value="<?php echo $date_modified; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Pendaftaran Untuk Tahun Ajaran <?php echo form_error('pendaftaran_untuk_tahun_ajaran') ?></label>
            <input type="text" class="form-control" name="pendaftaran_untuk_tahun_ajaran" id="pendaftaran_untuk_tahun_ajaran" placeholder="Pendaftaran Untuk Tahun Ajaran" value="<?php echo $pendaftaran_untuk_tahun_ajaran; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Deleted <?php echo form_error('deleted') ?></label>
            <input type="text" class="form-control" name="deleted" id="deleted" placeholder="Deleted" value="<?php echo $deleted; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nm Ibu Kandung <?php echo form_error('nm_ibu_kandung') ?></label>
            <input type="text" class="form-control" name="nm_ibu_kandung" id="nm_ibu_kandung" placeholder="Nm Ibu Kandung" value="<?php echo $nm_ibu_kandung; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nik <?php echo form_error('nik') ?></label>
            <input type="text" class="form-control" name="nik" id="nik" placeholder="Nik" value="<?php echo $nik; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Id Wil <?php echo form_error('id_wil') ?></label>
            <input type="text" class="form-control" name="id_wil" id="id_wil" placeholder="Id Wil" value="<?php echo $id_wil; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Ds Kel <?php echo form_error('ds_kel') ?></label>
            <input type="text" class="form-control" name="ds_kel" id="ds_kel" placeholder="Ds Kel" value="<?php echo $ds_kel; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Kewarganegaraan <?php echo form_error('kewarganegaraan') ?></label>
            <input type="text" class="form-control" name="kewarganegaraan" id="kewarganegaraan" placeholder="Kewarganegaraan" value="<?php echo $kewarganegaraan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kab <?php echo form_error('kab') ?></label>
            <input type="text" class="form-control" name="kab" id="kab" placeholder="Kab" value="<?php echo $kab; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kec <?php echo form_error('kec') ?></label>
            <input type="text" class="form-control" name="kec" id="kec" placeholder="Kec" value="<?php echo $kec; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Alternatif Sms <?php echo form_error('alternatif_sms') ?></label>
            <input type="text" class="form-control" name="alternatif_sms" id="alternatif_sms" placeholder="Alternatif Sms" value="<?php echo $alternatif_sms; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Alternatif Sp <?php echo form_error('alternatif_sp') ?></label>
            <input type="text" class="form-control" name="alternatif_sp" id="alternatif_sp" placeholder="Alternatif Sp" value="<?php echo $alternatif_sp; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nisn <?php echo form_error('nisn') ?></label>
            <input type="text" class="form-control" name="nisn" id="nisn" placeholder="Nisn" value="<?php echo $nisn; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Survei <?php echo form_error('survei') ?></label>
            <input type="text" class="form-control" name="survei" id="survei" placeholder="Survei" value="<?php echo $survei; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kd <?php echo form_error('kd') ?></label>
            <input type="text" class="form-control" name="kd" id="kd" placeholder="Kd" value="<?php echo $kd; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Pas2 <?php echo form_error('pas2') ?></label>
            <input type="text" class="form-control" name="pas2" id="pas2" placeholder="Pas2" value="<?php echo $pas2; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Paket <?php echo form_error('paket') ?></label>
            <input type="text" class="form-control" name="paket" id="paket" placeholder="Paket" value="<?php echo $paket; ?>" />
        </div>
	    <input type="hidden" name="id_permohonan_daftar_mhs" value="<?php echo $id_permohonan_daftar_mhs; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('permohonan_daftar_mhs') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>