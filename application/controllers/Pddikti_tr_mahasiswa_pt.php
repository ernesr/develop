<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pddikti_tr_mahasiswa_pt extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pddikti_tr_mahasiswa_pt_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
if($this->session->userdata('logged_in') !== TRUE){
      redirect('../spmb/auth');
    }
}

    public function index()
    {
        $this->load->view('pddikti_tr_mahasiswa_pt/pddikti_tr_mahasiswa_pt_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Pddikti_tr_mahasiswa_pt_model->json();
    }

    public function read($id) 
    {
        $row = $this->Pddikti_tr_mahasiswa_pt_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_reg_pd' => $row->id_reg_pd,
		'nipd' => $row->nipd,
		'id_pd' => $row->id_pd,
		'id_sms' => $row->id_sms,
		'id_sp' => $row->id_sp,
		'tgl_masuk_sp' => $row->tgl_masuk_sp,
		'id_jns_daftar' => $row->id_jns_daftar,
		'id_jns_keluar' => $row->id_jns_keluar,
		'tgl_keluar' => $row->tgl_keluar,
		'ket' => $row->ket,
		'skhun' => $row->skhun,
		'a_pernah_paud' => $row->a_pernah_paud,
		'a_pernah_tk' => $row->a_pernah_tk,
		'id_kategori' => $row->id_kategori,
		'mulai_smt' => $row->mulai_smt,
		'sks_diakui' => $row->sks_diakui,
		'jalur_skripsi' => $row->jalur_skripsi,
		'judul_skripsi' => $row->judul_skripsi,
		'bln_awal_bimbingan' => $row->bln_awal_bimbingan,
		'bln_akhir_bimbingan' => $row->bln_akhir_bimbingan,
		'sk_yudisium' => $row->sk_yudisium,
		'tgl_sk_yudisium' => $row->tgl_sk_yudisium,
		'ipk' => $row->ipk,
		'no_seri_ijazah' => $row->no_seri_ijazah,
		'sert_prof' => $row->sert_prof,
		'a_pindah_mhs_asing' => $row->a_pindah_mhs_asing,
		'id_pt_asal' => $row->id_pt_asal,
		'id_prodi_asal' => $row->id_prodi_asal,
		'nm_pt_asal' => $row->nm_pt_asal,
		'nm_prodi_asal' => $row->nm_prodi_asal,
		'id_jalur_masuk' => $row->id_jalur_masuk,
		'no_peserta_ujian' => $row->no_peserta_ujian,
		'added_by' => $row->added_by,
		'date_added' => $row->date_added,
		'modified_by' => $row->modified_by,
		'date_modified' => $row->date_modified,
		'id_sinkron' => $row->id_sinkron,
		'deleted' => $row->deleted,
		'id_cabang' => $row->id_cabang,
	    );
            $this->load->view('pddikti_tr_mahasiswa_pt/pddikti_tr_mahasiswa_pt_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pddikti_tr_mahasiswa_pt'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pddikti_tr_mahasiswa_pt/create_action'),
	    'id_reg_pd' => set_value('id_reg_pd'),
	    'nipd' => set_value('nipd'),
	    'id_pd' => set_value('id_pd'),
	    'id_sms' => set_value('id_sms'),
	    'id_sp' => set_value('id_sp'),
	    'tgl_masuk_sp' => set_value('tgl_masuk_sp'),
	    'id_jns_daftar' => set_value('id_jns_daftar'),
	    'id_jns_keluar' => set_value('id_jns_keluar'),
	    'tgl_keluar' => set_value('tgl_keluar'),
	    'ket' => set_value('ket'),
	    'skhun' => set_value('skhun'),
	    'a_pernah_paud' => set_value('a_pernah_paud'),
	    'a_pernah_tk' => set_value('a_pernah_tk'),
	    'id_kategori' => set_value('id_kategori'),
	    'mulai_smt' => set_value('mulai_smt'),
	    'sks_diakui' => set_value('sks_diakui'),
	    'jalur_skripsi' => set_value('jalur_skripsi'),
	    'judul_skripsi' => set_value('judul_skripsi'),
	    'bln_awal_bimbingan' => set_value('bln_awal_bimbingan'),
	    'bln_akhir_bimbingan' => set_value('bln_akhir_bimbingan'),
	    'sk_yudisium' => set_value('sk_yudisium'),
	    'tgl_sk_yudisium' => set_value('tgl_sk_yudisium'),
	    'ipk' => set_value('ipk'),
	    'no_seri_ijazah' => set_value('no_seri_ijazah'),
	    'sert_prof' => set_value('sert_prof'),
	    'a_pindah_mhs_asing' => set_value('a_pindah_mhs_asing'),
	    'id_pt_asal' => set_value('id_pt_asal'),
	    'id_prodi_asal' => set_value('id_prodi_asal'),
	    'nm_pt_asal' => set_value('nm_pt_asal'),
	    'nm_prodi_asal' => set_value('nm_prodi_asal'),
	    'id_jalur_masuk' => set_value('id_jalur_masuk'),
	    'no_peserta_ujian' => set_value('no_peserta_ujian'),
	    'added_by' => set_value('added_by'),
	    'date_added' => set_value('date_added'),
	    'modified_by' => set_value('modified_by'),
	    'date_modified' => set_value('date_modified'),
	    'id_sinkron' => set_value('id_sinkron'),
	    'deleted' => set_value('deleted'),
	    'id_cabang' => set_value('id_cabang'),
	);
        $this->load->view('pddikti_tr_mahasiswa_pt/pddikti_tr_mahasiswa_pt_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_reg_pd' => $this->input->post('id_reg_pd',TRUE),
		'nipd' => $this->input->post('nipd',TRUE),
		'id_pd' => $this->input->post('id_pd',TRUE),
		'id_sms' => $this->input->post('id_sms',TRUE),
		'id_sp' => $this->input->post('id_sp',TRUE),
		'tgl_masuk_sp' => $this->input->post('tgl_masuk_sp',TRUE),
		'id_jns_daftar' => $this->input->post('id_jns_daftar',TRUE),
		'id_jns_keluar' => $this->input->post('id_jns_keluar',TRUE),
		'tgl_keluar' => $this->input->post('tgl_keluar',TRUE),
		'ket' => $this->input->post('ket',TRUE),
		'skhun' => $this->input->post('skhun',TRUE),
		'a_pernah_paud' => $this->input->post('a_pernah_paud',TRUE),
		'a_pernah_tk' => $this->input->post('a_pernah_tk',TRUE),
		'id_kategori' => $this->input->post('id_kategori',TRUE),
		'mulai_smt' => $this->input->post('mulai_smt',TRUE),
		'sks_diakui' => $this->input->post('sks_diakui',TRUE),
		'jalur_skripsi' => $this->input->post('jalur_skripsi',TRUE),
		'judul_skripsi' => $this->input->post('judul_skripsi',TRUE),
		'bln_awal_bimbingan' => $this->input->post('bln_awal_bimbingan',TRUE),
		'bln_akhir_bimbingan' => $this->input->post('bln_akhir_bimbingan',TRUE),
		'sk_yudisium' => $this->input->post('sk_yudisium',TRUE),
		'tgl_sk_yudisium' => $this->input->post('tgl_sk_yudisium',TRUE),
		'ipk' => $this->input->post('ipk',TRUE),
		'no_seri_ijazah' => $this->input->post('no_seri_ijazah',TRUE),
		'sert_prof' => $this->input->post('sert_prof',TRUE),
		'a_pindah_mhs_asing' => $this->input->post('a_pindah_mhs_asing',TRUE),
		'id_pt_asal' => $this->input->post('id_pt_asal',TRUE),
		'id_prodi_asal' => $this->input->post('id_prodi_asal',TRUE),
		'nm_pt_asal' => $this->input->post('nm_pt_asal',TRUE),
		'nm_prodi_asal' => $this->input->post('nm_prodi_asal',TRUE),
		'id_jalur_masuk' => $this->input->post('id_jalur_masuk',TRUE),
		'no_peserta_ujian' => $this->input->post('no_peserta_ujian',TRUE),
		'added_by' => $this->input->post('added_by',TRUE),
		'date_added' => $this->input->post('date_added',TRUE),
		'modified_by' => $this->input->post('modified_by',TRUE),
		'date_modified' => $this->input->post('date_modified',TRUE),
		'id_sinkron' => $this->input->post('id_sinkron',TRUE),
		'deleted' => $this->input->post('deleted',TRUE),
		'id_cabang' => $this->input->post('id_cabang',TRUE),
	    );

            $this->Pddikti_tr_mahasiswa_pt_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pddikti_tr_mahasiswa_pt'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pddikti_tr_mahasiswa_pt_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pddikti_tr_mahasiswa_pt/update_action'),
		'id_reg_pd' => set_value('id_reg_pd', $row->id_reg_pd),
		'nipd' => set_value('nipd', $row->nipd),
		'id_pd' => set_value('id_pd', $row->id_pd),
		'id_sms' => set_value('id_sms', $row->id_sms),
		'id_sp' => set_value('id_sp', $row->id_sp),
		'tgl_masuk_sp' => set_value('tgl_masuk_sp', $row->tgl_masuk_sp),
		'id_jns_daftar' => set_value('id_jns_daftar', $row->id_jns_daftar),
		'id_jns_keluar' => set_value('id_jns_keluar', $row->id_jns_keluar),
		'tgl_keluar' => set_value('tgl_keluar', $row->tgl_keluar),
		'ket' => set_value('ket', $row->ket),
		'skhun' => set_value('skhun', $row->skhun),
		'a_pernah_paud' => set_value('a_pernah_paud', $row->a_pernah_paud),
		'a_pernah_tk' => set_value('a_pernah_tk', $row->a_pernah_tk),
		'id_kategori' => set_value('id_kategori', $row->id_kategori),
		'mulai_smt' => set_value('mulai_smt', $row->mulai_smt),
		'sks_diakui' => set_value('sks_diakui', $row->sks_diakui),
		'jalur_skripsi' => set_value('jalur_skripsi', $row->jalur_skripsi),
		'judul_skripsi' => set_value('judul_skripsi', $row->judul_skripsi),
		'bln_awal_bimbingan' => set_value('bln_awal_bimbingan', $row->bln_awal_bimbingan),
		'bln_akhir_bimbingan' => set_value('bln_akhir_bimbingan', $row->bln_akhir_bimbingan),
		'sk_yudisium' => set_value('sk_yudisium', $row->sk_yudisium),
		'tgl_sk_yudisium' => set_value('tgl_sk_yudisium', $row->tgl_sk_yudisium),
		'ipk' => set_value('ipk', $row->ipk),
		'no_seri_ijazah' => set_value('no_seri_ijazah', $row->no_seri_ijazah),
		'sert_prof' => set_value('sert_prof', $row->sert_prof),
		'a_pindah_mhs_asing' => set_value('a_pindah_mhs_asing', $row->a_pindah_mhs_asing),
		'id_pt_asal' => set_value('id_pt_asal', $row->id_pt_asal),
		'id_prodi_asal' => set_value('id_prodi_asal', $row->id_prodi_asal),
		'nm_pt_asal' => set_value('nm_pt_asal', $row->nm_pt_asal),
		'nm_prodi_asal' => set_value('nm_prodi_asal', $row->nm_prodi_asal),
		'id_jalur_masuk' => set_value('id_jalur_masuk', $row->id_jalur_masuk),
		'no_peserta_ujian' => set_value('no_peserta_ujian', $row->no_peserta_ujian),
		'added_by' => set_value('added_by', $row->added_by),
		'date_added' => set_value('date_added', $row->date_added),
		'modified_by' => set_value('modified_by', $row->modified_by),
		'date_modified' => set_value('date_modified', $row->date_modified),
		'id_sinkron' => set_value('id_sinkron', $row->id_sinkron),
		'deleted' => set_value('deleted', $row->deleted),
		'id_cabang' => set_value('id_cabang', $row->id_cabang),
	    );
            $this->load->view('pddikti_tr_mahasiswa_pt/pddikti_tr_mahasiswa_pt_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pddikti_tr_mahasiswa_pt'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('', TRUE));
        } else {
            $data = array(
		'id_reg_pd' => $this->input->post('id_reg_pd',TRUE),
		'nipd' => $this->input->post('nipd',TRUE),
		'id_pd' => $this->input->post('id_pd',TRUE),
		'id_sms' => $this->input->post('id_sms',TRUE),
		'id_sp' => $this->input->post('id_sp',TRUE),
		'tgl_masuk_sp' => $this->input->post('tgl_masuk_sp',TRUE),
		'id_jns_daftar' => $this->input->post('id_jns_daftar',TRUE),
		'id_jns_keluar' => $this->input->post('id_jns_keluar',TRUE),
		'tgl_keluar' => $this->input->post('tgl_keluar',TRUE),
		'ket' => $this->input->post('ket',TRUE),
		'skhun' => $this->input->post('skhun',TRUE),
		'a_pernah_paud' => $this->input->post('a_pernah_paud',TRUE),
		'a_pernah_tk' => $this->input->post('a_pernah_tk',TRUE),
		'id_kategori' => $this->input->post('id_kategori',TRUE),
		'mulai_smt' => $this->input->post('mulai_smt',TRUE),
		'sks_diakui' => $this->input->post('sks_diakui',TRUE),
		'jalur_skripsi' => $this->input->post('jalur_skripsi',TRUE),
		'judul_skripsi' => $this->input->post('judul_skripsi',TRUE),
		'bln_awal_bimbingan' => $this->input->post('bln_awal_bimbingan',TRUE),
		'bln_akhir_bimbingan' => $this->input->post('bln_akhir_bimbingan',TRUE),
		'sk_yudisium' => $this->input->post('sk_yudisium',TRUE),
		'tgl_sk_yudisium' => $this->input->post('tgl_sk_yudisium',TRUE),
		'ipk' => $this->input->post('ipk',TRUE),
		'no_seri_ijazah' => $this->input->post('no_seri_ijazah',TRUE),
		'sert_prof' => $this->input->post('sert_prof',TRUE),
		'a_pindah_mhs_asing' => $this->input->post('a_pindah_mhs_asing',TRUE),
		'id_pt_asal' => $this->input->post('id_pt_asal',TRUE),
		'id_prodi_asal' => $this->input->post('id_prodi_asal',TRUE),
		'nm_pt_asal' => $this->input->post('nm_pt_asal',TRUE),
		'nm_prodi_asal' => $this->input->post('nm_prodi_asal',TRUE),
		'id_jalur_masuk' => $this->input->post('id_jalur_masuk',TRUE),
		'no_peserta_ujian' => $this->input->post('no_peserta_ujian',TRUE),
		'added_by' => $this->input->post('added_by',TRUE),
		'date_added' => $this->input->post('date_added',TRUE),
		'modified_by' => $this->input->post('modified_by',TRUE),
		'date_modified' => $this->input->post('date_modified',TRUE),
		'id_sinkron' => $this->input->post('id_sinkron',TRUE),
		'deleted' => $this->input->post('deleted',TRUE),
		'id_cabang' => $this->input->post('id_cabang',TRUE),
	    );

            $this->Pddikti_tr_mahasiswa_pt_model->update($this->input->post('', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pddikti_tr_mahasiswa_pt'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pddikti_tr_mahasiswa_pt_model->get_by_id($id);

        if ($row) {
            $this->Pddikti_tr_mahasiswa_pt_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pddikti_tr_mahasiswa_pt'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pddikti_tr_mahasiswa_pt'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_reg_pd', 'id reg pd', 'trim|required');
	$this->form_validation->set_rules('nipd', 'nipd', 'trim|required');
	$this->form_validation->set_rules('id_pd', 'id pd', 'trim|required');
	$this->form_validation->set_rules('id_sms', 'id sms', 'trim|required');
	$this->form_validation->set_rules('id_sp', 'id sp', 'trim|required');
	$this->form_validation->set_rules('tgl_masuk_sp', 'tgl masuk sp', 'trim|required');
	$this->form_validation->set_rules('id_jns_daftar', 'id jns daftar', 'trim|required|numeric');
	$this->form_validation->set_rules('id_jns_keluar', 'id jns keluar', 'trim|required');
	$this->form_validation->set_rules('tgl_keluar', 'tgl keluar', 'trim|required');
	$this->form_validation->set_rules('ket', 'ket', 'trim|required');
	$this->form_validation->set_rules('skhun', 'skhun', 'trim|required');
	$this->form_validation->set_rules('a_pernah_paud', 'a pernah paud', 'trim|required|numeric');
	$this->form_validation->set_rules('a_pernah_tk', 'a pernah tk', 'trim|required|numeric');
	$this->form_validation->set_rules('id_kategori', 'id kategori', 'trim|required');
	$this->form_validation->set_rules('mulai_smt', 'mulai smt', 'trim|required');
	$this->form_validation->set_rules('sks_diakui', 'sks diakui', 'trim|required|numeric');
	$this->form_validation->set_rules('jalur_skripsi', 'jalur skripsi', 'trim|required|numeric');
	$this->form_validation->set_rules('judul_skripsi', 'judul skripsi', 'trim|required');
	$this->form_validation->set_rules('bln_awal_bimbingan', 'bln awal bimbingan', 'trim|required');
	$this->form_validation->set_rules('bln_akhir_bimbingan', 'bln akhir bimbingan', 'trim|required');
	$this->form_validation->set_rules('sk_yudisium', 'sk yudisium', 'trim|required');
	$this->form_validation->set_rules('tgl_sk_yudisium', 'tgl sk yudisium', 'trim|required');
	$this->form_validation->set_rules('ipk', 'ipk', 'trim|required|numeric');
	$this->form_validation->set_rules('no_seri_ijazah', 'no seri ijazah', 'trim|required');
	$this->form_validation->set_rules('sert_prof', 'sert prof', 'trim|required');
	$this->form_validation->set_rules('a_pindah_mhs_asing', 'a pindah mhs asing', 'trim|required|numeric');
	$this->form_validation->set_rules('id_pt_asal', 'id pt asal', 'trim|required');
	$this->form_validation->set_rules('id_prodi_asal', 'id prodi asal', 'trim|required');
	$this->form_validation->set_rules('nm_pt_asal', 'nm pt asal', 'trim|required');
	$this->form_validation->set_rules('nm_prodi_asal', 'nm prodi asal', 'trim|required');
	$this->form_validation->set_rules('id_jalur_masuk', 'id jalur masuk', 'trim|required|numeric');
	$this->form_validation->set_rules('no_peserta_ujian', 'no peserta ujian', 'trim|required');
	$this->form_validation->set_rules('added_by', 'added by', 'trim|required');
	$this->form_validation->set_rules('date_added', 'date added', 'trim|required');
	$this->form_validation->set_rules('modified_by', 'modified by', 'trim|required');
	$this->form_validation->set_rules('date_modified', 'date modified', 'trim|required');
	$this->form_validation->set_rules('id_sinkron', 'id sinkron', 'trim|required');
	$this->form_validation->set_rules('deleted', 'deleted', 'trim|required');
	$this->form_validation->set_rules('id_cabang', 'id cabang', 'trim|required');

	$this->form_validation->set_rules('', '', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "pddikti_tr_mahasiswa_pt.xls";
        $judul = "pddikti_tr_mahasiswa_pt";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Id Reg Pd");
	xlsWriteLabel($tablehead, $kolomhead++, "Nipd");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Pd");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Sms");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Sp");
	xlsWriteLabel($tablehead, $kolomhead++, "Tgl Masuk Sp");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Jns Daftar");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Jns Keluar");
	xlsWriteLabel($tablehead, $kolomhead++, "Tgl Keluar");
	xlsWriteLabel($tablehead, $kolomhead++, "Ket");
	xlsWriteLabel($tablehead, $kolomhead++, "Skhun");
	xlsWriteLabel($tablehead, $kolomhead++, "A Pernah Paud");
	xlsWriteLabel($tablehead, $kolomhead++, "A Pernah Tk");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Kategori");
	xlsWriteLabel($tablehead, $kolomhead++, "Mulai Smt");
	xlsWriteLabel($tablehead, $kolomhead++, "Sks Diakui");
	xlsWriteLabel($tablehead, $kolomhead++, "Jalur Skripsi");
	xlsWriteLabel($tablehead, $kolomhead++, "Judul Skripsi");
	xlsWriteLabel($tablehead, $kolomhead++, "Bln Awal Bimbingan");
	xlsWriteLabel($tablehead, $kolomhead++, "Bln Akhir Bimbingan");
	xlsWriteLabel($tablehead, $kolomhead++, "Sk Yudisium");
	xlsWriteLabel($tablehead, $kolomhead++, "Tgl Sk Yudisium");
	xlsWriteLabel($tablehead, $kolomhead++, "Ipk");
	xlsWriteLabel($tablehead, $kolomhead++, "No Seri Ijazah");
	xlsWriteLabel($tablehead, $kolomhead++, "Sert Prof");
	xlsWriteLabel($tablehead, $kolomhead++, "A Pindah Mhs Asing");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Pt Asal");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Prodi Asal");
	xlsWriteLabel($tablehead, $kolomhead++, "Nm Pt Asal");
	xlsWriteLabel($tablehead, $kolomhead++, "Nm Prodi Asal");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Jalur Masuk");
	xlsWriteLabel($tablehead, $kolomhead++, "No Peserta Ujian");
	xlsWriteLabel($tablehead, $kolomhead++, "Added By");
	xlsWriteLabel($tablehead, $kolomhead++, "Date Added");
	xlsWriteLabel($tablehead, $kolomhead++, "Modified By");
	xlsWriteLabel($tablehead, $kolomhead++, "Date Modified");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Sinkron");
	xlsWriteLabel($tablehead, $kolomhead++, "Deleted");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Cabang");

	foreach ($this->Pddikti_tr_mahasiswa_pt_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_reg_pd);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nipd);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_pd);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_sms);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_sp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl_masuk_sp);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_jns_daftar);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_jns_keluar);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl_keluar);
	    xlsWriteLabel($tablebody, $kolombody++, $data->ket);
	    xlsWriteLabel($tablebody, $kolombody++, $data->skhun);
	    xlsWriteNumber($tablebody, $kolombody++, $data->a_pernah_paud);
	    xlsWriteNumber($tablebody, $kolombody++, $data->a_pernah_tk);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_kategori);
	    xlsWriteLabel($tablebody, $kolombody++, $data->mulai_smt);
	    xlsWriteNumber($tablebody, $kolombody++, $data->sks_diakui);
	    xlsWriteNumber($tablebody, $kolombody++, $data->jalur_skripsi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->judul_skripsi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->bln_awal_bimbingan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->bln_akhir_bimbingan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->sk_yudisium);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl_sk_yudisium);
	    xlsWriteNumber($tablebody, $kolombody++, $data->ipk);
	    xlsWriteLabel($tablebody, $kolombody++, $data->no_seri_ijazah);
	    xlsWriteLabel($tablebody, $kolombody++, $data->sert_prof);
	    xlsWriteNumber($tablebody, $kolombody++, $data->a_pindah_mhs_asing);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_pt_asal);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_prodi_asal);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nm_pt_asal);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nm_prodi_asal);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_jalur_masuk);
	    xlsWriteLabel($tablebody, $kolombody++, $data->no_peserta_ujian);
	    xlsWriteLabel($tablebody, $kolombody++, $data->added_by);
	    xlsWriteLabel($tablebody, $kolombody++, $data->date_added);
	    xlsWriteLabel($tablebody, $kolombody++, $data->modified_by);
	    xlsWriteLabel($tablebody, $kolombody++, $data->date_modified);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_sinkron);
	    xlsWriteNumber($tablebody, $kolombody++, $data->deleted);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_cabang);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Pddikti_tr_mahasiswa_pt.php */
/* Location: ./application/controllers/Pddikti_tr_mahasiswa_pt.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-05-16 09:47:08 */
/* http://harviacode.com */