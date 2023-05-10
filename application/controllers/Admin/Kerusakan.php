<?php


/**
 *
 */
class kerusakan extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->library('upload');
    $this->load->helper('url_helper');
    $this->load->helper('text');
    $this->load->helper('date');
    $this->load->library('pagination');
    $this->load->model('Admin_model');
  }

  public function index(){

		if($this->session->userdata('status') != "login"){
			redirect(base_url('admin/login'));
		}

    $data['kerusakan'] = $this->Admin_model->getAll_kerusakan()->result();

    $this->load->view('pages/admin/header');
		$this->load->view('pages/admin/daftar_kerusakan',$data);
		$this->load->view('pages/admin/footer');
	}

  public function tambah(){

		if($this->session->userdata('status') != "login"){
			redirect(base_url('admin/login'));
		}

    $this->load->view('pages/admin/header');
		$this->load->view('pages/admin/tambah_kerusakan');
		$this->load->view('pages/admin/footer');
	}

  public function proses_tambah(){

    if($this->session->userdata('status') != "login"){
			redirect(base_url('admin/login'));
		}

    $kode_kerusakan = $this->input->post('kode_kerusakan');
    $nama_kerusakan = $this->input->post('nama_kerusakan');
    $penanganan = $this->input->post('penanganan');

		$data = array(
      'kode_kerusakan' => $kode_kerusakan,
			'nama_kerusakan' => $nama_kerusakan,
			'penanganan' => $penanganan
    );

		$cek_kode = $this->Admin_model->cek_kode($kode_kerusakan)->num_rows();
		if ($cek_kode == 0) {
		  $this->Admin_model->insert_kerusakan($data);
      redirect(base_url('admin/kerusakan'));
		}
		else {
			$data['cek_kode'] = "ada";
			$this->load->view('pages/admin/header');
			$this->load->view('pages/admin/tambah_kerusakan',$data);
			$this->load->view('pages/admin/footer');
		}
  }

  public function edit(){

    if($this->session->userdata('status') != "login"){
			redirect(base_url('admin/login'));
		}

		$id_kerusakan = $this->uri->segment(4);

    $where = array('id_kerusakan' => $id_kerusakan, );

		$data['kerusakan'] = $this->Admin_model->get_kerusakan($where)->result();

		$this->load->view('pages/admin/header');
		$this->load->view('pages/admin/edit_kerusakan',$data);
		$this->load->view('pages/admin/footer');
	}

  public function proses_edit(){

    if($this->session->userdata('status') != "login"){
			redirect(base_url('admin/login'));
		}

    $id_kerusakan = $this->input->post('id_kerusakan');
    $now_kode_kerusakan = $this->input->post('now_kode_kerusakan');

    $kode_kerusakan = $this->input->post('kode_kerusakan');
    $nama_kerusakan = $this->input->post('nama_kerusakan');
    $penanganan = $this->input->post('penanganan');

		$data = array(
      'kode_kerusakan' => $kode_kerusakan,
			'nama_kerusakan' => $nama_kerusakan,
			'penanganan' => $penanganan
    );

		$cek_kode = $this->Admin_model->cek_kode($kode_kerusakan)->num_rows();
		if ($cek_kode == 0) {
		  $this->Admin_model->update_kerusakan($data,$id_kerusakan);
      redirect(base_url('admin/kerusakan'));
		}
		else {
			if ($kode_kerusakan == $now_kode_kerusakan) {
        $this->Admin_model->update_kerusakan($data,$id_kerusakan);
        redirect(base_url('admin/kerusakan'));
      }else {
        $data['cek_kode'] = "ada";
        $where = array('id_kerusakan' => $id_kerusakan );

    		$data['kerusakan'] = $this->Admin_model->get_kerusakan($where)->result();
  			$this->load->view('pages/admin/header');
  			$this->load->view('pages/admin/edit_kerusakan',$data);
  			$this->load->view('pages/admin/footer');
      }
		}
  }

  public function hapus(){

    if($this->session->userdata('status') != "login"){
			redirect(base_url('admin/login'));
		}

		$id_kerusakan = $this->uri->segment(4);

		$this->Admin_model->delete_kerusakan($id_kerusakan);

		redirect(base_url('admin/kerusakan'));
	}

}
