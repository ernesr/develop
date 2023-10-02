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
        <h2>Permohonan_daftar_mhs List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Id Cust</th>
		<th>Nama Lengkap</th>
		<th>Email</th>
		<th>Password</th>
		<th>Id Sp</th>
		<th>Id Sms</th>
		<th>Id Jns Daftar</th>
		<th>Foto Images</th>
		<th>Tempat Lahir</th>
		<th>Tanggal Lahir</th>
		<th>Jenis Kelamin</th>
		<th>Alamat Rumah</th>
		<th>No Hp</th>
		<th>No Hp Ortu</th>
		<th>Asal Sekolah</th>
		<th>Tahun Lulus</th>
		<th>Jurusan Sma</th>
		<th>Tinggi Badan</th>
		<th>Berat Badan</th>
		<th>Agama</th>
		<th>Tahun Masuk</th>
		<th>Gelombang</th>
		<th>Status Complete</th>
		<th>Bukti Transfer</th>
		<th>Bukti Transfer Dari</th>
		<th>Bukti Transfer2</th>
		<th>Bukti Transfer2 Dari</th>
		<th>Ip Address</th>
		<th>Date Added</th>
		<th>Date Modified</th>
		<th>Pendaftaran Untuk Tahun Ajaran</th>
		<th>Deleted</th>
		<th>Nm Ibu Kandung</th>
		<th>Nik</th>
		<th>Id Wil</th>
		<th>Ds Kel</th>
		<th>Kewarganegaraan</th>
		<th>Kab</th>
		<th>Kec</th>
		<th>Alternatif Sms</th>
		<th>Alternatif Sp</th>
		<th>Nisn</th>
		<th>Survei</th>
		<th>Kd</th>
		<th>Pas2</th>
		<th>Paket</th>
		
            </tr><?php
            foreach ($permohonan_daftar_mhs_data as $permohonan_daftar_mhs)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $permohonan_daftar_mhs->id_cust ?></td>
		      <td><?php echo $permohonan_daftar_mhs->nama_lengkap ?></td>
		      <td><?php echo $permohonan_daftar_mhs->email ?></td>
		      <td><?php echo $permohonan_daftar_mhs->password ?></td>
		      <td><?php echo $permohonan_daftar_mhs->id_sp ?></td>
		      <td><?php echo $permohonan_daftar_mhs->id_sms ?></td>
		      <td><?php echo $permohonan_daftar_mhs->id_jns_daftar ?></td>
		      <td><?php echo $permohonan_daftar_mhs->foto_images ?></td>
		      <td><?php echo $permohonan_daftar_mhs->tempat_lahir ?></td>
		      <td><?php echo $permohonan_daftar_mhs->tanggal_lahir ?></td>
		      <td><?php echo $permohonan_daftar_mhs->jenis_kelamin ?></td>
		      <td><?php echo $permohonan_daftar_mhs->alamat_rumah ?></td>
		      <td><?php echo $permohonan_daftar_mhs->no_hp ?></td>
		      <td><?php echo $permohonan_daftar_mhs->no_hp_ortu ?></td>
		      <td><?php echo $permohonan_daftar_mhs->asal_sekolah ?></td>
		      <td><?php echo $permohonan_daftar_mhs->tahun_lulus ?></td>
		      <td><?php echo $permohonan_daftar_mhs->jurusan_sma ?></td>
		      <td><?php echo $permohonan_daftar_mhs->tinggi_badan ?></td>
		      <td><?php echo $permohonan_daftar_mhs->berat_badan ?></td>
		      <td><?php echo $permohonan_daftar_mhs->agama ?></td>
		      <td><?php echo $permohonan_daftar_mhs->tahun_masuk ?></td>
		      <td><?php echo $permohonan_daftar_mhs->gelombang ?></td>
		      <td><?php echo $permohonan_daftar_mhs->status_complete ?></td>
		      <td><?php echo $permohonan_daftar_mhs->bukti_transfer ?></td>
		      <td><?php echo $permohonan_daftar_mhs->bukti_transfer_dari ?></td>
		      <td><?php echo $permohonan_daftar_mhs->bukti_transfer2 ?></td>
		      <td><?php echo $permohonan_daftar_mhs->bukti_transfer2_dari ?></td>
		      <td><?php echo $permohonan_daftar_mhs->ip_address ?></td>
		      <td><?php echo $permohonan_daftar_mhs->date_added ?></td>
		      <td><?php echo $permohonan_daftar_mhs->date_modified ?></td>
		      <td><?php echo $permohonan_daftar_mhs->pendaftaran_untuk_tahun_ajaran ?></td>
		      <td><?php echo $permohonan_daftar_mhs->deleted ?></td>
		      <td><?php echo $permohonan_daftar_mhs->nm_ibu_kandung ?></td>
		      <td><?php echo $permohonan_daftar_mhs->nik ?></td>
		      <td><?php echo $permohonan_daftar_mhs->id_wil ?></td>
		      <td><?php echo $permohonan_daftar_mhs->ds_kel ?></td>
		      <td><?php echo $permohonan_daftar_mhs->kewarganegaraan ?></td>
		      <td><?php echo $permohonan_daftar_mhs->kab ?></td>
		      <td><?php echo $permohonan_daftar_mhs->kec ?></td>
		      <td><?php echo $permohonan_daftar_mhs->alternatif_sms ?></td>
		      <td><?php echo $permohonan_daftar_mhs->alternatif_sp ?></td>
		      <td><?php echo $permohonan_daftar_mhs->nisn ?></td>
		      <td><?php echo $permohonan_daftar_mhs->survei ?></td>
		      <td><?php echo $permohonan_daftar_mhs->kd ?></td>
		      <td><?php echo $permohonan_daftar_mhs->pas2 ?></td>
		      <td><?php echo $permohonan_daftar_mhs->paket ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>