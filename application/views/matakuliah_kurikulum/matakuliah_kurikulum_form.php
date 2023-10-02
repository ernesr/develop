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
        <h2 style="margin-top:0px">Matakuliah_kurikulum <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Id Kurikulum <?php echo form_error('id_kurikulum') ?></label>
            <input type="text" class="form-control" name="id_kurikulum" id="id_kurikulum" placeholder="Id Kurikulum" value="<?php echo $id_kurikulum; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Id Matkul <?php echo form_error('id_matkul') ?></label>
            <input type="text" class="form-control" name="id_matkul" id="id_matkul" placeholder="Id Matkul" value="<?php echo $id_matkul; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Semester <?php echo form_error('semester') ?></label>
            <input type="text" class="form-control" name="semester" id="semester" placeholder="Semester" value="<?php echo $semester; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Sks Mata Kuliah <?php echo form_error('sks_mata_kuliah') ?></label>
            <input type="text" class="form-control" name="sks_mata_kuliah" id="sks_mata_kuliah" placeholder="Sks Mata Kuliah" value="<?php echo $sks_mata_kuliah; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Sks Tatap Muka <?php echo form_error('sks_tatap_muka') ?></label>
            <input type="text" class="form-control" name="sks_tatap_muka" id="sks_tatap_muka" placeholder="Sks Tatap Muka" value="<?php echo $sks_tatap_muka; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Sks Praktek <?php echo form_error('sks_praktek') ?></label>
            <input type="text" class="form-control" name="sks_praktek" id="sks_praktek" placeholder="Sks Praktek" value="<?php echo $sks_praktek; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Sks Praktek Lapangan <?php echo form_error('sks_praktek_lapangan') ?></label>
            <input type="text" class="form-control" name="sks_praktek_lapangan" id="sks_praktek_lapangan" placeholder="Sks Praktek Lapangan" value="<?php echo $sks_praktek_lapangan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Sks Simulasi <?php echo form_error('sks_simulasi') ?></label>
            <input type="text" class="form-control" name="sks_simulasi" id="sks_simulasi" placeholder="Sks Simulasi" value="<?php echo $sks_simulasi; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Apakah Wajib <?php echo form_error('apakah_wajib') ?></label>
            <input type="text" class="form-control" name="apakah_wajib" id="apakah_wajib" placeholder="Apakah Wajib" value="<?php echo $apakah_wajib; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Deleted <?php echo form_error('deleted') ?></label>
            <input type="text" class="form-control" name="deleted" id="deleted" placeholder="Deleted" value="<?php echo $deleted; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Status <?php echo form_error('status') ?></label>
            <input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" />
        </div>
	    <div class="form-group">
            <label for="ket">Ket <?php echo form_error('ket') ?></label>
            <textarea class="form-control" rows="3" name="ket" id="ket" placeholder="Ket"><?php echo $ket; ?></textarea>
        </div>
	    <input type="hidden" name="id_maku" value="<?php echo $id_maku; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('matakuliah_kurikulum') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>