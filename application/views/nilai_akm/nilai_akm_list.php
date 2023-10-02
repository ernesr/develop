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
                <h2 style="margin-top:0px">Nilai_akm List</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('nilai_akm/create'), 'Create', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('nilai_akm/excel'), 'Excel', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('nilai_akm/word'), 'Word', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Semester</th>
		    <th>Nim</th>
		    <th>Nama</th>
		    <th>Ips</th>
		    <th>Ipk</th>
		    <th>Sks Smt</th>
		    <th>Sks Total</th>
		    <th>Kd Jur</th>
		    <th>Biaya Smt</th>
		    <th>Status Kuliah</th>
		    <th>Se</th>
		    <th>Valid</th>
		    <th>Ket Valid Ips</th>
		    <th>Ket Sks Sem</th>
		    <th>Ket Krs Ada</th>
		    <th>Ket Valid Ipk</th>
		    <th>Ket Valid Ips Ipk</th>
		    <th>Keterangan</th>
		    <th>Id Session</th>
		    <th>Data Add</th>
		    <th>Deleted</th>
		    <th>Id Pembiayaan</th>
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
                    ajax: {"url": "nilai_akm/json", "type": "POST"},
                    columns: [
                        {
                            "data": "id",
                            "orderable": false
                        },{"data": "semester"},{"data": "nim"},{"data": "nama"},{"data": "ips"},{"data": "ipk"},{"data": "sks_smt"},{"data": "sks_total"},{"data": "kd_jur"},{"data": "biaya_smt"},{"data": "status_kuliah"},{"data": "se"},{"data": "valid"},{"data": "ket_valid_ips"},{"data": "ket_sks_sem"},{"data": "ket_krs_ada"},{"data": "ket_valid_ipk"},{"data": "ket_valid_ips_ipk"},{"data": "keterangan"},{"data": "id_session"},{"data": "data_add"},{"data": "deleted"},{"data": "id_pembiayaan"},
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