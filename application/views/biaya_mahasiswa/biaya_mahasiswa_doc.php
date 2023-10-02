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
        <h2>Biaya_mahasiswa List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Jenis Biaya</th>
		<th>Acc</th>
		<th>Nama Biaya</th>
		<th>Jumlah Biaya</th>
		<th>Set Biaya</th>
		<th>Status Biaya</th>
		<th>Id User Set</th>
		<th>Id User Status</th>
		<th>Deleted</th>
		<th>Id Smt</th>
		<th>Id Sms</th>
		
            </tr><?php
            foreach ($biaya_mahasiswa_data as $biaya_mahasiswa)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $biaya_mahasiswa->jenis_biaya ?></td>
		      <td><?php echo $biaya_mahasiswa->acc ?></td>
		      <td><?php echo $biaya_mahasiswa->nama_biaya ?></td>
		      <td><?php echo $biaya_mahasiswa->jumlah_biaya ?></td>
		      <td><?php echo $biaya_mahasiswa->set_biaya ?></td>
		      <td><?php echo $biaya_mahasiswa->status_biaya ?></td>
		      <td><?php echo $biaya_mahasiswa->id_user_set ?></td>
		      <td><?php echo $biaya_mahasiswa->id_user_status ?></td>
		      <td><?php echo $biaya_mahasiswa->deleted ?></td>
		      <td><?php echo $biaya_mahasiswa->id_smt ?></td>
		      <td><?php echo $biaya_mahasiswa->id_sms ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>