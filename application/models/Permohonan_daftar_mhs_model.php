<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Permohonan_daftar_mhs_model extends CI_Model
{

    public $table = 'permohonan_daftar_mhs';
    public $id = 'id_permohonan_daftar_mhs';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }
    
     public function  get_membayar($id){
    $this->db->select('a.id_permohonan_daftar_mhs');
	$this->db->join('siak_tr_receipt_item d','a.id_cust=d.id_cust');
    $this->db->join('pddikti_tr_sms b','a.id_sms=b.id_sms');
    $this->db->join('pddikti_tr_sms c','a.alternatif_sms=c.id_sms','Left');
    $this->db->where('a.tahun_masuk',$id);
    $this->db->where('a.deleted','0');
    $this->db->where('b.deleted','0');
    $this->db->where('d.deleted','0');

    $query=$this->db->get('permohonan_daftar_mhs a');

    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}
//////////////////////////////////////////////////////////////////
 public function  get_membayar_regis($id){
    $this->db->select('b.nipd');
    $this->db->join('pddikti_tr_mahasiswa_pt b','a.id_pd=b.id_pd');
    $this->db->join('pddikti_tr_sms c','b.id_sms=c.id_sms','Left');
	$this->db->join('siak_tr_receipt_item d','b.id_reg_pd=d.id_cust');
    $this->db->where('b.mulai_smt',$id);
    $this->db->where('a.deleted','0');
    $this->db->where('b.deleted','0');
    $this->db->where('c.deleted','0');
    $this->db->where('d.deleted','0');
    $query=$this->db->get('pddikti_tr_mahasiswa a');

    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}
/////////////////////////////////////////////////////////
public function  get_prodi_bayar_regis($id){
      $this->db->select('count(b.nipd) as total,a.nm_pd,c.nm_lemb');
    $this->db->join('pddikti_tr_mahasiswa_pt b','a.id_pd=b.id_pd');
    $this->db->join('pddikti_tr_sms c','b.id_sms=c.id_sms','Left');
	$this->db->join('siak_tr_receipt_item d','b.id_reg_pd=d.id_cust');
    $this->db->where('b.mulai_smt',$id);
    $this->db->where('a.deleted','0');
    $this->db->where('b.deleted','0');
    $this->db->where('c.deleted','0');
    $this->db->where('d.deleted','0');

    $this->db->group_by('c.id_sms');
     $query=$this->db->get('pddikti_tr_mahasiswa a');

    if($query->num_rows()>0)
    {
     return $query->result();
    }
    else
    {
      return 0;
    }
}
/////////////////////////////////////////////////////////
public function  get_prodi_bayar($id){
    $this->db->select('count(a.id_permohonan_daftar_mhs) as total,a.id_cust,a.tahun_masuk,a.nama_lengkap,a.id_sms,a.no_hp,a.no_hp_ortu,a.nik,a.alternatif_sms,b.nm_lemb,c.nm_lemb as alter,d.price');
	$this->db->join('siak_tr_receipt_item d','a.id_cust=d.id_cust');
    $this->db->join('pddikti_tr_sms b','a.id_sms=b.id_sms');
    $this->db->join('pddikti_tr_sms c','a.alternatif_sms=c.id_sms','Left');
    $this->db->where('a.tahun_masuk',$id);
    $this->db->where('a.deleted','0');
    $this->db->where('b.deleted','0');
    $this->db->where('d.deleted','0');

    $this->db->group_by('a.id_sms');
    $query=$this->db->get('permohonan_daftar_mhs a');

    if($query->num_rows()>0)
    {
     return $query->result();
    }
    else
    {
      return 0;
    }
}
	function hitung_p($id) {
		$this->db->select('a.id_permohonan_daftar_mhs,a.id_cust,a.tahun_masuk,a.nama_lengkap,a.id_sms,a.no_hp,a.no_hp_ortu,a.nik,a.alternatif_sms,b.nm_lemb,c.nm_lemb as alter,d.price');
		$this->db->join('siak_tr_receipt_item d','a.id_cust=d.id_cust');
      $this->db->join('pddikti_tr_sms b','a.id_sms=b.id_sms');
       $this->db->join('pddikti_tr_sms c','a.alternatif_sms=c.id_sms','Left');
        $this->db->where('a.tahun_masuk',$id);

        $query = $this->db->get('permohonan_daftar_mhs a');
        return $query->result();
    }
    // datatables
    function json($id) {
        $this->datatables->select('a.id_permohonan_daftar_mhs,a.id_cust,a.tahun_masuk,a.nama_lengkap,a.id_sms,a.no_hp,a.no_hp_ortu,a.nik,a.alternatif_sms,b.nm_lemb,c.nm_lemb as alter,d.price');
        $this->datatables->from('permohonan_daftar_mhs a');
        $this->datatables->join('siak_tr_receipt_item d','a.id_cust=d.id_cust');
      $this->datatables->join('pddikti_tr_sms b','a.id_sms=b.id_sms');
       $this->datatables->join('pddikti_tr_sms c','a.alternatif_sms=c.id_sms','Left');
        $this->datatables->where('a.tahun_masuk',$id);
                 $this->datatables->where('a.deleted','0');
                         $this->datatables->where('b.deleted','0');
                                 //$this->datatables->where('c.deleted','0');
                                         $this->datatables->where('d.deleted','0');
                                          
         //$this->datatables->limit(10);




        //add this line for join
        //$this->datatables->join('table2', 'permohonan_daftar_mhs.field = table2.field');
        $this->datatables->add_column('action', '<button type="button" class="btn btn-danger">Hanya Lihat</button>');
        return $this->datatables->generate();
    }
       function json2($id) {
        $this->datatables->select('a.id_pd,b.id_reg_pd,b.nipd,a.nm_pd,c.nm_lemb,sum(d.price) as total,a.no_hp');
        $this->datatables->from('pddikti_tr_mahasiswa a');
        $this->datatables->join('pddikti_tr_mahasiswa_pt b','a.id_pd=b.id_pd');

        $this->datatables->join('siak_tr_receipt_item d','b.id_reg_pd=d.id_cust');
      $this->datatables->join('pddikti_tr_sms c','b.id_sms=c.id_sms');
        $this->datatables->where('b.mulai_smt',$id);
                 $this->datatables->where('a.deleted','0');
                         $this->datatables->where('b.deleted','0');
                                 $this->datatables->where('c.deleted','0');
                                         $this->datatables->where('d.deleted','0');
                                           $this->db->group_by('b.id_reg_pd');

         //$this->datatables->limit(10);




        //add this line for join
        //$this->datatables->join('table2', 'permohonan_daftar_mhs.field = table2.field');
        $this->datatables->add_column('action', '<button type="button" class="btn btn-danger">Hanya Lihat</button>');
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
        $this->db->like('id_permohonan_daftar_mhs', $q);
	$this->db->or_like('id_cust', $q);
	$this->db->or_like('nama_lengkap', $q);
	$this->db->or_like('email', $q);
	$this->db->or_like('password', $q);
	$this->db->or_like('id_sp', $q);
	$this->db->or_like('id_sms', $q);
	$this->db->or_like('id_jns_daftar', $q);
	$this->db->or_like('foto_images', $q);
	$this->db->or_like('tempat_lahir', $q);
	$this->db->or_like('tanggal_lahir', $q);
	$this->db->or_like('jenis_kelamin', $q);
	$this->db->or_like('alamat_rumah', $q);
	$this->db->or_like('no_hp', $q);
	$this->db->or_like('no_hp_ortu', $q);
	$this->db->or_like('asal_sekolah', $q);
	$this->db->or_like('tahun_lulus', $q);
	$this->db->or_like('jurusan_sma', $q);
	$this->db->or_like('tinggi_badan', $q);
	$this->db->or_like('berat_badan', $q);
	$this->db->or_like('agama', $q);
	$this->db->or_like('tahun_masuk', $q);
	$this->db->or_like('gelombang', $q);
	$this->db->or_like('status_complete', $q);
	$this->db->or_like('bukti_transfer', $q);
	$this->db->or_like('bukti_transfer_dari', $q);
	$this->db->or_like('bukti_transfer2', $q);
	$this->db->or_like('bukti_transfer2_dari', $q);
	$this->db->or_like('ip_address', $q);
	$this->db->or_like('date_added', $q);
	$this->db->or_like('date_modified', $q);
	$this->db->or_like('pendaftaran_untuk_tahun_ajaran', $q);
	$this->db->or_like('deleted', $q);
	$this->db->or_like('nm_ibu_kandung', $q);
	$this->db->or_like('nik', $q);
	$this->db->or_like('id_wil', $q);
	$this->db->or_like('ds_kel', $q);
	$this->db->or_like('kewarganegaraan', $q);
	$this->db->or_like('kab', $q);
	$this->db->or_like('kec', $q);
	$this->db->or_like('alternatif_sms', $q);
	$this->db->or_like('alternatif_sp', $q);
	$this->db->or_like('nisn', $q);
	$this->db->or_like('survei', $q);
	$this->db->or_like('kd', $q);
	$this->db->or_like('pas2', $q);
	$this->db->or_like('paket', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_permohonan_daftar_mhs', $q);
	$this->db->or_like('id_cust', $q);
	$this->db->or_like('nama_lengkap', $q);
	$this->db->or_like('email', $q);
	$this->db->or_like('password', $q);
	$this->db->or_like('id_sp', $q);
	$this->db->or_like('id_sms', $q);
	$this->db->or_like('id_jns_daftar', $q);
	$this->db->or_like('foto_images', $q);
	$this->db->or_like('tempat_lahir', $q);
	$this->db->or_like('tanggal_lahir', $q);
	$this->db->or_like('jenis_kelamin', $q);
	$this->db->or_like('alamat_rumah', $q);
	$this->db->or_like('no_hp', $q);
	$this->db->or_like('no_hp_ortu', $q);
	$this->db->or_like('asal_sekolah', $q);
	$this->db->or_like('tahun_lulus', $q);
	$this->db->or_like('jurusan_sma', $q);
	$this->db->or_like('tinggi_badan', $q);
	$this->db->or_like('berat_badan', $q);
	$this->db->or_like('agama', $q);
	$this->db->or_like('tahun_masuk', $q);
	$this->db->or_like('gelombang', $q);
	$this->db->or_like('status_complete', $q);
	$this->db->or_like('bukti_transfer', $q);
	$this->db->or_like('bukti_transfer_dari', $q);
	$this->db->or_like('bukti_transfer2', $q);
	$this->db->or_like('bukti_transfer2_dari', $q);
	$this->db->or_like('ip_address', $q);
	$this->db->or_like('date_added', $q);
	$this->db->or_like('date_modified', $q);
	$this->db->or_like('pendaftaran_untuk_tahun_ajaran', $q);
	$this->db->or_like('deleted', $q);
	$this->db->or_like('nm_ibu_kandung', $q);
	$this->db->or_like('nik', $q);
	$this->db->or_like('id_wil', $q);
	$this->db->or_like('ds_kel', $q);
	$this->db->or_like('kewarganegaraan', $q);
	$this->db->or_like('kab', $q);
	$this->db->or_like('kec', $q);
	$this->db->or_like('alternatif_sms', $q);
	$this->db->or_like('alternatif_sp', $q);
	$this->db->or_like('nisn', $q);
	$this->db->or_like('survei', $q);
	$this->db->or_like('kd', $q);
	$this->db->or_like('pas2', $q);
	$this->db->or_like('paket', $q);
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

/* End of file Permohonan_daftar_mhs_model.php */
/* Location: ./application/models/Permohonan_daftar_mhs_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-05-16 13:27:37 */
/* http://harviacode.com */