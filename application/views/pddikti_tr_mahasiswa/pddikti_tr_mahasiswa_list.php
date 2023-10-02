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
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <h2 style="margin-top:0px">Pddikti_tr_mahasiswa List</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('pddikti_tr_mahasiswa/create'), 'Create', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('pddikti_tr_mahasiswa/excel'), 'Excel', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('pddikti_tr_mahasiswa/word'), 'Word', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
      <div class="table-responsive">
            <table class="table table-bordered table-striped " id="mytable">
            <thead class="table-dark">
                <tr>
                    <th width="80px">No</th>
		    <th>Id Permohonan Daftar Mhs</th>
		    <th>Nm Pd</th>
		    <th>Jk</th>
		    <th>Nisn</th>
		    <th>Nik</th>
		    <th>Npwp</th>
		    <th>Tmpt Lahir</th>
		    <th>Tgl Lahir</th>
		    <th>Id Agama</th>
		    <th>Id Kk</th>
		    <th>Jln</th>
		    <th>Rt</th>
		    <th>Rw</th>
		    <th>Nm Dsn</th>
		    <th>Ds Kel</th>
		    <th>Id Wil</th>
		    <th>Kode Pos</th>
		    <th>Id Jns Tinggal</th>
		    <th>Id Alat Transport</th>
		    <th>No Tel Rmh</th>
		    <th>No Hp</th>
		    <th>Email</th>
		    <th>A Terima Kps</th>
		    <th>No Kps</th>
		    <th>Stat Pd</th>
		    <th>Nm Ayah</th>
		    <th>Tgl Lahir Ayah</th>
		    <th>Nik Ayah</th>
		    <th>Id Jenjang Pendidikan Ayah</th>
		    <th>Id Pekerjaan Ayah</th>
		    <th>Id Penghasilan Ayah</th>
		    <th>Id Kebutuhan Khusus Ayah</th>
		    <th>Nm Ibu Kandung</th>
		    <th>Tgl Lahir Ibu</th>
		    <th>Nik Ibu</th>
		    <th>Id Jenjang Pendidikan Ibu</th>
		    <th>Id Pekerjaan Ibu</th>
		    <th>Id Penghasilan Ibu</th>
		    <th>Id Kebutuhan Khusus Ibu</th>
		    <th>Nm Wali</th>
		    <th>Tgl Lahir Wali</th>
		    <th>Id Jenjang Pendidikan Wali</th>
		    <th>Id Pekerjaan Wali</th>
		    <th>Id Penghasilan Wali</th>
		    <th>Kewarganegaraan</th>
		    <th>Telepon Seluler</th>
		    <th>Telepon Rumah</th>
		    <th>Added By</th>
		    <th>Date Added</th>
		    <th>Modified By</th>
		    <th>Date Modified</th>
		    <th>Id Sinkron</th>
		    <th>Deleted</th>
		    <th>No Hp Ortu</th>
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.13.4/af-2.5.3/b-2.3.6/b-colvis-2.3.6/b-html5-2.3.6/b-print-2.3.6/cr-1.6.2/date-1.4.1/fc-4.2.2/fh-3.3.2/kt-2.9.0/r-2.4.1/rg-1.3.1/rr-1.3.3/sc-2.1.1/sb-1.4.2/sp-2.1.2/sl-1.6.2/sr-1.2.2/datatables.min.js"></script>
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
                    ajax: {"url": "pddikti_tr_mahasiswa/json", "type": "POST"},
                    columns: [
                        {
                            "data": "id_pd",
                            "orderable": false
                        },{"data": "id_permohonan_daftar_mhs"},{"data": "nm_pd"},{"data": "jk"},{"data": "nisn"},{"data": "nik"},{"data": "npwp"},{"data": "tmpt_lahir"},{"data": "tgl_lahir"},{"data": "id_agama"},{"data": "id_kk"},{"data": "jln"},{"data": "rt"},{"data": "rw"},{"data": "nm_dsn"},{"data": "ds_kel"},{"data": "id_wil"},{"data": "kode_pos"},{"data": "id_jns_tinggal"},{"data": "id_alat_transport"},{"data": "no_tel_rmh"},{"data": "no_hp"},{"data": "email"},{"data": "a_terima_kps"},{"data": "no_kps"},{"data": "stat_pd"},{"data": "nm_ayah"},{"data": "tgl_lahir_ayah"},{"data": "nik_ayah"},{"data": "id_jenjang_pendidikan_ayah"},{"data": "id_pekerjaan_ayah"},{"data": "id_penghasilan_ayah"},{"data": "id_kebutuhan_khusus_ayah"},{"data": "nm_ibu_kandung"},{"data": "tgl_lahir_ibu"},{"data": "nik_ibu"},{"data": "id_jenjang_pendidikan_ibu"},{"data": "id_pekerjaan_ibu"},{"data": "id_penghasilan_ibu"},{"data": "id_kebutuhan_khusus_ibu"},{"data": "nm_wali"},{"data": "tgl_lahir_wali"},{"data": "id_jenjang_pendidikan_wali"},{"data": "id_pekerjaan_wali"},{"data": "id_penghasilan_wali"},{"data": "kewarganegaraan"},{"data": "telepon_seluler"},{"data": "telepon_rumah"},{"data": "added_by"},{"data": "date_added"},{"data": "modified_by"},{"data": "date_modified"},{"data": "id_sinkron"},{"data": "deleted"},{"data": "no_hp_ortu"},
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