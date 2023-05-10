<?php



/**
 *
 */
class Konsultasi_model extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }

  public function daftar_kerusakan(){
    return $this->db->get('tb_kerusakan')->result();
  }

  public function get_Idkerusakan($nama_kerusakan){
    $this->db->select('*');
    $this->db->from('tb_kerusakan');
    $this->db->where('nama_kerusakan = ',$nama_kerusakan);
    $query = $this->db->get();
    return $query;
  }

  public function get_Namakerusakan($id_kerusakan){
    $this->db->select('*');
    $this->db->from('tb_kerusakan');
    $this->db->where('id_kerusakan = ',$id_kerusakan);
    $query = $this->db->get();
    return $query;
  }

  public function daftar_pertanyaan(){
    $this->db->select('*');
    $this->db->from('tb_gejala');
    $query = $this->db->get();
    return $query;
  }

  public function get_kerusakan(){
    $this->db->select('*');
    $this->db->from('tb_kerusakan');
    $query = $this->db->get();
    return $query;
  }

  public function get_rule(){
    $this->db->select('*');
    $this->db->from('tb_rule');
    $query = $this->db->get();
    return $query;
  }

  public function tambah_riwayat($data){
    $this->db->set('jawaban',$data['hasil']);
    $this->db->set('waktu',$data['waktu']);
    $this->db->insert('riwayat_jawaban');
  }

  public function get_riwayat($data){
    $this->db->select('*');
    $this->db->from('riwayat_jawaban');
    $this->db->where('waktu = ',$data);
    $query = $this->db->get();
    return $query;
  }

  public function get_riwayatid($data){
    $this->db->select('*');
    $this->db->from('riwayat_jawaban');
    $this->db->where('id_jawaban = ',$data);
    $query = $this->db->get();
    return $query;
  }

}
