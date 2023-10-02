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
        <h2 style="margin-top:0px">Mahasiswa <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama Mahasiswa <?php echo form_error('nama_mahasiswa') ?></label>
            <input type="text" class="form-control" name="nama_mahasiswa" id="nama_mahasiswa" placeholder="Nama Mahasiswa" value="<?php echo $nama_mahasiswa; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Jenis Kelamin <?php echo form_error('jenis_kelamin') ?></label>
            <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" placeholder="Jenis Kelamin" value="<?php echo $jenis_kelamin; ?>" />
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
            <label for="int">Id Agama <?php echo form_error('id_agama') ?></label>
            <input type="text" class="form-control" name="id_agama" id="id_agama" placeholder="Id Agama" value="<?php echo $id_agama; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nik <?php echo form_error('nik') ?></label>
            <input type="text" class="form-control" name="nik" id="nik" placeholder="Nik" value="<?php echo $nik; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nisn <?php echo form_error('nisn') ?></label>
            <input type="text" class="form-control" name="nisn" id="nisn" placeholder="Nisn" value="<?php echo $nisn; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kewarganegaraan <?php echo form_error('kewarganegaraan') ?></label>
            <input type="text" class="form-control" name="kewarganegaraan" id="kewarganegaraan" placeholder="Kewarganegaraan" value="<?php echo $kewarganegaraan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jalan <?php echo form_error('jalan') ?></label>
            <input type="text" class="form-control" name="jalan" id="jalan" placeholder="Jalan" value="<?php echo $jalan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Dusun <?php echo form_error('dusun') ?></label>
            <input type="text" class="form-control" name="dusun" id="dusun" placeholder="Dusun" value="<?php echo $dusun; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Rt <?php echo form_error('rt') ?></label>
            <input type="text" class="form-control" name="rt" id="rt" placeholder="Rt" value="<?php echo $rt; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Rw <?php echo form_error('rw') ?></label>
            <input type="text" class="form-control" name="rw" id="rw" placeholder="Rw" value="<?php echo $rw; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kelurahan <?php echo form_error('kelurahan') ?></label>
            <input type="text" class="form-control" name="kelurahan" id="kelurahan" placeholder="Kelurahan" value="<?php echo $kelurahan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kode Pos <?php echo form_error('kode_pos') ?></label>
            <input type="text" class="form-control" name="kode_pos" id="kode_pos" placeholder="Kode Pos" value="<?php echo $kode_pos; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Id Wilayah <?php echo form_error('id_wilayah') ?></label>
            <input type="text" class="form-control" name="id_wilayah" id="id_wilayah" placeholder="Id Wilayah" value="<?php echo $id_wilayah; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Id Jenis Tinggal <?php echo form_error('id_jenis_tinggal') ?></label>
            <input type="text" class="form-control" name="id_jenis_tinggal" id="id_jenis_tinggal" placeholder="Id Jenis Tinggal" value="<?php echo $id_jenis_tinggal; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Id Alat Transportasi <?php echo form_error('id_alat_transportasi') ?></label>
            <input type="text" class="form-control" name="id_alat_transportasi" id="id_alat_transportasi" placeholder="Id Alat Transportasi" value="<?php echo $id_alat_transportasi; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Telepon <?php echo form_error('telepon') ?></label>
            <input type="text" class="form-control" name="telepon" id="telepon" placeholder="Telepon" value="<?php echo $telepon; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Handphone <?php echo form_error('handphone') ?></label>
            <input type="text" class="form-control" name="handphone" id="handphone" placeholder="Handphone" value="<?php echo $handphone; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Email <?php echo form_error('email') ?></label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Penerima Kps <?php echo form_error('penerima_kps') ?></label>
            <input type="text" class="form-control" name="penerima_kps" id="penerima_kps" placeholder="Penerima Kps" value="<?php echo $penerima_kps; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nomor Kps <?php echo form_error('nomor_kps') ?></label>
            <input type="text" class="form-control" name="nomor_kps" id="nomor_kps" placeholder="Nomor Kps" value="<?php echo $nomor_kps; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nik Ayah <?php echo form_error('nik_ayah') ?></label>
            <input type="text" class="form-control" name="nik_ayah" id="nik_ayah" placeholder="Nik Ayah" value="<?php echo $nik_ayah; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama Ayah <?php echo form_error('nama_ayah') ?></label>
            <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" placeholder="Nama Ayah" value="<?php echo $nama_ayah; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tanggal Lahir Ayah <?php echo form_error('tanggal_lahir_ayah') ?></label>
            <input type="text" class="form-control" name="tanggal_lahir_ayah" id="tanggal_lahir_ayah" placeholder="Tanggal Lahir Ayah" value="<?php echo $tanggal_lahir_ayah; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Id Pendidikan Ayah <?php echo form_error('id_pendidikan_ayah') ?></label>
            <input type="text" class="form-control" name="id_pendidikan_ayah" id="id_pendidikan_ayah" placeholder="Id Pendidikan Ayah" value="<?php echo $id_pendidikan_ayah; ?>" />
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
            <label for="varchar">Nik Ibu <?php echo form_error('nik_ibu') ?></label>
            <input type="text" class="form-control" name="nik_ibu" id="nik_ibu" placeholder="Nik Ibu" value="<?php echo $nik_ibu; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama Ibu Kandung <?php echo form_error('nama_ibu_kandung') ?></label>
            <input type="text" class="form-control" name="nama_ibu_kandung" id="nama_ibu_kandung" placeholder="Nama Ibu Kandung" value="<?php echo $nama_ibu_kandung; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tanggal Lahir Ibu <?php echo form_error('tanggal_lahir_ibu') ?></label>
            <input type="text" class="form-control" name="tanggal_lahir_ibu" id="tanggal_lahir_ibu" placeholder="Tanggal Lahir Ibu" value="<?php echo $tanggal_lahir_ibu; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Id Pendidikan Ibu <?php echo form_error('id_pendidikan_ibu') ?></label>
            <input type="text" class="form-control" name="id_pendidikan_ibu" id="id_pendidikan_ibu" placeholder="Id Pendidikan Ibu" value="<?php echo $id_pendidikan_ibu; ?>" />
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
            <label for="varchar">Npwp <?php echo form_error('npwp') ?></label>
            <input type="text" class="form-control" name="npwp" id="npwp" placeholder="Npwp" value="<?php echo $npwp; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama Wali <?php echo form_error('nama_wali') ?></label>
            <input type="text" class="form-control" name="nama_wali" id="nama_wali" placeholder="Nama Wali" value="<?php echo $nama_wali; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tanggal Lahir Wali <?php echo form_error('tanggal_lahir_wali') ?></label>
            <input type="text" class="form-control" name="tanggal_lahir_wali" id="tanggal_lahir_wali" placeholder="Tanggal Lahir Wali" value="<?php echo $tanggal_lahir_wali; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Id Pendidikan Wali <?php echo form_error('id_pendidikan_wali') ?></label>
            <input type="text" class="form-control" name="id_pendidikan_wali" id="id_pendidikan_wali" placeholder="Id Pendidikan Wali" value="<?php echo $id_pendidikan_wali; ?>" />
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
            <label for="int">Id Kebutuhan Khusus Mahasiswa <?php echo form_error('id_kebutuhan_khusus_mahasiswa') ?></label>
            <input type="text" class="form-control" name="id_kebutuhan_khusus_mahasiswa" id="id_kebutuhan_khusus_mahasiswa" placeholder="Id Kebutuhan Khusus Mahasiswa" value="<?php echo $id_kebutuhan_khusus_mahasiswa; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Kebutuhan Khusus Ayah <?php echo form_error('id_kebutuhan_khusus_ayah') ?></label>
            <input type="text" class="form-control" name="id_kebutuhan_khusus_ayah" id="id_kebutuhan_khusus_ayah" placeholder="Id Kebutuhan Khusus Ayah" value="<?php echo $id_kebutuhan_khusus_ayah; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Kebutuhan Khusus Ibu <?php echo form_error('id_kebutuhan_khusus_ibu') ?></label>
            <input type="text" class="form-control" name="id_kebutuhan_khusus_ibu" id="id_kebutuhan_khusus_ibu" placeholder="Id Kebutuhan Khusus Ibu" value="<?php echo $id_kebutuhan_khusus_ibu; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nim <?php echo form_error('nim') ?></label>
            <input type="text" class="form-control" name="nim" id="nim" placeholder="Nim" value="<?php echo $nim; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Id Jenis Daftar <?php echo form_error('id_jenis_daftar') ?></label>
            <input type="text" class="form-control" name="id_jenis_daftar" id="id_jenis_daftar" placeholder="Id Jenis Daftar" value="<?php echo $id_jenis_daftar; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Id Jalur Daftar <?php echo form_error('id_jalur_daftar') ?></label>
            <input type="text" class="form-control" name="id_jalur_daftar" id="id_jalur_daftar" placeholder="Id Jalur Daftar" value="<?php echo $id_jalur_daftar; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Id Periode Masuk <?php echo form_error('id_periode_masuk') ?></label>
            <input type="text" class="form-control" name="id_periode_masuk" id="id_periode_masuk" placeholder="Id Periode Masuk" value="<?php echo $id_periode_masuk; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tanggal Daftar <?php echo form_error('tanggal_daftar') ?></label>
            <input type="text" class="form-control" name="tanggal_daftar" id="tanggal_daftar" placeholder="Tanggal Daftar" value="<?php echo $tanggal_daftar; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Id Perguruan Tinggi <?php echo form_error('id_perguruan_tinggi') ?></label>
            <input type="text" class="form-control" name="id_perguruan_tinggi" id="id_perguruan_tinggi" placeholder="Id Perguruan Tinggi" value="<?php echo $id_perguruan_tinggi; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Id Prodi <?php echo form_error('id_prodi') ?></label>
            <input type="text" class="form-control" name="id_prodi" id="id_prodi" placeholder="Id Prodi" value="<?php echo $id_prodi; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Id Bidang Minat <?php echo form_error('id_bidang_minat') ?></label>
            <input type="text" class="form-control" name="id_bidang_minat" id="id_bidang_minat" placeholder="Id Bidang Minat" value="<?php echo $id_bidang_minat; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Sks Diakui <?php echo form_error('sks_diakui') ?></label>
            <input type="text" class="form-control" name="sks_diakui" id="sks_diakui" placeholder="Sks Diakui" value="<?php echo $sks_diakui; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama Prodi Asal <?php echo form_error('nama_prodi_asal') ?></label>
            <input type="text" class="form-control" name="nama_prodi_asal" id="nama_prodi_asal" placeholder="Nama Prodi Asal" value="<?php echo $nama_prodi_asal; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Id Pembiayaan <?php echo form_error('id_pembiayaan') ?></label>
            <input type="text" class="form-control" name="id_pembiayaan" id="id_pembiayaan" placeholder="Id Pembiayaan" value="<?php echo $id_pembiayaan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Biaya Masuk <?php echo form_error('biaya_masuk') ?></label>
            <input type="text" class="form-control" name="biaya_masuk" id="biaya_masuk" placeholder="Biaya Masuk" value="<?php echo $biaya_masuk; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Status <?php echo form_error('status') ?></label>
            <input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Error <?php echo form_error('error') ?></label>
            <input type="text" class="form-control" name="error" id="error" placeholder="Error" value="<?php echo $error; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Deleted <?php echo form_error('deleted') ?></label>
            <input type="text" class="form-control" name="deleted" id="deleted" placeholder="Deleted" value="<?php echo $deleted; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Data Add <?php echo form_error('data_add') ?></label>
            <input type="text" class="form-control" name="data_add" id="data_add" placeholder="Data Add" value="<?php echo $data_add; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('mahasiswa') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>