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
        <h2 style="margin-top:0px">Mahasiswa Read</h2>
        <table class="table">
	    <tr><td>Nama Mahasiswa</td><td><?php echo $nama_mahasiswa; ?></td></tr>
	    <tr><td>Jenis Kelamin</td><td><?php echo $jenis_kelamin; ?></td></tr>
	    <tr><td>Tempat Lahir</td><td><?php echo $tempat_lahir; ?></td></tr>
	    <tr><td>Tanggal Lahir</td><td><?php echo $tanggal_lahir; ?></td></tr>
	    <tr><td>Id Agama</td><td><?php echo $id_agama; ?></td></tr>
	    <tr><td>Nik</td><td><?php echo $nik; ?></td></tr>
	    <tr><td>Nisn</td><td><?php echo $nisn; ?></td></tr>
	    <tr><td>Kewarganegaraan</td><td><?php echo $kewarganegaraan; ?></td></tr>
	    <tr><td>Jalan</td><td><?php echo $jalan; ?></td></tr>
	    <tr><td>Dusun</td><td><?php echo $dusun; ?></td></tr>
	    <tr><td>Rt</td><td><?php echo $rt; ?></td></tr>
	    <tr><td>Rw</td><td><?php echo $rw; ?></td></tr>
	    <tr><td>Kelurahan</td><td><?php echo $kelurahan; ?></td></tr>
	    <tr><td>Kode Pos</td><td><?php echo $kode_pos; ?></td></tr>
	    <tr><td>Id Wilayah</td><td><?php echo $id_wilayah; ?></td></tr>
	    <tr><td>Id Jenis Tinggal</td><td><?php echo $id_jenis_tinggal; ?></td></tr>
	    <tr><td>Id Alat Transportasi</td><td><?php echo $id_alat_transportasi; ?></td></tr>
	    <tr><td>Telepon</td><td><?php echo $telepon; ?></td></tr>
	    <tr><td>Handphone</td><td><?php echo $handphone; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $email; ?></td></tr>
	    <tr><td>Penerima Kps</td><td><?php echo $penerima_kps; ?></td></tr>
	    <tr><td>Nomor Kps</td><td><?php echo $nomor_kps; ?></td></tr>
	    <tr><td>Nik Ayah</td><td><?php echo $nik_ayah; ?></td></tr>
	    <tr><td>Nama Ayah</td><td><?php echo $nama_ayah; ?></td></tr>
	    <tr><td>Tanggal Lahir Ayah</td><td><?php echo $tanggal_lahir_ayah; ?></td></tr>
	    <tr><td>Id Pendidikan Ayah</td><td><?php echo $id_pendidikan_ayah; ?></td></tr>
	    <tr><td>Id Pekerjaan Ayah</td><td><?php echo $id_pekerjaan_ayah; ?></td></tr>
	    <tr><td>Id Penghasilan Ayah</td><td><?php echo $id_penghasilan_ayah; ?></td></tr>
	    <tr><td>Nik Ibu</td><td><?php echo $nik_ibu; ?></td></tr>
	    <tr><td>Nama Ibu Kandung</td><td><?php echo $nama_ibu_kandung; ?></td></tr>
	    <tr><td>Tanggal Lahir Ibu</td><td><?php echo $tanggal_lahir_ibu; ?></td></tr>
	    <tr><td>Id Pendidikan Ibu</td><td><?php echo $id_pendidikan_ibu; ?></td></tr>
	    <tr><td>Id Pekerjaan Ibu</td><td><?php echo $id_pekerjaan_ibu; ?></td></tr>
	    <tr><td>Id Penghasilan Ibu</td><td><?php echo $id_penghasilan_ibu; ?></td></tr>
	    <tr><td>Npwp</td><td><?php echo $npwp; ?></td></tr>
	    <tr><td>Nama Wali</td><td><?php echo $nama_wali; ?></td></tr>
	    <tr><td>Tanggal Lahir Wali</td><td><?php echo $tanggal_lahir_wali; ?></td></tr>
	    <tr><td>Id Pendidikan Wali</td><td><?php echo $id_pendidikan_wali; ?></td></tr>
	    <tr><td>Id Pekerjaan Wali</td><td><?php echo $id_pekerjaan_wali; ?></td></tr>
	    <tr><td>Id Penghasilan Wali</td><td><?php echo $id_penghasilan_wali; ?></td></tr>
	    <tr><td>Id Kebutuhan Khusus Mahasiswa</td><td><?php echo $id_kebutuhan_khusus_mahasiswa; ?></td></tr>
	    <tr><td>Id Kebutuhan Khusus Ayah</td><td><?php echo $id_kebutuhan_khusus_ayah; ?></td></tr>
	    <tr><td>Id Kebutuhan Khusus Ibu</td><td><?php echo $id_kebutuhan_khusus_ibu; ?></td></tr>
	    <tr><td>Nim</td><td><?php echo $nim; ?></td></tr>
	    <tr><td>Id Jenis Daftar</td><td><?php echo $id_jenis_daftar; ?></td></tr>
	    <tr><td>Id Jalur Daftar</td><td><?php echo $id_jalur_daftar; ?></td></tr>
	    <tr><td>Id Periode Masuk</td><td><?php echo $id_periode_masuk; ?></td></tr>
	    <tr><td>Tanggal Daftar</td><td><?php echo $tanggal_daftar; ?></td></tr>
	    <tr><td>Id Perguruan Tinggi</td><td><?php echo $id_perguruan_tinggi; ?></td></tr>
	    <tr><td>Id Prodi</td><td><?php echo $id_prodi; ?></td></tr>
	    <tr><td>Id Bidang Minat</td><td><?php echo $id_bidang_minat; ?></td></tr>
	    <tr><td>Sks Diakui</td><td><?php echo $sks_diakui; ?></td></tr>
	    <tr><td>Nama Prodi Asal</td><td><?php echo $nama_prodi_asal; ?></td></tr>
	    <tr><td>Id Pembiayaan</td><td><?php echo $id_pembiayaan; ?></td></tr>
	    <tr><td>Biaya Masuk</td><td><?php echo $biaya_masuk; ?></td></tr>
	    <tr><td>Status</td><td><?php echo $status; ?></td></tr>
	    <tr><td>Error</td><td><?php echo $error; ?></td></tr>
	    <tr><td>Deleted</td><td><?php echo $deleted; ?></td></tr>
	    <tr><td>Data Add</td><td><?php echo $data_add; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('mahasiswa') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>