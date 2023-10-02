<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Nilai_akm extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Nilai_akm_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('nilai_akm/nilai_akm_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Nilai_akm_model->json();
    }

    public function read($id) 
    {
        $row = $this->Nilai_akm_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'semester' => $row->semester,
		'nim' => $row->nim,
		'nama' => $row->nama,
		'ips' => $row->ips,
		'ipk' => $row->ipk,
		'sks_smt' => $row->sks_smt,
		'sks_total' => $row->sks_total,
		'kd_jur' => $row->kd_jur,
		'biaya_smt' => $row->biaya_smt,
		'status_kuliah' => $row->status_kuliah,
		'se' => $row->se,
		'valid' => $row->valid,
		'ket_valid_ips' => $row->ket_valid_ips,
		'ket_sks_sem' => $row->ket_sks_sem,
		'ket_krs_ada' => $row->ket_krs_ada,
		'ket_valid_ipk' => $row->ket_valid_ipk,
		'ket_valid_ips_ipk' => $row->ket_valid_ips_ipk,
		'keterangan' => $row->keterangan,
		'id_session' => $row->id_session,
		'data_add' => $row->data_add,
		'deleted' => $row->deleted,
		'id_pembiayaan' => $row->id_pembiayaan,
	    );
            $this->load->view('nilai_akm/nilai_akm_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('nilai_akm'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('nilai_akm/create_action'),
	    'id' => set_value('id'),
	    'semester' => set_value('semester'),
	    'nim' => set_value('nim'),
	    'nama' => set_value('nama'),
	    'ips' => set_value('ips'),
	    'ipk' => set_value('ipk'),
	    'sks_smt' => set_value('sks_smt'),
	    'sks_total' => set_value('sks_total'),
	    'kd_jur' => set_value('kd_jur'),
	    'biaya_smt' => set_value('biaya_smt'),
	    'status_kuliah' => set_value('status_kuliah'),
	    'se' => set_value('se'),
	    'valid' => set_value('valid'),
	    'ket_valid_ips' => set_value('ket_valid_ips'),
	    'ket_sks_sem' => set_value('ket_sks_sem'),
	    'ket_krs_ada' => set_value('ket_krs_ada'),
	    'ket_valid_ipk' => set_value('ket_valid_ipk'),
	    'ket_valid_ips_ipk' => set_value('ket_valid_ips_ipk'),
	    'keterangan' => set_value('keterangan'),
	    'id_session' => set_value('id_session'),
	    'data_add' => set_value('data_add'),
	    'deleted' => set_value('deleted'),
	    'id_pembiayaan' => set_value('id_pembiayaan'),
	);
        $this->load->view('nilai_akm/nilai_akm_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'semester' => $this->input->post('semester',TRUE),
		'nim' => $this->input->post('nim',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'ips' => $this->input->post('ips',TRUE),
		'ipk' => $this->input->post('ipk',TRUE),
		'sks_smt' => $this->input->post('sks_smt',TRUE),
		'sks_total' => $this->input->post('sks_total',TRUE),
		'kd_jur' => $this->input->post('kd_jur',TRUE),
		'biaya_smt' => $this->input->post('biaya_smt',TRUE),
		'status_kuliah' => $this->input->post('status_kuliah',TRUE),
		'se' => $this->input->post('se',TRUE),
		'valid' => $this->input->post('valid',TRUE),
		'ket_valid_ips' => $this->input->post('ket_valid_ips',TRUE),
		'ket_sks_sem' => $this->input->post('ket_sks_sem',TRUE),
		'ket_krs_ada' => $this->input->post('ket_krs_ada',TRUE),
		'ket_valid_ipk' => $this->input->post('ket_valid_ipk',TRUE),
		'ket_valid_ips_ipk' => $this->input->post('ket_valid_ips_ipk',TRUE),
		'keterangan' => $this->input->post('keterangan',TRUE),
		'id_session' => $this->input->post('id_session',TRUE),
		'data_add' => $this->input->post('data_add',TRUE),
		'deleted' => $this->input->post('deleted',TRUE),
		'id_pembiayaan' => $this->input->post('id_pembiayaan',TRUE),
	    );

            $this->Nilai_akm_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('nilai_akm'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Nilai_akm_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('nilai_akm/update_action'),
		'id' => set_value('id', $row->id),
		'semester' => set_value('semester', $row->semester),
		'nim' => set_value('nim', $row->nim),
		'nama' => set_value('nama', $row->nama),
		'ips' => set_value('ips', $row->ips),
		'ipk' => set_value('ipk', $row->ipk),
		'sks_smt' => set_value('sks_smt', $row->sks_smt),
		'sks_total' => set_value('sks_total', $row->sks_total),
		'kd_jur' => set_value('kd_jur', $row->kd_jur),
		'biaya_smt' => set_value('biaya_smt', $row->biaya_smt),
		'status_kuliah' => set_value('status_kuliah', $row->status_kuliah),
		'se' => set_value('se', $row->se),
		'valid' => set_value('valid', $row->valid),
		'ket_valid_ips' => set_value('ket_valid_ips', $row->ket_valid_ips),
		'ket_sks_sem' => set_value('ket_sks_sem', $row->ket_sks_sem),
		'ket_krs_ada' => set_value('ket_krs_ada', $row->ket_krs_ada),
		'ket_valid_ipk' => set_value('ket_valid_ipk', $row->ket_valid_ipk),
		'ket_valid_ips_ipk' => set_value('ket_valid_ips_ipk', $row->ket_valid_ips_ipk),
		'keterangan' => set_value('keterangan', $row->keterangan),
		'id_session' => set_value('id_session', $row->id_session),
		'data_add' => set_value('data_add', $row->data_add),
		'deleted' => set_value('deleted', $row->deleted),
		'id_pembiayaan' => set_value('id_pembiayaan', $row->id_pembiayaan),
	    );
            $this->load->view('nilai_akm/nilai_akm_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('nilai_akm'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'semester' => $this->input->post('semester',TRUE),
		'nim' => $this->input->post('nim',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'ips' => $this->input->post('ips',TRUE),
		'ipk' => $this->input->post('ipk',TRUE),
		'sks_smt' => $this->input->post('sks_smt',TRUE),
		'sks_total' => $this->input->post('sks_total',TRUE),
		'kd_jur' => $this->input->post('kd_jur',TRUE),
		'biaya_smt' => $this->input->post('biaya_smt',TRUE),
		'status_kuliah' => $this->input->post('status_kuliah',TRUE),
		'se' => $this->input->post('se',TRUE),
		'valid' => $this->input->post('valid',TRUE),
		'ket_valid_ips' => $this->input->post('ket_valid_ips',TRUE),
		'ket_sks_sem' => $this->input->post('ket_sks_sem',TRUE),
		'ket_krs_ada' => $this->input->post('ket_krs_ada',TRUE),
		'ket_valid_ipk' => $this->input->post('ket_valid_ipk',TRUE),
		'ket_valid_ips_ipk' => $this->input->post('ket_valid_ips_ipk',TRUE),
		'keterangan' => $this->input->post('keterangan',TRUE),
		'id_session' => $this->input->post('id_session',TRUE),
		'data_add' => $this->input->post('data_add',TRUE),
		'deleted' => $this->input->post('deleted',TRUE),
		'id_pembiayaan' => $this->input->post('id_pembiayaan',TRUE),
	    );

            $this->Nilai_akm_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('nilai_akm'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Nilai_akm_model->get_by_id($id);

        if ($row) {
            $this->Nilai_akm_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('nilai_akm'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('nilai_akm'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('semester', 'semester', 'trim|required');
	$this->form_validation->set_rules('nim', 'nim', 'trim|required');
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('ips', 'ips', 'trim|required|numeric');
	$this->form_validation->set_rules('ipk', 'ipk', 'trim|required|numeric');
	$this->form_validation->set_rules('sks_smt', 'sks smt', 'trim|required');
	$this->form_validation->set_rules('sks_total', 'sks total', 'trim|required');
	$this->form_validation->set_rules('kd_jur', 'kd jur', 'trim|required');
	$this->form_validation->set_rules('biaya_smt', 'biaya smt', 'trim|required');
	$this->form_validation->set_rules('status_kuliah', 'status kuliah', 'trim|required');
	$this->form_validation->set_rules('se', 'se', 'trim|required');
	$this->form_validation->set_rules('valid', 'valid', 'trim|required');
	$this->form_validation->set_rules('ket_valid_ips', 'ket valid ips', 'trim|required');
	$this->form_validation->set_rules('ket_sks_sem', 'ket sks sem', 'trim|required');
	$this->form_validation->set_rules('ket_krs_ada', 'ket krs ada', 'trim|required');
	$this->form_validation->set_rules('ket_valid_ipk', 'ket valid ipk', 'trim|required');
	$this->form_validation->set_rules('ket_valid_ips_ipk', 'ket valid ips ipk', 'trim|required');
	$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
	$this->form_validation->set_rules('id_session', 'id session', 'trim|required');
	$this->form_validation->set_rules('data_add', 'data add', 'trim|required');
	$this->form_validation->set_rules('deleted', 'deleted', 'trim|required');
	$this->form_validation->set_rules('id_pembiayaan', 'id pembiayaan', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "nilai_akm.xls";
        $judul = "nilai_akm";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Semester");
	xlsWriteLabel($tablehead, $kolomhead++, "Nim");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama");
	xlsWriteLabel($tablehead, $kolomhead++, "Ips");
	xlsWriteLabel($tablehead, $kolomhead++, "Ipk");
	xlsWriteLabel($tablehead, $kolomhead++, "Sks Smt");
	xlsWriteLabel($tablehead, $kolomhead++, "Sks Total");
	xlsWriteLabel($tablehead, $kolomhead++, "Kd Jur");
	xlsWriteLabel($tablehead, $kolomhead++, "Biaya Smt");
	xlsWriteLabel($tablehead, $kolomhead++, "Status Kuliah");
	xlsWriteLabel($tablehead, $kolomhead++, "Se");
	xlsWriteLabel($tablehead, $kolomhead++, "Valid");
	xlsWriteLabel($tablehead, $kolomhead++, "Ket Valid Ips");
	xlsWriteLabel($tablehead, $kolomhead++, "Ket Sks Sem");
	xlsWriteLabel($tablehead, $kolomhead++, "Ket Krs Ada");
	xlsWriteLabel($tablehead, $kolomhead++, "Ket Valid Ipk");
	xlsWriteLabel($tablehead, $kolomhead++, "Ket Valid Ips Ipk");
	xlsWriteLabel($tablehead, $kolomhead++, "Keterangan");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Session");
	xlsWriteLabel($tablehead, $kolomhead++, "Data Add");
	xlsWriteLabel($tablehead, $kolomhead++, "Deleted");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Pembiayaan");

	foreach ($this->Nilai_akm_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->semester);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nim);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama);
	    xlsWriteNumber($tablebody, $kolombody++, $data->ips);
	    xlsWriteNumber($tablebody, $kolombody++, $data->ipk);
	    xlsWriteNumber($tablebody, $kolombody++, $data->sks_smt);
	    xlsWriteNumber($tablebody, $kolombody++, $data->sks_total);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kd_jur);
	    xlsWriteLabel($tablebody, $kolombody++, $data->biaya_smt);
	    xlsWriteLabel($tablebody, $kolombody++, $data->status_kuliah);
	    xlsWriteNumber($tablebody, $kolombody++, $data->se);
	    xlsWriteNumber($tablebody, $kolombody++, $data->valid);
	    xlsWriteLabel($tablebody, $kolombody++, $data->ket_valid_ips);
	    xlsWriteLabel($tablebody, $kolombody++, $data->ket_sks_sem);
	    xlsWriteLabel($tablebody, $kolombody++, $data->ket_krs_ada);
	    xlsWriteLabel($tablebody, $kolombody++, $data->ket_valid_ipk);
	    xlsWriteLabel($tablebody, $kolombody++, $data->ket_valid_ips_ipk);
	    xlsWriteLabel($tablebody, $kolombody++, $data->keterangan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_session);
	    xlsWriteLabel($tablebody, $kolombody++, $data->data_add);
	    xlsWriteLabel($tablebody, $kolombody++, $data->deleted);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_pembiayaan);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=nilai_akm.doc");

        $data = array(
            'nilai_akm_data' => $this->Nilai_akm_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('nilai_akm/nilai_akm_doc',$data);
    }

}

/* End of file Nilai_akm.php */
/* Location: ./application/controllers/Nilai_akm.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-10-02 12:39:46 */
/* http://harviacode.com */