<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Panjar extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->title = $this->common_lib->getTitle();
		if($this->session->userdata("status") != "login")
		{
			redirect(base_url()."login");
        }
        $this->load->library('form_validation');
	}

	public function index()
	{
        $menu = array(
			"title" => $this->title,
			"btnBg" => "success",
			"btnFa" => "keyboard"
		);
		$card['title'] = "Panjar <span>> Input Panjar</span>";
		$data['bidang'] = $this->db->get('ref_bidang')->result();
		$this->load->view('common/menu', $menu);
		$this->load->view('common/card', $card);
		$this->load->view('panjar/input-panjar', $data);
		$this->load->view('common/slash-card');
		$this->load->view('common/footer');
	}

	public function input_panjar()
	{
		// $this->form_validation->set_rules('kegiatan_id', 'Kegiatan', 'required|trim');
		// $this->form_validation->set_rules('bidang_id', 'Bidang', 'required|trim');
		// $this->form_validation->set_rules('nama_kegiatan', 'Nama Kegiatan', 'required|trim');
		// //$this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[3]|matches[password1]');
		
		$menu = array(
			"title" => $this->title,
			"btnFa" => "keyboard",
			"btnHref" => base_url()."Panjar/index",
			"btnBg" => "success",
			"btnText" => "List Panjar"
		);
		
		if($this->form_validation->run() == false) {
			$card['title'] = "Panjar <span>> Input Panjar</span>";
			$this->load->view('common/menu', $menu);
			$this->load->view('common/card', $card);
			$this->load->view('panjar/input-panjar');
			$this->load->view('common/slash-card');
			$this->load->view('common/footer');
	}
}

    public function tambah()
    {
		$kegiatan = $this->input->post('kegiatan_id');
		$bidang = $this->input->post('bidang_id');
		$nama_kegiatan = $this->input->post('nama_kegiatan');
		$cek = $this->db->get_where('ref_kegiatan', array('kegiatan_id' => $kegiatan))->result();
		if (count($cek) > 0) {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" rol="alert"> Username telah terpakai!</div>');
			redirect('Kegiatan/input_user');
		}else{
			$data = array(
			'kegiatan_id' => $kegiatan,
			'bidang_id' => $bidang,
			'nama_kegiatan' => $nama_kegiatan
		);
		$this->common->insert('ref_kegiatan', $data);
		$this->session->set_flashdata('msg', '<div class="alert alert-success" rol="alert"> Input Berhasil!</div>');
		redirect('Kegiatan/berhasil');
		}
    }
    public function berhasil()
    {
		$menu = array(
    		"title" => $this->title,
			"btnFa" => "keyboard",
			"btnHref" => base_url()."Panjar/index",
			"btnBg" => "success",
			"btnText" => "Kode Panjar"
		);
		
		if($this->form_validation->run() == false) {
			$card['title'] = "Panjar <span>> Kode Panjar</span>";
			$this->load->view('common/menu', $menu);
			$this->load->view('common/card', $card);
			$this->load->view('panjar/input-panjar');
			$this->load->view('common/slash-card');
			$this->load->view('common/footer');
		}
    }

    public function kegiatan()
    {
    	$bidang = $_POST['bidang_id'];
    	if ($bidang= '') {
    	}else{
    		$query = $this->db->query("SELECT * FROM ref_kegiatan WHERE bidang_id = '$bidang_id' ORDER BY kegiatan_id ASC")->result();
    		foreach ($query as $q) {
    			echo '<option value="'.$q->kegiatan_id.'">'.$q->nama_kegiatan.'</option>';
    		}
    	}
    }
}