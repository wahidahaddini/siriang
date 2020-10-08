<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class RefBidang extends CI_Controller {
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
			"btnHref" => base_url()."RefBidang/input_ref",
			"btnBg" => "success",
			"btnFa" => "keyboard",
			"btnText" => "Tambah ref"
		);
		$card['title'] = "Ref Bidang <span>> List Ref Bidang</span>";
		$data['ref_bidang'] = $this->db->get('ref_bidang')->result();
		$this->load->view('common/menu', $menu);
		$this->load->view('common/card', $card);
		$this->load->view('ref_bidang/list-bidang', $data);
		$this->load->view('common/slash-card');
		$this->load->view('common/footer');
        // $page = array(
        //     "title" => "Siriang | Dashboard",
        // );
        // $data['ref_bidang'] = $this->db->get('ref_bidang')->result();
		// $this->load->view("common/menu", $page);
		// $this->load->view("ref_bidang/list-bidang",$data);
		// $this->load->view("common/footer");
	}

	// public function tambah_bid(){

	// 	$bidang = $this->input->post('bidang_id');
	// 	$nama_bidang = $this->input->post('nama_bidang');

	// 	$data = array(
	// 		'bidang_id' => $id_bidang,
	// 		'nama_bidang' => $nama_bidang	
	// 	);

	// 	$this->common->insert('ref_bidang', $data);
	// 	redirect('RefBidang/index');
    // }
    public function input_ref()
    {
		$this->form_validation->set_rules('bidang_id', 'bidang', 'required|trim|is_unique[users.username]',[
			'is_unique' => 'id sudah ada'
		]);
		$this->form_validation->set_rules('username', 'username', 'required|trim|is_unique[users.username]',[
		'is_unique' => 'id sudah ada'
		] );
		
		
		$menu = array(
			"title" => $this->title,
			"btnFa" => "keyboard",
			"btnHref" => base_url()."RefBidang/index",
			"btnBg" => "success",
			"btnText" => "List User"
		);
		
		if($this->form_validation->run() == false) {
			$card['title'] = "Input Ref Bidang <span>> Input Ref Bidang</span>";
			$this->load->view('common/menu', $menu);
			$this->load->view('common/card', $card);
			$this->load->view('ref_bidang/input-ref');
			$this->load->view('common/slash-card');
			$this->load->view('common/footer');
        }else
        {
		$bidang = $this->input->post('bidang_id');
		$nama_bidang = $this->input->post('nama_bidang');

		$data = array(
			'bidang_id' => $bidang,
			'nama_bidang' => $nama_bidang
		);
		$this->common->insert('ref_bidang', $data);
        redirect('RefBidang/index');
        }
    }
}