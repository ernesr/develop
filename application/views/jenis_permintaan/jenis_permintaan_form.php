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
        <h2 style="margin-top:0px">Jenis_permintaan <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Jenis Permintaan <?php echo form_error('jenis_permintaan') ?></label>
            <input type="text" class="form-control" name="jenis_permintaan" id="jenis_permintaan" placeholder="Jenis Permintaan" value="<?php echo $jenis_permintaan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Id Unit <?php echo form_error('id_unit') ?></label>
            <input type="text" class="form-control" name="id_unit" id="id_unit" placeholder="Id Unit" value="<?php echo $id_unit; ?>" />
        </div>
	    <input type="hidden" name="id_permintaan" value="<?php echo $id_permintaan; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('jenis_permintaan') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>