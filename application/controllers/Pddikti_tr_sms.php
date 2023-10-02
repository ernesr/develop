<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pddikti_tr_sms extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pddikti_tr_sms_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
if($this->session->userdata('logged_in') !== TRUE){
      redirect('../spmb/auth');
    }
}


    public function index()
    {
    	$data["active"]="prodi";
    	$data["judul"]="Setting Program Studi";
        $this->load->view('pddikti_tr_sms/pddikti_tr_sms_list',$data);
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Pddikti_tr_sms_model->json();
    }
    public function aktif($id) {
       
            $data = array(
		
		'muncul' =>"0"
	);

            $this->Pddikti_tr_sms_model->update($id, $data);
            $this->session->set_flashdata('message', 'Berhasil Diaktifkan');
            redirect(site_url('pddikti_tr_sms'));
    }
   public function nonaktif($id) {
       
            $data = array(
		
		'muncul' =>"1"
	);

            $this->Pddikti_tr_sms_model->update($id, $data);
            $this->session->set_flashdata('message', 'Berhasil Diaktifkan');
            redirect(site_url('pddikti_tr_sms'));
    }
    public function read($id) 
    {
        $row = $this->Pddikti_tr_sms_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_sms' => $row->id_sms,
		'prodi_identifier' => $row->prodi_identifier,
		'nm_lemb' => $row->nm_lemb,
		'id_sdm_kaprodi' => $row->id_sdm_kaprodi,
		'smt_mulai' => $row->smt_mulai,
		'kode_prodi' => $row->kode_prodi,
		'jln' => $row->jln,
		'rt' => $row->rt,
		'rw' => $row->rw,
		'nm_dsn' => $row->nm_dsn,
		'ds_kel' => $row->ds_kel,
		'kode_pos' => $row->kode_pos,
		'lintang' => $row->lintang,
		'bujur' => $row->bujur,
		'no_tel' => $row->no_tel,
		'no_fax' => $row->no_fax,
		'email' => $row->email,
		'website' => $row->website,
		'singkatan' => $row->singkatan,
		'tgl_berdiri' => $row->tgl_berdiri,
		'sk_selenggara' => $row->sk_selenggara,
		'tgl_sk_selenggara' => $row->tgl_sk_selenggara,
		'tmt_sk_selenggara' => $row->tmt_sk_selenggara,
		'tst_sk_selenggara' => $row->tst_sk_selenggara,
		'kpst_pd' => $row->kpst_pd,
		'sks_lulus' => $row->sks_lulus,
		'gelar_lulusan' => $row->gelar_lulusan,
		'stat_prodi' => $row->stat_prodi,
		'polesei_nilai' => $row->polesei_nilai,
		'luas_lab' => $row->luas_lab,
		'kapasitas_prak_satu_shift' => $row->kapasitas_prak_satu_shift,
		'jml_mhs_pengguna' => $row->jml_mhs_pengguna,
		'jml_jam_penggunaan' => $row->jml_jam_penggunaan,
		'jml_prodi_pengguna' => $row->jml_prodi_pengguna,
		'jml_modul_prak_sendiri' => $row->jml_modul_prak_sendiri,
		'jml_modul_prak_lain' => $row->jml_modul_prak_lain,
		'fungsi_selain_prak' => $row->fungsi_selain_prak,
		'penggunaan_lab' => $row->penggunaan_lab,
		'id_sp' => $row->id_sp,
		'id_jenj_didik' => $row->id_jenj_didik,
		'id_jns_sms' => $row->id_jns_sms,
		'id_fungsi_lab' => $row->id_fungsi_lab,
		'id_kel_usaha' => $row->id_kel_usaha,
		'id_wil' => $row->id_wil,
		'id_jur' => $row->id_jur,
		'id_induk_sms' => $row->id_induk_sms,
		'a_kependidikan' => $row->a_kependidikan,
		'nm_prodi_english' => $row->nm_prodi_english,
		'sistem_ajar' => $row->sistem_ajar,
		'added_by' => $row->added_by,
		'date_added' => $row->date_added,
		'modified_by' => $row->modified_by,
		'date_modified' => $row->date_modified,
		'id_sinkron' => $row->id_sinkron,
		'deleted' => $row->deleted,
		'pendaftaran' => $row->pendaftaran,
		'link2' => $row->link2,
		'warna' => $row->warna,
		'muncul' => $row->muncul,
	    );
            $this->load->view('pddikti_tr_sms/pddikti_tr_sms_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pddikti_tr_sms'));
        }
    }

    public function create() 
    {
   
        $data = array(
            'button' => 'Create',
            'active'=>'prodi',
            'judul'=>'Setting Program Stud',

            'action' => site_url('pddikti_tr_sms/create_action'),
	    'id_sms' => set_value('id_sms'),
	    'prodi_identifier' => set_value('prodi_identifier'),
	    'nm_lemb' => set_value('nm_lemb'),
	    'id_sdm_kaprodi' => set_value('id_sdm_kaprodi'),
	    'smt_mulai' => set_value('smt_mulai'),
	    'kode_prodi' => set_value('kode_prodi'),
	    'jln' => set_value('jln'),
	    'rt' => set_value('rt'),
	    'rw' => set_value('rw'),
	    'nm_dsn' => set_value('nm_dsn'),
	    'ds_kel' => set_value('ds_kel'),
	    'kode_pos' => set_value('kode_pos'),
	    'lintang' => set_value('lintang'),
	    'bujur' => set_value('bujur'),
	    'no_tel' => set_value('no_tel'),
	    'no_fax' => set_value('no_fax'),
	    'email' => set_value('email'),
	    'website' => set_value('website'),
	    'singkatan' => set_value('singkatan'),
	    'tgl_berdiri' => set_value('tgl_berdiri'),
	    'sk_selenggara' => set_value('sk_selenggara'),
	    'tgl_sk_selenggara' => set_value('tgl_sk_selenggara'),
	    'tmt_sk_selenggara' => set_value('tmt_sk_selenggara'),
	    'tst_sk_selenggara' => set_value('tst_sk_selenggara'),
	    'kpst_pd' => set_value('kpst_pd'),
	    'sks_lulus' => set_value('sks_lulus'),
	    'gelar_lulusan' => set_value('gelar_lulusan'),
	    'stat_prodi' => set_value('stat_prodi'),
	    'polesei_nilai' => set_value('polesei_nilai'),
	    'luas_lab' => set_value('luas_lab'),
	    'kapasitas_prak_satu_shift' => set_value('kapasitas_prak_satu_shift'),
	    'jml_mhs_pengguna' => set_value('jml_mhs_pengguna'),
	    'jml_jam_penggunaan' => set_value('jml_jam_penggunaan'),
	    'jml_prodi_pengguna' => set_value('jml_prodi_pengguna'),
	    'jml_modul_prak_sendiri' => set_value('jml_modul_prak_sendiri'),
	    'jml_modul_prak_lain' => set_value('jml_modul_prak_lain'),
	    'fungsi_selain_prak' => set_value('fungsi_selain_prak'),
	    'penggunaan_lab' => set_value('penggunaan_lab'),
	    'id_sp' => set_value('id_sp'),
	    'id_jenj_didik' => set_value('id_jenj_didik'),
	    'id_jns_sms' => set_value('id_jns_sms'),
	    'id_fungsi_lab' => set_value('id_fungsi_lab'),
	    'id_kel_usaha' => set_value('id_kel_usaha'),
	    'id_wil' => set_value('id_wil'),
	    'id_jur' => set_value('id_jur'),
	    'id_induk_sms' => set_value('id_induk_sms'),
	    'a_kependidikan' => set_value('a_kependidikan'),
	    'nm_prodi_english' => set_value('nm_prodi_english'),
	    'sistem_ajar' => set_value('sistem_ajar'),
	    'added_by' => set_value('added_by'),
	    'date_added' => set_value('date_added'),
	    'modified_by' => set_value('modified_by'),
	    'date_modified' => set_value('date_modified'),
	    'id_sinkron' => set_value('id_sinkron'),
	    'deleted' => set_value('deleted'),
	    'pendaftaran' => set_value('pendaftaran'),
	    'link2' => set_value('link2'),
	    'warna' => set_value('warna'),
	    'muncul' => set_value('muncul'),
	);
        $this->load->view('pddikti_tr_sms/pddikti_tr_sms_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'prodi_identifier' => $this->input->post('prodi_identifier',TRUE),
		'nm_lemb' => $this->input->post('nm_lemb',TRUE),
		'id_sdm_kaprodi' => $this->input->post('id_sdm_kaprodi',TRUE),
		'smt_mulai' => $this->input->post('smt_mulai',TRUE),
		'kode_prodi' => $this->input->post('kode_prodi',TRUE),
		'jln' => $this->input->post('jln',TRUE),
		'rt' => $this->input->post('rt',TRUE),
		'rw' => $this->input->post('rw',TRUE),
		'nm_dsn' => $this->input->post('nm_dsn',TRUE),
		'ds_kel' => $this->input->post('ds_kel',TRUE),
		'kode_pos' => $this->input->post('kode_pos',TRUE),
		'lintang' => $this->input->post('lintang',TRUE),
		'bujur' => $this->input->post('bujur',TRUE),
		'no_tel' => $this->input->post('no_tel',TRUE),
		'no_fax' => $this->input->post('no_fax',TRUE),
		'email' => $this->input->post('email',TRUE),
		'website' => $this->input->post('website',TRUE),
		'singkatan' => $this->input->post('singkatan',TRUE),
		'tgl_berdiri' => $this->input->post('tgl_berdiri',TRUE),
		'sk_selenggara' => $this->input->post('sk_selenggara',TRUE),
		'tgl_sk_selenggara' => $this->input->post('tgl_sk_selenggara',TRUE),
		'tmt_sk_selenggara' => $this->input->post('tmt_sk_selenggara',TRUE),
		'tst_sk_selenggara' => $this->input->post('tst_sk_selenggara',TRUE),
		'kpst_pd' => $this->input->post('kpst_pd',TRUE),
		'sks_lulus' => $this->input->post('sks_lulus',TRUE),
		'gelar_lulusan' => $this->input->post('gelar_lulusan',TRUE),
		'stat_prodi' => $this->input->post('stat_prodi',TRUE),
		'polesei_nilai' => $this->input->post('polesei_nilai',TRUE),
		'luas_lab' => $this->input->post('luas_lab',TRUE),
		'kapasitas_prak_satu_shift' => $this->input->post('kapasitas_prak_satu_shift',TRUE),
		'jml_mhs_pengguna' => $this->input->post('jml_mhs_pengguna',TRUE),
		'jml_jam_penggunaan' => $this->input->post('jml_jam_penggunaan',TRUE),
		'jml_prodi_pengguna' => $this->input->post('jml_prodi_pengguna',TRUE),
		'jml_modul_prak_sendiri' => $this->input->post('jml_modul_prak_sendiri',TRUE),
		'jml_modul_prak_lain' => $this->input->post('jml_modul_prak_lain',TRUE),
		'fungsi_selain_prak' => $this->input->post('fungsi_selain_prak',TRUE),
		'penggunaan_lab' => $this->input->post('penggunaan_lab',TRUE),
		'id_sp' => $this->input->post('id_sp',TRUE),
		'id_jenj_didik' => $this->input->post('id_jenj_didik',TRUE),
		'id_jns_sms' => $this->input->post('id_jns_sms',TRUE),
		'id_fungsi_lab' => $this->input->post('id_fungsi_lab',TRUE),
		'id_kel_usaha' => $this->input->post('id_kel_usaha',TRUE),
		'id_wil' => $this->input->post('id_wil',TRUE),
		'id_jur' => $this->input->post('id_jur',TRUE),
		'id_induk_sms' => $this->input->post('id_induk_sms',TRUE),
		'a_kependidikan' => $this->input->post('a_kependidikan',TRUE),
		'nm_prodi_english' => $this->input->post('nm_prodi_english',TRUE),
		'sistem_ajar' => $this->input->post('sistem_ajar',TRUE),
		'added_by' => $this->input->post('added_by',TRUE),
		'date_added' => $this->input->post('date_added',TRUE),
		'modified_by' => $this->input->post('modified_by',TRUE),
		'date_modified' => $this->input->post('date_modified',TRUE),
		'id_sinkron' => $this->input->post('id_sinkron',TRUE),
		'deleted' => $this->input->post('deleted',TRUE),
		'pendaftaran' => $this->input->post('pendaftaran',TRUE),
		'link2' => $this->input->post('link2',TRUE),
		'warna' => $this->input->post('warna',TRUE),
		'muncul' => $this->input->post('muncul',TRUE),
	    );

            $this->Pddikti_tr_sms_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pddikti_tr_sms'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pddikti_tr_sms_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pddikti_tr_sms/update_action'),
		'id_sms' => set_value('id_sms', $row->id_sms),
		'prodi_identifier' => set_value('prodi_identifier', $row->prodi_identifier),
		'nm_lemb' => set_value('nm_lemb', $row->nm_lemb),
		'id_sdm_kaprodi' => set_value('id_sdm_kaprodi', $row->id_sdm_kaprodi),
		'smt_mulai' => set_value('smt_mulai', $row->smt_mulai),
		'kode_prodi' => set_value('kode_prodi', $row->kode_prodi),
		'jln' => set_value('jln', $row->jln),
		'rt' => set_value('rt', $row->rt),
		'rw' => set_value('rw', $row->rw),
		'nm_dsn' => set_value('nm_dsn', $row->nm_dsn),
		'ds_kel' => set_value('ds_kel', $row->ds_kel),
		'kode_pos' => set_value('kode_pos', $row->kode_pos),
		'lintang' => set_value('lintang', $row->lintang),
		'bujur' => set_value('bujur', $row->bujur),
		'no_tel' => set_value('no_tel', $row->no_tel),
		'no_fax' => set_value('no_fax', $row->no_fax),
		'email' => set_value('email', $row->email),
		'website' => set_value('website', $row->website),
		'singkatan' => set_value('singkatan', $row->singkatan),
		'tgl_berdiri' => set_value('tgl_berdiri', $row->tgl_berdiri),
		'sk_selenggara' => set_value('sk_selenggara', $row->sk_selenggara),
		'tgl_sk_selenggara' => set_value('tgl_sk_selenggara', $row->tgl_sk_selenggara),
		'tmt_sk_selenggara' => set_value('tmt_sk_selenggara', $row->tmt_sk_selenggara),
		'tst_sk_selenggara' => set_value('tst_sk_selenggara', $row->tst_sk_selenggara),
		'kpst_pd' => set_value('kpst_pd', $row->kpst_pd),
		'sks_lulus' => set_value('sks_lulus', $row->sks_lulus),
		'gelar_lulusan' => set_value('gelar_lulusan', $row->gelar_lulusan),
		'stat_prodi' => set_value('stat_prodi', $row->stat_prodi),
		'polesei_nilai' => set_value('polesei_nilai', $row->polesei_nilai),
		'luas_lab' => set_value('luas_lab', $row->luas_lab),
		'kapasitas_prak_satu_shift' => set_value('kapasitas_prak_satu_shift', $row->kapasitas_prak_satu_shift),
		'jml_mhs_pengguna' => set_value('jml_mhs_pengguna', $row->jml_mhs_pengguna),
		'jml_jam_penggunaan' => set_value('jml_jam_penggunaan', $row->jml_jam_penggunaan),
		'jml_prodi_pengguna' => set_value('jml_prodi_pengguna', $row->jml_prodi_pengguna),
		'jml_modul_prak_sendiri' => set_value('jml_modul_prak_sendiri', $row->jml_modul_prak_sendiri),
		'jml_modul_prak_lain' => set_value('jml_modul_prak_lain', $row->jml_modul_prak_lain),
		'fungsi_selain_prak' => set_value('fungsi_selain_prak', $row->fungsi_selain_prak),
		'penggunaan_lab' => set_value('penggunaan_lab', $row->penggunaan_lab),
		'id_sp' => set_value('id_sp', $row->id_sp),
		'id_jenj_didik' => set_value('id_jenj_didik', $row->id_jenj_didik),
		'id_jns_sms' => set_value('id_jns_sms', $row->id_jns_sms),
		'id_fungsi_lab' => set_value('id_fungsi_lab', $row->id_fungsi_lab),
		'id_kel_usaha' => set_value('id_kel_usaha', $row->id_kel_usaha),
		'id_wil' => set_value('id_wil', $row->id_wil),
		'id_jur' => set_value('id_jur', $row->id_jur),
		'id_induk_sms' => set_value('id_induk_sms', $row->id_induk_sms),
		'a_kependidikan' => set_value('a_kependidikan', $row->a_kependidikan),
		'nm_prodi_english' => set_value('nm_prodi_english', $row->nm_prodi_english),
		'sistem_ajar' => set_value('sistem_ajar', $row->sistem_ajar),
		'added_by' => set_value('added_by', $row->added_by),
		'date_added' => set_value('date_added', $row->date_added),
		'modified_by' => set_value('modified_by', $row->modified_by),
		'date_modified' => set_value('date_modified', $row->date_modified),
		'id_sinkron' => set_value('id_sinkron', $row->id_sinkron),
		'deleted' => set_value('deleted', $row->deleted),
		'pendaftaran' => set_value('pendaftaran', $row->pendaftaran),
		'link2' => set_value('link2', $row->link2),
		'warna' => set_value('warna', $row->warna),
		'muncul' => set_value('muncul', $row->muncul),
	    );
            $this->load->view('pddikti_tr_sms/pddikti_tr_sms_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pddikti_tr_sms'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_sms', TRUE));
        } else {
            $data = array(
		'prodi_identifier' => $this->input->post('prodi_identifier',TRUE),
		'nm_lemb' => $this->input->post('nm_lemb',TRUE),
		'id_sdm_kaprodi' => $this->input->post('id_sdm_kaprodi',TRUE),
		'smt_mulai' => $this->input->post('smt_mulai',TRUE),
		'kode_prodi' => $this->input->post('kode_prodi',TRUE),
		'jln' => $this->input->post('jln',TRUE),
		'rt' => $this->input->post('rt',TRUE),
		'rw' => $this->input->post('rw',TRUE),
		'nm_dsn' => $this->input->post('nm_dsn',TRUE),
		'ds_kel' => $this->input->post('ds_kel',TRUE),
		'kode_pos' => $this->input->post('kode_pos',TRUE),
		'lintang' => $this->input->post('lintang',TRUE),
		'bujur' => $this->input->post('bujur',TRUE),
		'no_tel' => $this->input->post('no_tel',TRUE),
		'no_fax' => $this->input->post('no_fax',TRUE),
		'email' => $this->input->post('email',TRUE),
		'website' => $this->input->post('website',TRUE),
		'singkatan' => $this->input->post('singkatan',TRUE),
		'tgl_berdiri' => $this->input->post('tgl_berdiri',TRUE),
		'sk_selenggara' => $this->input->post('sk_selenggara',TRUE),
		'tgl_sk_selenggara' => $this->input->post('tgl_sk_selenggara',TRUE),
		'tmt_sk_selenggara' => $this->input->post('tmt_sk_selenggara',TRUE),
		'tst_sk_selenggara' => $this->input->post('tst_sk_selenggara',TRUE),
		'kpst_pd' => $this->input->post('kpst_pd',TRUE),
		'sks_lulus' => $this->input->post('sks_lulus',TRUE),
		'gelar_lulusan' => $this->input->post('gelar_lulusan',TRUE),
		'stat_prodi' => $this->input->post('stat_prodi',TRUE),
		'polesei_nilai' => $this->input->post('polesei_nilai',TRUE),
		'luas_lab' => $this->input->post('luas_lab',TRUE),
		'kapasitas_prak_satu_shift' => $this->input->post('kapasitas_prak_satu_shift',TRUE),
		'jml_mhs_pengguna' => $this->input->post('jml_mhs_pengguna',TRUE),
		'jml_jam_penggunaan' => $this->input->post('jml_jam_penggunaan',TRUE),
		'jml_prodi_pengguna' => $this->input->post('jml_prodi_pengguna',TRUE),
		'jml_modul_prak_sendiri' => $this->input->post('jml_modul_prak_sendiri',TRUE),
		'jml_modul_prak_lain' => $this->input->post('jml_modul_prak_lain',TRUE),
		'fungsi_selain_prak' => $this->input->post('fungsi_selain_prak',TRUE),
		'penggunaan_lab' => $this->input->post('penggunaan_lab',TRUE),
		'id_sp' => $this->input->post('id_sp',TRUE),
		'id_jenj_didik' => $this->input->post('id_jenj_didik',TRUE),
		'id_jns_sms' => $this->input->post('id_jns_sms',TRUE),
		'id_fungsi_lab' => $this->input->post('id_fungsi_lab',TRUE),
		'id_kel_usaha' => $this->input->post('id_kel_usaha',TRUE),
		'id_wil' => $this->input->post('id_wil',TRUE),
		'id_jur' => $this->input->post('id_jur',TRUE),
		'id_induk_sms' => $this->input->post('id_induk_sms',TRUE),
		'a_kependidikan' => $this->input->post('a_kependidikan',TRUE),
		'nm_prodi_english' => $this->input->post('nm_prodi_english',TRUE),
		'sistem_ajar' => $this->input->post('sistem_ajar',TRUE),
		'added_by' => $this->input->post('added_by',TRUE),
		'date_added' => $this->input->post('date_added',TRUE),
		'modified_by' => $this->input->post('modified_by',TRUE),
		'date_modified' => $this->input->post('date_modified',TRUE),
		'id_sinkron' => $this->input->post('id_sinkron',TRUE),
		'deleted' => $this->input->post('deleted',TRUE),
		'pendaftaran' => $this->input->post('pendaftaran',TRUE),
		'link2' => $this->input->post('link2',TRUE),
		'warna' => $this->input->post('warna',TRUE),
		'muncul' => $this->input->post('muncul',TRUE),
	    );

            $this->Pddikti_tr_sms_model->update($this->input->post('id_sms', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pddikti_tr_sms'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pddikti_tr_sms_model->get_by_id($id);

        if ($row) {
            $this->Pddikti_tr_sms_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pddikti_tr_sms'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pddikti_tr_sms'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('prodi_identifier', 'prodi identifier', 'trim|required');
	$this->form_validation->set_rules('nm_lemb', 'nm lemb', 'trim|required');
	$this->form_validation->set_rules('id_sdm_kaprodi', 'id sdm kaprodi', 'trim|required');
	$this->form_validation->set_rules('smt_mulai', 'smt mulai', 'trim|required');
	$this->form_validation->set_rules('kode_prodi', 'kode prodi', 'trim|required');
	$this->form_validation->set_rules('jln', 'jln', 'trim|required');
	$this->form_validation->set_rules('rt', 'rt', 'trim|required|numeric');
	$this->form_validation->set_rules('rw', 'rw', 'trim|required|numeric');
	$this->form_validation->set_rules('nm_dsn', 'nm dsn', 'trim|required');
	$this->form_validation->set_rules('ds_kel', 'ds kel', 'trim|required');
	$this->form_validation->set_rules('kode_pos', 'kode pos', 'trim|required');
	$this->form_validation->set_rules('lintang', 'lintang', 'trim|required|numeric');
	$this->form_validation->set_rules('bujur', 'bujur', 'trim|required|numeric');
	$this->form_validation->set_rules('no_tel', 'no tel', 'trim|required');
	$this->form_validation->set_rules('no_fax', 'no fax', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('website', 'website', 'trim|required');
	$this->form_validation->set_rules('singkatan', 'singkatan', 'trim|required');
	$this->form_validation->set_rules('tgl_berdiri', 'tgl berdiri', 'trim|required');
	$this->form_validation->set_rules('sk_selenggara', 'sk selenggara', 'trim|required');
	$this->form_validation->set_rules('tgl_sk_selenggara', 'tgl sk selenggara', 'trim|required');
	$this->form_validation->set_rules('tmt_sk_selenggara', 'tmt sk selenggara', 'trim|required');
	$this->form_validation->set_rules('tst_sk_selenggara', 'tst sk selenggara', 'trim|required');
	$this->form_validation->set_rules('kpst_pd', 'kpst pd', 'trim|required|numeric');
	$this->form_validation->set_rules('sks_lulus', 'sks lulus', 'trim|required|numeric');
	$this->form_validation->set_rules('gelar_lulusan', 'gelar lulusan', 'trim|required');
	$this->form_validation->set_rules('stat_prodi', 'stat prodi', 'trim|required');
	$this->form_validation->set_rules('polesei_nilai', 'polesei nilai', 'trim|required');
	$this->form_validation->set_rules('luas_lab', 'luas lab', 'trim|required|numeric');
	$this->form_validation->set_rules('kapasitas_prak_satu_shift', 'kapasitas prak satu shift', 'trim|required|numeric');
	$this->form_validation->set_rules('jml_mhs_pengguna', 'jml mhs pengguna', 'trim|required|numeric');
	$this->form_validation->set_rules('jml_jam_penggunaan', 'jml jam penggunaan', 'trim|required|numeric');
	$this->form_validation->set_rules('jml_prodi_pengguna', 'jml prodi pengguna', 'trim|required|numeric');
	$this->form_validation->set_rules('jml_modul_prak_sendiri', 'jml modul prak sendiri', 'trim|required|numeric');
	$this->form_validation->set_rules('jml_modul_prak_lain', 'jml modul prak lain', 'trim|required|numeric');
	$this->form_validation->set_rules('fungsi_selain_prak', 'fungsi selain prak', 'trim|required');
	$this->form_validation->set_rules('penggunaan_lab', 'penggunaan lab', 'trim|required');
	$this->form_validation->set_rules('id_sp', 'id sp', 'trim|required');
	$this->form_validation->set_rules('id_jenj_didik', 'id jenj didik', 'trim|required|numeric');
	$this->form_validation->set_rules('id_jns_sms', 'id jns sms', 'trim|required|numeric');
	$this->form_validation->set_rules('id_fungsi_lab', 'id fungsi lab', 'trim|required');
	$this->form_validation->set_rules('id_kel_usaha', 'id kel usaha', 'trim|required');
	$this->form_validation->set_rules('id_wil', 'id wil', 'trim|required');
	$this->form_validation->set_rules('id_jur', 'id jur', 'trim|required');
	$this->form_validation->set_rules('id_induk_sms', 'id induk sms', 'trim|required');
	$this->form_validation->set_rules('a_kependidikan', 'a kependidikan', 'trim|required|numeric');
	$this->form_validation->set_rules('nm_prodi_english', 'nm prodi english', 'trim|required');
	$this->form_validation->set_rules('sistem_ajar', 'sistem ajar', 'trim|required|numeric');
	$this->form_validation->set_rules('added_by', 'added by', 'trim|required');
	$this->form_validation->set_rules('date_added', 'date added', 'trim|required');
	$this->form_validation->set_rules('modified_by', 'modified by', 'trim|required');
	$this->form_validation->set_rules('date_modified', 'date modified', 'trim|required');
	$this->form_validation->set_rules('id_sinkron', 'id sinkron', 'trim|required');
	$this->form_validation->set_rules('deleted', 'deleted', 'trim|required');
	$this->form_validation->set_rules('pendaftaran', 'pendaftaran', 'trim|required');
	$this->form_validation->set_rules('link2', 'link2', 'trim|required');
	$this->form_validation->set_rules('warna', 'warna', 'trim|required');
	$this->form_validation->set_rules('muncul', 'muncul', 'trim|required');

	$this->form_validation->set_rules('id_sms', 'id_sms', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "pddikti_tr_sms.xls";
        $judul = "pddikti_tr_sms";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Prodi Identifier");
	xlsWriteLabel($tablehead, $kolomhead++, "Nm Lemb");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Sdm Kaprodi");
	xlsWriteLabel($tablehead, $kolomhead++, "Smt Mulai");
	xlsWriteLabel($tablehead, $kolomhead++, "Kode Prodi");
	xlsWriteLabel($tablehead, $kolomhead++, "Jln");
	xlsWriteLabel($tablehead, $kolomhead++, "Rt");
	xlsWriteLabel($tablehead, $kolomhead++, "Rw");
	xlsWriteLabel($tablehead, $kolomhead++, "Nm Dsn");
	xlsWriteLabel($tablehead, $kolomhead++, "Ds Kel");
	xlsWriteLabel($tablehead, $kolomhead++, "Kode Pos");
	xlsWriteLabel($tablehead, $kolomhead++, "Lintang");
	xlsWriteLabel($tablehead, $kolomhead++, "Bujur");
	xlsWriteLabel($tablehead, $kolomhead++, "No Tel");
	xlsWriteLabel($tablehead, $kolomhead++, "No Fax");
	xlsWriteLabel($tablehead, $kolomhead++, "Email");
	xlsWriteLabel($tablehead, $kolomhead++, "Website");
	xlsWriteLabel($tablehead, $kolomhead++, "Singkatan");
	xlsWriteLabel($tablehead, $kolomhead++, "Tgl Berdiri");
	xlsWriteLabel($tablehead, $kolomhead++, "Sk Selenggara");
	xlsWriteLabel($tablehead, $kolomhead++, "Tgl Sk Selenggara");
	xlsWriteLabel($tablehead, $kolomhead++, "Tmt Sk Selenggara");
	xlsWriteLabel($tablehead, $kolomhead++, "Tst Sk Selenggara");
	xlsWriteLabel($tablehead, $kolomhead++, "Kpst Pd");
	xlsWriteLabel($tablehead, $kolomhead++, "Sks Lulus");
	xlsWriteLabel($tablehead, $kolomhead++, "Gelar Lulusan");
	xlsWriteLabel($tablehead, $kolomhead++, "Stat Prodi");
	xlsWriteLabel($tablehead, $kolomhead++, "Polesei Nilai");
	xlsWriteLabel($tablehead, $kolomhead++, "Luas Lab");
	xlsWriteLabel($tablehead, $kolomhead++, "Kapasitas Prak Satu Shift");
	xlsWriteLabel($tablehead, $kolomhead++, "Jml Mhs Pengguna");
	xlsWriteLabel($tablehead, $kolomhead++, "Jml Jam Penggunaan");
	xlsWriteLabel($tablehead, $kolomhead++, "Jml Prodi Pengguna");
	xlsWriteLabel($tablehead, $kolomhead++, "Jml Modul Prak Sendiri");
	xlsWriteLabel($tablehead, $kolomhead++, "Jml Modul Prak Lain");
	xlsWriteLabel($tablehead, $kolomhead++, "Fungsi Selain Prak");
	xlsWriteLabel($tablehead, $kolomhead++, "Penggunaan Lab");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Sp");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Jenj Didik");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Jns Sms");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Fungsi Lab");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Kel Usaha");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Wil");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Jur");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Induk Sms");
	xlsWriteLabel($tablehead, $kolomhead++, "A Kependidikan");
	xlsWriteLabel($tablehead, $kolomhead++, "Nm Prodi English");
	xlsWriteLabel($tablehead, $kolomhead++, "Sistem Ajar");
	xlsWriteLabel($tablehead, $kolomhead++, "Added By");
	xlsWriteLabel($tablehead, $kolomhead++, "Date Added");
	xlsWriteLabel($tablehead, $kolomhead++, "Modified By");
	xlsWriteLabel($tablehead, $kolomhead++, "Date Modified");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Sinkron");
	xlsWriteLabel($tablehead, $kolomhead++, "Deleted");
	xlsWriteLabel($tablehead, $kolomhead++, "Pendaftaran");
	xlsWriteLabel($tablehead, $kolomhead++, "Link2");
	xlsWriteLabel($tablehead, $kolomhead++, "Warna");
	xlsWriteLabel($tablehead, $kolomhead++, "Muncul");

	foreach ($this->Pddikti_tr_sms_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteNumber($tablebody, $kolombody++, $data->prodi_identifier);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nm_lemb);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_sdm_kaprodi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->smt_mulai);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kode_prodi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jln);
	    xlsWriteNumber($tablebody, $kolombody++, $data->rt);
	    xlsWriteNumber($tablebody, $kolombody++, $data->rw);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nm_dsn);
	    xlsWriteLabel($tablebody, $kolombody++, $data->ds_kel);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kode_pos);
	    xlsWriteNumber($tablebody, $kolombody++, $data->lintang);
	    xlsWriteNumber($tablebody, $kolombody++, $data->bujur);
	    xlsWriteLabel($tablebody, $kolombody++, $data->no_tel);
	    xlsWriteLabel($tablebody, $kolombody++, $data->no_fax);
	    xlsWriteLabel($tablebody, $kolombody++, $data->email);
	    xlsWriteLabel($tablebody, $kolombody++, $data->website);
	    xlsWriteLabel($tablebody, $kolombody++, $data->singkatan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl_berdiri);
	    xlsWriteLabel($tablebody, $kolombody++, $data->sk_selenggara);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl_sk_selenggara);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tmt_sk_selenggara);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tst_sk_selenggara);
	    xlsWriteNumber($tablebody, $kolombody++, $data->kpst_pd);
	    xlsWriteNumber($tablebody, $kolombody++, $data->sks_lulus);
	    xlsWriteLabel($tablebody, $kolombody++, $data->gelar_lulusan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->stat_prodi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->polesei_nilai);
	    xlsWriteNumber($tablebody, $kolombody++, $data->luas_lab);
	    xlsWriteNumber($tablebody, $kolombody++, $data->kapasitas_prak_satu_shift);
	    xlsWriteNumber($tablebody, $kolombody++, $data->jml_mhs_pengguna);
	    xlsWriteNumber($tablebody, $kolombody++, $data->jml_jam_penggunaan);
	    xlsWriteNumber($tablebody, $kolombody++, $data->jml_prodi_pengguna);
	    xlsWriteNumber($tablebody, $kolombody++, $data->jml_modul_prak_sendiri);
	    xlsWriteNumber($tablebody, $kolombody++, $data->jml_modul_prak_lain);
	    xlsWriteLabel($tablebody, $kolombody++, $data->fungsi_selain_prak);
	    xlsWriteLabel($tablebody, $kolombody++, $data->penggunaan_lab);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_sp);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_jenj_didik);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_jns_sms);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_fungsi_lab);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_kel_usaha);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_wil);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_jur);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_induk_sms);
	    xlsWriteNumber($tablebody, $kolombody++, $data->a_kependidikan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nm_prodi_english);
	    xlsWriteNumber($tablebody, $kolombody++, $data->sistem_ajar);
	    xlsWriteLabel($tablebody, $kolombody++, $data->added_by);
	    xlsWriteLabel($tablebody, $kolombody++, $data->date_added);
	    xlsWriteLabel($tablebody, $kolombody++, $data->modified_by);
	    xlsWriteLabel($tablebody, $kolombody++, $data->date_modified);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_sinkron);
	    xlsWriteNumber($tablebody, $kolombody++, $data->deleted);
	    xlsWriteLabel($tablebody, $kolombody++, $data->pendaftaran);
	    xlsWriteLabel($tablebody, $kolombody++, $data->link2);
	    xlsWriteLabel($tablebody, $kolombody++, $data->warna);
	    xlsWriteLabel($tablebody, $kolombody++, $data->muncul);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Pddikti_tr_sms.php */
/* Location: ./application/controllers/Pddikti_tr_sms.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-05-16 09:47:49 */
/* http://harviacode.com */