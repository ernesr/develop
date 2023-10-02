<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{

    public $table = 'mahasiswa';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('id,nama_mahasiswa,jenis_kelamin,tempat_lahir,tanggal_lahir,id_agama,nik,nisn,kewarganegaraan,jalan,dusun,rt,rw,kelurahan,kode_pos,id_wilayah,id_jenis_tinggal,id_alat_transportasi,telepon,handphone,email,penerima_kps,nomor_kps,nik_ayah,nama_ayah,tanggal_lahir_ayah,id_pendidikan_ayah,id_pekerjaan_ayah,id_penghasilan_ayah,nik_ibu,nama_ibu_kandung,tanggal_lahir_ibu,id_pendidikan_ibu,id_pekerjaan_ibu,id_penghasilan_ibu,npwp,nama_wali,tanggal_lahir_wali,id_pendidikan_wali,id_pekerjaan_wali,id_penghasilan_wali,id_kebutuhan_khusus_mahasiswa,id_kebutuhan_khusus_ayah,id_kebutuhan_khusus_ibu,nim,id_jenis_daftar,id_jalur_daftar,id_periode_masuk,tanggal_daftar,id_perguruan_tinggi,id_prodi,id_bidang_minat,sks_diakui,nama_prodi_asal,id_pembiayaan,biaya_masuk,status,error,deleted,data_add');
        $this->datatables->from('mahasiswa');
        //add this line for join
        //$this->datatables->join('table2', 'mahasiswa.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('mahasiswa/read/$1'),'Read')." | ".anchor(site_url('mahasiswa/update/$1'),'Update')." | ".anchor(site_url('mahasiswa/delete/$1'),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'), 'id');
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
	$this->db->or_like('nama_mahasiswa', $q);
	$this->db->or_like('jenis_kelamin', $q);
	$this->db->or_like('tempat_lahir', $q);
	$this->db->or_like('tanggal_lahir', $q);
	$this->db->or_like('id_agama', $q);
	$this->db->or_like('nik', $q);
	$this->db->or_like('nisn', $q);
	$this->db->or_like('kewarganegaraan', $q);
	$this->db->or_like('jalan', $q);
	$this->db->or_like('dusun', $q);
	$this->db->or_like('rt', $q);
	$this->db->or_like('rw', $q);
	$this->db->or_like('kelurahan', $q);
	$this->db->or_like('kode_pos', $q);
	$this->db->or_like('id_wilayah', $q);
	$this->db->or_like('id_jenis_tinggal', $q);
	$this->db->or_like('id_alat_transportasi', $q);
	$this->db->or_like('telepon', $q);
	$this->db->or_like('handphone', $q);
	$this->db->or_like('email', $q);
	$this->db->or_like('penerima_kps', $q);
	$this->db->or_like('nomor_kps', $q);
	$this->db->or_like('nik_ayah', $q);
	$this->db->or_like('nama_ayah', $q);
	$this->db->or_like('tanggal_lahir_ayah', $q);
	$this->db->or_like('id_pendidikan_ayah', $q);
	$this->db->or_like('id_pekerjaan_ayah', $q);
	$this->db->or_like('id_penghasilan_ayah', $q);
	$this->db->or_like('nik_ibu', $q);
	$this->db->or_like('nama_ibu_kandung', $q);
	$this->db->or_like('tanggal_lahir_ibu', $q);
	$this->db->or_like('id_pendidikan_ibu', $q);
	$this->db->or_like('id_pekerjaan_ibu', $q);
	$this->db->or_like('id_penghasilan_ibu', $q);
	$this->db->or_like('npwp', $q);
	$this->db->or_like('nama_wali', $q);
	$this->db->or_like('tanggal_lahir_wali', $q);
	$this->db->or_like('id_pendidikan_wali', $q);
	$this->db->or_like('id_pekerjaan_wali', $q);
	$this->db->or_like('id_penghasilan_wali', $q);
	$this->db->or_like('id_kebutuhan_khusus_mahasiswa', $q);
	$this->db->or_like('id_kebutuhan_khusus_ayah', $q);
	$this->db->or_like('id_kebutuhan_khusus_ibu', $q);
	$this->db->or_like('nim', $q);
	$this->db->or_like('id_jenis_daftar', $q);
	$this->db->or_like('id_jalur_daftar', $q);
	$this->db->or_like('id_periode_masuk', $q);
	$this->db->or_like('tanggal_daftar', $q);
	$this->db->or_like('id_perguruan_tinggi', $q);
	$this->db->or_like('id_prodi', $q);
	$this->db->or_like('id_bidang_minat', $q);
	$this->db->or_like('sks_diakui', $q);
	$this->db->or_like('nama_prodi_asal', $q);
	$this->db->or_like('id_pembiayaan', $q);
	$this->db->or_like('biaya_masuk', $q);
	$this->db->or_like('status', $q);
	$this->db->or_like('error', $q);
	$this->db->or_like('deleted', $q);
	$this->db->or_like('data_add', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
	$this->db->or_like('nama_mahasiswa', $q);
	$this->db->or_like('jenis_kelamin', $q);
	$this->db->or_like('tempat_lahir', $q);
	$this->db->or_like('tanggal_lahir', $q);
	$this->db->or_like('id_agama', $q);
	$this->db->or_like('nik', $q);
	$this->db->or_like('nisn', $q);
	$this->db->or_like('kewarganegaraan', $q);
	$this->db->or_like('jalan', $q);
	$this->db->or_like('dusun', $q);
	$this->db->or_like('rt', $q);
	$this->db->or_like('rw', $q);
	$this->db->or_like('kelurahan', $q);
	$this->db->or_like('kode_pos', $q);
	$this->db->or_like('id_wilayah', $q);
	$this->db->or_like('id_jenis_tinggal', $q);
	$this->db->or_like('id_alat_transportasi', $q);
	$this->db->or_like('telepon', $q);
	$this->db->or_like('handphone', $q);
	$this->db->or_like('email', $q);
	$this->db->or_like('penerima_kps', $q);
	$this->db->or_like('nomor_kps', $q);
	$this->db->or_like('nik_ayah', $q);
	$this->db->or_like('nama_ayah', $q);
	$this->db->or_like('tanggal_lahir_ayah', $q);
	$this->db->or_like('id_pendidikan_ayah', $q);
	$this->db->or_like('id_pekerjaan_ayah', $q);
	$this->db->or_like('id_penghasilan_ayah', $q);
	$this->db->or_like('nik_ibu', $q);
	$this->db->or_like('nama_ibu_kandung', $q);
	$this->db->or_like('tanggal_lahir_ibu', $q);
	$this->db->or_like('id_pendidikan_ibu', $q);
	$this->db->or_like('id_pekerjaan_ibu', $q);
	$this->db->or_like('id_penghasilan_ibu', $q);
	$this->db->or_like('npwp', $q);
	$this->db->or_like('nama_wali', $q);
	$this->db->or_like('tanggal_lahir_wali', $q);
	$this->db->or_like('id_pendidikan_wali', $q);
	$this->db->or_like('id_pekerjaan_wali', $q);
	$this->db->or_like('id_penghasilan_wali', $q);
	$this->db->or_like('id_kebutuhan_khusus_mahasiswa', $q);
	$this->db->or_like('id_kebutuhan_khusus_ayah', $q);
	$this->db->or_like('id_kebutuhan_khusus_ibu', $q);
	$this->db->or_like('nim', $q);
	$this->db->or_like('id_jenis_daftar', $q);
	$this->db->or_like('id_jalur_daftar', $q);
	$this->db->or_like('id_periode_masuk', $q);
	$this->db->or_like('tanggal_daftar', $q);
	$this->db->or_like('id_perguruan_tinggi', $q);
	$this->db->or_like('id_prodi', $q);
	$this->db->or_like('id_bidang_minat', $q);
	$this->db->or_like('sks_diakui', $q);
	$this->db->or_like('nama_prodi_asal', $q);
	$this->db->or_like('id_pembiayaan', $q);
	$this->db->or_like('biaya_masuk', $q);
	$this->db->or_like('status', $q);
	$this->db->or_like('error', $q);
	$this->db->or_like('deleted', $q);
	$this->db->or_like('data_add', $q);
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

/* End of file Mahasiswa_model.php */
/* Location: ./application/models/Mahasiswa_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-06-09 06:26:38 */
/* http://harviacode.com */