<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jenis_permintaan_model extends CI_Model
{

    public $table = 'jenis_permintaan';
    public $id = 'id_permintaan';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('id_permintaan,jenis_permintaan,id_unit');
        $this->datatables->from('jenis_permintaan');
        //add this line for join
        //$this->datatables->join('table2', 'jenis_permintaan.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('jenis_permintaan/read/$1'),'Read')." | ".anchor(site_url('jenis_permintaan/update/$1'),'Update')." | ".anchor(site_url('jenis_permintaan/delete/$1'),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'), 'id_permintaan');
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
        $this->db->like('id_permintaan', $q);
	$this->db->or_like('jenis_permintaan', $q);
	$this->db->or_like('id_unit', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_permintaan', $q);
	$this->db->or_like('jenis_permintaan', $q);
	$this->db->or_like('id_unit', $q);
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

/* End of file Jenis_permintaan_model.php */
/* Location: ./application/models/Jenis_permintaan_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-07-10 08:14:27 */
/* http://harviacode.com */