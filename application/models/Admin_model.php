<?php



/**
 *
 */
class Admin_model extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }

  //------------------user----------------------------------------------------------
  public function get_admin($data){
    $this->db->select('*');
    $this->db->from('tb_admin');
    $this->db->where('username = ',$data['username']);
    $this->db->where('password = ',$data['password']);
    $query = $this->db->get();
    return $query;
  }



  //------------------kerusakan----------------------------------------------------------
  public function getAll_kerusakan(){
    $this->db->select('*');
    $this->db->from('tb_kerusakan');
    $query = $this->db->get();
    return $query;
  }

  public function get_kerusakan($where){
    $this->db->select('*');
    $this->db->from('tb_kerusakan');
    $this->db->where($where);
    $query = $this->db->get();
    return $query;
  }

  public function cek_kode($kode_kerusakan){
    $this->db->select('*');
    $this->db->from('tb_kerusakan');
    $this->db->where('kode_kerusakan = ',$kode_kerusakan);
    $query = $this->db->get();
    return $query;
  }

  public function insert_kerusakan($data){
    $this->db->set('kode_kerusakan',$data['kode_kerusakan']);
    $this->db->set('nama_kerusakan',$data['nama_kerusakan']);
    $this->db->set('penanganan',$data['penanganan']);
    $this->db->insert('tb_kerusakan');
  }

  public function update_kerusakan($data,$id_kerusakan){
    $this->db->where('id_kerusakan = ',$id_kerusakan);
    $this->db->update('tb_kerusakan',$data);
  }

  public function delete_kerusakan($id_kerusakan){
    $this->db->where('id_kerusakan = ',$id_kerusakan);
    $this->db->delete('tb_kerusakan');
  }

  //------------------gejala----------------------------------------------------------
  public function getAll_gejala(){
    $this->db->select('*');
    $this->db->from('tb_gejala');
    $query = $this->db->get();
    return $query;
  }

  public function get_gejala($where){
    $this->db->select('*');
    $this->db->from('tb_gejala');
    $this->db->where($where);
    $query = $this->db->get();
    return $query;
  }

  public function cek_kode_gejala($kode_gejala){
    $this->db->select('*');
    $this->db->from('tb_gejala');
    $this->db->where('kode_gejala = ',$kode_gejala);
    $query = $this->db->get();
    return $query;
  }

  public function insert_gejala($data){
    $this->db->set('kode_gejala',$data['kode_gejala']);
    $this->db->set('gejala',$data['gejala']);
    $this->db->insert('tb_gejala');
  }

  public function update_gejala($data,$id_gejala){
    $this->db->where('id_gejala = ',$id_gejala);
    $this->db->update('tb_gejala',$data);
  }

  public function delete_gejala($id_gejala){
    $this->db->where('id_gejala = ',$id_gejala);
    $this->db->delete('tb_gejala');
  }

  //------------------rule----------------------------------------------------------
  public function getAll_rule(){
    $this->db->select('*');
    $this->db->from('tb_rule');
    $query = $this->db->get();
    return $query;
  }

  public function get_rule($where){
    $this->db->select('*');
    $this->db->from('tb_rule');
    $this->db->where($where);
    $query = $this->db->get();
    return $query;
  }

  public function cek_kode_rule($kode_rule){
    $this->db->select('*');
    $this->db->from('tb_rule');
    $this->db->where('kode_rule = ',$kode_rule);
    $query = $this->db->get();
    return $query;
  }

  public function insert_rule($data){
    $this->db->set('kode_rule',$data['kode_rule']);
    $this->db->set('kode_gejala',$data['kode_gejala']);
    $this->db->set('kode_kerusakan',$data['kode_kerusakan']);
    $this->db->insert('tb_rule');
  }

  public function update_rule($data,$id_rule){
    $this->db->where('id_rule = ',$id_rule);
    $this->db->update('tb_rule',$data);
  }

  public function delete_rule($id_rule){
    $this->db->where('id_rule = ',$id_rule);
    $this->db->delete('tb_rule');
  }

}
