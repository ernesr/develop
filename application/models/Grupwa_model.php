<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Grupwa_model extends CI_Model
{

    public $table = 'grupwa';
    public $id = 'id_group';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('a.id_group,a.nama_group,a.id_sms,a.jenis_mahasiswa,a.link,a.tahun_ajaran,b.nm_lemb,c.nm_jns_daftar');
        $this->datatables->from('grupwa a');
        $this->datatables->join('pddikti_tr_sms b', 'a.id_sms = b.id_sms');
        $this->datatables->join('pddikti_re_jenis_pendaftaran c', 'a.jenis_mahasiswa = c.id_jns_daftar');

        //add this line for join
        //$this->datatables->join('table2', 'grupwa.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('grupwa/update/$1'),'<button type="button" class="btn btn-info">Update</button>')." | ".anchor(site_url('grupwa/delete/$1'),'<button type="button" class="btn btn-danger">Delete</button>','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'), 'id_group');
        return $this->datatables->generate();
    }
function get_sms() {
        $query = $this->db->get('pddikti_tr_sms');
        return $query->result();
    }
    function get_jd() {
        $query = $this->db->get('pddikti_re_jenis_pendaftaran');
        return $query->result();
    }
    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->select('a.nm_lemb,b.nama_group,c.nm_jns_daftar,b.id_group,a.id_sms,b.jenis_mahasiswa,b.link,b.tahun_ajaran');
        $this->db->where($this->id, $id);
        $this->db->join('pddikti_tr_sms a','a.id_sms=b.id_sms');
        $this->db->join('pddikti_re_jenis_pendaftaran c','b.jenis_mahasiswa=c.id_jns_daftar');
        return $this->db->get('grupwa b')->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_group', $q);
	$this->db->or_like('nama_group', $q);
	$this->db->or_like('id_sms', $q);
	$this->db->or_like('jenis_mahasiswa', $q);
	$this->db->or_like('link', $q);
	$this->db->or_like('tahun_ajaran', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_group', $q);
	$this->db->or_like('nama_group', $q);
	$this->db->or_like('id_sms', $q);
	$this->db->or_like('jenis_mahasiswa', $q);
	$this->db->or_like('link', $q);
	$this->db->or_like('tahun_ajaran', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file Grupwa_model.php */
/* Location: ./application/models/Grupwa_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-03-31 08:19:53 */
/* http://harviacode.com */