<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pddikti_tr_mahasiswa_model extends CI_Model
{

    public $table = 'pddikti_tr_mahasiswa';
    public $id = 'id_pd';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('id_pd,id_permohonan_daftar_mhs,nm_pd,jk,nisn,nik,npwp,tmpt_lahir,tgl_lahir,id_agama,id_kk,jln,rt,rw,nm_dsn,ds_kel,id_wil,kode_pos,id_jns_tinggal,id_alat_transport,no_tel_rmh,no_hp,email,a_terima_kps,no_kps,stat_pd,nm_ayah,tgl_lahir_ayah,nik_ayah,id_jenjang_pendidikan_ayah,id_pekerjaan_ayah,id_penghasilan_ayah,id_kebutuhan_khusus_ayah,nm_ibu_kandung,tgl_lahir_ibu,nik_ibu,id_jenjang_pendidikan_ibu,id_pekerjaan_ibu,id_penghasilan_ibu,id_kebutuhan_khusus_ibu,nm_wali,tgl_lahir_wali,id_jenjang_pendidikan_wali,id_pekerjaan_wali,id_penghasilan_wali,kewarganegaraan,telepon_seluler,telepon_rumah,added_by,date_added,modified_by,date_modified,id_sinkron,deleted,no_hp_ortu');
        $this->datatables->from('pddikti_tr_mahasiswa');
        //add this line for join
        //$this->datatables->join('table2', 'pddikti_tr_mahasiswa.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('pddikti_tr_mahasiswa/read/$1'),'Read')." | ".anchor(site_url('pddikti_tr_mahasiswa/update/$1'),'Update')." | ".anchor(site_url('pddikti_tr_mahasiswa/delete/$1'),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'), 'id_pd');
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
        $this->db->like('id_pd', $q);
	$this->db->or_like('id_permohonan_daftar_mhs', $q);
	$this->db->or_like('nm_pd', $q);
	$this->db->or_like('jk', $q);
	$this->db->or_like('nisn', $q);
	$this->db->or_like('nik', $q);
	$this->db->or_like('npwp', $q);
	$this->db->or_like('tmpt_lahir', $q);
	$this->db->or_like('tgl_lahir', $q);
	$this->db->or_like('id_agama', $q);
	$this->db->or_like('id_kk', $q);
	$this->db->or_like('jln', $q);
	$this->db->or_like('rt', $q);
	$this->db->or_like('rw', $q);
	$this->db->or_like('nm_dsn', $q);
	$this->db->or_like('ds_kel', $q);
	$this->db->or_like('id_wil', $q);
	$this->db->or_like('kode_pos', $q);
	$this->db->or_like('id_jns_tinggal', $q);
	$this->db->or_like('id_alat_transport', $q);
	$this->db->or_like('no_tel_rmh', $q);
	$this->db->or_like('no_hp', $q);
	$this->db->or_like('email', $q);
	$this->db->or_like('a_terima_kps', $q);
	$this->db->or_like('no_kps', $q);
	$this->db->or_like('stat_pd', $q);
	$this->db->or_like('nm_ayah', $q);
	$this->db->or_like('tgl_lahir_ayah', $q);
	$this->db->or_like('nik_ayah', $q);
	$this->db->or_like('id_jenjang_pendidikan_ayah', $q);
	$this->db->or_like('id_pekerjaan_ayah', $q);
	$this->db->or_like('id_penghasilan_ayah', $q);
	$this->db->or_like('id_kebutuhan_khusus_ayah', $q);
	$this->db->or_like('nm_ibu_kandung', $q);
	$this->db->or_like('tgl_lahir_ibu', $q);
	$this->db->or_like('nik_ibu', $q);
	$this->db->or_like('id_jenjang_pendidikan_ibu', $q);
	$this->db->or_like('id_pekerjaan_ibu', $q);
	$this->db->or_like('id_penghasilan_ibu', $q);
	$this->db->or_like('id_kebutuhan_khusus_ibu', $q);
	$this->db->or_like('nm_wali', $q);
	$this->db->or_like('tgl_lahir_wali', $q);
	$this->db->or_like('id_jenjang_pendidikan_wali', $q);
	$this->db->or_like('id_pekerjaan_wali', $q);
	$this->db->or_like('id_penghasilan_wali', $q);
	$this->db->or_like('kewarganegaraan', $q);
	$this->db->or_like('telepon_seluler', $q);
	$this->db->or_like('telepon_rumah', $q);
	$this->db->or_like('added_by', $q);
	$this->db->or_like('date_added', $q);
	$this->db->or_like('modified_by', $q);
	$this->db->or_like('date_modified', $q);
	$this->db->or_like('id_sinkron', $q);
	$this->db->or_like('deleted', $q);
	$this->db->or_like('no_hp_ortu', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_pd', $q);
	$this->db->or_like('id_permohonan_daftar_mhs', $q);
	$this->db->or_like('nm_pd', $q);
	$this->db->or_like('jk', $q);
	$this->db->or_like('nisn', $q);
	$this->db->or_like('nik', $q);
	$this->db->or_like('npwp', $q);
	$this->db->or_like('tmpt_lahir', $q);
	$this->db->or_like('tgl_lahir', $q);
	$this->db->or_like('id_agama', $q);
	$this->db->or_like('id_kk', $q);
	$this->db->or_like('jln', $q);
	$this->db->or_like('rt', $q);
	$this->db->or_like('rw', $q);
	$this->db->or_like('nm_dsn', $q);
	$this->db->or_like('ds_kel', $q);
	$this->db->or_like('id_wil', $q);
	$this->db->or_like('kode_pos', $q);
	$this->db->or_like('id_jns_tinggal', $q);
	$this->db->or_like('id_alat_transport', $q);
	$this->db->or_like('no_tel_rmh', $q);
	$this->db->or_like('no_hp', $q);
	$this->db->or_like('email', $q);
	$this->db->or_like('a_terima_kps', $q);
	$this->db->or_like('no_kps', $q);
	$this->db->or_like('stat_pd', $q);
	$this->db->or_like('nm_ayah', $q);
	$this->db->or_like('tgl_lahir_ayah', $q);
	$this->db->or_like('nik_ayah', $q);
	$this->db->or_like('id_jenjang_pendidikan_ayah', $q);
	$this->db->or_like('id_pekerjaan_ayah', $q);
	$this->db->or_like('id_penghasilan_ayah', $q);
	$this->db->or_like('id_kebutuhan_khusus_ayah', $q);
	$this->db->or_like('nm_ibu_kandung', $q);
	$this->db->or_like('tgl_lahir_ibu', $q);
	$this->db->or_like('nik_ibu', $q);
	$this->db->or_like('id_jenjang_pendidikan_ibu', $q);
	$this->db->or_like('id_pekerjaan_ibu', $q);
	$this->db->or_like('id_penghasilan_ibu', $q);
	$this->db->or_like('id_kebutuhan_khusus_ibu', $q);
	$this->db->or_like('nm_wali', $q);
	$this->db->or_like('tgl_lahir_wali', $q);
	$this->db->or_like('id_jenjang_pendidikan_wali', $q);
	$this->db->or_like('id_pekerjaan_wali', $q);
	$this->db->or_like('id_penghasilan_wali', $q);
	$this->db->or_like('kewarganegaraan', $q);
	$this->db->or_like('telepon_seluler', $q);
	$this->db->or_like('telepon_rumah', $q);
	$this->db->or_like('added_by', $q);
	$this->db->or_like('date_added', $q);
	$this->db->or_like('modified_by', $q);
	$this->db->or_like('date_modified', $q);
	$this->db->or_like('id_sinkron', $q);
	$this->db->or_like('deleted', $q);
	$this->db->or_like('no_hp_ortu', $q);
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

/* End of file Pddikti_tr_mahasiswa_model.php */
/* Location: ./application/models/Pddikti_tr_mahasiswa_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-05-16 13:16:46 */
/* http://harviacode.com */