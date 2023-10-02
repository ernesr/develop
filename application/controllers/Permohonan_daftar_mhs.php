<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Permohonan_daftar_mhs extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Permohonan_daftar_mhs_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
if($this->session->userdata('logged_in') !== TRUE){
      redirect('../spmb/auth');
    }
}


    public function index()
    {
    	$time=date('Y');
    	$data['date']=date('Y');
    	 $data['active']="list1";
    	 $data['bayar']=$this->Permohonan_daftar_mhs_model->get_membayar($time);
    	 $data['prodi_bayar']=$this->Permohonan_daftar_mhs_model->get_prodi_bayar($time);
        $data['judul']="Lihat Daftar Mahasiswa yang Sudah Bayar Pendaftaran";
        $this->load->view('permohonan_daftar_mhs/permohonan_daftar_mhs_list',$data);
    } 
      public function regis()
    {
    	 $angka=date('Y');
    	$time =$angka . '1';
    	$data['date']=$time;
    	 $data['active']="list2";
        $data['judul']="Lihat Daftar Mahasiswa yang Sudah Bayar Pendaftaran";
        $this->load->view('permohonan_daftar_mhs/permohonan_daftar_mhs_regis',$data);
    } 
        public function dashboard()
    {
    	$time=date('Y');

    	$data['date']=date('Y');
    	 $data['active']="rekap1";
    	 $data['bayar']=$this->Permohonan_daftar_mhs_model->get_membayar($time);
    	 $data['prodi_bayar']=$this->Permohonan_daftar_mhs_model->get_prodi_bayar($time);
        $data['judul']="Rekapitulasi Data Mahasiswa Bayar Pendaftaran";
        $this->load->view('permohonan_daftar_mhs/permohonan_daftar_mhs_list2',$data);
    } 
     public function dashboard2()
    {
    	$angka=date('Y');
    	$time = $angka . '1';
    	$data['date']=date('Y');
    	 $data['active']="rekap2";
    	 $data['bayar']=$this->Permohonan_daftar_mhs_model->get_membayar_regis($time);
    	 $data['prodi_bayar']=$this->Permohonan_daftar_mhs_model->get_prodi_bayar_regis($time);
        $data['judul']="Rekapitulasi Data Mahasiswa Bayar Registrasi";
        $this->load->view('permohonan_daftar_mhs/permohonan_daftar_mhs_list3',$data);
    } 
    public function json($id) {
        header('Content-Type: application/json');
        echo $this->Permohonan_daftar_mhs_model->json($id);
    }
      public function json2($id) {
        header('Content-Type: application/json');
        echo $this->Permohonan_daftar_mhs_model->json2($id);
    }

    public function read($id) 
    {
        $row = $this->Permohonan_daftar_mhs_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_permohonan_daftar_mhs' => $row->id_permohonan_daftar_mhs,
		'id_cust' => $row->id_cust,
		'nama_lengkap' => $row->nama_lengkap,
		'email' => $row->email,
		'password' => $row->password,
		'id_sp' => $row->id_sp,
		'id_sms' => $row->id_sms,
		'id_jns_daftar' => $row->id_jns_daftar,
		'foto_images' => $row->foto_images,
		'tempat_lahir' => $row->tempat_lahir,
		'tanggal_lahir' => $row->tanggal_lahir,
		'jenis_kelamin' => $row->jenis_kelamin,
		'alamat_rumah' => $row->alamat_rumah,
		'no_hp' => $row->no_hp,
		'no_hp_ortu' => $row->no_hp_ortu,
		'asal_sekolah' => $row->asal_sekolah,
		'tahun_lulus' => $row->tahun_lulus,
		'jurusan_sma' => $row->jurusan_sma,
		'tinggi_badan' => $row->tinggi_badan,
		'berat_badan' => $row->berat_badan,
		'agama' => $row->agama,
		'tahun_masuk' => $row->tahun_masuk,
		'gelombang' => $row->gelombang,
		'status_complete' => $row->status_complete,
		'bukti_transfer' => $row->bukti_transfer,
		'bukti_transfer_dari' => $row->bukti_transfer_dari,
		'bukti_transfer2' => $row->bukti_transfer2,
		'bukti_transfer2_dari' => $row->bukti_transfer2_dari,
		'ip_address' => $row->ip_address,
		'date_added' => $row->date_added,
		'date_modified' => $row->date_modified,
		'pendaftaran_untuk_tahun_ajaran' => $row->pendaftaran_untuk_tahun_ajaran,
		'deleted' => $row->deleted,
		'nm_ibu_kandung' => $row->nm_ibu_kandung,
		'nik' => $row->nik,
		'id_wil' => $row->id_wil,
		'ds_kel' => $row->ds_kel,
		'kewarganegaraan' => $row->kewarganegaraan,
		'kab' => $row->kab,
		'kec' => $row->kec,
		'alternatif_sms' => $row->alternatif_sms,
		'alternatif_sp' => $row->alternatif_sp,
		'nisn' => $row->nisn,
		'survei' => $row->survei,
		'kd' => $row->kd,
		'pas2' => $row->pas2,
		'paket' => $row->paket,
	    );
            $this->load->view('permohonan_daftar_mhs/permohonan_daftar_mhs_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('permohonan_daftar_mhs'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('permohonan_daftar_mhs/create_action'),
	    'id_permohonan_daftar_mhs' => set_value('id_permohonan_daftar_mhs'),
	    'id_cust' => set_value('id_cust'),
	    'nama_lengkap' => set_value('nama_lengkap'),
	    'email' => set_value('email'),
	    'password' => set_value('password'),
	    'id_sp' => set_value('id_sp'),
	    'id_sms' => set_value('id_sms'),
	    'id_jns_daftar' => set_value('id_jns_daftar'),
	    'foto_images' => set_value('foto_images'),
	    'tempat_lahir' => set_value('tempat_lahir'),
	    'tanggal_lahir' => set_value('tanggal_lahir'),
	    'jenis_kelamin' => set_value('jenis_kelamin'),
	    'alamat_rumah' => set_value('alamat_rumah'),
	    'no_hp' => set_value('no_hp'),
	    'no_hp_ortu' => set_value('no_hp_ortu'),
	    'asal_sekolah' => set_value('asal_sekolah'),
	    'tahun_lulus' => set_value('tahun_lulus'),
	    'jurusan_sma' => set_value('jurusan_sma'),
	    'tinggi_badan' => set_value('tinggi_badan'),
	    'berat_badan' => set_value('berat_badan'),
	    'agama' => set_value('agama'),
	    'tahun_masuk' => set_value('tahun_masuk'),
	    'gelombang' => set_value('gelombang'),
	    'status_complete' => set_value('status_complete'),
	    'bukti_transfer' => set_value('bukti_transfer'),
	    'bukti_transfer_dari' => set_value('bukti_transfer_dari'),
	    'bukti_transfer2' => set_value('bukti_transfer2'),
	    'bukti_transfer2_dari' => set_value('bukti_transfer2_dari'),
	    'ip_address' => set_value('ip_address'),
	    'date_added' => set_value('date_added'),
	    'date_modified' => set_value('date_modified'),
	    'pendaftaran_untuk_tahun_ajaran' => set_value('pendaftaran_untuk_tahun_ajaran'),
	    'deleted' => set_value('deleted'),
	    'nm_ibu_kandung' => set_value('nm_ibu_kandung'),
	    'nik' => set_value('nik'),
	    'id_wil' => set_value('id_wil'),
	    'ds_kel' => set_value('ds_kel'),
	    'kewarganegaraan' => set_value('kewarganegaraan'),
	    'kab' => set_value('kab'),
	    'kec' => set_value('kec'),
	    'alternatif_sms' => set_value('alternatif_sms'),
	    'alternatif_sp' => set_value('alternatif_sp'),
	    'nisn' => set_value('nisn'),
	    'survei' => set_value('survei'),
	    'kd' => set_value('kd'),
	    'pas2' => set_value('pas2'),
	    'paket' => set_value('paket'),
	);
        $this->load->view('permohonan_daftar_mhs/permohonan_daftar_mhs_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_cust' => $this->input->post('id_cust',TRUE),
		'nama_lengkap' => $this->input->post('nama_lengkap',TRUE),
		'email' => $this->input->post('email',TRUE),
		'password' => $this->input->post('password',TRUE),
		'id_sp' => $this->input->post('id_sp',TRUE),
		'id_sms' => $this->input->post('id_sms',TRUE),
		'id_jns_daftar' => $this->input->post('id_jns_daftar',TRUE),
		'foto_images' => $this->input->post('foto_images',TRUE),
		'tempat_lahir' => $this->input->post('tempat_lahir',TRUE),
		'tanggal_lahir' => $this->input->post('tanggal_lahir',TRUE),
		'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
		'alamat_rumah' => $this->input->post('alamat_rumah',TRUE),
		'no_hp' => $this->input->post('no_hp',TRUE),
		'no_hp_ortu' => $this->input->post('no_hp_ortu',TRUE),
		'asal_sekolah' => $this->input->post('asal_sekolah',TRUE),
		'tahun_lulus' => $this->input->post('tahun_lulus',TRUE),
		'jurusan_sma' => $this->input->post('jurusan_sma',TRUE),
		'tinggi_badan' => $this->input->post('tinggi_badan',TRUE),
		'berat_badan' => $this->input->post('berat_badan',TRUE),
		'agama' => $this->input->post('agama',TRUE),
		'tahun_masuk' => $this->input->post('tahun_masuk',TRUE),
		'gelombang' => $this->input->post('gelombang',TRUE),
		'status_complete' => $this->input->post('status_complete',TRUE),
		'bukti_transfer' => $this->input->post('bukti_transfer',TRUE),
		'bukti_transfer_dari' => $this->input->post('bukti_transfer_dari',TRUE),
		'bukti_transfer2' => $this->input->post('bukti_transfer2',TRUE),
		'bukti_transfer2_dari' => $this->input->post('bukti_transfer2_dari',TRUE),
		'ip_address' => $this->input->post('ip_address',TRUE),
		'date_added' => $this->input->post('date_added',TRUE),
		'date_modified' => $this->input->post('date_modified',TRUE),
		'pendaftaran_untuk_tahun_ajaran' => $this->input->post('pendaftaran_untuk_tahun_ajaran',TRUE),
		'deleted' => $this->input->post('deleted',TRUE),
		'nm_ibu_kandung' => $this->input->post('nm_ibu_kandung',TRUE),
		'nik' => $this->input->post('nik',TRUE),
		'id_wil' => $this->input->post('id_wil',TRUE),
		'ds_kel' => $this->input->post('ds_kel',TRUE),
		'kewarganegaraan' => $this->input->post('kewarganegaraan',TRUE),
		'kab' => $this->input->post('kab',TRUE),
		'kec' => $this->input->post('kec',TRUE),
		'alternatif_sms' => $this->input->post('alternatif_sms',TRUE),
		'alternatif_sp' => $this->input->post('alternatif_sp',TRUE),
		'nisn' => $this->input->post('nisn',TRUE),
		'survei' => $this->input->post('survei',TRUE),
		'kd' => $this->input->post('kd',TRUE),
		'pas2' => $this->input->post('pas2',TRUE),
		'paket' => $this->input->post('paket',TRUE),
	    );

            $this->Permohonan_daftar_mhs_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('permohonan_daftar_mhs'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Permohonan_daftar_mhs_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('permohonan_daftar_mhs/update_action'),
		'id_permohonan_daftar_mhs' => set_value('id_permohonan_daftar_mhs', $row->id_permohonan_daftar_mhs),
		'id_cust' => set_value('id_cust', $row->id_cust),
		'nama_lengkap' => set_value('nama_lengkap', $row->nama_lengkap),
		'email' => set_value('email', $row->email),
		'password' => set_value('password', $row->password),
		'id_sp' => set_value('id_sp', $row->id_sp),
		'id_sms' => set_value('id_sms', $row->id_sms),
		'id_jns_daftar' => set_value('id_jns_daftar', $row->id_jns_daftar),
		'foto_images' => set_value('foto_images', $row->foto_images),
		'tempat_lahir' => set_value('tempat_lahir', $row->tempat_lahir),
		'tanggal_lahir' => set_value('tanggal_lahir', $row->tanggal_lahir),
		'jenis_kelamin' => set_value('jenis_kelamin', $row->jenis_kelamin),
		'alamat_rumah' => set_value('alamat_rumah', $row->alamat_rumah),
		'no_hp' => set_value('no_hp', $row->no_hp),
		'no_hp_ortu' => set_value('no_hp_ortu', $row->no_hp_ortu),
		'asal_sekolah' => set_value('asal_sekolah', $row->asal_sekolah),
		'tahun_lulus' => set_value('tahun_lulus', $row->tahun_lulus),
		'jurusan_sma' => set_value('jurusan_sma', $row->jurusan_sma),
		'tinggi_badan' => set_value('tinggi_badan', $row->tinggi_badan),
		'berat_badan' => set_value('berat_badan', $row->berat_badan),
		'agama' => set_value('agama', $row->agama),
		'tahun_masuk' => set_value('tahun_masuk', $row->tahun_masuk),
		'gelombang' => set_value('gelombang', $row->gelombang),
		'status_complete' => set_value('status_complete', $row->status_complete),
		'bukti_transfer' => set_value('bukti_transfer', $row->bukti_transfer),
		'bukti_transfer_dari' => set_value('bukti_transfer_dari', $row->bukti_transfer_dari),
		'bukti_transfer2' => set_value('bukti_transfer2', $row->bukti_transfer2),
		'bukti_transfer2_dari' => set_value('bukti_transfer2_dari', $row->bukti_transfer2_dari),
		'ip_address' => set_value('ip_address', $row->ip_address),
		'date_added' => set_value('date_added', $row->date_added),
		'date_modified' => set_value('date_modified', $row->date_modified),
		'pendaftaran_untuk_tahun_ajaran' => set_value('pendaftaran_untuk_tahun_ajaran', $row->pendaftaran_untuk_tahun_ajaran),
		'deleted' => set_value('deleted', $row->deleted),
		'nm_ibu_kandung' => set_value('nm_ibu_kandung', $row->nm_ibu_kandung),
		'nik' => set_value('nik', $row->nik),
		'id_wil' => set_value('id_wil', $row->id_wil),
		'ds_kel' => set_value('ds_kel', $row->ds_kel),
		'kewarganegaraan' => set_value('kewarganegaraan', $row->kewarganegaraan),
		'kab' => set_value('kab', $row->kab),
		'kec' => set_value('kec', $row->kec),
		'alternatif_sms' => set_value('alternatif_sms', $row->alternatif_sms),
		'alternatif_sp' => set_value('alternatif_sp', $row->alternatif_sp),
		'nisn' => set_value('nisn', $row->nisn),
		'survei' => set_value('survei', $row->survei),
		'kd' => set_value('kd', $row->kd),
		'pas2' => set_value('pas2', $row->pas2),
		'paket' => set_value('paket', $row->paket),
	    );
            $this->load->view('permohonan_daftar_mhs/permohonan_daftar_mhs_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('permohonan_daftar_mhs'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_permohonan_daftar_mhs', TRUE));
        } else {
            $data = array(
		'id_cust' => $this->input->post('id_cust',TRUE),
		'nama_lengkap' => $this->input->post('nama_lengkap',TRUE),
		'email' => $this->input->post('email',TRUE),
		'password' => $this->input->post('password',TRUE),
		'id_sp' => $this->input->post('id_sp',TRUE),
		'id_sms' => $this->input->post('id_sms',TRUE),
		'id_jns_daftar' => $this->input->post('id_jns_daftar',TRUE),
		'foto_images' => $this->input->post('foto_images',TRUE),
		'tempat_lahir' => $this->input->post('tempat_lahir',TRUE),
		'tanggal_lahir' => $this->input->post('tanggal_lahir',TRUE),
		'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
		'alamat_rumah' => $this->input->post('alamat_rumah',TRUE),
		'no_hp' => $this->input->post('no_hp',TRUE),
		'no_hp_ortu' => $this->input->post('no_hp_ortu',TRUE),
		'asal_sekolah' => $this->input->post('asal_sekolah',TRUE),
		'tahun_lulus' => $this->input->post('tahun_lulus',TRUE),
		'jurusan_sma' => $this->input->post('jurusan_sma',TRUE),
		'tinggi_badan' => $this->input->post('tinggi_badan',TRUE),
		'berat_badan' => $this->input->post('berat_badan',TRUE),
		'agama' => $this->input->post('agama',TRUE),
		'tahun_masuk' => $this->input->post('tahun_masuk',TRUE),
		'gelombang' => $this->input->post('gelombang',TRUE),
		'status_complete' => $this->input->post('status_complete',TRUE),
		'bukti_transfer' => $this->input->post('bukti_transfer',TRUE),
		'bukti_transfer_dari' => $this->input->post('bukti_transfer_dari',TRUE),
		'bukti_transfer2' => $this->input->post('bukti_transfer2',TRUE),
		'bukti_transfer2_dari' => $this->input->post('bukti_transfer2_dari',TRUE),
		'ip_address' => $this->input->post('ip_address',TRUE),
		'date_added' => $this->input->post('date_added',TRUE),
		'date_modified' => $this->input->post('date_modified',TRUE),
		'pendaftaran_untuk_tahun_ajaran' => $this->input->post('pendaftaran_untuk_tahun_ajaran',TRUE),
		'deleted' => $this->input->post('deleted',TRUE),
		'nm_ibu_kandung' => $this->input->post('nm_ibu_kandung',TRUE),
		'nik' => $this->input->post('nik',TRUE),
		'id_wil' => $this->input->post('id_wil',TRUE),
		'ds_kel' => $this->input->post('ds_kel',TRUE),
		'kewarganegaraan' => $this->input->post('kewarganegaraan',TRUE),
		'kab' => $this->input->post('kab',TRUE),
		'kec' => $this->input->post('kec',TRUE),
		'alternatif_sms' => $this->input->post('alternatif_sms',TRUE),
		'alternatif_sp' => $this->input->post('alternatif_sp',TRUE),
		'nisn' => $this->input->post('nisn',TRUE),
		'survei' => $this->input->post('survei',TRUE),
		'kd' => $this->input->post('kd',TRUE),
		'pas2' => $this->input->post('pas2',TRUE),
		'paket' => $this->input->post('paket',TRUE),
	    );

            $this->Permohonan_daftar_mhs_model->update($this->input->post('id_permohonan_daftar_mhs', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('permohonan_daftar_mhs'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Permohonan_daftar_mhs_model->get_by_id($id);

        if ($row) {
            $this->Permohonan_daftar_mhs_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('permohonan_daftar_mhs'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('permohonan_daftar_mhs'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_cust', 'id cust', 'trim|required');
	$this->form_validation->set_rules('nama_lengkap', 'nama lengkap', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('password', 'password', 'trim|required');
	$this->form_validation->set_rules('id_sp', 'id sp', 'trim|required');
	$this->form_validation->set_rules('id_sms', 'id sms', 'trim|required');
	$this->form_validation->set_rules('id_jns_daftar', 'id jns daftar', 'trim|required');
	$this->form_validation->set_rules('foto_images', 'foto images', 'trim|required');
	$this->form_validation->set_rules('tempat_lahir', 'tempat lahir', 'trim|required');
	$this->form_validation->set_rules('tanggal_lahir', 'tanggal lahir', 'trim|required');
	$this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'trim|required');
	$this->form_validation->set_rules('alamat_rumah', 'alamat rumah', 'trim|required');
	$this->form_validation->set_rules('no_hp', 'no hp', 'trim|required');
	$this->form_validation->set_rules('no_hp_ortu', 'no hp ortu', 'trim|required');
	$this->form_validation->set_rules('asal_sekolah', 'asal sekolah', 'trim|required');
	$this->form_validation->set_rules('tahun_lulus', 'tahun lulus', 'trim|required');
	$this->form_validation->set_rules('jurusan_sma', 'jurusan sma', 'trim|required');
	$this->form_validation->set_rules('tinggi_badan', 'tinggi badan', 'trim|required');
	$this->form_validation->set_rules('berat_badan', 'berat badan', 'trim|required');
	$this->form_validation->set_rules('agama', 'agama', 'trim|required');
	$this->form_validation->set_rules('tahun_masuk', 'tahun masuk', 'trim|required');
	$this->form_validation->set_rules('gelombang', 'gelombang', 'trim|required');
	$this->form_validation->set_rules('status_complete', 'status complete', 'trim|required');
	$this->form_validation->set_rules('bukti_transfer', 'bukti transfer', 'trim|required');
	$this->form_validation->set_rules('bukti_transfer_dari', 'bukti transfer dari', 'trim|required');
	$this->form_validation->set_rules('bukti_transfer2', 'bukti transfer2', 'trim|required');
	$this->form_validation->set_rules('bukti_transfer2_dari', 'bukti transfer2 dari', 'trim|required');
	$this->form_validation->set_rules('ip_address', 'ip address', 'trim|required');
	$this->form_validation->set_rules('date_added', 'date added', 'trim|required');
	$this->form_validation->set_rules('date_modified', 'date modified', 'trim|required');
	$this->form_validation->set_rules('pendaftaran_untuk_tahun_ajaran', 'pendaftaran untuk tahun ajaran', 'trim|required');
	$this->form_validation->set_rules('deleted', 'deleted', 'trim|required');
	$this->form_validation->set_rules('nm_ibu_kandung', 'nm ibu kandung', 'trim|required');
	$this->form_validation->set_rules('nik', 'nik', 'trim|required');
	$this->form_validation->set_rules('id_wil', 'id wil', 'trim|required');
	$this->form_validation->set_rules('ds_kel', 'ds kel', 'trim|required');
	$this->form_validation->set_rules('kewarganegaraan', 'kewarganegaraan', 'trim|required');
	$this->form_validation->set_rules('kab', 'kab', 'trim|required');
	$this->form_validation->set_rules('kec', 'kec', 'trim|required');
	$this->form_validation->set_rules('alternatif_sms', 'alternatif sms', 'trim|required');
	$this->form_validation->set_rules('alternatif_sp', 'alternatif sp', 'trim|required');
	$this->form_validation->set_rules('nisn', 'nisn', 'trim|required');
	$this->form_validation->set_rules('survei', 'survei', 'trim|required');
	$this->form_validation->set_rules('kd', 'kd', 'trim|required');
	$this->form_validation->set_rules('pas2', 'pas2', 'trim|required');
	$this->form_validation->set_rules('paket', 'paket', 'trim|required');

	$this->form_validation->set_rules('id_permohonan_daftar_mhs', 'id_permohonan_daftar_mhs', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "permohonan_daftar_mhs.xls";
        $judul = "permohonan_daftar_mhs";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Id Cust");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Lengkap");
	xlsWriteLabel($tablehead, $kolomhead++, "Email");
	xlsWriteLabel($tablehead, $kolomhead++, "Password");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Sp");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Sms");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Jns Daftar");
	xlsWriteLabel($tablehead, $kolomhead++, "Foto Images");
	xlsWriteLabel($tablehead, $kolomhead++, "Tempat Lahir");
	xlsWriteLabel($tablehead, $kolomhead++, "Tanggal Lahir");
	xlsWriteLabel($tablehead, $kolomhead++, "Jenis Kelamin");
	xlsWriteLabel($tablehead, $kolomhead++, "Alamat Rumah");
	xlsWriteLabel($tablehead, $kolomhead++, "No Hp");
	xlsWriteLabel($tablehead, $kolomhead++, "No Hp Ortu");
	xlsWriteLabel($tablehead, $kolomhead++, "Asal Sekolah");
	xlsWriteLabel($tablehead, $kolomhead++, "Tahun Lulus");
	xlsWriteLabel($tablehead, $kolomhead++, "Jurusan Sma");
	xlsWriteLabel($tablehead, $kolomhead++, "Tinggi Badan");
	xlsWriteLabel($tablehead, $kolomhead++, "Berat Badan");
	xlsWriteLabel($tablehead, $kolomhead++, "Agama");
	xlsWriteLabel($tablehead, $kolomhead++, "Tahun Masuk");
	xlsWriteLabel($tablehead, $kolomhead++, "Gelombang");
	xlsWriteLabel($tablehead, $kolomhead++, "Status Complete");
	xlsWriteLabel($tablehead, $kolomhead++, "Bukti Transfer");
	xlsWriteLabel($tablehead, $kolomhead++, "Bukti Transfer Dari");
	xlsWriteLabel($tablehead, $kolomhead++, "Bukti Transfer2");
	xlsWriteLabel($tablehead, $kolomhead++, "Bukti Transfer2 Dari");
	xlsWriteLabel($tablehead, $kolomhead++, "Ip Address");
	xlsWriteLabel($tablehead, $kolomhead++, "Date Added");
	xlsWriteLabel($tablehead, $kolomhead++, "Date Modified");
	xlsWriteLabel($tablehead, $kolomhead++, "Pendaftaran Untuk Tahun Ajaran");
	xlsWriteLabel($tablehead, $kolomhead++, "Deleted");
	xlsWriteLabel($tablehead, $kolomhead++, "Nm Ibu Kandung");
	xlsWriteLabel($tablehead, $kolomhead++, "Nik");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Wil");
	xlsWriteLabel($tablehead, $kolomhead++, "Ds Kel");
	xlsWriteLabel($tablehead, $kolomhead++, "Kewarganegaraan");
	xlsWriteLabel($tablehead, $kolomhead++, "Kab");
	xlsWriteLabel($tablehead, $kolomhead++, "Kec");
	xlsWriteLabel($tablehead, $kolomhead++, "Alternatif Sms");
	xlsWriteLabel($tablehead, $kolomhead++, "Alternatif Sp");
	xlsWriteLabel($tablehead, $kolomhead++, "Nisn");
	xlsWriteLabel($tablehead, $kolomhead++, "Survei");
	xlsWriteLabel($tablehead, $kolomhead++, "Kd");
	xlsWriteLabel($tablehead, $kolomhead++, "Pas2");
	xlsWriteLabel($tablehead, $kolomhead++, "Paket");

	foreach ($this->Permohonan_daftar_mhs_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_cust);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_lengkap);
	    xlsWriteLabel($tablebody, $kolombody++, $data->email);
	    xlsWriteLabel($tablebody, $kolombody++, $data->password);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_sp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_sms);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_jns_daftar);
	    xlsWriteLabel($tablebody, $kolombody++, $data->foto_images);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tempat_lahir);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tanggal_lahir);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jenis_kelamin);
	    xlsWriteLabel($tablebody, $kolombody++, $data->alamat_rumah);
	    xlsWriteLabel($tablebody, $kolombody++, $data->no_hp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->no_hp_ortu);
	    xlsWriteLabel($tablebody, $kolombody++, $data->asal_sekolah);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tahun_lulus);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jurusan_sma);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tinggi_badan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->berat_badan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->agama);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tahun_masuk);
	    xlsWriteNumber($tablebody, $kolombody++, $data->gelombang);
	    xlsWriteNumber($tablebody, $kolombody++, $data->status_complete);
	    xlsWriteLabel($tablebody, $kolombody++, $data->bukti_transfer);
	    xlsWriteLabel($tablebody, $kolombody++, $data->bukti_transfer_dari);
	    xlsWriteLabel($tablebody, $kolombody++, $data->bukti_transfer2);
	    xlsWriteLabel($tablebody, $kolombody++, $data->bukti_transfer2_dari);
	    xlsWriteLabel($tablebody, $kolombody++, $data->ip_address);
	    xlsWriteLabel($tablebody, $kolombody++, $data->date_added);
	    xlsWriteLabel($tablebody, $kolombody++, $data->date_modified);
	    xlsWriteLabel($tablebody, $kolombody++, $data->pendaftaran_untuk_tahun_ajaran);
	    xlsWriteNumber($tablebody, $kolombody++, $data->deleted);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nm_ibu_kandung);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nik);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_wil);
	    xlsWriteLabel($tablebody, $kolombody++, $data->ds_kel);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kewarganegaraan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kab);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kec);
	    xlsWriteLabel($tablebody, $kolombody++, $data->alternatif_sms);
	    xlsWriteLabel($tablebody, $kolombody++, $data->alternatif_sp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nisn);
	    xlsWriteLabel($tablebody, $kolombody++, $data->survei);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kd);
	    xlsWriteLabel($tablebody, $kolombody++, $data->pas2);
	    xlsWriteLabel($tablebody, $kolombody++, $data->paket);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=permohonan_daftar_mhs.doc");

        $data = array(
            'permohonan_daftar_mhs_data' => $this->Permohonan_daftar_mhs_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('permohonan_daftar_mhs/permohonan_daftar_mhs_doc',$data);
    }

}

/* End of file Permohonan_daftar_mhs.php */
/* Location: ./application/controllers/Permohonan_daftar_mhs.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-05-16 13:27:37 */
/* http://harviacode.com */