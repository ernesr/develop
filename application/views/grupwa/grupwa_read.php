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
        <h2 style="margin-top:0px">Grupwa Read</h2>
        <table class="table">
	    <tr><td>Nama Group</td><td><?php echo $nama_group; ?></td></tr>
	    <tr><td>Id Sms</td><td><?php echo $id_sms; ?></td></tr>
	    <tr><td>Jenis Mahasiswa</td><td><?php echo $jenis_mahasiswa; ?></td></tr>
	    <tr><td>Link</td><td><?php echo $link; ?></td></tr>
	    <tr><td>Tahun Ajaran</td><td><?php echo $tahun_ajaran; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('grupwa') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>