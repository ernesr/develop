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
                <h2 style="margin-top:0px">Pddikti_tr_mahasiswa_pt List</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('pddikti_tr_mahasiswa_pt/create'), 'Create', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('pddikti_tr_mahasiswa_pt/excel'), 'Excel', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Id Reg Pd</th>
		    <th>Nipd</th>
		    <th>Id Pd</th>
		    <th>Id Sms</th>
		    <th>Id Sp</th>
		    <th>Tgl Masuk Sp</th>
		    <th>Id Jns Daftar</th>
		    <th>Id Jns Keluar</th>
		    <th>Tgl Keluar</th>
		    <th>Ket</th>
		    <th>Skhun</th>
		    <th>A Pernah Paud</th>
		    <th>A Pernah Tk</th>
		    <th>Id Kategori</th>
		    <th>Mulai Smt</th>
		    <th>Sks Diakui</th>
		    <th>Jalur Skripsi</th>
		    <th>Judul Skripsi</th>
		    <th>Bln Awal Bimbingan</th>
		    <th>Bln Akhir Bimbingan</th>
		    <th>Sk Yudisium</th>
		    <th>Tgl Sk Yudisium</th>
		    <th>Ipk</th>
		    <th>No Seri Ijazah</th>
		    <th>Sert Prof</th>
		    <th>A Pindah Mhs Asing</th>
		    <th>Id Pt Asal</th>
		    <th>Id Prodi Asal</th>
		    <th>Nm Pt Asal</th>
		    <th>Nm Prodi Asal</th>
		    <th>Id Jalur Masuk</th>
		    <th>No Peserta Ujian</th>
		    <th>Added By</th>
		    <th>Date Added</th>
		    <th>Modified By</th>
		    <th>Date Modified</th>
		    <th>Id Sinkron</th>
		    <th>Deleted</th>
		    <th>Id Cabang</th>
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
                    ajax: {"url": "pddikti_tr_mahasiswa_pt/json", "type": "POST"},
                    columns: [
                        {
                            "data": "",
                            "orderable": false
                        },{"data": "id_reg_pd"},{"data": "nipd"},{"data": "id_pd"},{"data": "id_sms"},{"data": "id_sp"},{"data": "tgl_masuk_sp"},{"data": "id_jns_daftar"},{"data": "id_jns_keluar"},{"data": "tgl_keluar"},{"data": "ket"},{"data": "skhun"},{"data": "a_pernah_paud"},{"data": "a_pernah_tk"},{"data": "id_kategori"},{"data": "mulai_smt"},{"data": "sks_diakui"},{"data": "jalur_skripsi"},{"data": "judul_skripsi"},{"data": "bln_awal_bimbingan"},{"data": "bln_akhir_bimbingan"},{"data": "sk_yudisium"},{"data": "tgl_sk_yudisium"},{"data": "ipk"},{"data": "no_seri_ijazah"},{"data": "sert_prof"},{"data": "a_pindah_mhs_asing"},{"data": "id_pt_asal"},{"data": "id_prodi_asal"},{"data": "nm_pt_asal"},{"data": "nm_prodi_asal"},{"data": "id_jalur_masuk"},{"data": "no_peserta_ujian"},{"data": "added_by"},{"data": "date_added"},{"data": "modified_by"},{"data": "date_modified"},{"data": "id_sinkron"},{"data": "deleted"},{"data": "id_cabang"},
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