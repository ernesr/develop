<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pddikti_tr_mahasiswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pddikti_tr_mahasiswa_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
if($this->session->userdata('logged_in') !== TRUE){
      redirect('../spmb/auth');
    }
}


    public function index()
    {
    	 $data['active']="H_Mahasiswa";
        $data['judul']="Lihat Rekapitulasi";

        $this->load->view('pddikti_tr_mahasiswa/pddikti_tr_mahasiswa_list',$data);
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Pddikti_tr_mahasiswa_model->json();
    }

    public function read($id) 
    {
        $row = $this->Pddikti_tr_mahasiswa_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_pd' => $row->id_pd,
		'id_permohonan_daftar_mhs' => $row->id_permohonan_daftar_mhs,
		'nm_pd' => $row->nm_pd,
		'jk' => $row->jk,
		'nisn' => $row->nisn,
		'nik' => $row->nik,
		'npwp' => $row->npwp,
		'tmpt_lahir' => $row->tmpt_lahir,
		'tgl_lahir' => $row->tgl_lahir,
		'id_agama' => $row->id_agama,
		'id_kk' => $row->id_kk,
		'jln' => $row->jln,
		'rt' => $row->rt,
		'rw' => $row->rw,
		'nm_dsn' => $row->nm_dsn,
		'ds_kel' => $row->ds_kel,
		'id_wil' => $row->id_wil,
		'kode_pos' => $row->kode_pos,
		'id_jns_tinggal' => $row->id_jns_tinggal,
		'id_alat_transport' => $row->id_alat_transport,
		'no_tel_rmh' => $row->no_tel_rmh,
		'no_hp' => $row->no_hp,
		'email' => $row->email,
		'a_terima_kps' => $row->a_terima_kps,
		'no_kps' => $row->no_kps,
		'stat_pd' => $row->stat_pd,
		'nm_ayah' => $row->nm_ayah,
		'tgl_lahir_ayah' => $row->tgl_lahir_ayah,
		'nik_ayah' => $row->nik_ayah,
		'id_jenjang_pendidikan_ayah' => $row->id_jenjang_pendidikan_ayah,
		'id_pekerjaan_ayah' => $row->id_pekerjaan_ayah,
		'id_penghasilan_ayah' => $row->id_penghasilan_ayah,
		'id_kebutuhan_khusus_ayah' => $row->id_kebutuhan_khusus_ayah,
		'nm_ibu_kandung' => $row->nm_ibu_kandung,
		'tgl_lahir_ibu' => $row->tgl_lahir_ibu,
		'nik_ibu' => $row->nik_ibu,
		'id_jenjang_pendidikan_ibu' => $row->id_jenjang_pendidikan_ibu,
		'id_pekerjaan_ibu' => $row->id_pekerjaan_ibu,
		'id_penghasilan_ibu' => $row->id_penghasilan_ibu,
		'id_kebutuhan_khusus_ibu' => $row->id_kebutuhan_khusus_ibu,
		'nm_wali' => $row->nm_wali,
		'tgl_lahir_wali' => $row->tgl_lahir_wali,
		'id_jenjang_pendidikan_wali' => $row->id_jenjang_pendidikan_wali,
		'id_pekerjaan_wali' => $row->id_pekerjaan_wali,
		'id_penghasilan_wali' => $row->id_penghasilan_wali,
		'kewarganegaraan' => $row->kewarganegaraan,
		'telepon_seluler' => $row->telepon_seluler,
		'telepon_rumah' => $row->telepon_rumah,
		'added_by' => $row->added_by,
		'date_added' => $row->date_added,
		'modified_by' => $row->modified_by,
		'date_modified' => $row->date_modified,
		'id_sinkron' => $row->id_sinkron,
		'deleted' => $row->deleted,
		'no_hp_ortu' => $row->no_hp_ortu,
	    );
            $this->load->view('pddikti_tr_mahasiswa/pddikti_tr_mahasiswa_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pddikti_tr_mahasiswa'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pddikti_tr_mahasiswa/create_action'),
	    'id_pd' => set_value('id_pd'),
	    'id_permohonan_daftar_mhs' => set_value('id_permohonan_daftar_mhs'),
	    'nm_pd' => set_value('nm_pd'),
	    'jk' => set_value('jk'),
	    'nisn' => set_value('nisn'),
	    'nik' => set_value('nik'),
	    'npwp' => set_value('npwp'),
	    'tmpt_lahir' => set_value('tmpt_lahir'),
	    'tgl_lahir' => set_value('tgl_lahir'),
	    'id_agama' => set_value('id_agama'),
	    'id_kk' => set_value('id_kk'),
	    'jln' => set_value('jln'),
	    'rt' => set_value('rt'),
	    'rw' => set_value('rw'),
	    'nm_dsn' => set_value('nm_dsn'),
	    'ds_kel' => set_value('ds_kel'),
	    'id_wil' => set_value('id_wil'),
	    'kode_pos' => set_value('kode_pos'),
	    'id_jns_tinggal' => set_value('id_jns_tinggal'),
	    'id_alat_transport' => set_value('id_alat_transport'),
	    'no_tel_rmh' => set_value('no_tel_rmh'),
	    'no_hp' => set_value('no_hp'),
	    'email' => set_value('email'),
	    'a_terima_kps' => set_value('a_terima_kps'),
	    'no_kps' => set_value('no_kps'),
	    'stat_pd' => set_value('stat_pd'),
	    'nm_ayah' => set_value('nm_ayah'),
	    'tgl_lahir_ayah' => set_value('tgl_lahir_ayah'),
	    'nik_ayah' => set_value('nik_ayah'),
	    'id_jenjang_pendidikan_ayah' => set_value('id_jenjang_pendidikan_ayah'),
	    'id_pekerjaan_ayah' => set_value('id_pekerjaan_ayah'),
	    'id_penghasilan_ayah' => set_value('id_penghasilan_ayah'),
	    'id_kebutuhan_khusus_ayah' => set_value('id_kebutuhan_khusus_ayah'),
	    'nm_ibu_kandung' => set_value('nm_ibu_kandung'),
	    'tgl_lahir_ibu' => set_value('tgl_lahir_ibu'),
	    'nik_ibu' => set_value('nik_ibu'),
	    'id_jenjang_pendidikan_ibu' => set_value('id_jenjang_pendidikan_ibu'),
	    'id_pekerjaan_ibu' => set_value('id_pekerjaan_ibu'),
	    'id_penghasilan_ibu' => set_value('id_penghasilan_ibu'),
	    'id_kebutuhan_khusus_ibu' => set_value('id_kebutuhan_khusus_ibu'),
	    'nm_wali' => set_value('nm_wali'),
	    'tgl_lahir_wali' => set_value('tgl_lahir_wali'),
	    'id_jenjang_pendidikan_wali' => set_value('id_jenjang_pendidikan_wali'),
	    'id_pekerjaan_wali' => set_value('id_pekerjaan_wali'),
	    'id_penghasilan_wali' => set_value('id_penghasilan_wali'),
	    'kewarganegaraan' => set_value('kewarganegaraan'),
	    'telepon_seluler' => set_value('telepon_seluler'),
	    'telepon_rumah' => set_value('telepon_rumah'),
	    'added_by' => set_value('added_by'),
	    'date_added' => set_value('date_added'),
	    'modified_by' => set_value('modified_by'),
	    'date_modified' => set_value('date_modified'),
	    'id_sinkron' => set_value('id_sinkron'),
	    'deleted' => set_value('deleted'),
	    'no_hp_ortu' => set_value('no_hp_ortu'),
	);
        $this->load->view('pddikti_tr_mahasiswa/pddikti_tr_mahasiswa_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_permohonan_daftar_mhs' => $this->input->post('id_permohonan_daftar_mhs',TRUE),
		'nm_pd' => $this->input->post('nm_pd',TRUE),
		'jk' => $this->input->post('jk',TRUE),
		'nisn' => $this->input->post('nisn',TRUE),
		'nik' => $this->input->post('nik',TRUE),
		'npwp' => $this->input->post('npwp',TRUE),
		'tmpt_lahir' => $this->input->post('tmpt_lahir',TRUE),
		'tgl_lahir' => $this->input->post('tgl_lahir',TRUE),
		'id_agama' => $this->input->post('id_agama',TRUE),
		'id_kk' => $this->input->post('id_kk',TRUE),
		'jln' => $this->input->post('jln',TRUE),
		'rt' => $this->input->post('rt',TRUE),
		'rw' => $this->input->post('rw',TRUE),
		'nm_dsn' => $this->input->post('nm_dsn',TRUE),
		'ds_kel' => $this->input->post('ds_kel',TRUE),
		'id_wil' => $this->input->post('id_wil',TRUE),
		'kode_pos' => $this->input->post('kode_pos',TRUE),
		'id_jns_tinggal' => $this->input->post('id_jns_tinggal',TRUE),
		'id_alat_transport' => $this->input->post('id_alat_transport',TRUE),
		'no_tel_rmh' => $this->input->post('no_tel_rmh',TRUE),
		'no_hp' => $this->input->post('no_hp',TRUE),
		'email' => $this->input->post('email',TRUE),
		'a_terima_kps' => $this->input->post('a_terima_kps',TRUE),
		'no_kps' => $this->input->post('no_kps',TRUE),
		'stat_pd' => $this->input->post('stat_pd',TRUE),
		'nm_ayah' => $this->input->post('nm_ayah',TRUE),
		'tgl_lahir_ayah' => $this->input->post('tgl_lahir_ayah',TRUE),
		'nik_ayah' => $this->input->post('nik_ayah',TRUE),
		'id_jenjang_pendidikan_ayah' => $this->input->post('id_jenjang_pendidikan_ayah',TRUE),
		'id_pekerjaan_ayah' => $this->input->post('id_pekerjaan_ayah',TRUE),
		'id_penghasilan_ayah' => $this->input->post('id_penghasilan_ayah',TRUE),
		'id_kebutuhan_khusus_ayah' => $this->input->post('id_kebutuhan_khusus_ayah',TRUE),
		'nm_ibu_kandung' => $this->input->post('nm_ibu_kandung',TRUE),
		'tgl_lahir_ibu' => $this->input->post('tgl_lahir_ibu',TRUE),
		'nik_ibu' => $this->input->post('nik_ibu',TRUE),
		'id_jenjang_pendidikan_ibu' => $this->input->post('id_jenjang_pendidikan_ibu',TRUE),
		'id_pekerjaan_ibu' => $this->input->post('id_pekerjaan_ibu',TRUE),
		'id_penghasilan_ibu' => $this->input->post('id_penghasilan_ibu',TRUE),
		'id_kebutuhan_khusus_ibu' => $this->input->post('id_kebutuhan_khusus_ibu',TRUE),
		'nm_wali' => $this->input->post('nm_wali',TRUE),
		'tgl_lahir_wali' => $this->input->post('tgl_lahir_wali',TRUE),
		'id_jenjang_pendidikan_wali' => $this->input->post('id_jenjang_pendidikan_wali',TRUE),
		'id_pekerjaan_wali' => $this->input->post('id_pekerjaan_wali',TRUE),
		'id_penghasilan_wali' => $this->input->post('id_penghasilan_wali',TRUE),
		'kewarganegaraan' => $this->input->post('kewarganegaraan',TRUE),
		'telepon_seluler' => $this->input->post('telepon_seluler',TRUE),
		'telepon_rumah' => $this->input->post('telepon_rumah',TRUE),
		'added_by' => $this->input->post('added_by',TRUE),
		'date_added' => $this->input->post('date_added',TRUE),
		'modified_by' => $this->input->post('modified_by',TRUE),
		'date_modified' => $this->input->post('date_modified',TRUE),
		'id_sinkron' => $this->input->post('id_sinkron',TRUE),
		'deleted' => $this->input->post('deleted',TRUE),
		'no_hp_ortu' => $this->input->post('no_hp_ortu',TRUE),
	    );

            $this->Pddikti_tr_mahasiswa_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pddikti_tr_mahasiswa'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pddikti_tr_mahasiswa_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pddikti_tr_mahasiswa/update_action'),
		'id_pd' => set_value('id_pd', $row->id_pd),
		'id_permohonan_daftar_mhs' => set_value('id_permohonan_daftar_mhs', $row->id_permohonan_daftar_mhs),
		'nm_pd' => set_value('nm_pd', $row->nm_pd),
		'jk' => set_value('jk', $row->jk),
		'nisn' => set_value('nisn', $row->nisn),
		'nik' => set_value('nik', $row->nik),
		'npwp' => set_value('npwp', $row->npwp),
		'tmpt_lahir' => set_value('tmpt_lahir', $row->tmpt_lahir),
		'tgl_lahir' => set_value('tgl_lahir', $row->tgl_lahir),
		'id_agama' => set_value('id_agama', $row->id_agama),
		'id_kk' => set_value('id_kk', $row->id_kk),
		'jln' => set_value('jln', $row->jln),
		'rt' => set_value('rt', $row->rt),
		'rw' => set_value('rw', $row->rw),
		'nm_dsn' => set_value('nm_dsn', $row->nm_dsn),
		'ds_kel' => set_value('ds_kel', $row->ds_kel),
		'id_wil' => set_value('id_wil', $row->id_wil),
		'kode_pos' => set_value('kode_pos', $row->kode_pos),
		'id_jns_tinggal' => set_value('id_jns_tinggal', $row->id_jns_tinggal),
		'id_alat_transport' => set_value('id_alat_transport', $row->id_alat_transport),
		'no_tel_rmh' => set_value('no_tel_rmh', $row->no_tel_rmh),
		'no_hp' => set_value('no_hp', $row->no_hp),
		'email' => set_value('email', $row->email),
		'a_terima_kps' => set_value('a_terima_kps', $row->a_terima_kps),
		'no_kps' => set_value('no_kps', $row->no_kps),
		'stat_pd' => set_value('stat_pd', $row->stat_pd),
		'nm_ayah' => set_value('nm_ayah', $row->nm_ayah),
		'tgl_lahir_ayah' => set_value('tgl_lahir_ayah', $row->tgl_lahir_ayah),
		'nik_ayah' => set_value('nik_ayah', $row->nik_ayah),
		'id_jenjang_pendidikan_ayah' => set_value('id_jenjang_pendidikan_ayah', $row->id_jenjang_pendidikan_ayah),
		'id_pekerjaan_ayah' => set_value('id_pekerjaan_ayah', $row->id_pekerjaan_ayah),
		'id_penghasilan_ayah' => set_value('id_penghasilan_ayah', $row->id_penghasilan_ayah),
		'id_kebutuhan_khusus_ayah' => set_value('id_kebutuhan_khusus_ayah', $row->id_kebutuhan_khusus_ayah),
		'nm_ibu_kandung' => set_value('nm_ibu_kandung', $row->nm_ibu_kandung),
		'tgl_lahir_ibu' => set_value('tgl_lahir_ibu', $row->tgl_lahir_ibu),
		'nik_ibu' => set_value('nik_ibu', $row->nik_ibu),
		'id_jenjang_pendidikan_ibu' => set_value('id_jenjang_pendidikan_ibu', $row->id_jenjang_pendidikan_ibu),
		'id_pekerjaan_ibu' => set_value('id_pekerjaan_ibu', $row->id_pekerjaan_ibu),
		'id_penghasilan_ibu' => set_value('id_penghasilan_ibu', $row->id_penghasilan_ibu),
		'id_kebutuhan_khusus_ibu' => set_value('id_kebutuhan_khusus_ibu', $row->id_kebutuhan_khusus_ibu),
		'nm_wali' => set_value('nm_wali', $row->nm_wali),
		'tgl_lahir_wali' => set_value('tgl_lahir_wali', $row->tgl_lahir_wali),
		'id_jenjang_pendidikan_wali' => set_value('id_jenjang_pendidikan_wali', $row->id_jenjang_pendidikan_wali),
		'id_pekerjaan_wali' => set_value('id_pekerjaan_wali', $row->id_pekerjaan_wali),
		'id_penghasilan_wali' => set_value('id_penghasilan_wali', $row->id_penghasilan_wali),
		'kewarganegaraan' => set_value('kewarganegaraan', $row->kewarganegaraan),
		'telepon_seluler' => set_value('telepon_seluler', $row->telepon_seluler),
		'telepon_rumah' => set_value('telepon_rumah', $row->telepon_rumah),
		'added_by' => set_value('added_by', $row->added_by),
		'date_added' => set_value('date_added', $row->date_added),
		'modified_by' => set_value('modified_by', $row->modified_by),
		'date_modified' => set_value('date_modified', $row->date_modified),
		'id_sinkron' => set_value('id_sinkron', $row->id_sinkron),
		'deleted' => set_value('deleted', $row->deleted),
		'no_hp_ortu' => set_value('no_hp_ortu', $row->no_hp_ortu),
	    );
            $this->load->view('pddikti_tr_mahasiswa/pddikti_tr_mahasiswa_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pddikti_tr_mahasiswa'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_pd', TRUE));
        } else {
            $data = array(
		'id_permohonan_daftar_mhs' => $this->input->post('id_permohonan_daftar_mhs',TRUE),
		'nm_pd' => $this->input->post('nm_pd',TRUE),
		'jk' => $this->input->post('jk',TRUE),
		'nisn' => $this->input->post('nisn',TRUE),
		'nik' => $this->input->post('nik',TRUE),
		'npwp' => $this->input->post('npwp',TRUE),
		'tmpt_lahir' => $this->input->post('tmpt_lahir',TRUE),
		'tgl_lahir' => $this->input->post('tgl_lahir',TRUE),
		'id_agama' => $this->input->post('id_agama',TRUE),
		'id_kk' => $this->input->post('id_kk',TRUE),
		'jln' => $this->input->post('jln',TRUE),
		'rt' => $this->input->post('rt',TRUE),
		'rw' => $this->input->post('rw',TRUE),
		'nm_dsn' => $this->input->post('nm_dsn',TRUE),
		'ds_kel' => $this->input->post('ds_kel',TRUE),
		'id_wil' => $this->input->post('id_wil',TRUE),
		'kode_pos' => $this->input->post('kode_pos',TRUE),
		'id_jns_tinggal' => $this->input->post('id_jns_tinggal',TRUE),
		'id_alat_transport' => $this->input->post('id_alat_transport',TRUE),
		'no_tel_rmh' => $this->input->post('no_tel_rmh',TRUE),
		'no_hp' => $this->input->post('no_hp',TRUE),
		'email' => $this->input->post('email',TRUE),
		'a_terima_kps' => $this->input->post('a_terima_kps',TRUE),
		'no_kps' => $this->input->post('no_kps',TRUE),
		'stat_pd' => $this->input->post('stat_pd',TRUE),
		'nm_ayah' => $this->input->post('nm_ayah',TRUE),
		'tgl_lahir_ayah' => $this->input->post('tgl_lahir_ayah',TRUE),
		'nik_ayah' => $this->input->post('nik_ayah',TRUE),
		'id_jenjang_pendidikan_ayah' => $this->input->post('id_jenjang_pendidikan_ayah',TRUE),
		'id_pekerjaan_ayah' => $this->input->post('id_pekerjaan_ayah',TRUE),
		'id_penghasilan_ayah' => $this->input->post('id_penghasilan_ayah',TRUE),
		'id_kebutuhan_khusus_ayah' => $this->input->post('id_kebutuhan_khusus_ayah',TRUE),
		'nm_ibu_kandung' => $this->input->post('nm_ibu_kandung',TRUE),
		'tgl_lahir_ibu' => $this->input->post('tgl_lahir_ibu',TRUE),
		'nik_ibu' => $this->input->post('nik_ibu',TRUE),
		'id_jenjang_pendidikan_ibu' => $this->input->post('id_jenjang_pendidikan_ibu',TRUE),
		'id_pekerjaan_ibu' => $this->input->post('id_pekerjaan_ibu',TRUE),
		'id_penghasilan_ibu' => $this->input->post('id_penghasilan_ibu',TRUE),
		'id_kebutuhan_khusus_ibu' => $this->input->post('id_kebutuhan_khusus_ibu',TRUE),
		'nm_wali' => $this->input->post('nm_wali',TRUE),
		'tgl_lahir_wali' => $this->input->post('tgl_lahir_wali',TRUE),
		'id_jenjang_pendidikan_wali' => $this->input->post('id_jenjang_pendidikan_wali',TRUE),
		'id_pekerjaan_wali' => $this->input->post('id_pekerjaan_wali',TRUE),
		'id_penghasilan_wali' => $this->input->post('id_penghasilan_wali',TRUE),
		'kewarganegaraan' => $this->input->post('kewarganegaraan',TRUE),
		'telepon_seluler' => $this->input->post('telepon_seluler',TRUE),
		'telepon_rumah' => $this->input->post('telepon_rumah',TRUE),
		'added_by' => $this->input->post('added_by',TRUE),
		'date_added' => $this->input->post('date_added',TRUE),
		'modified_by' => $this->input->post('modified_by',TRUE),
		'date_modified' => $this->input->post('date_modified',TRUE),
		'id_sinkron' => $this->input->post('id_sinkron',TRUE),
		'deleted' => $this->input->post('deleted',TRUE),
		'no_hp_ortu' => $this->input->post('no_hp_ortu',TRUE),
	    );

            $this->Pddikti_tr_mahasiswa_model->update($this->input->post('id_pd', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pddikti_tr_mahasiswa'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pddikti_tr_mahasiswa_model->get_by_id($id);

        if ($row) {
            $this->Pddikti_tr_mahasiswa_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pddikti_tr_mahasiswa'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pddikti_tr_mahasiswa'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_permohonan_daftar_mhs', 'id permohonan daftar mhs', 'trim|required');
	$this->form_validation->set_rules('nm_pd', 'nm pd', 'trim|required');
	$this->form_validation->set_rules('jk', 'jk', 'trim|required');
	$this->form_validation->set_rules('nisn', 'nisn', 'trim|required');
	$this->form_validation->set_rules('nik', 'nik', 'trim|required');
	$this->form_validation->set_rules('npwp', 'npwp', 'trim|required');
	$this->form_validation->set_rules('tmpt_lahir', 'tmpt lahir', 'trim|required');
	$this->form_validation->set_rules('tgl_lahir', 'tgl lahir', 'trim|required');
	$this->form_validation->set_rules('id_agama', 'id agama', 'trim|required');
	$this->form_validation->set_rules('id_kk', 'id kk', 'trim|required');
	$this->form_validation->set_rules('jln', 'jln', 'trim|required');
	$this->form_validation->set_rules('rt', 'rt', 'trim|required|numeric');
	$this->form_validation->set_rules('rw', 'rw', 'trim|required|numeric');
	$this->form_validation->set_rules('nm_dsn', 'nm dsn', 'trim|required');
	$this->form_validation->set_rules('ds_kel', 'ds kel', 'trim|required');
	$this->form_validation->set_rules('id_wil', 'id wil', 'trim|required');
	$this->form_validation->set_rules('kode_pos', 'kode pos', 'trim|required');
	$this->form_validation->set_rules('id_jns_tinggal', 'id jns tinggal', 'trim|required|numeric');
	$this->form_validation->set_rules('id_alat_transport', 'id alat transport', 'trim|required|numeric');
	$this->form_validation->set_rules('no_tel_rmh', 'no tel rmh', 'trim|required');
	$this->form_validation->set_rules('no_hp', 'no hp', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('a_terima_kps', 'a terima kps', 'trim|required|numeric');
	$this->form_validation->set_rules('no_kps', 'no kps', 'trim|required');
	$this->form_validation->set_rules('stat_pd', 'stat pd', 'trim|required');
	$this->form_validation->set_rules('nm_ayah', 'nm ayah', 'trim|required');
	$this->form_validation->set_rules('tgl_lahir_ayah', 'tgl lahir ayah', 'trim|required');
	$this->form_validation->set_rules('nik_ayah', 'nik ayah', 'trim|required');
	$this->form_validation->set_rules('id_jenjang_pendidikan_ayah', 'id jenjang pendidikan ayah', 'trim|required|numeric');
	$this->form_validation->set_rules('id_pekerjaan_ayah', 'id pekerjaan ayah', 'trim|required');
	$this->form_validation->set_rules('id_penghasilan_ayah', 'id penghasilan ayah', 'trim|required');
	$this->form_validation->set_rules('id_kebutuhan_khusus_ayah', 'id kebutuhan khusus ayah', 'trim|required');
	$this->form_validation->set_rules('nm_ibu_kandung', 'nm ibu kandung', 'trim|required');
	$this->form_validation->set_rules('tgl_lahir_ibu', 'tgl lahir ibu', 'trim|required');
	$this->form_validation->set_rules('nik_ibu', 'nik ibu', 'trim|required');
	$this->form_validation->set_rules('id_jenjang_pendidikan_ibu', 'id jenjang pendidikan ibu', 'trim|required|numeric');
	$this->form_validation->set_rules('id_pekerjaan_ibu', 'id pekerjaan ibu', 'trim|required');
	$this->form_validation->set_rules('id_penghasilan_ibu', 'id penghasilan ibu', 'trim|required');
	$this->form_validation->set_rules('id_kebutuhan_khusus_ibu', 'id kebutuhan khusus ibu', 'trim|required');
	$this->form_validation->set_rules('nm_wali', 'nm wali', 'trim|required');
	$this->form_validation->set_rules('tgl_lahir_wali', 'tgl lahir wali', 'trim|required');
	$this->form_validation->set_rules('id_jenjang_pendidikan_wali', 'id jenjang pendidikan wali', 'trim|required|numeric');
	$this->form_validation->set_rules('id_pekerjaan_wali', 'id pekerjaan wali', 'trim|required');
	$this->form_validation->set_rules('id_penghasilan_wali', 'id penghasilan wali', 'trim|required');
	$this->form_validation->set_rules('kewarganegaraan', 'kewarganegaraan', 'trim|required');
	$this->form_validation->set_rules('telepon_seluler', 'telepon seluler', 'trim|required');
	$this->form_validation->set_rules('telepon_rumah', 'telepon rumah', 'trim|required');
	$this->form_validation->set_rules('added_by', 'added by', 'trim|required');
	$this->form_validation->set_rules('date_added', 'date added', 'trim|required');
	$this->form_validation->set_rules('modified_by', 'modified by', 'trim|required');
	$this->form_validation->set_rules('date_modified', 'date modified', 'trim|required');
	$this->form_validation->set_rules('id_sinkron', 'id sinkron', 'trim|required');
	$this->form_validation->set_rules('deleted', 'deleted', 'trim|required');
	$this->form_validation->set_rules('no_hp_ortu', 'no hp ortu', 'trim|required');

	$this->form_validation->set_rules('id_pd', 'id_pd', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "pddikti_tr_mahasiswa.xls";
        $judul = "pddikti_tr_mahasiswa";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Id Permohonan Daftar Mhs");
	xlsWriteLabel($tablehead, $kolomhead++, "Nm Pd");
	xlsWriteLabel($tablehead, $kolomhead++, "Jk");
	xlsWriteLabel($tablehead, $kolomhead++, "Nisn");
	xlsWriteLabel($tablehead, $kolomhead++, "Nik");
	xlsWriteLabel($tablehead, $kolomhead++, "Npwp");
	xlsWriteLabel($tablehead, $kolomhead++, "Tmpt Lahir");
	xlsWriteLabel($tablehead, $kolomhead++, "Tgl Lahir");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Agama");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Kk");
	xlsWriteLabel($tablehead, $kolomhead++, "Jln");
	xlsWriteLabel($tablehead, $kolomhead++, "Rt");
	xlsWriteLabel($tablehead, $kolomhead++, "Rw");
	xlsWriteLabel($tablehead, $kolomhead++, "Nm Dsn");
	xlsWriteLabel($tablehead, $kolomhead++, "Ds Kel");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Wil");
	xlsWriteLabel($tablehead, $kolomhead++, "Kode Pos");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Jns Tinggal");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Alat Transport");
	xlsWriteLabel($tablehead, $kolomhead++, "No Tel Rmh");
	xlsWriteLabel($tablehead, $kolomhead++, "No Hp");
	xlsWriteLabel($tablehead, $kolomhead++, "Email");
	xlsWriteLabel($tablehead, $kolomhead++, "A Terima Kps");
	xlsWriteLabel($tablehead, $kolomhead++, "No Kps");
	xlsWriteLabel($tablehead, $kolomhead++, "Stat Pd");
	xlsWriteLabel($tablehead, $kolomhead++, "Nm Ayah");
	xlsWriteLabel($tablehead, $kolomhead++, "Tgl Lahir Ayah");
	xlsWriteLabel($tablehead, $kolomhead++, "Nik Ayah");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Jenjang Pendidikan Ayah");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Pekerjaan Ayah");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Penghasilan Ayah");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Kebutuhan Khusus Ayah");
	xlsWriteLabel($tablehead, $kolomhead++, "Nm Ibu Kandung");
	xlsWriteLabel($tablehead, $kolomhead++, "Tgl Lahir Ibu");
	xlsWriteLabel($tablehead, $kolomhead++, "Nik Ibu");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Jenjang Pendidikan Ibu");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Pekerjaan Ibu");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Penghasilan Ibu");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Kebutuhan Khusus Ibu");
	xlsWriteLabel($tablehead, $kolomhead++, "Nm Wali");
	xlsWriteLabel($tablehead, $kolomhead++, "Tgl Lahir Wali");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Jenjang Pendidikan Wali");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Pekerjaan Wali");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Penghasilan Wali");
	xlsWriteLabel($tablehead, $kolomhead++, "Kewarganegaraan");
	xlsWriteLabel($tablehead, $kolomhead++, "Telepon Seluler");
	xlsWriteLabel($tablehead, $kolomhead++, "Telepon Rumah");
	xlsWriteLabel($tablehead, $kolomhead++, "Added By");
	xlsWriteLabel($tablehead, $kolomhead++, "Date Added");
	xlsWriteLabel($tablehead, $kolomhead++, "Modified By");
	xlsWriteLabel($tablehead, $kolomhead++, "Date Modified");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Sinkron");
	xlsWriteLabel($tablehead, $kolomhead++, "Deleted");
	xlsWriteLabel($tablehead, $kolomhead++, "No Hp Ortu");

	foreach ($this->Pddikti_tr_mahasiswa_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_permohonan_daftar_mhs);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nm_pd);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jk);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nisn);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nik);
	    xlsWriteLabel($tablebody, $kolombody++, $data->npwp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tmpt_lahir);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl_lahir);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_agama);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_kk);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jln);
	    xlsWriteNumber($tablebody, $kolombody++, $data->rt);
	    xlsWriteNumber($tablebody, $kolombody++, $data->rw);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nm_dsn);
	    xlsWriteLabel($tablebody, $kolombody++, $data->ds_kel);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_wil);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kode_pos);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_jns_tinggal);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_alat_transport);
	    xlsWriteLabel($tablebody, $kolombody++, $data->no_tel_rmh);
	    xlsWriteLabel($tablebody, $kolombody++, $data->no_hp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->email);
	    xlsWriteNumber($tablebody, $kolombody++, $data->a_terima_kps);
	    xlsWriteLabel($tablebody, $kolombody++, $data->no_kps);
	    xlsWriteLabel($tablebody, $kolombody++, $data->stat_pd);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nm_ayah);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl_lahir_ayah);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nik_ayah);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_jenjang_pendidikan_ayah);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_pekerjaan_ayah);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_penghasilan_ayah);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_kebutuhan_khusus_ayah);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nm_ibu_kandung);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl_lahir_ibu);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nik_ibu);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_jenjang_pendidikan_ibu);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_pekerjaan_ibu);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_penghasilan_ibu);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_kebutuhan_khusus_ibu);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nm_wali);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl_lahir_wali);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_jenjang_pendidikan_wali);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_pekerjaan_wali);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_penghasilan_wali);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kewarganegaraan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->telepon_seluler);
	    xlsWriteLabel($tablebody, $kolombody++, $data->telepon_rumah);
	    xlsWriteLabel($tablebody, $kolombody++, $data->added_by);
	    xlsWriteLabel($tablebody, $kolombody++, $data->date_added);
	    xlsWriteLabel($tablebody, $kolombody++, $data->modified_by);
	    xlsWriteLabel($tablebody, $kolombody++, $data->date_modified);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_sinkron);
	    xlsWriteNumber($tablebody, $kolombody++, $data->deleted);
	    xlsWriteLabel($tablebody, $kolombody++, $data->no_hp_ortu);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=pddikti_tr_mahasiswa.doc");

        $data = array(
            'pddikti_tr_mahasiswa_data' => $this->Pddikti_tr_mahasiswa_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('pddikti_tr_mahasiswa/pddikti_tr_mahasiswa_doc',$data);
    }

}

/* End of file Pddikti_tr_mahasiswa.php */
/* Location: ./application/controllers/Pddikti_tr_mahasiswa.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-05-16 13:16:46 */
/* http://harviacode.com */