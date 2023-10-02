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
        <h2 style="margin-top:0px"></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Jenis Biaya <?php echo form_error('jenis_biaya') ?></label>
          <select name="jenis_biaya" class="form-control" required>
<?php if($jenis_biaya==''){?>  
    <option value="">Silahkan pilih Jenis Mahasiswa</option>
<?php }else{?>
    <option value="<?php echo $jenis_biaya;?>"><?php echo $nm_jns_daftar;?></option>
<?php } ?>}
 <?php foreach($jd as $row){?>
    <option value="<?php echo $row->id_jns_daftar;?>"><?php echo $row->nm_jns_daftar;?></option>
 <?php } ?>
    </select>
        </div>
	    <div class="form-group">
            <label for="varchar">Acc <?php echo form_error('acc') ?></label>
            <input type="text" class="form-control" name="acc" id="acc" placeholder="Acc" value="<?php echo $acc; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama Biaya <?php echo form_error('nama_biaya') ?></label>
            <input type="text" class="form-control" name="nama_biaya" id="nama_biaya" placeholder="Nama Biaya" value="<?php echo $nama_biaya; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jumlah Biaya <?php echo form_error('jumlah_biaya') ?></label>
            <input type="text" class="form-control" name="jumlah_biaya" id="rupiah" placeholder="Jumlah Biaya" value="<?php echo $jumlah_biaya; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Set Biaya Deskripsi <?php echo form_error('set_biaya') ?></label>
            <input type="text" class="form-control" name="set_biaya" id="set_biaya" placeholder="Set Biaya" value="<?php echo $set_biaya; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Status Biaya <?php echo form_error('status_biaya') ?></label>
            <input type="text" class="form-control" name="status_biaya" id="status_biaya" placeholder="Status Biaya" value="<?php echo $status_biaya; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">User yang membuat <?php echo form_error('id_user_set') ?></label>
            <input type="text" class="form-control" name="id_user_set" id="id_user_set" placeholder="Id User Set" value="<?php echo $id_user_set; ?>" readonly />
        </div>
	    <div class="form-group">
            <label for="varchar">Id User Status <?php echo form_error('id_user_status') ?></label>
            <input type="text" class="form-control" name="id_user_status" id="id_user_status" placeholder="Id User Status" value="<?php echo $id_user_status; ?>" />
        </div>
	 
	    <div class="form-group">
            <label for="varchar">Tahun ajaran Berlaku<?php echo form_error('id_smt') ?></label>
            <input type="text" class="form-control" name="id_smt" id="id_smt" placeholder="Id Smt" value="<?php echo $id_smt; ?>" />
        </div>
	     <div class="form-group">
    <label for="varchar">Pilih Prodi <?php echo form_error('id_sms') ?></label>
    <select name="id_sms" class="form-control" required>
 <?php if($id_sms==''){?>
    <option value="">Silahkan pilih prodi</option>
<?php }else{ ?>
    <option value="<?php echo $id_sms?>"><?php echo $nm_lemb;?></option>
<?php }?>
 <?php foreach($sms as $row){?>
    <option value="<?php echo $row->id_sms;?>"><?php echo $row->nm_lemb;?></option>
 <?php } ?>
    </select>
        
        </div>
	    <input type="hidden" name="id_biaya" value="<?php echo $id_biaya; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('biaya') ?>" class="btn btn-default">Cancel</a>
	</form>
    </div>
  </div>
</div>

</div>
</div>

    <script type="text/javascript">
var rupiah = document.getElementById("rupiah");
rupiah.addEventListener("keyup", function(e) {
  // tambahkan 'Rp.' pada saat form di ketik
  // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
  rupiah.value = formatRupiah(this.value, "Rp. ");
});

/* Fungsi formatRupiah */
function formatRupiah(angka, prefix) {
  var number_string = angka.replace(/[^,\d]/g, "").toString(),
    split = number_string.split(","),
    sisa = split[0].length % 3,
    rupiah = split[0].substr(0, sisa),
    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

  // tambahkan titik jika yang di input sudah menjadi angka ribuan
  if (ribuan) {
    separator = sisa ? "." : "";
    rupiah += separator + ribuan.join(".");
  }

  rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
  return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
}

 </script>
        <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.13.4/af-2.5.3/b-2.3.6/b-colvis-2.3.6/b-html5-2.3.6/b-print-2.3.6/cr-1.6.2/date-1.4.1/fc-4.2.2/fh-3.3.2/kt-2.9.0/r-2.4.1/rg-1.3.1/rr-1.3.3/sc-2.1.1/sb-1.4.2/sp-2.1.2/sl-1.6.2/sr-1.2.2/datatables.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

  </body>
</html>