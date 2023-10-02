<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Grupwa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Grupwa_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
if($this->session->userdata('logged_in') !== TRUE){
      redirect('../spmb/auth');
    }
}

    public function index()
    {
        $data['sms'] = $this->Grupwa_model->get_sms();
        $data['active']="grupwa";
        $data['judul']="Setting Grup WhatsApp";
        $this->load->view('grupwa/grupwa_list',$data);
    } 
     
    public function json() {
        header('Content-Type: application/json');
        echo $this->Grupwa_model->json();
    }

    public function read($id) 
    {
        $row = $this->Grupwa_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_group' => $row->id_group,
		'nama_group' => $row->nama_group,
		'id_sms' => $row->id_sms,
		'jenis_mahasiswa' => $row->jenis_mahasiswa,
		'link' => $row->link,
		'tahun_ajaran' => $row->tahun_ajaran,
	    );
            $this->load->view('grupwa/grupwa_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('grupwa'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'sms'=>$this->Grupwa_model->get_sms(),
            'jd'=>$this->Grupwa_model->get_jd(),
            'action' => site_url('grupwa/create_action'),
	    'id_group' => set_value('id_group'),
	    'nama_group' => set_value('nama_group'),
	    'id_sms' => set_value('id_sms'),
	    'jenis_mahasiswa' => set_value('jenis_mahasiswa'),
	    'link' => set_value('link'),
	    'tahun_ajaran' => set_value('tahun_ajaran'),
	);
        $this->load->view('grupwa/grupwa_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_group' => $this->input->post('nama_group',TRUE),
		'id_sms' => $this->input->post('id_sms',TRUE),
		'jenis_mahasiswa' => $this->input->post('jenis_mahasiswa',TRUE),
		'link' => $this->input->post('link',TRUE),
		'tahun_ajaran' => $this->input->post('tahun_ajaran',TRUE),
	    );

            $this->Grupwa_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('grupwa'));
        }
    }

    public function update($id) 
    {
        $row = $this->Grupwa_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
              'active'=>'grupwa',
        'judul'=>'Setting Grup WhatsApp',
                  'sms'=>$this->Grupwa_model->get_sms(),
            'jd'=>$this->Grupwa_model->get_jd(),
                'action' => site_url('grupwa/update_action'),
        'nm_lemb' => set_value('nm_lemb', $row->nm_lemb),
        'nm_jns_daftar' => set_value('nm_jns_daftar', $row->nm_jns_daftar),


		'id_group' => set_value('id_group', $row->id_group),
		'nama_group' => set_value('nama_group', $row->nama_group),
		'id_sms' => set_value('id_sms', $row->id_sms),
		'jenis_mahasiswa' => set_value('jenis_mahasiswa', $row->jenis_mahasiswa),
		'link' => set_value('link', $row->link),
		'tahun_ajaran' => set_value('tahun_ajaran', $row->tahun_ajaran),
	    );
            $this->load->view('grupwa/grupwa_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('grupwa'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_group', TRUE));
        } else {
            $data = array(
		'nama_group' => $this->input->post('nama_group',TRUE),
		'id_sms' => $this->input->post('id_sms',TRUE),
		'jenis_mahasiswa' => $this->input->post('jenis_mahasiswa',TRUE),
		'link' => $this->input->post('link',TRUE),
		'tahun_ajaran' => $this->input->post('tahun_ajaran',TRUE),
	    );

            $this->Grupwa_model->update($this->input->post('id_group', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('grupwa'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Grupwa_model->get_by_id($id);

        if ($row) {
            $this->Grupwa_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('grupwa'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('grupwa'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_group', 'nama group', 'trim|required');
	$this->form_validation->set_rules('id_sms', 'id sms', 'trim|required');
	$this->form_validation->set_rules('jenis_mahasiswa', 'jenis mahasiswa', 'trim|required');
	$this->form_validation->set_rules('link', 'link', 'trim|required');
	$this->form_validation->set_rules('tahun_ajaran', 'tahun ajaran', 'trim|required');

	$this->form_validation->set_rules('id_group', 'id_group', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "grupwa.xls";
        $judul = "grupwa";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Group");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Sms");
	xlsWriteLabel($tablehead, $kolomhead++, "Jenis Mahasiswa");
	xlsWriteLabel($tablehead, $kolomhead++, "Link");
	xlsWriteLabel($tablehead, $kolomhead++, "Tahun Ajaran");

	foreach ($this->Grupwa_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_group);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_sms);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jenis_mahasiswa);
	    xlsWriteLabel($tablebody, $kolombody++, $data->link);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tahun_ajaran);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=grupwa.doc");

        $data = array(
            'grupwa_data' => $this->Grupwa_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('grupwa/grupwa_doc',$data);
    }

}

/* End of file Grupwa.php */
/* Location: ./application/controllers/Grupwa.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-03-31 08:19:53 */
/* http://harviacode.com */