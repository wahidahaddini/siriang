<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan extends CI_Controller {
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
        $card['title'] = "Pengajuan Baru <span>> Input Pengajuan Baru</span>";
        $data['pengajuan'] = $this->db->get('data_pengajuan')->result();
        $this->load->view('common/menu', $menu);
        $this->load->view('common/card', $card);
        $this->load->view('pengajuan/input-pengajuan', $data);
        $this->load->view('common/slash-card');
        $this->load->view('common/footer');
    }
}