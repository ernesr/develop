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
        <h2 style="margin-top:0px">Biaya_mahasiswa Read</h2>
        <table class="table">
	    <tr><td>Jenis Biaya</td><td><?php echo $jenis_biaya; ?></td></tr>
	    <tr><td>Acc</td><td><?php echo $acc; ?></td></tr>
	    <tr><td>Nama Biaya</td><td><?php echo $nama_biaya; ?></td></tr>
	    <tr><td>Jumlah Biaya</td><td><?php echo $jumlah_biaya; ?></td></tr>
	    <tr><td>Set Biaya</td><td><?php echo $set_biaya; ?></td></tr>
	    <tr><td>Status Biaya</td><td><?php echo $status_biaya; ?></td></tr>
	    <tr><td>Id User Set</td><td><?php echo $id_user_set; ?></td></tr>
	    <tr><td>Id User Status</td><td><?php echo $id_user_status; ?></td></tr>
	    <tr><td>Deleted</td><td><?php echo $deleted; ?></td></tr>
	    <tr><td>Id Smt</td><td><?php echo $id_smt; ?></td></tr>
	    <tr><td>Id Sms</td><td><?php echo $id_sms; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('biaya_mahasiswa') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>