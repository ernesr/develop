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
  <h4 class="alert-heading">Aktivasi Program Studi</h4>
  <p>Aktivasi program studi berfungsi untuk mengaktifkan prodi yang akan dipilih oleh mahasiswa sebagai acuan dalam melakukan pendaftaran</p>
  <hr>
  <p class="mb-0">Regards Developers</p>
</div>
     <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <h2 style="margin-top:0px">Prodi Yang Terdapat Pada Universitas Citra Bangsa</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('pddikti_tr_sms/create'), 'Create', 'class="btn btn-primary"'); ?>
        <?php echo anchor(site_url('pddikti_tr_sms/excel'), 'Excel', 'class="btn btn-primary"'); ?>
        </div>
        </div>
 <div class="table-responsive">
        <table class="table table-bordered table-striped" id="mytable" >
            <thead class="table-dark">
                <tr>
                    <th width="80px">No</th>
            <th>Kode Prodi</th>
            <th>Nm Lemb</th>
            <th>Status Aktif</th>
            <th width="200px">Action</th>
                </tr>
            </thead>
        
        </table>
</div>
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
        <script type="text/javascript">
            $(document).ready(function() {
                $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
                {
                    return {
                        "iStart": oSettings._iDisplayStart,
                        "iEnd": oSettings.fnDisplayEnd(),
                        "iLength": oSettings._iDisplayLength,
                        "iTotal": oSettings.fnRecordsTotal(),
                        "iFilteredTotal": oSettings.fnRecordsDisplay(),
                        "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                        "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
                    };
                };

                var t = $("#mytable").dataTable({
                    initComplete: function() {
                        var api = this.api();
                        $('#mytable_filter input')
                                .off('.DT')
                                .on('keyup.DT', function(e) {
                                    if (e.keyCode == 13) {
                                        api.search(this.value).draw();
                            }
                        });
                    },
                    oLanguage: {
                        sProcessing: "loading..."
                    },
                    processing: true,
                    serverSide: true,
                    ajax: {"url": "pddikti_tr_sms/json", "type": "POST"},
                    columns: [
                        {
                            "data": "id_sms",
                            "orderable": false
                        },{"data": "kode_prodi"},{"data": "nm_lemb"},{"data": "muncul", "render": function (data, type, row) {
                                                                        if (row.muncul === '0') {
                                                                            return '<button type="button" class="btn btn-primary">Aktif</button>';
                                                                        }else if(row.muncul === '1'){
                                                                            return '<button type="button" class="btn btn-danger">Non Aktif</button';}else{
                                                                                return '<button type="button" class="btn btn-primary">Belum Diset</button';
                                                                            }}},
                        {
                            "data" : "action",
                            "orderable": false,
                            "className" : "text-center"
                        }
                    ],
                    order: [[0, 'desc']],
                    rowCallback: function(row, data, iDisplayIndex) {
                        var info = this.fnPagingInfo();
                        var page = info.iPage;
                        var length = info.iLength;
                        var index = page * length + (iDisplayIndex + 1);
                        $('td:eq(0)', row).html(index);
                    }
                });
            });
        </script>
    </body>
</html>