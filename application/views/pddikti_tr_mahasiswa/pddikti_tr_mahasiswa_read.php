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
        <h2 style="margin-top:0px">Pddikti_tr_mahasiswa Read</h2>
        <table class="table">
	    <tr><td>Id Permohonan Daftar Mhs</td><td><?php echo $id_permohonan_daftar_mhs; ?></td></tr>
	    <tr><td>Nm Pd</td><td><?php echo $nm_pd; ?></td></tr>
	    <tr><td>Jk</td><td><?php echo $jk; ?></td></tr>
	    <tr><td>Nisn</td><td><?php echo $nisn; ?></td></tr>
	    <tr><td>Nik</td><td><?php echo $nik; ?></td></tr>
	    <tr><td>Npwp</td><td><?php echo $npwp; ?></td></tr>
	    <tr><td>Tmpt Lahir</td><td><?php echo $tmpt_lahir; ?></td></tr>
	    <tr><td>Tgl Lahir</td><td><?php echo $tgl_lahir; ?></td></tr>
	    <tr><td>Id Agama</td><td><?php echo $id_agama; ?></td></tr>
	    <tr><td>Id Kk</td><td><?php echo $id_kk; ?></td></tr>
	    <tr><td>Jln</td><td><?php echo $jln; ?></td></tr>
	    <tr><td>Rt</td><td><?php echo $rt; ?></td></tr>
	    <tr><td>Rw</td><td><?php echo $rw; ?></td></tr>
	    <tr><td>Nm Dsn</td><td><?php echo $nm_dsn; ?></td></tr>
	    <tr><td>Ds Kel</td><td><?php echo $ds_kel; ?></td></tr>
	    <tr><td>Id Wil</td><td><?php echo $id_wil; ?></td></tr>
	    <tr><td>Kode Pos</td><td><?php echo $kode_pos; ?></td></tr>
	    <tr><td>Id Jns Tinggal</td><td><?php echo $id_jns_tinggal; ?></td></tr>
	    <tr><td>Id Alat Transport</td><td><?php echo $id_alat_transport; ?></td></tr>
	    <tr><td>No Tel Rmh</td><td><?php echo $no_tel_rmh; ?></td></tr>
	    <tr><td>No Hp</td><td><?php echo $no_hp; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $email; ?></td></tr>
	    <tr><td>A Terima Kps</td><td><?php echo $a_terima_kps; ?></td></tr>
	    <tr><td>No Kps</td><td><?php echo $no_kps; ?></td></tr>
	    <tr><td>Stat Pd</td><td><?php echo $stat_pd; ?></td></tr>
	    <tr><td>Nm Ayah</td><td><?php echo $nm_ayah; ?></td></tr>
	    <tr><td>Tgl Lahir Ayah</td><td><?php echo $tgl_lahir_ayah; ?></td></tr>
	    <tr><td>Nik Ayah</td><td><?php echo $nik_ayah; ?></td></tr>
	    <tr><td>Id Jenjang Pendidikan Ayah</td><td><?php echo $id_jenjang_pendidikan_ayah; ?></td></tr>
	    <tr><td>Id Pekerjaan Ayah</td><td><?php echo $id_pekerjaan_ayah; ?></td></tr>
	    <tr><td>Id Penghasilan Ayah</td><td><?php echo $id_penghasilan_ayah; ?></td></tr>
	    <tr><td>Id Kebutuhan Khusus Ayah</td><td><?php echo $id_kebutuhan_khusus_ayah; ?></td></tr>
	    <tr><td>Nm Ibu Kandung</td><td><?php echo $nm_ibu_kandung; ?></td></tr>
	    <tr><td>Tgl Lahir Ibu</td><td><?php echo $tgl_lahir_ibu; ?></td></tr>
	    <tr><td>Nik Ibu</td><td><?php echo $nik_ibu; ?></td></tr>
	    <tr><td>Id Jenjang Pendidikan Ibu</td><td><?php echo $id_jenjang_pendidikan_ibu; ?></td></tr>
	    <tr><td>Id Pekerjaan Ibu</td><td><?php echo $id_pekerjaan_ibu; ?></td></tr>
	    <tr><td>Id Penghasilan Ibu</td><td><?php echo $id_penghasilan_ibu; ?></td></tr>
	    <tr><td>Id Kebutuhan Khusus Ibu</td><td><?php echo $id_kebutuhan_khusus_ibu; ?></td></tr>
	    <tr><td>Nm Wali</td><td><?php echo $nm_wali; ?></td></tr>
	    <tr><td>Tgl Lahir Wali</td><td><?php echo $tgl_lahir_wali; ?></td></tr>
	    <tr><td>Id Jenjang Pendidikan Wali</td><td><?php echo $id_jenjang_pendidikan_wali; ?></td></tr>
	    <tr><td>Id Pekerjaan Wali</td><td><?php echo $id_pekerjaan_wali; ?></td></tr>
	    <tr><td>Id Penghasilan Wali</td><td><?php echo $id_penghasilan_wali; ?></td></tr>
	    <tr><td>Kewarganegaraan</td><td><?php echo $kewarganegaraan; ?></td></tr>
	    <tr><td>Telepon Seluler</td><td><?php echo $telepon_seluler; ?></td></tr>
	    <tr><td>Telepon Rumah</td><td><?php echo $telepon_rumah; ?></td></tr>
	    <tr><td>Added By</td><td><?php echo $added_by; ?></td></tr>
	    <tr><td>Date Added</td><td><?php echo $date_added; ?></td></tr>
	    <tr><td>Modified By</td><td><?php echo $modified_by; ?></td></tr>
	    <tr><td>Date Modified</td><td><?php echo $date_modified; ?></td></tr>
	    <tr><td>Id Sinkron</td><td><?php echo $id_sinkron; ?></td></tr>
	    <tr><td>Deleted</td><td><?php echo $deleted; ?></td></tr>
	    <tr><td>No Hp Ortu</td><td><?php echo $no_hp_ortu; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pddikti_tr_mahasiswa') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>