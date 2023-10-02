<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Pddikti_tr_mahasiswa List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Id Permohonan Daftar Mhs</th>
		<th>Nm Pd</th>
		<th>Jk</th>
		<th>Nisn</th>
		<th>Nik</th>
		<th>Npwp</th>
		<th>Tmpt Lahir</th>
		<th>Tgl Lahir</th>
		<th>Id Agama</th>
		<th>Id Kk</th>
		<th>Jln</th>
		<th>Rt</th>
		<th>Rw</th>
		<th>Nm Dsn</th>
		<th>Ds Kel</th>
		<th>Id Wil</th>
		<th>Kode Pos</th>
		<th>Id Jns Tinggal</th>
		<th>Id Alat Transport</th>
		<th>No Tel Rmh</th>
		<th>No Hp</th>
		<th>Email</th>
		<th>A Terima Kps</th>
		<th>No Kps</th>
		<th>Stat Pd</th>
		<th>Nm Ayah</th>
		<th>Tgl Lahir Ayah</th>
		<th>Nik Ayah</th>
		<th>Id Jenjang Pendidikan Ayah</th>
		<th>Id Pekerjaan Ayah</th>
		<th>Id Penghasilan Ayah</th>
		<th>Id Kebutuhan Khusus Ayah</th>
		<th>Nm Ibu Kandung</th>
		<th>Tgl Lahir Ibu</th>
		<th>Nik Ibu</th>
		<th>Id Jenjang Pendidikan Ibu</th>
		<th>Id Pekerjaan Ibu</th>
		<th>Id Penghasilan Ibu</th>
		<th>Id Kebutuhan Khusus Ibu</th>
		<th>Nm Wali</th>
		<th>Tgl Lahir Wali</th>
		<th>Id Jenjang Pendidikan Wali</th>
		<th>Id Pekerjaan Wali</th>
		<th>Id Penghasilan Wali</th>
		<th>Kewarganegaraan</th>
		<th>Telepon Seluler</th>
		<th>Telepon Rumah</th>
		<th>Added By</th>
		<th>Date Added</th>
		<th>Modified By</th>
		<th>Date Modified</th>
		<th>Id Sinkron</th>
		<th>Deleted</th>
		<th>No Hp Ortu</th>
		
            </tr><?php
            foreach ($pddikti_tr_mahasiswa_data as $pddikti_tr_mahasiswa)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->id_permohonan_daftar_mhs ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->nm_pd ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->jk ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->nisn ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->nik ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->npwp ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->tmpt_lahir ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->tgl_lahir ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->id_agama ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->id_kk ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->jln ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->rt ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->rw ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->nm_dsn ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->ds_kel ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->id_wil ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->kode_pos ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->id_jns_tinggal ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->id_alat_transport ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->no_tel_rmh ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->no_hp ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->email ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->a_terima_kps ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->no_kps ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->stat_pd ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->nm_ayah ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->tgl_lahir_ayah ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->nik_ayah ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->id_jenjang_pendidikan_ayah ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->id_pekerjaan_ayah ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->id_penghasilan_ayah ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->id_kebutuhan_khusus_ayah ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->nm_ibu_kandung ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->tgl_lahir_ibu ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->nik_ibu ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->id_jenjang_pendidikan_ibu ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->id_pekerjaan_ibu ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->id_penghasilan_ibu ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->id_kebutuhan_khusus_ibu ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->nm_wali ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->tgl_lahir_wali ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->id_jenjang_pendidikan_wali ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->id_pekerjaan_wali ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->id_penghasilan_wali ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->kewarganegaraan ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->telepon_seluler ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->telepon_rumah ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->added_by ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->date_added ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->modified_by ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->date_modified ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->id_sinkron ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->deleted ?></td>
		      <td><?php echo $pddikti_tr_mahasiswa->no_hp_ortu ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>