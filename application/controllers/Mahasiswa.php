<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('mahasiswa/mahasiswa_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Mahasiswa_model->json();
    }

    public function read($id) 
    {
        $row = $this->Mahasiswa_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'nama_mahasiswa' => $row->nama_mahasiswa,
		'jenis_kelamin' => $row->jenis_kelamin,
		'tempat_lahir' => $row->tempat_lahir,
		'tanggal_lahir' => $row->tanggal_lahir,
		'id_agama' => $row->id_agama,
		'nik' => $row->nik,
		'nisn' => $row->nisn,
		'kewarganegaraan' => $row->kewarganegaraan,
		'jalan' => $row->jalan,
		'dusun' => $row->dusun,
		'rt' => $row->rt,
		'rw' => $row->rw,
		'kelurahan' => $row->kelurahan,
		'kode_pos' => $row->kode_pos,
		'id_wilayah' => $row->id_wilayah,
		'id_jenis_tinggal' => $row->id_jenis_tinggal,
		'id_alat_transportasi' => $row->id_alat_transportasi,
		'telepon' => $row->telepon,
		'handphone' => $row->handphone,
		'email' => $row->email,
		'penerima_kps' => $row->penerima_kps,
		'nomor_kps' => $row->nomor_kps,
		'nik_ayah' => $row->nik_ayah,
		'nama_ayah' => $row->nama_ayah,
		'tanggal_lahir_ayah' => $row->tanggal_lahir_ayah,
		'id_pendidikan_ayah' => $row->id_pendidikan_ayah,
		'id_pekerjaan_ayah' => $row->id_pekerjaan_ayah,
		'id_penghasilan_ayah' => $row->id_penghasilan_ayah,
		'nik_ibu' => $row->nik_ibu,
		'nama_ibu_kandung' => $row->nama_ibu_kandung,
		'tanggal_lahir_ibu' => $row->tanggal_lahir_ibu,
		'id_pendidikan_ibu' => $row->id_pendidikan_ibu,
		'id_pekerjaan_ibu' => $row->id_pekerjaan_ibu,
		'id_penghasilan_ibu' => $row->id_penghasilan_ibu,
		'npwp' => $row->npwp,
		'nama_wali' => $row->nama_wali,
		'tanggal_lahir_wali' => $row->tanggal_lahir_wali,
		'id_pendidikan_wali' => $row->id_pendidikan_wali,
		'id_pekerjaan_wali' => $row->id_pekerjaan_wali,
		'id_penghasilan_wali' => $row->id_penghasilan_wali,
		'id_kebutuhan_khusus_mahasiswa' => $row->id_kebutuhan_khusus_mahasiswa,
		'id_kebutuhan_khusus_ayah' => $row->id_kebutuhan_khusus_ayah,
		'id_kebutuhan_khusus_ibu' => $row->id_kebutuhan_khusus_ibu,
		'nim' => $row->nim,
		'id_jenis_daftar' => $row->id_jenis_daftar,
		'id_jalur_daftar' => $row->id_jalur_daftar,
		'id_periode_masuk' => $row->id_periode_masuk,
		'tanggal_daftar' => $row->tanggal_daftar,
		'id_perguruan_tinggi' => $row->id_perguruan_tinggi,
		'id_prodi' => $row->id_prodi,
		'id_bidang_minat' => $row->id_bidang_minat,
		'sks_diakui' => $row->sks_diakui,
		'nama_prodi_asal' => $row->nama_prodi_asal,
		'id_pembiayaan' => $row->id_pembiayaan,
		'biaya_masuk' => $row->biaya_masuk,
		'status' => $row->status,
		'error' => $row->error,
		'deleted' => $row->deleted,
		'data_add' => $row->data_add,
	    );
            $this->load->view('mahasiswa/mahasiswa_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('mahasiswa'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('mahasiswa/create_action'),
	    'id' => set_value('id'),
	    'nama_mahasiswa' => set_value('nama_mahasiswa'),
	    'jenis_kelamin' => set_value('jenis_kelamin'),
	    'tempat_lahir' => set_value('tempat_lahir'),
	    'tanggal_lahir' => set_value('tanggal_lahir'),
	    'id_agama' => set_value('id_agama'),
	    'nik' => set_value('nik'),
	    'nisn' => set_value('nisn'),
	    'kewarganegaraan' => set_value('kewarganegaraan'),
	    'jalan' => set_value('jalan'),
	    'dusun' => set_value('dusun'),
	    'rt' => set_value('rt'),
	    'rw' => set_value('rw'),
	    'kelurahan' => set_value('kelurahan'),
	    'kode_pos' => set_value('kode_pos'),
	    'id_wilayah' => set_value('id_wilayah'),
	    'id_jenis_tinggal' => set_value('id_jenis_tinggal'),
	    'id_alat_transportasi' => set_value('id_alat_transportasi'),
	    'telepon' => set_value('telepon'),
	    'handphone' => set_value('handphone'),
	    'email' => set_value('email'),
	    'penerima_kps' => set_value('penerima_kps'),
	    'nomor_kps' => set_value('nomor_kps'),
	    'nik_ayah' => set_value('nik_ayah'),
	    'nama_ayah' => set_value('nama_ayah'),
	    'tanggal_lahir_ayah' => set_value('tanggal_lahir_ayah'),
	    'id_pendidikan_ayah' => set_value('id_pendidikan_ayah'),
	    'id_pekerjaan_ayah' => set_value('id_pekerjaan_ayah'),
	    'id_penghasilan_ayah' => set_value('id_penghasilan_ayah'),
	    'nik_ibu' => set_value('nik_ibu'),
	    'nama_ibu_kandung' => set_value('nama_ibu_kandung'),
	    'tanggal_lahir_ibu' => set_value('tanggal_lahir_ibu'),
	    'id_pendidikan_ibu' => set_value('id_pendidikan_ibu'),
	    'id_pekerjaan_ibu' => set_value('id_pekerjaan_ibu'),
	    'id_penghasilan_ibu' => set_value('id_penghasilan_ibu'),
	    'npwp' => set_value('npwp'),
	    'nama_wali' => set_value('nama_wali'),
	    'tanggal_lahir_wali' => set_value('tanggal_lahir_wali'),
	    'id_pendidikan_wali' => set_value('id_pendidikan_wali'),
	    'id_pekerjaan_wali' => set_value('id_pekerjaan_wali'),
	    'id_penghasilan_wali' => set_value('id_penghasilan_wali'),
	    'id_kebutuhan_khusus_mahasiswa' => set_value('id_kebutuhan_khusus_mahasiswa'),
	    'id_kebutuhan_khusus_ayah' => set_value('id_kebutuhan_khusus_ayah'),
	    'id_kebutuhan_khusus_ibu' => set_value('id_kebutuhan_khusus_ibu'),
	    'nim' => set_value('nim'),
	    'id_jenis_daftar' => set_value('id_jenis_daftar'),
	    'id_jalur_daftar' => set_value('id_jalur_daftar'),
	    'id_periode_masuk' => set_value('id_periode_masuk'),
	    'tanggal_daftar' => set_value('tanggal_daftar'),
	    'id_perguruan_tinggi' => set_value('id_perguruan_tinggi'),
	    'id_prodi' => set_value('id_prodi'),
	    'id_bidang_minat' => set_value('id_bidang_minat'),
	    'sks_diakui' => set_value('sks_diakui'),
	    'nama_prodi_asal' => set_value('nama_prodi_asal'),
	    'id_pembiayaan' => set_value('id_pembiayaan'),
	    'biaya_masuk' => set_value('biaya_masuk'),
	    'status' => set_value('status'),
	    'error' => set_value('error'),
	    'deleted' => set_value('deleted'),
	    'data_add' => set_value('data_add'),
	);
        $this->load->view('mahasiswa/mahasiswa_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_mahasiswa' => $this->input->post('nama_mahasiswa',TRUE),
		'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
		'tempat_lahir' => $this->input->post('tempat_lahir',TRUE),
		'tanggal_lahir' => $this->input->post('tanggal_lahir',TRUE),
		'id_agama' => $this->input->post('id_agama',TRUE),
		'nik' => $this->input->post('nik',TRUE),
		'nisn' => $this->input->post('nisn',TRUE),
		'kewarganegaraan' => $this->input->post('kewarganegaraan',TRUE),
		'jalan' => $this->input->post('jalan',TRUE),
		'dusun' => $this->input->post('dusun',TRUE),
		'rt' => $this->input->post('rt',TRUE),
		'rw' => $this->input->post('rw',TRUE),
		'kelurahan' => $this->input->post('kelurahan',TRUE),
		'kode_pos' => $this->input->post('kode_pos',TRUE),
		'id_wilayah' => $this->input->post('id_wilayah',TRUE),
		'id_jenis_tinggal' => $this->input->post('id_jenis_tinggal',TRUE),
		'id_alat_transportasi' => $this->input->post('id_alat_transportasi',TRUE),
		'telepon' => $this->input->post('telepon',TRUE),
		'handphone' => $this->input->post('handphone',TRUE),
		'email' => $this->input->post('email',TRUE),
		'penerima_kps' => $this->input->post('penerima_kps',TRUE),
		'nomor_kps' => $this->input->post('nomor_kps',TRUE),
		'nik_ayah' => $this->input->post('nik_ayah',TRUE),
		'nama_ayah' => $this->input->post('nama_ayah',TRUE),
		'tanggal_lahir_ayah' => $this->input->post('tanggal_lahir_ayah',TRUE),
		'id_pendidikan_ayah' => $this->input->post('id_pendidikan_ayah',TRUE),
		'id_pekerjaan_ayah' => $this->input->post('id_pekerjaan_ayah',TRUE),
		'id_penghasilan_ayah' => $this->input->post('id_penghasilan_ayah',TRUE),
		'nik_ibu' => $this->input->post('nik_ibu',TRUE),
		'nama_ibu_kandung' => $this->input->post('nama_ibu_kandung',TRUE),
		'tanggal_lahir_ibu' => $this->input->post('tanggal_lahir_ibu',TRUE),
		'id_pendidikan_ibu' => $this->input->post('id_pendidikan_ibu',TRUE),
		'id_pekerjaan_ibu' => $this->input->post('id_pekerjaan_ibu',TRUE),
		'id_penghasilan_ibu' => $this->input->post('id_penghasilan_ibu',TRUE),
		'npwp' => $this->input->post('npwp',TRUE),
		'nama_wali' => $this->input->post('nama_wali',TRUE),
		'tanggal_lahir_wali' => $this->input->post('tanggal_lahir_wali',TRUE),
		'id_pendidikan_wali' => $this->input->post('id_pendidikan_wali',TRUE),
		'id_pekerjaan_wali' => $this->input->post('id_pekerjaan_wali',TRUE),
		'id_penghasilan_wali' => $this->input->post('id_penghasilan_wali',TRUE),
		'id_kebutuhan_khusus_mahasiswa' => $this->input->post('id_kebutuhan_khusus_mahasiswa',TRUE),
		'id_kebutuhan_khusus_ayah' => $this->input->post('id_kebutuhan_khusus_ayah',TRUE),
		'id_kebutuhan_khusus_ibu' => $this->input->post('id_kebutuhan_khusus_ibu',TRUE),
		'nim' => $this->input->post('nim',TRUE),
		'id_jenis_daftar' => $this->input->post('id_jenis_daftar',TRUE),
		'id_jalur_daftar' => $this->input->post('id_jalur_daftar',TRUE),
		'id_periode_masuk' => $this->input->post('id_periode_masuk',TRUE),
		'tanggal_daftar' => $this->input->post('tanggal_daftar',TRUE),
		'id_perguruan_tinggi' => $this->input->post('id_perguruan_tinggi',TRUE),
		'id_prodi' => $this->input->post('id_prodi',TRUE),
		'id_bidang_minat' => $this->input->post('id_bidang_minat',TRUE),
		'sks_diakui' => $this->input->post('sks_diakui',TRUE),
		'nama_prodi_asal' => $this->input->post('nama_prodi_asal',TRUE),
		'id_pembiayaan' => $this->input->post('id_pembiayaan',TRUE),
		'biaya_masuk' => $this->input->post('biaya_masuk',TRUE),
		'status' => $this->input->post('status',TRUE),
		'error' => $this->input->post('error',TRUE),
		'deleted' => $this->input->post('deleted',TRUE),
		'data_add' => $this->input->post('data_add',TRUE),
	    );

            $this->Mahasiswa_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('mahasiswa'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Mahasiswa_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('mahasiswa/update_action'),
		'id' => set_value('id', $row->id),
		'nama_mahasiswa' => set_value('nama_mahasiswa', $row->nama_mahasiswa),
		'jenis_kelamin' => set_value('jenis_kelamin', $row->jenis_kelamin),
		'tempat_lahir' => set_value('tempat_lahir', $row->tempat_lahir),
		'tanggal_lahir' => set_value('tanggal_lahir', $row->tanggal_lahir),
		'id_agama' => set_value('id_agama', $row->id_agama),
		'nik' => set_value('nik', $row->nik),
		'nisn' => set_value('nisn', $row->nisn),
		'kewarganegaraan' => set_value('kewarganegaraan', $row->kewarganegaraan),
		'jalan' => set_value('jalan', $row->jalan),
		'dusun' => set_value('dusun', $row->dusun),
		'rt' => set_value('rt', $row->rt),
		'rw' => set_value('rw', $row->rw),
		'kelurahan' => set_value('kelurahan', $row->kelurahan),
		'kode_pos' => set_value('kode_pos', $row->kode_pos),
		'id_wilayah' => set_value('id_wilayah', $row->id_wilayah),
		'id_jenis_tinggal' => set_value('id_jenis_tinggal', $row->id_jenis_tinggal),
		'id_alat_transportasi' => set_value('id_alat_transportasi', $row->id_alat_transportasi),
		'telepon' => set_value('telepon', $row->telepon),
		'handphone' => set_value('handphone', $row->handphone),
		'email' => set_value('email', $row->email),
		'penerima_kps' => set_value('penerima_kps', $row->penerima_kps),
		'nomor_kps' => set_value('nomor_kps', $row->nomor_kps),
		'nik_ayah' => set_value('nik_ayah', $row->nik_ayah),
		'nama_ayah' => set_value('nama_ayah', $row->nama_ayah),
		'tanggal_lahir_ayah' => set_value('tanggal_lahir_ayah', $row->tanggal_lahir_ayah),
		'id_pendidikan_ayah' => set_value('id_pendidikan_ayah', $row->id_pendidikan_ayah),
		'id_pekerjaan_ayah' => set_value('id_pekerjaan_ayah', $row->id_pekerjaan_ayah),
		'id_penghasilan_ayah' => set_value('id_penghasilan_ayah', $row->id_penghasilan_ayah),
		'nik_ibu' => set_value('nik_ibu', $row->nik_ibu),
		'nama_ibu_kandung' => set_value('nama_ibu_kandung', $row->nama_ibu_kandung),
		'tanggal_lahir_ibu' => set_value('tanggal_lahir_ibu', $row->tanggal_lahir_ibu),
		'id_pendidikan_ibu' => set_value('id_pendidikan_ibu', $row->id_pendidikan_ibu),
		'id_pekerjaan_ibu' => set_value('id_pekerjaan_ibu', $row->id_pekerjaan_ibu),
		'id_penghasilan_ibu' => set_value('id_penghasilan_ibu', $row->id_penghasilan_ibu),
		'npwp' => set_value('npwp', $row->npwp),
		'nama_wali' => set_value('nama_wali', $row->nama_wali),
		'tanggal_lahir_wali' => set_value('tanggal_lahir_wali', $row->tanggal_lahir_wali),
		'id_pendidikan_wali' => set_value('id_pendidikan_wali', $row->id_pendidikan_wali),
		'id_pekerjaan_wali' => set_value('id_pekerjaan_wali', $row->id_pekerjaan_wali),
		'id_penghasilan_wali' => set_value('id_penghasilan_wali', $row->id_penghasilan_wali),
		'id_kebutuhan_khusus_mahasiswa' => set_value('id_kebutuhan_khusus_mahasiswa', $row->id_kebutuhan_khusus_mahasiswa),
		'id_kebutuhan_khusus_ayah' => set_value('id_kebutuhan_khusus_ayah', $row->id_kebutuhan_khusus_ayah),
		'id_kebutuhan_khusus_ibu' => set_value('id_kebutuhan_khusus_ibu', $row->id_kebutuhan_khusus_ibu),
		'nim' => set_value('nim', $row->nim),
		'id_jenis_daftar' => set_value('id_jenis_daftar', $row->id_jenis_daftar),
		'id_jalur_daftar' => set_value('id_jalur_daftar', $row->id_jalur_daftar),
		'id_periode_masuk' => set_value('id_periode_masuk', $row->id_periode_masuk),
		'tanggal_daftar' => set_value('tanggal_daftar', $row->tanggal_daftar),
		'id_perguruan_tinggi' => set_value('id_perguruan_tinggi', $row->id_perguruan_tinggi),
		'id_prodi' => set_value('id_prodi', $row->id_prodi),
		'id_bidang_minat' => set_value('id_bidang_minat', $row->id_bidang_minat),
		'sks_diakui' => set_value('sks_diakui', $row->sks_diakui),
		'nama_prodi_asal' => set_value('nama_prodi_asal', $row->nama_prodi_asal),
		'id_pembiayaan' => set_value('id_pembiayaan', $row->id_pembiayaan),
		'biaya_masuk' => set_value('biaya_masuk', $row->biaya_masuk),
		'status' => set_value('status', $row->status),
		'error' => set_value('error', $row->error),
		'deleted' => set_value('deleted', $row->deleted),
		'data_add' => set_value('data_add', $row->data_add),
	    );
            $this->load->view('mahasiswa/mahasiswa_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('mahasiswa'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'nama_mahasiswa' => $this->input->post('nama_mahasiswa',TRUE),
		'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
		'tempat_lahir' => $this->input->post('tempat_lahir',TRUE),
		'tanggal_lahir' => $this->input->post('tanggal_lahir',TRUE),
		'id_agama' => $this->input->post('id_agama',TRUE),
		'nik' => $this->input->post('nik',TRUE),
		'nisn' => $this->input->post('nisn',TRUE),
		'kewarganegaraan' => $this->input->post('kewarganegaraan',TRUE),
		'jalan' => $this->input->post('jalan',TRUE),
		'dusun' => $this->input->post('dusun',TRUE),
		'rt' => $this->input->post('rt',TRUE),
		'rw' => $this->input->post('rw',TRUE),
		'kelurahan' => $this->input->post('kelurahan',TRUE),
		'kode_pos' => $this->input->post('kode_pos',TRUE),
		'id_wilayah' => $this->input->post('id_wilayah',TRUE),
		'id_jenis_tinggal' => $this->input->post('id_jenis_tinggal',TRUE),
		'id_alat_transportasi' => $this->input->post('id_alat_transportasi',TRUE),
		'telepon' => $this->input->post('telepon',TRUE),
		'handphone' => $this->input->post('handphone',TRUE),
		'email' => $this->input->post('email',TRUE),
		'penerima_kps' => $this->input->post('penerima_kps',TRUE),
		'nomor_kps' => $this->input->post('nomor_kps',TRUE),
		'nik_ayah' => $this->input->post('nik_ayah',TRUE),
		'nama_ayah' => $this->input->post('nama_ayah',TRUE),
		'tanggal_lahir_ayah' => $this->input->post('tanggal_lahir_ayah',TRUE),
		'id_pendidikan_ayah' => $this->input->post('id_pendidikan_ayah',TRUE),
		'id_pekerjaan_ayah' => $this->input->post('id_pekerjaan_ayah',TRUE),
		'id_penghasilan_ayah' => $this->input->post('id_penghasilan_ayah',TRUE),
		'nik_ibu' => $this->input->post('nik_ibu',TRUE),
		'nama_ibu_kandung' => $this->input->post('nama_ibu_kandung',TRUE),
		'tanggal_lahir_ibu' => $this->input->post('tanggal_lahir_ibu',TRUE),
		'id_pendidikan_ibu' => $this->input->post('id_pendidikan_ibu',TRUE),
		'id_pekerjaan_ibu' => $this->input->post('id_pekerjaan_ibu',TRUE),
		'id_penghasilan_ibu' => $this->input->post('id_penghasilan_ibu',TRUE),
		'npwp' => $this->input->post('npwp',TRUE),
		'nama_wali' => $this->input->post('nama_wali',TRUE),
		'tanggal_lahir_wali' => $this->input->post('tanggal_lahir_wali',TRUE),
		'id_pendidikan_wali' => $this->input->post('id_pendidikan_wali',TRUE),
		'id_pekerjaan_wali' => $this->input->post('id_pekerjaan_wali',TRUE),
		'id_penghasilan_wali' => $this->input->post('id_penghasilan_wali',TRUE),
		'id_kebutuhan_khusus_mahasiswa' => $this->input->post('id_kebutuhan_khusus_mahasiswa',TRUE),
		'id_kebutuhan_khusus_ayah' => $this->input->post('id_kebutuhan_khusus_ayah',TRUE),
		'id_kebutuhan_khusus_ibu' => $this->input->post('id_kebutuhan_khusus_ibu',TRUE),
		'nim' => $this->input->post('nim',TRUE),
		'id_jenis_daftar' => $this->input->post('id_jenis_daftar',TRUE),
		'id_jalur_daftar' => $this->input->post('id_jalur_daftar',TRUE),
		'id_periode_masuk' => $this->input->post('id_periode_masuk',TRUE),
		'tanggal_daftar' => $this->input->post('tanggal_daftar',TRUE),
		'id_perguruan_tinggi' => $this->input->post('id_perguruan_tinggi',TRUE),
		'id_prodi' => $this->input->post('id_prodi',TRUE),
		'id_bidang_minat' => $this->input->post('id_bidang_minat',TRUE),
		'sks_diakui' => $this->input->post('sks_diakui',TRUE),
		'nama_prodi_asal' => $this->input->post('nama_prodi_asal',TRUE),
		'id_pembiayaan' => $this->input->post('id_pembiayaan',TRUE),
		'biaya_masuk' => $this->input->post('biaya_masuk',TRUE),
		'status' => $this->input->post('status',TRUE),
		'error' => $this->input->post('error',TRUE),
		'deleted' => $this->input->post('deleted',TRUE),
		'data_add' => $this->input->post('data_add',TRUE),
	    );

            $this->Mahasiswa_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('mahasiswa'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Mahasiswa_model->get_by_id($id);

        if ($row) {
            $this->Mahasiswa_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('mahasiswa'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('mahasiswa'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_mahasiswa', 'nama mahasiswa', 'trim|required');
	$this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'trim|required');
	$this->form_validation->set_rules('tempat_lahir', 'tempat lahir', 'trim|required');
	$this->form_validation->set_rules('tanggal_lahir', 'tanggal lahir', 'trim|required');
	$this->form_validation->set_rules('id_agama', 'id agama', 'trim|required');
	$this->form_validation->set_rules('nik', 'nik', 'trim|required');
	$this->form_validation->set_rules('nisn', 'nisn', 'trim|required');
	$this->form_validation->set_rules('kewarganegaraan', 'kewarganegaraan', 'trim|required');
	$this->form_validation->set_rules('jalan', 'jalan', 'trim|required');
	$this->form_validation->set_rules('dusun', 'dusun', 'trim|required');
	$this->form_validation->set_rules('rt', 'rt', 'trim|required');
	$this->form_validation->set_rules('rw', 'rw', 'trim|required');
	$this->form_validation->set_rules('kelurahan', 'kelurahan', 'trim|required');
	$this->form_validation->set_rules('kode_pos', 'kode pos', 'trim|required');
	$this->form_validation->set_rules('id_wilayah', 'id wilayah', 'trim|required');
	$this->form_validation->set_rules('id_jenis_tinggal', 'id jenis tinggal', 'trim|required');
	$this->form_validation->set_rules('id_alat_transportasi', 'id alat transportasi', 'trim|required');
	$this->form_validation->set_rules('telepon', 'telepon', 'trim|required');
	$this->form_validation->set_rules('handphone', 'handphone', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('penerima_kps', 'penerima kps', 'trim|required');
	$this->form_validation->set_rules('nomor_kps', 'nomor kps', 'trim|required');
	$this->form_validation->set_rules('nik_ayah', 'nik ayah', 'trim|required');
	$this->form_validation->set_rules('nama_ayah', 'nama ayah', 'trim|required');
	$this->form_validation->set_rules('tanggal_lahir_ayah', 'tanggal lahir ayah', 'trim|required');
	$this->form_validation->set_rules('id_pendidikan_ayah', 'id pendidikan ayah', 'trim|required');
	$this->form_validation->set_rules('id_pekerjaan_ayah', 'id pekerjaan ayah', 'trim|required');
	$this->form_validation->set_rules('id_penghasilan_ayah', 'id penghasilan ayah', 'trim|required');
	$this->form_validation->set_rules('nik_ibu', 'nik ibu', 'trim|required');
	$this->form_validation->set_rules('nama_ibu_kandung', 'nama ibu kandung', 'trim|required');
	$this->form_validation->set_rules('tanggal_lahir_ibu', 'tanggal lahir ibu', 'trim|required');
	$this->form_validation->set_rules('id_pendidikan_ibu', 'id pendidikan ibu', 'trim|required');
	$this->form_validation->set_rules('id_pekerjaan_ibu', 'id pekerjaan ibu', 'trim|required');
	$this->form_validation->set_rules('id_penghasilan_ibu', 'id penghasilan ibu', 'trim|required');
	$this->form_validation->set_rules('npwp', 'npwp', 'trim|required');
	$this->form_validation->set_rules('nama_wali', 'nama wali', 'trim|required');
	$this->form_validation->set_rules('tanggal_lahir_wali', 'tanggal lahir wali', 'trim|required');
	$this->form_validation->set_rules('id_pendidikan_wali', 'id pendidikan wali', 'trim|required');
	$this->form_validation->set_rules('id_pekerjaan_wali', 'id pekerjaan wali', 'trim|required');
	$this->form_validation->set_rules('id_penghasilan_wali', 'id penghasilan wali', 'trim|required');
	$this->form_validation->set_rules('id_kebutuhan_khusus_mahasiswa', 'id kebutuhan khusus mahasiswa', 'trim|required');
	$this->form_validation->set_rules('id_kebutuhan_khusus_ayah', 'id kebutuhan khusus ayah', 'trim|required');
	$this->form_validation->set_rules('id_kebutuhan_khusus_ibu', 'id kebutuhan khusus ibu', 'trim|required');
	$this->form_validation->set_rules('nim', 'nim', 'trim|required');
	$this->form_validation->set_rules('id_jenis_daftar', 'id jenis daftar', 'trim|required');
	$this->form_validation->set_rules('id_jalur_daftar', 'id jalur daftar', 'trim|required');
	$this->form_validation->set_rules('id_periode_masuk', 'id periode masuk', 'trim|required');
	$this->form_validation->set_rules('tanggal_daftar', 'tanggal daftar', 'trim|required');
	$this->form_validation->set_rules('id_perguruan_tinggi', 'id perguruan tinggi', 'trim|required');
	$this->form_validation->set_rules('id_prodi', 'id prodi', 'trim|required');
	$this->form_validation->set_rules('id_bidang_minat', 'id bidang minat', 'trim|required');
	$this->form_validation->set_rules('sks_diakui', 'sks diakui', 'trim|required');
	$this->form_validation->set_rules('nama_prodi_asal', 'nama prodi asal', 'trim|required');
	$this->form_validation->set_rules('id_pembiayaan', 'id pembiayaan', 'trim|required');
	$this->form_validation->set_rules('biaya_masuk', 'biaya masuk', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');
	$this->form_validation->set_rules('error', 'error', 'trim|required');
	$this->form_validation->set_rules('deleted', 'deleted', 'trim|required');
	$this->form_validation->set_rules('data_add', 'data add', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "mahasiswa.xls";
        $judul = "mahasiswa";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Mahasiswa");
	xlsWriteLabel($tablehead, $kolomhead++, "Jenis Kelamin");
	xlsWriteLabel($tablehead, $kolomhead++, "Tempat Lahir");
	xlsWriteLabel($tablehead, $kolomhead++, "Tanggal Lahir");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Agama");
	xlsWriteLabel($tablehead, $kolomhead++, "Nik");
	xlsWriteLabel($tablehead, $kolomhead++, "Nisn");
	xlsWriteLabel($tablehead, $kolomhead++, "Kewarganegaraan");
	xlsWriteLabel($tablehead, $kolomhead++, "Jalan");
	xlsWriteLabel($tablehead, $kolomhead++, "Dusun");
	xlsWriteLabel($tablehead, $kolomhead++, "Rt");
	xlsWriteLabel($tablehead, $kolomhead++, "Rw");
	xlsWriteLabel($tablehead, $kolomhead++, "Kelurahan");
	xlsWriteLabel($tablehead, $kolomhead++, "Kode Pos");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Wilayah");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Jenis Tinggal");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Alat Transportasi");
	xlsWriteLabel($tablehead, $kolomhead++, "Telepon");
	xlsWriteLabel($tablehead, $kolomhead++, "Handphone");
	xlsWriteLabel($tablehead, $kolomhead++, "Email");
	xlsWriteLabel($tablehead, $kolomhead++, "Penerima Kps");
	xlsWriteLabel($tablehead, $kolomhead++, "Nomor Kps");
	xlsWriteLabel($tablehead, $kolomhead++, "Nik Ayah");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Ayah");
	xlsWriteLabel($tablehead, $kolomhead++, "Tanggal Lahir Ayah");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Pendidikan Ayah");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Pekerjaan Ayah");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Penghasilan Ayah");
	xlsWriteLabel($tablehead, $kolomhead++, "Nik Ibu");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Ibu Kandung");
	xlsWriteLabel($tablehead, $kolomhead++, "Tanggal Lahir Ibu");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Pendidikan Ibu");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Pekerjaan Ibu");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Penghasilan Ibu");
	xlsWriteLabel($tablehead, $kolomhead++, "Npwp");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Wali");
	xlsWriteLabel($tablehead, $kolomhead++, "Tanggal Lahir Wali");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Pendidikan Wali");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Pekerjaan Wali");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Penghasilan Wali");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Kebutuhan Khusus Mahasiswa");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Kebutuhan Khusus Ayah");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Kebutuhan Khusus Ibu");
	xlsWriteLabel($tablehead, $kolomhead++, "Nim");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Jenis Daftar");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Jalur Daftar");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Periode Masuk");
	xlsWriteLabel($tablehead, $kolomhead++, "Tanggal Daftar");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Perguruan Tinggi");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Prodi");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Bidang Minat");
	xlsWriteLabel($tablehead, $kolomhead++, "Sks Diakui");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Prodi Asal");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Pembiayaan");
	xlsWriteLabel($tablehead, $kolomhead++, "Biaya Masuk");
	xlsWriteLabel($tablehead, $kolomhead++, "Status");
	xlsWriteLabel($tablehead, $kolomhead++, "Error");
	xlsWriteLabel($tablehead, $kolomhead++, "Deleted");
	xlsWriteLabel($tablehead, $kolomhead++, "Data Add");

	foreach ($this->Mahasiswa_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_mahasiswa);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jenis_kelamin);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tempat_lahir);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tanggal_lahir);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_agama);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nik);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nisn);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kewarganegaraan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jalan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->dusun);
	    xlsWriteLabel($tablebody, $kolombody++, $data->rt);
	    xlsWriteLabel($tablebody, $kolombody++, $data->rw);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kelurahan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kode_pos);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_wilayah);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_jenis_tinggal);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_alat_transportasi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->telepon);
	    xlsWriteLabel($tablebody, $kolombody++, $data->handphone);
	    xlsWriteLabel($tablebody, $kolombody++, $data->email);
	    xlsWriteLabel($tablebody, $kolombody++, $data->penerima_kps);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nomor_kps);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nik_ayah);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_ayah);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tanggal_lahir_ayah);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_pendidikan_ayah);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_pekerjaan_ayah);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_penghasilan_ayah);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nik_ibu);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_ibu_kandung);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tanggal_lahir_ibu);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_pendidikan_ibu);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_pekerjaan_ibu);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_penghasilan_ibu);
	    xlsWriteLabel($tablebody, $kolombody++, $data->npwp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_wali);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tanggal_lahir_wali);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_pendidikan_wali);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_pekerjaan_wali);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_penghasilan_wali);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_kebutuhan_khusus_mahasiswa);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_kebutuhan_khusus_ayah);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_kebutuhan_khusus_ibu);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nim);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_jenis_daftar);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_jalur_daftar);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_periode_masuk);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tanggal_daftar);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_perguruan_tinggi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_prodi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_bidang_minat);
	    xlsWriteNumber($tablebody, $kolombody++, $data->sks_diakui);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_prodi_asal);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_pembiayaan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->biaya_masuk);
	    xlsWriteLabel($tablebody, $kolombody++, $data->status);
	    xlsWriteLabel($tablebody, $kolombody++, $data->error);
	    xlsWriteLabel($tablebody, $kolombody++, $data->deleted);
	    xlsWriteLabel($tablebody, $kolombody++, $data->data_add);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-06-09 06:26:38 */
/* http://harviacode.com */