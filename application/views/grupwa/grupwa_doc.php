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
        <h2>Grupwa List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama Group</th>
		<th>Id Sms</th>
		<th>Jenis Mahasiswa</th>
		<th>Link</th>
		<th>Tahun Ajaran</th>
		
            </tr><?php
            foreach ($grupwa_data as $grupwa)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $grupwa->nama_group ?></td>
		      <td><?php echo $grupwa->id_sms ?></td>
		      <td><?php echo $grupwa->jenis_mahasiswa ?></td>
		      <td><?php echo $grupwa->link ?></td>
		      <td><?php echo $grupwa->tahun_ajaran ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>