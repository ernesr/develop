<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Biaya_mahasiswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Biaya_mahasiswa_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
if($this->session->userdata('logged_in') !== TRUE){
      redirect('../spmb/auth');
    }
}


    public function index()
    {
         $data["active"]="setbiaya";
        $data["judul"]="Setting Biaya";
        $this->load->view('biaya_mahasiswa/biaya_mahasiswa_list',$data);
    } 
    function get_sms() {
        $query = $this->db->get('pddikti_tr_sms');
        return $query->result();
    }
    public function json() {
        header('Content-Type: application/json');
        echo $this->Biaya_mahasiswa_model->json();
    }

    public function read($id) 
    {
        $row = $this->Biaya_mahasiswa_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_biaya' => $row->id_biaya,
		'jenis_biaya' => $row->jenis_biaya,
		'acc' => $row->acc,
		'nama_biaya' => $row->nama_biaya,
		'jumlah_biaya' => $row->jumlah_biaya,
		'set_biaya' => $row->set_biaya,
		'status_biaya' => $row->status_biaya,
		'id_user_set' => $row->id_user_set,
		'id_user_status' => $row->id_user_status,
		'deleted' => $row->deleted,
		'id_smt' => $row->id_smt,
		'id_sms' => $row->id_sms,
	    );
            $this->load->view('biaya_mahasiswa/biaya_mahasiswa_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('biaya_mahasiswa'));
        }
    }

    public function create() 
    {
        $data = array(
             'active'=>'setbiaya',
            'judul'=>'Setting Biaya',
            'button' => 'Create',
            'action' => site_url('biaya_mahasiswa/create_action'),
           'sms'=>$this->Biaya_mahasiswa_model->get_sms(),
            'jd'=>$this->Biaya_mahasiswa_model->get_jd(),
	    'id_biaya' => set_value('id_biaya'),
	    'jenis_biaya' => set_value('jenis_biaya'),
	    'acc' => set_value('acc'),
	    'nama_biaya' => set_value('nama_biaya'),
	    'jumlah_biaya' => set_value('jumlah_biaya'),
	    'set_biaya' => set_value('set_biaya'),
	    'status_biaya' => set_value('status_biaya'),
	    'id_user_set' => set_value('id_user_set'),
	    'id_user_status' => set_value('id_user_status'),
	    'deleted' => set_value('deleted'),
	    'id_smt' => set_value('id_smt'),
	    'id_sms' => set_value('id_sms'),
	);
        $this->load->view('biaya_mahasiswa/biaya_mahasiswa_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'jenis_biaya' => $this->input->post('jenis_biaya',TRUE),
		'acc' => $this->input->post('acc',TRUE),
		'nama_biaya' => $this->input->post('nama_biaya',TRUE),
		'jumlah_biaya' => $this->input->post('jumlah_biaya',TRUE),
		'set_biaya' => $this->input->post('set_biaya',TRUE),
		'status_biaya' => $this->input->post('status_biaya',TRUE),
		'id_user_set' => $this->input->post('id_user_set',TRUE),
		'id_user_status' => $this->input->post('id_user_status',TRUE),
			'id_smt' => $this->input->post('id_smt',TRUE),
		'id_sms' => $this->input->post('id_sms',TRUE),
	    );

            $this->Biaya_mahasiswa_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('biaya_mahasiswa'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Biaya_mahasiswa_model->get_by_id($id);

        if ($row) {
            $data = array(
                       'active'=>'setbiaya',
            'judul'=>'Setting Biaya',
                'button' => 'Update',
                'action' => site_url('biaya_mahasiswa/update_action'),
             'sms'=>$this->Biaya_mahasiswa_model->get_sms(),
            'jd'=>$this->Biaya_mahasiswa_model->get_jd(),

		'id_biaya' => set_value('id_biaya', $row->id_biaya),
		'jenis_biaya' => set_value('jenis_biaya', $row->jenis_biaya),
		'acc' => set_value('acc', $row->acc),
		'nama_biaya' => set_value('nama_biaya', $row->nama_biaya),
        'nm_lemb' => set_value('nm_lemb', $row->nm_lemb),
        'nm_jns_daftar' => set_value('nm_jns_daftar', $row->nm_jns_daftar),

		'jumlah_biaya' => set_value('jumlah_biaya', $row->jumlah_biaya),
		'set_biaya' => set_value('set_biaya', $row->set_biaya),
		'status_biaya' => set_value('status_biaya', $row->status_biaya),
		'id_user_set' => set_value('id_user_set', $row->id_user_set),
		'id_user_status' => set_value('id_user_status', $row->id_user_status),

		'id_smt' => set_value('id_smt', $row->id_smt),
		'id_sms' => set_value('id_sms', $row->id_sms),
	    );
            $this->load->view('biaya_mahasiswa/biaya_mahasiswa_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('biaya_mahasiswa'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_biaya', TRUE));
        } else {
            $data = array(
		'jenis_biaya' => $this->input->post('jenis_biaya',TRUE),
		'acc' => $this->input->post('acc',TRUE),
		'nama_biaya' => $this->input->post('nama_biaya',TRUE),
		'jumlah_biaya' => preg_replace("/[^0-9]/", "",$this->input->post('jumlah_biaya',TRUE)),
		'set_biaya' => $this->input->post('set_biaya',TRUE),
		'status_biaya' => $this->input->post('status_biaya',TRUE),
		'id_user_set' => $this->input->post('id_user_set',TRUE),
		'id_user_status' => $this->input->post('id_user_status',TRUE),
		
		'id_smt' => $this->input->post('id_smt',TRUE),
		'id_sms' => $this->input->post('id_sms',TRUE),
	    );

            $this->Biaya_mahasiswa_model->update($this->input->post('id_biaya', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('biaya_mahasiswa'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Biaya_mahasiswa_model->get_by_id($id);

        if ($row) {
            $this->Biaya_mahasiswa_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('biaya_mahasiswa'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('biaya_mahasiswa'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('jenis_biaya', 'jenis biaya', 'trim|required');
	$this->form_validation->set_rules('acc', 'acc', 'trim|required');
	$this->form_validation->set_rules('nama_biaya', 'nama biaya', 'trim|required');
	$this->form_validation->set_rules('jumlah_biaya', 'jumlah biaya', 'trim|required');
	$this->form_validation->set_rules('set_biaya', 'set biaya', 'trim|required');
	$this->form_validation->set_rules('status_biaya', 'status biaya', 'trim|required');
	$this->form_validation->set_rules('id_user_set', 'id user set', 'trim|required');
	$this->form_validation->set_rules('id_user_status', 'id user status', 'trim|required');

	$this->form_validation->set_rules('id_smt', 'id smt', 'trim|required');
	$this->form_validation->set_rules('id_sms', 'id sms', 'trim|required');

	$this->form_validation->set_rules('id_biaya', 'id_biaya', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "biaya_mahasiswa.xls";
        $judul = "biaya_mahasiswa";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Jenis Biaya");
	xlsWriteLabel($tablehead, $kolomhead++, "Acc");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Biaya");
	xlsWriteLabel($tablehead, $kolomhead++, "Jumlah Biaya");
	xlsWriteLabel($tablehead, $kolomhead++, "Set Biaya");
	xlsWriteLabel($tablehead, $kolomhead++, "Status Biaya");
	xlsWriteLabel($tablehead, $kolomhead++, "Id User Set");
	xlsWriteLabel($tablehead, $kolomhead++, "Id User Status");
	xlsWriteLabel($tablehead, $kolomhead++, "Deleted");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Smt");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Sms");

	foreach ($this->Biaya_mahasiswa_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jenis_biaya);
	    xlsWriteLabel($tablebody, $kolombody++, $data->acc);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_biaya);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jumlah_biaya);
	    xlsWriteLabel($tablebody, $kolombody++, $data->set_biaya);
	    xlsWriteLabel($tablebody, $kolombody++, $data->status_biaya);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_user_set);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_user_status);
	    xlsWriteLabel($tablebody, $kolombody++, $data->deleted);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_smt);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_sms);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=biaya_mahasiswa.doc");

        $data = array(
            'biaya_mahasiswa_data' => $this->Biaya_mahasiswa_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('biaya_mahasiswa/biaya_mahasiswa_doc',$data);
    }

}

/* End of file Biaya_mahasiswa.php */
/* Location: ./application/controllers/Biaya_mahasiswa.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-03-31 08:19:53 */
/* http://harviacode.com */