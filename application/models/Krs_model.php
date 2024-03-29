<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Krs_model extends CI_Model
{

    public $table = 'krs';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('id,nim,nama,kd_mk,nm_mk,nm_kls,smt,prodi,se,ket,data_add,deleted');
        $this->datatables->from('krs');
        //add this line for join
        //$this->datatables->join('table2', 'krs.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('krs/read/$1'),'Read')." | ".anchor(site_url('krs/update/$1'),'Update')." | ".anchor(site_url('krs/delete/$1'),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'), 'id');
        return $this->datatables->generate();
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
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id', $q);
	$this->db->or_like('nim', $q);
	$this->db->or_like('nama', $q);
	$this->db->or_like('kd_mk', $q);
	$this->db->or_like('nm_mk', $q);
	$this->db->or_like('nm_kls', $q);
	$this->db->or_like('smt', $q);
	$this->db->or_like('prodi', $q);
	$this->db->or_like('se', $q);
	$this->db->or_like('ket', $q);
	$this->db->or_like('data_add', $q);
	$this->db->or_like('deleted', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
	$this->db->or_like('nim', $q);
	$this->db->or_like('nama', $q);
	$this->db->or_like('kd_mk', $q);
	$this->db->or_like('nm_mk', $q);
	$this->db->or_like('nm_kls', $q);
	$this->db->or_like('smt', $q);
	$this->db->or_like('prodi', $q);
	$this->db->or_like('se', $q);
	$this->db->or_like('ket', $q);
	$this->db->or_like('data_add', $q);
	$this->db->or_like('deleted', $q);
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

/* End of file Krs_model.php */
/* Location: ./application/models/Krs_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-10-02 10:36:20 */
/* http://harviacode.com */