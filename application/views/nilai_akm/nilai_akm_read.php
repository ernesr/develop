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
        <h2 style="margin-top:0px">Nilai_akm Read</h2>
        <table class="table">
	    <tr><td>Semester</td><td><?php echo $semester; ?></td></tr>
	    <tr><td>Nim</td><td><?php echo $nim; ?></td></tr>
	    <tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
	    <tr><td>Ips</td><td><?php echo $ips; ?></td></tr>
	    <tr><td>Ipk</td><td><?php echo $ipk; ?></td></tr>
	    <tr><td>Sks Smt</td><td><?php echo $sks_smt; ?></td></tr>
	    <tr><td>Sks Total</td><td><?php echo $sks_total; ?></td></tr>
	    <tr><td>Kd Jur</td><td><?php echo $kd_jur; ?></td></tr>
	    <tr><td>Biaya Smt</td><td><?php echo $biaya_smt; ?></td></tr>
	    <tr><td>Status Kuliah</td><td><?php echo $status_kuliah; ?></td></tr>
	    <tr><td>Se</td><td><?php echo $se; ?></td></tr>
	    <tr><td>Valid</td><td><?php echo $valid; ?></td></tr>
	    <tr><td>Ket Valid Ips</td><td><?php echo $ket_valid_ips; ?></td></tr>
	    <tr><td>Ket Sks Sem</td><td><?php echo $ket_sks_sem; ?></td></tr>
	    <tr><td>Ket Krs Ada</td><td><?php echo $ket_krs_ada; ?></td></tr>
	    <tr><td>Ket Valid Ipk</td><td><?php echo $ket_valid_ipk; ?></td></tr>
	    <tr><td>Ket Valid Ips Ipk</td><td><?php echo $ket_valid_ips_ipk; ?></td></tr>
	    <tr><td>Keterangan</td><td><?php echo $keterangan; ?></td></tr>
	    <tr><td>Id Session</td><td><?php echo $id_session; ?></td></tr>
	    <tr><td>Data Add</td><td><?php echo $data_add; ?></td></tr>
	    <tr><td>Deleted</td><td><?php echo $deleted; ?></td></tr>
	    <tr><td>Id Pembiayaan</td><td><?php echo $id_pembiayaan; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('nilai_akm') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>