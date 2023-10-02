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
        <h2 style="margin-top:0px">Nilai_akm <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Semester <?php echo form_error('semester') ?></label>
            <input type="text" class="form-control" name="semester" id="semester" placeholder="Semester" value="<?php echo $semester; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nim <?php echo form_error('nim') ?></label>
            <input type="text" class="form-control" name="nim" id="nim" placeholder="Nim" value="<?php echo $nim; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama <?php echo form_error('nama') ?></label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
        </div>
	    <div class="form-group">
            <label for="decimal">Ips <?php echo form_error('ips') ?></label>
            <input type="text" class="form-control" name="ips" id="ips" placeholder="Ips" value="<?php echo $ips; ?>" />
        </div>
	    <div class="form-group">
            <label for="decimal">Ipk <?php echo form_error('ipk') ?></label>
            <input type="text" class="form-control" name="ipk" id="ipk" placeholder="Ipk" value="<?php echo $ipk; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Sks Smt <?php echo form_error('sks_smt') ?></label>
            <input type="text" class="form-control" name="sks_smt" id="sks_smt" placeholder="Sks Smt" value="<?php echo $sks_smt; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Sks Total <?php echo form_error('sks_total') ?></label>
            <input type="text" class="form-control" name="sks_total" id="sks_total" placeholder="Sks Total" value="<?php echo $sks_total; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kd Jur <?php echo form_error('kd_jur') ?></label>
            <input type="text" class="form-control" name="kd_jur" id="kd_jur" placeholder="Kd Jur" value="<?php echo $kd_jur; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Biaya Smt <?php echo form_error('biaya_smt') ?></label>
            <input type="text" class="form-control" name="biaya_smt" id="biaya_smt" placeholder="Biaya Smt" value="<?php echo $biaya_smt; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Status Kuliah <?php echo form_error('status_kuliah') ?></label>
            <input type="text" class="form-control" name="status_kuliah" id="status_kuliah" placeholder="Status Kuliah" value="<?php echo $status_kuliah; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Se <?php echo form_error('se') ?></label>
            <input type="text" class="form-control" name="se" id="se" placeholder="Se" value="<?php echo $se; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Valid <?php echo form_error('valid') ?></label>
            <input type="text" class="form-control" name="valid" id="valid" placeholder="Valid" value="<?php echo $valid; ?>" />
        </div>
	    <div class="form-group">
            <label for="ket_valid_ips">Ket Valid Ips <?php echo form_error('ket_valid_ips') ?></label>
            <textarea class="form-control" rows="3" name="ket_valid_ips" id="ket_valid_ips" placeholder="Ket Valid Ips"><?php echo $ket_valid_ips; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="ket_sks_sem">Ket Sks Sem <?php echo form_error('ket_sks_sem') ?></label>
            <textarea class="form-control" rows="3" name="ket_sks_sem" id="ket_sks_sem" placeholder="Ket Sks Sem"><?php echo $ket_sks_sem; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="ket_krs_ada">Ket Krs Ada <?php echo form_error('ket_krs_ada') ?></label>
            <textarea class="form-control" rows="3" name="ket_krs_ada" id="ket_krs_ada" placeholder="Ket Krs Ada"><?php echo $ket_krs_ada; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="ket_valid_ipk">Ket Valid Ipk <?php echo form_error('ket_valid_ipk') ?></label>
            <textarea class="form-control" rows="3" name="ket_valid_ipk" id="ket_valid_ipk" placeholder="Ket Valid Ipk"><?php echo $ket_valid_ipk; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="ket_valid_ips_ipk">Ket Valid Ips Ipk <?php echo form_error('ket_valid_ips_ipk') ?></label>
            <textarea class="form-control" rows="3" name="ket_valid_ips_ipk" id="ket_valid_ips_ipk" placeholder="Ket Valid Ips Ipk"><?php echo $ket_valid_ips_ipk; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="keterangan">Keterangan <?php echo form_error('keterangan') ?></label>
            <textarea class="form-control" rows="3" name="keterangan" id="keterangan" placeholder="Keterangan"><?php echo $keterangan; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">Id Session <?php echo form_error('id_session') ?></label>
            <input type="text" class="form-control" name="id_session" id="id_session" placeholder="Id Session" value="<?php echo $id_session; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Data Add <?php echo form_error('data_add') ?></label>
            <input type="text" class="form-control" name="data_add" id="data_add" placeholder="Data Add" value="<?php echo $data_add; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Deleted <?php echo form_error('deleted') ?></label>
            <input type="text" class="form-control" name="deleted" id="deleted" placeholder="Deleted" value="<?php echo $deleted; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Id Pembiayaan <?php echo form_error('id_pembiayaan') ?></label>
            <input type="text" class="form-control" name="id_pembiayaan" id="id_pembiayaan" placeholder="Id Pembiayaan" value="<?php echo $id_pembiayaan; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('nilai_akm') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>