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
        <h2 style="margin-top:0px">Matakuliah_kurikulum Read</h2>
        <table class="table">
	    <tr><td>Id Kurikulum</td><td><?php echo $id_kurikulum; ?></td></tr>
	    <tr><td>Id Matkul</td><td><?php echo $id_matkul; ?></td></tr>
	    <tr><td>Semester</td><td><?php echo $semester; ?></td></tr>
	    <tr><td>Sks Mata Kuliah</td><td><?php echo $sks_mata_kuliah; ?></td></tr>
	    <tr><td>Sks Tatap Muka</td><td><?php echo $sks_tatap_muka; ?></td></tr>
	    <tr><td>Sks Praktek</td><td><?php echo $sks_praktek; ?></td></tr>
	    <tr><td>Sks Praktek Lapangan</td><td><?php echo $sks_praktek_lapangan; ?></td></tr>
	    <tr><td>Sks Simulasi</td><td><?php echo $sks_simulasi; ?></td></tr>
	    <tr><td>Apakah Wajib</td><td><?php echo $apakah_wajib; ?></td></tr>
	    <tr><td>Deleted</td><td><?php echo $deleted; ?></td></tr>
	    <tr><td>Status</td><td><?php echo $status; ?></td></tr>
	    <tr><td>Ket</td><td><?php echo $ket; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('matakuliah_kurikulum') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>