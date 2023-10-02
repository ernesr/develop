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
        <h2>Nilai_akm List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Semester</th>
		<th>Nim</th>
		<th>Nama</th>
		<th>Ips</th>
		<th>Ipk</th>
		<th>Sks Smt</th>
		<th>Sks Total</th>
		<th>Kd Jur</th>
		<th>Biaya Smt</th>
		<th>Status Kuliah</th>
		<th>Se</th>
		<th>Valid</th>
		<th>Ket Valid Ips</th>
		<th>Ket Sks Sem</th>
		<th>Ket Krs Ada</th>
		<th>Ket Valid Ipk</th>
		<th>Ket Valid Ips Ipk</th>
		<th>Keterangan</th>
		<th>Id Session</th>
		<th>Data Add</th>
		<th>Deleted</th>
		<th>Id Pembiayaan</th>
		
            </tr><?php
            foreach ($nilai_akm_data as $nilai_akm)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $nilai_akm->semester ?></td>
		      <td><?php echo $nilai_akm->nim ?></td>
		      <td><?php echo $nilai_akm->nama ?></td>
		      <td><?php echo $nilai_akm->ips ?></td>
		      <td><?php echo $nilai_akm->ipk ?></td>
		      <td><?php echo $nilai_akm->sks_smt ?></td>
		      <td><?php echo $nilai_akm->sks_total ?></td>
		      <td><?php echo $nilai_akm->kd_jur ?></td>
		      <td><?php echo $nilai_akm->biaya_smt ?></td>
		      <td><?php echo $nilai_akm->status_kuliah ?></td>
		      <td><?php echo $nilai_akm->se ?></td>
		      <td><?php echo $nilai_akm->valid ?></td>
		      <td><?php echo $nilai_akm->ket_valid_ips ?></td>
		      <td><?php echo $nilai_akm->ket_sks_sem ?></td>
		      <td><?php echo $nilai_akm->ket_krs_ada ?></td>
		      <td><?php echo $nilai_akm->ket_valid_ipk ?></td>
		      <td><?php echo $nilai_akm->ket_valid_ips_ipk ?></td>
		      <td><?php echo $nilai_akm->keterangan ?></td>
		      <td><?php echo $nilai_akm->id_session ?></td>
		      <td><?php echo $nilai_akm->data_add ?></td>
		      <td><?php echo $nilai_akm->deleted ?></td>
		      <td><?php echo $nilai_akm->id_pembiayaan ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>