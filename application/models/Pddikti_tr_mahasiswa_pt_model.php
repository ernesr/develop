<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pddikti_tr_mahasiswa_pt_model extends CI_Model
{

    public $table = 'pddikti_tr_mahasiswa_pt';
    public $id = '';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('id_reg_pd,nipd,id_pd,id_sms,id_sp,tgl_masuk_sp,id_jns_daftar,id_jns_keluar,tgl_keluar,ket,skhun,a_pernah_paud,a_pernah_tk,id_kategori,mulai_smt,sks_diakui,jalur_skripsi,judul_skripsi,bln_awal_bimbingan,bln_akhir_bimbingan,sk_yudisium,tgl_sk_yudisium,ipk,no_seri_ijazah,sert_prof,a_pindah_mhs_asing,id_pt_asal,id_prodi_asal,nm_pt_asal,nm_prodi_asal,id_jalur_masuk,no_peserta_ujian,added_by,date_added,modified_by,date_modified,id_sinkron,deleted,id_cabang');
        $this->datatables->from('pddikti_tr_mahasiswa_pt');
        //add this line for join
        //$this->datatables->join('table2', 'pddikti_tr_mahasiswa_pt.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('pddikti_tr_mahasiswa_pt/read/$1'),'Read')." | ".anchor(site_url('pddikti_tr_mahasiswa_pt/update/$1'),'Update')." | ".anchor(site_url('pddikti_tr_mahasiswa_pt/delete/$1'),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'), '');
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
        $this->db->like('', $q);
	$this->db->or_like('id_reg_pd', $q);
	$this->db->or_like('nipd', $q);
	$this->db->or_like('id_pd', $q);
	$this->db->or_like('id_sms', $q);
	$this->db->or_like('id_sp', $q);
	$this->db->or_like('tgl_masuk_sp', $q);
	$this->db->or_like('id_jns_daftar', $q);
	$this->db->or_like('id_jns_keluar', $q);
	$this->db->or_like('tgl_keluar', $q);
	$this->db->or_like('ket', $q);
	$this->db->or_like('skhun', $q);
	$this->db->or_like('a_pernah_paud', $q);
	$this->db->or_like('a_pernah_tk', $q);
	$this->db->or_like('id_kategori', $q);
	$this->db->or_like('mulai_smt', $q);
	$this->db->or_like('sks_diakui', $q);
	$this->db->or_like('jalur_skripsi', $q);
	$this->db->or_like('judul_skripsi', $q);
	$this->db->or_like('bln_awal_bimbingan', $q);
	$this->db->or_like('bln_akhir_bimbingan', $q);
	$this->db->or_like('sk_yudisium', $q);
	$this->db->or_like('tgl_sk_yudisium', $q);
	$this->db->or_like('ipk', $q);
	$this->db->or_like('no_seri_ijazah', $q);
	$this->db->or_like('sert_prof', $q);
	$this->db->or_like('a_pindah_mhs_asing', $q);
	$this->db->or_like('id_pt_asal', $q);
	$this->db->or_like('id_prodi_asal', $q);
	$this->db->or_like('nm_pt_asal', $q);
	$this->db->or_like('nm_prodi_asal', $q);
	$this->db->or_like('id_jalur_masuk', $q);
	$this->db->or_like('no_peserta_ujian', $q);
	$this->db->or_like('added_by', $q);
	$this->db->or_like('date_added', $q);
	$this->db->or_like('modified_by', $q);
	$this->db->or_like('date_modified', $q);
	$this->db->or_like('id_sinkron', $q);
	$this->db->or_like('deleted', $q);
	$this->db->or_like('id_cabang', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('', $q);
	$this->db->or_like('id_reg_pd', $q);
	$this->db->or_like('nipd', $q);
	$this->db->or_like('id_pd', $q);
	$this->db->or_like('id_sms', $q);
	$this->db->or_like('id_sp', $q);
	$this->db->or_like('tgl_masuk_sp', $q);
	$this->db->or_like('id_jns_daftar', $q);
	$this->db->or_like('id_jns_keluar', $q);
	$this->db->or_like('tgl_keluar', $q);
	$this->db->or_like('ket', $q);
	$this->db->or_like('skhun', $q);
	$this->db->or_like('a_pernah_paud', $q);
	$this->db->or_like('a_pernah_tk', $q);
	$this->db->or_like('id_kategori', $q);
	$this->db->or_like('mulai_smt', $q);
	$this->db->or_like('sks_diakui', $q);
	$this->db->or_like('jalur_skripsi', $q);
	$this->db->or_like('judul_skripsi', $q);
	$this->db->or_like('bln_awal_bimbingan', $q);
	$this->db->or_like('bln_akhir_bimbingan', $q);
	$this->db->or_like('sk_yudisium', $q);
	$this->db->or_like('tgl_sk_yudisium', $q);
	$this->db->or_like('ipk', $q);
	$this->db->or_like('no_seri_ijazah', $q);
	$this->db->or_like('sert_prof', $q);
	$this->db->or_like('a_pindah_mhs_asing', $q);
	$this->db->or_like('id_pt_asal', $q);
	$this->db->or_like('id_prodi_asal', $q);
	$this->db->or_like('nm_pt_asal', $q);
	$this->db->or_like('nm_prodi_asal', $q);
	$this->db->or_like('id_jalur_masuk', $q);
	$this->db->or_like('no_peserta_ujian', $q);
	$this->db->or_like('added_by', $q);
	$this->db->or_like('date_added', $q);
	$this->db->or_like('modified_by', $q);
	$this->db->or_like('date_modified', $q);
	$this->db->or_like('id_sinkron', $q);
	$this->db->or_like('deleted', $q);
	$this->db->or_like('id_cabang', $q);
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

/* End of file Pddikti_tr_mahasiswa_pt_model.php */
/* Location: ./application/models/Pddikti_tr_mahasiswa_pt_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-05-16 09:47:08 */
/* http://harviacode.com */