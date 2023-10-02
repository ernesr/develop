<!doctype html>
<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.13.4/af-2.5.3/b-2.3.6/b-colvis-2.3.6/b-html5-2.3.6/b-print-2.3.6/cr-1.6.2/date-1.4.1/fc-4.2.2/fh-3.3.2/kt-2.9.0/r-2.4.1/rg-1.3.1/rr-1.3.3/sc-2.1.1/sb-1.4.2/sp-2.1.2/sl-1.6.2/sr-1.2.2/datatables.min.css" rel="stylesheet"/>
 
        <style>
            .dataTables_wrapper {
                min-height: 500px
            }
            
            .dataTables_processing {
                position: absolute;
                top: 50%;
                left: 50%;
                width: 100%;
                margin-left: -50%;
                margin-top: -25px;
                padding-top: 20px;
                text-align: center;
                font-size: 1.2em;
                color:grey;
            }
           body{
 background-attachment: fixed;
 background-image: url(<?php echo base_url();?>assets/gambar/bg.png);
}
        </style>
    </head>
    <body> 
       <?php $this -> load -> view('part/nav.php');?> 
        

<br>

<div class="card">
  <div class="card-header">
  <?php echo $judul;?>

  </div>
<div class="container">
  <div class="row">

  <div class="card-body">
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Set Biaya</h4>
  <p>berfungsi untuk mengatur biaya program studi set biaya terjadi 1 kali per sekali pendaftaran</p>
  <hr>
  <p class="mb-0">Regards Developers</p>
</div>
        <h2 style="margin-top:0px">Group Wa <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama Group <?php echo form_error('nama_group') ?></label>
            <input type="text" class="form-control" name="nama_group" id="nama_group" placeholder="Nama Group" value="<?php echo $nama_group; ?>" />
        </div>
	    <div class="form-group">
    <label for="varchar">Pilih Prodi <?php echo form_error('id_sms') ?></label>
    <select name="id_sms" class="form-control" required>
    <?php if($id_sms==''){?>
        <option value="">Silahkan pilih prodi</option>
    <?php }else{ ?>
        <option value="<?php echo $id_sms ?>"><?php echo $nm_lemb ?></option>
    <?php } ?>    
 <?php foreach($sms as $row){?>
    <option value="<?php echo $row->id_sms;?>"><?php echo $row->nm_lemb;?></option>
 <?php } ?>
    </select>
        
        </div>
	    <div class="form-group">
            <label for="varchar">Jenis Mahasiswa <?php echo form_error('jenis_mahasiswa') ?></label>
           <select name="jenis_mahasiswa" class="form-control" required>
    <?php if($jenis_mahasiswa==''){?>
        <option value="">Silahkan pilih Jenis Mahasiswa</option>
     <?php }else{?>
        <option value="<?php echo $jenis_mahasiswa ?>"><?php echo $nm_jns_daftar ?></option>
        <?php }?>
 <?php foreach($jd as $row){?>
    <option value="<?php echo $row->id_jns_daftar;?>"><?php echo $row->nm_jns_daftar;?></option>
 <?php } ?>
    </select>
</div>
	    <div class="form-group">
            <label for="varchar">Link <?php echo form_error('link') ?></label>
            <input type="text" class="form-control" name="link" id="link" placeholder="Link" value="<?php echo $link; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tahun Ajaran <?php echo form_error('tahun_ajaran') ?></label>
           <select name="tahun_ajaran" class="form-control" required>
            <?php if($tahun_ajaran==''){?>
            <option value="">Silahkan Pilih Tahun Ajaran</option>
            <?php }else{ ?>
            <option value="<?php echo $tahun_ajaran?>"><?php echo $tahun_ajaran?></option>

            <?php } ?>    
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
            <option value="2026">2026</option>
            <option value="2027">2027</option>

</select>
        </div>
	    <input type="hidden" name="id_group" value="<?php echo $id_group; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('grupwa') ?>" class="btn btn-default">Cancel</a>
	</form>
    </div>
  </div>
</div>

</div>
</div>

   
        <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.13.4/af-2.5.3/b-2.3.6/b-colvis-2.3.6/b-html5-2.3.6/b-print-2.3.6/cr-1.6.2/date-1.4.1/fc-4.2.2/fh-3.3.2/kt-2.9.0/r-2.4.1/rg-1.3.1/rr-1.3.3/sc-2.1.1/sb-1.4.2/sp-2.1.2/sl-1.6.2/sr-1.2.2/datatables.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>