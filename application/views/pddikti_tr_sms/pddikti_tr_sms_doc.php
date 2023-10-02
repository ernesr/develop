<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Pddikti_tr_sms List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Prodi Identifier</th>
		<th>Nm Lemb</th>
		<th>Id Sdm Kaprodi</th>
		<th>Smt Mulai</th>
		<th>Kode Prodi</th>
		<th>Jln</th>
		<th>Rt</th>
		<th>Rw</th>
		<th>Nm Dsn</th>
		<th>Ds Kel</th>
		<th>Kode Pos</th>
		<th>Lintang</th>
		<th>Bujur</th>
		<th>No Tel</th>
		<th>No Fax</th>
		<th>Email</th>
		<th>Website</th>
		<th>Singkatan</th>
		<th>Tgl Berdiri</th>
		<th>Sk Selenggara</th>
		<th>Tgl Sk Selenggara</th>
		<th>Tmt Sk Selenggara</th>
		<th>Tst Sk Selenggara</th>
		<th>Kpst Pd</th>
		<th>Sks Lulus</th>
		<th>Gelar Lulusan</th>
		<th>Stat Prodi</th>
		<th>Polesei Nilai</th>
		<th>Luas Lab</th>
		<th>Kapasitas Prak Satu Shift</th>
		<th>Jml Mhs Pengguna</th>
		<th>Jml Jam Penggunaan</th>
		<th>Jml Prodi Pengguna</th>
		<th>Jml Modul Prak Sendiri</th>
		<th>Jml Modul Prak Lain</th>
		<th>Fungsi Selain Prak</th>
		<th>Penggunaan Lab</th>
		<th>Id Sp</th>
		<th>Id Jenj Didik</th>
		<th>Id Jns Sms</th>
		<th>Id Fungsi Lab</th>
		<th>Id Kel Usaha</th>
		<th>Id Wil</th>
		<th>Id Jur</th>
		<th>Id Induk Sms</th>
		<th>A Kependidikan</th>
		<th>Nm Prodi English</th>
		<th>Sistem Ajar</th>
		<th>Added By</th>
		<th>Date Added</th>
		<th>Modified By</th>
		<th>Date Modified</th>
		<th>Id Sinkron</th>
		<th>Deleted</th>
		<th>Pendaftaran</th>
		<th>Link</th>
		<th>Warna</th>
		<th>Muncul</th>
		
            </tr><?php
            foreach ($pddikti_tr_sms_data as $pddikti_tr_sms)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $pddikti_tr_sms->prodi_identifier ?></td>
		      <td><?php echo $pddikti_tr_sms->nm_lemb ?></td>
		      <td><?php echo $pddikti_tr_sms->id_sdm_kaprodi ?></td>
		      <td><?php echo $pddikti_tr_sms->smt_mulai ?></td>
		      <td><?php echo $pddikti_tr_sms->kode_prodi ?></td>
		      <td><?php echo $pddikti_tr_sms->jln ?></td>
		      <td><?php echo $pddikti_tr_sms->rt ?></td>
		      <td><?php echo $pddikti_tr_sms->rw ?></td>
		      <td><?php echo $pddikti_tr_sms->nm_dsn ?></td>
		      <td><?php echo $pddikti_tr_sms->ds_kel ?></td>
		      <td><?php echo $pddikti_tr_sms->kode_pos ?></td>
		      <td><?php echo $pddikti_tr_sms->lintang ?></td>
		      <td><?php echo $pddikti_tr_sms->bujur ?></td>
		      <td><?php echo $pddikti_tr_sms->no_tel ?></td>
		      <td><?php echo $pddikti_tr_sms->no_fax ?></td>
		      <td><?php echo $pddikti_tr_sms->email ?></td>
		      <td><?php echo $pddikti_tr_sms->website ?></td>
		      <td><?php echo $pddikti_tr_sms->singkatan ?></td>
		      <td><?php echo $pddikti_tr_sms->tgl_berdiri ?></td>
		      <td><?php echo $pddikti_tr_sms->sk_selenggara ?></td>
		      <td><?php echo $pddikti_tr_sms->tgl_sk_selenggara ?></td>
		      <td><?php echo $pddikti_tr_sms->tmt_sk_selenggara ?></td>
		      <td><?php echo $pddikti_tr_sms->tst_sk_selenggara ?></td>
		      <td><?php echo $pddikti_tr_sms->kpst_pd ?></td>
		      <td><?php echo $pddikti_tr_sms->sks_lulus ?></td>
		      <td><?php echo $pddikti_tr_sms->gelar_lulusan ?></td>
		      <td><?php echo $pddikti_tr_sms->stat_prodi ?></td>
		      <td><?php echo $pddikti_tr_sms->polesei_nilai ?></td>
		      <td><?php echo $pddikti_tr_sms->luas_lab ?></td>
		      <td><?php echo $pddikti_tr_sms->kapasitas_prak_satu_shift ?></td>
		      <td><?php echo $pddikti_tr_sms->jml_mhs_pengguna ?></td>
		      <td><?php echo $pddikti_tr_sms->jml_jam_penggunaan ?></td>
		      <td><?php echo $pddikti_tr_sms->jml_prodi_pengguna ?></td>
		      <td><?php echo $pddikti_tr_sms->jml_modul_prak_sendiri ?></td>
		      <td><?php echo $pddikti_tr_sms->jml_modul_prak_lain ?></td>
		      <td><?php echo $pddikti_tr_sms->fungsi_selain_prak ?></td>
		      <td><?php echo $pddikti_tr_sms->penggunaan_lab ?></td>
		      <td><?php echo $pddikti_tr_sms->id_sp ?></td>
		      <td><?php echo $pddikti_tr_sms->id_jenj_didik ?></td>
		      <td><?php echo $pddikti_tr_sms->id_jns_sms ?></td>
		      <td><?php echo $pddikti_tr_sms->id_fungsi_lab ?></td>
		      <td><?php echo $pddikti_tr_sms->id_kel_usaha ?></td>
		      <td><?php echo $pddikti_tr_sms->id_wil ?></td>
		      <td><?php echo $pddikti_tr_sms->id_jur ?></td>
		      <td><?php echo $pddikti_tr_sms->id_induk_sms ?></td>
		      <td><?php echo $pddikti_tr_sms->a_kependidikan ?></td>
		      <td><?php echo $pddikti_tr_sms->nm_prodi_english ?></td>
		      <td><?php echo $pddikti_tr_sms->sistem_ajar ?></td>
		      <td><?php echo $pddikti_tr_sms->added_by ?></td>
		      <td><?php echo $pddikti_tr_sms->date_added ?></td>
		      <td><?php echo $pddikti_tr_sms->modified_by ?></td>
		      <td><?php echo $pddikti_tr_sms->date_modified ?></td>
		      <td><?php echo $pddikti_tr_sms->id_sinkron ?></td>
		      <td><?php echo $pddikti_tr_sms->deleted ?></td>
		      <td><?php echo $pddikti_tr_sms->pendaftaran ?></td>
		      <td><?php echo $pddikti_tr_sms->link ?></td>
		      <td><?php echo $pddikti_tr_sms->warna ?></td>
		      <td><?php echo $pddikti_tr_sms->muncul ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>