<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pddikti_tr_sms_model extends CI_Model
{

    public $table = 'pddikti_tr_sms';
    public $id = 'id_sms';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('id_sms,nm_lemb,kode_prodi,muncul');
        $this->datatables->from('pddikti_tr_sms');
        //add this line for join
        //$this->datatables->join('table2', 'pddikti_tr_sms.field = table2.field');
        $this->datatables->add_column('action',anchor(site_url('pddikti_tr_sms/aktif/$1'),'<button type="button" class="btn btn-info">Aktifkan</button>','onclick="javasciprt: return confirm(\'Are You Sure ?\')"')." | ".anchor(site_url('pddikti_tr_sms/nonaktif/$1'),'<button type="button" class="btn btn-warning">Non Aktif</button>','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'), 'id_sms');
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
        $this->db->like('id_sms', $q);
	$this->db->or_like('prodi_identifier', $q);
	$this->db->or_like('nm_lemb', $q);
	$this->db->or_like('id_sdm_kaprodi', $q);
	$this->db->or_like('smt_mulai', $q);
	$this->db->or_like('kode_prodi', $q);
	$this->db->or_like('jln', $q);
	$this->db->or_like('rt', $q);
	$this->db->or_like('rw', $q);
	$this->db->or_like('nm_dsn', $q);
	$this->db->or_like('ds_kel', $q);
	$this->db->or_like('kode_pos', $q);
	$this->db->or_like('lintang', $q);
	$this->db->or_like('bujur', $q);
	$this->db->or_like('no_tel', $q);
	$this->db->or_like('no_fax', $q);
	$this->db->or_like('email', $q);
	$this->db->or_like('website', $q);
	$this->db->or_like('singkatan', $q);
	$this->db->or_like('tgl_berdiri', $q);
	$this->db->or_like('sk_selenggara', $q);
	$this->db->or_like('tgl_sk_selenggara', $q);
	$this->db->or_like('tmt_sk_selenggara', $q);
	$this->db->or_like('tst_sk_selenggara', $q);
	$this->db->or_like('kpst_pd', $q);
	$this->db->or_like('sks_lulus', $q);
	$this->db->or_like('gelar_lulusan', $q);
	$this->db->or_like('stat_prodi', $q);
	$this->db->or_like('polesei_nilai', $q);
	$this->db->or_like('luas_lab', $q);
	$this->db->or_like('kapasitas_prak_satu_shift', $q);
	$this->db->or_like('jml_mhs_pengguna', $q);
	$this->db->or_like('jml_jam_penggunaan', $q);
	$this->db->or_like('jml_prodi_pengguna', $q);
	$this->db->or_like('jml_modul_prak_sendiri', $q);
	$this->db->or_like('jml_modul_prak_lain', $q);
	$this->db->or_like('fungsi_selain_prak', $q);
	$this->db->or_like('penggunaan_lab', $q);
	$this->db->or_like('id_sp', $q);
	$this->db->or_like('id_jenj_didik', $q);
	$this->db->or_like('id_jns_sms', $q);
	$this->db->or_like('id_fungsi_lab', $q);
	$this->db->or_like('id_kel_usaha', $q);
	$this->db->or_like('id_wil', $q);
	$this->db->or_like('id_jur', $q);
	$this->db->or_like('id_induk_sms', $q);
	$this->db->or_like('a_kependidikan', $q);
	$this->db->or_like('nm_prodi_english', $q);
	$this->db->or_like('sistem_ajar', $q);
	$this->db->or_like('added_by', $q);
	$this->db->or_like('date_added', $q);
	$this->db->or_like('modified_by', $q);
	$this->db->or_like('date_modified', $q);
	$this->db->or_like('id_sinkron', $q);
	$this->db->or_like('deleted', $q);
	$this->db->or_like('pendaftaran', $q);
	$this->db->or_like('link2', $q);
	$this->db->or_like('warna', $q);
	$this->db->or_like('muncul', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_sms', $q);
	$this->db->or_like('prodi_identifier', $q);
	$this->db->or_like('nm_lemb', $q);
	$this->db->or_like('id_sdm_kaprodi', $q);
	$this->db->or_like('smt_mulai', $q);
	$this->db->or_like('kode_prodi', $q);
	$this->db->or_like('jln', $q);
	$this->db->or_like('rt', $q);
	$this->db->or_like('rw', $q);
	$this->db->or_like('nm_dsn', $q);
	$this->db->or_like('ds_kel', $q);
	$this->db->or_like('kode_pos', $q);
	$this->db->or_like('lintang', $q);
	$this->db->or_like('bujur', $q);
	$this->db->or_like('no_tel', $q);
	$this->db->or_like('no_fax', $q);
	$this->db->or_like('email', $q);
	$this->db->or_like('website', $q);
	$this->db->or_like('singkatan', $q);
	$this->db->or_like('tgl_berdiri', $q);
	$this->db->or_like('sk_selenggara', $q);
	$this->db->or_like('tgl_sk_selenggara', $q);
	$this->db->or_like('tmt_sk_selenggara', $q);
	$this->db->or_like('tst_sk_selenggara', $q);
	$this->db->or_like('kpst_pd', $q);
	$this->db->or_like('sks_lulus', $q);
	$this->db->or_like('gelar_lulusan', $q);
	$this->db->or_like('stat_prodi', $q);
	$this->db->or_like('polesei_nilai', $q);
	$this->db->or_like('luas_lab', $q);
	$this->db->or_like('kapasitas_prak_satu_shift', $q);
	$this->db->or_like('jml_mhs_pengguna', $q);
	$this->db->or_like('jml_jam_penggunaan', $q);
	$this->db->or_like('jml_prodi_pengguna', $q);
	$this->db->or_like('jml_modul_prak_sendiri', $q);
	$this->db->or_like('jml_modul_prak_lain', $q);
	$this->db->or_like('fungsi_selain_prak', $q);
	$this->db->or_like('penggunaan_lab', $q);
	$this->db->or_like('id_sp', $q);
	$this->db->or_like('id_jenj_didik', $q);
	$this->db->or_like('id_jns_sms', $q);
	$this->db->or_like('id_fungsi_lab', $q);
	$this->db->or_like('id_kel_usaha', $q);
	$this->db->or_like('id_wil', $q);
	$this->db->or_like('id_jur', $q);
	$this->db->or_like('id_induk_sms', $q);
	$this->db->or_like('a_kependidikan', $q);
	$this->db->or_like('nm_prodi_english', $q);
	$this->db->or_like('sistem_ajar', $q);
	$this->db->or_like('added_by', $q);
	$this->db->or_like('date_added', $q);
	$this->db->or_like('modified_by', $q);
	$this->db->or_like('date_modified', $q);
	$this->db->or_like('id_sinkron', $q);
	$this->db->or_like('deleted', $q);
	$this->db->or_like('pendaftaran', $q);
	$this->db->or_like('link2', $q);
	$this->db->or_like('warna', $q);
	$this->db->or_like('muncul', $q);
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

/* End of file Pddikti_tr_sms_model.php */
/* Location: ./application/models/Pddikti_tr_sms_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-05-16 09:47:49 */
/* http://harviacode.com */