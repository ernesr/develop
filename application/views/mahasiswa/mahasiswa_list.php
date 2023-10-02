<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css') ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css') ?>"/>
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
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <h2 style="margin-top:0px">Mahasiswa List</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('mahasiswa/create'), 'Create', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('mahasiswa/excel'), 'Excel', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Nama Mahasiswa</th>
		    <th>Jenis Kelamin</th>
		    <th>Tempat Lahir</th>
		    <th>Tanggal Lahir</th>
		    <th>Id Agama</th>
		    <th>Nik</th>
		    <th>Nisn</th>
		    <th>Kewarganegaraan</th>
		    <th>Jalan</th>
		    <th>Dusun</th>
		    <th>Rt</th>
		    <th>Rw</th>
		    <th>Kelurahan</th>
		    <th>Kode Pos</th>
		    <th>Id Wilayah</th>
		    <th>Id Jenis Tinggal</th>
		    <th>Id Alat Transportasi</th>
		    <th>Telepon</th>
		    <th>Handphone</th>
		    <th>Email</th>
		    <th>Penerima Kps</th>
		    <th>Nomor Kps</th>
		    <th>Nik Ayah</th>
		    <th>Nama Ayah</th>
		    <th>Tanggal Lahir Ayah</th>
		    <th>Id Pendidikan Ayah</th>
		    <th>Id Pekerjaan Ayah</th>
		    <th>Id Penghasilan Ayah</th>
		    <th>Nik Ibu</th>
		    <th>Nama Ibu Kandung</th>
		    <th>Tanggal Lahir Ibu</th>
		    <th>Id Pendidikan Ibu</th>
		    <th>Id Pekerjaan Ibu</th>
		    <th>Id Penghasilan Ibu</th>
		    <th>Npwp</th>
		    <th>Nama Wali</th>
		    <th>Tanggal Lahir Wali</th>
		    <th>Id Pendidikan Wali</th>
		    <th>Id Pekerjaan Wali</th>
		    <th>Id Penghasilan Wali</th>
		    <th>Id Kebutuhan Khusus Mahasiswa</th>
		    <th>Id Kebutuhan Khusus Ayah</th>
		    <th>Id Kebutuhan Khusus Ibu</th>
		    <th>Nim</th>
		    <th>Id Jenis Daftar</th>
		    <th>Id Jalur Daftar</th>
		    <th>Id Periode Masuk</th>
		    <th>Tanggal Daftar</th>
		    <th>Id Perguruan Tinggi</th>
		    <th>Id Prodi</th>
		    <th>Id Bidang Minat</th>
		    <th>Sks Diakui</th>
		    <th>Nama Prodi Asal</th>
		    <th>Id Pembiayaan</th>
		    <th>Biaya Masuk</th>
		    <th>Status</th>
		    <th>Error</th>
		    <th>Deleted</th>
		    <th>Data Add</th>
		    <th width="200px">Action</th>
                </tr>
            </thead>
	    
        </table>
        <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
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
                    ajax: {"url": "mahasiswa/json", "type": "POST"},
                    columns: [
                        {
                            "data": "id",
                            "orderable": false
                        },{"data": "nama_mahasiswa"},{"data": "jenis_kelamin"},{"data": "tempat_lahir"},{"data": "tanggal_lahir"},{"data": "id_agama"},{"data": "nik"},{"data": "nisn"},{"data": "kewarganegaraan"},{"data": "jalan"},{"data": "dusun"},{"data": "rt"},{"data": "rw"},{"data": "kelurahan"},{"data": "kode_pos"},{"data": "id_wilayah"},{"data": "id_jenis_tinggal"},{"data": "id_alat_transportasi"},{"data": "telepon"},{"data": "handphone"},{"data": "email"},{"data": "penerima_kps"},{"data": "nomor_kps"},{"data": "nik_ayah"},{"data": "nama_ayah"},{"data": "tanggal_lahir_ayah"},{"data": "id_pendidikan_ayah"},{"data": "id_pekerjaan_ayah"},{"data": "id_penghasilan_ayah"},{"data": "nik_ibu"},{"data": "nama_ibu_kandung"},{"data": "tanggal_lahir_ibu"},{"data": "id_pendidikan_ibu"},{"data": "id_pekerjaan_ibu"},{"data": "id_penghasilan_ibu"},{"data": "npwp"},{"data": "nama_wali"},{"data": "tanggal_lahir_wali"},{"data": "id_pendidikan_wali"},{"data": "id_pekerjaan_wali"},{"data": "id_penghasilan_wali"},{"data": "id_kebutuhan_khusus_mahasiswa"},{"data": "id_kebutuhan_khusus_ayah"},{"data": "id_kebutuhan_khusus_ibu"},{"data": "nim"},{"data": "id_jenis_daftar"},{"data": "id_jalur_daftar"},{"data": "id_periode_masuk"},{"data": "tanggal_daftar"},{"data": "id_perguruan_tinggi"},{"data": "id_prodi"},{"data": "id_bidang_minat"},{"data": "sks_diakui"},{"data": "nama_prodi_asal"},{"data": "id_pembiayaan"},{"data": "biaya_masuk"},{"data": "status"},{"data": "error"},{"data": "deleted"},{"data": "data_add"},
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