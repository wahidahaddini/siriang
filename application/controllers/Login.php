<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
        parent::__construct();
     

    }
    
    public function index()
    {
        if($this->session->userdata('username')){
            redirect('user','');
        }  
        if($this->session->userdata("status") == "login"){
            redirect(base_url()."welcome");
        }
        else {
            $this->load->view("auth/login");
        }
    }
     public function aksi_login()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $object = array('username' => $username,'password' => $password);
        $cek = $this->db->get_where('users',$object)->result();
        if(count($cek) > 0)
        {    
            $data_session = array(
                'nama' => $cek[0]->username,
                'status' => "login",
                'bidang_id' => $cek[0]->bidang_id
                
            );
            
            $this->session->set_userdata($data_session);
            print_r($cek);
            redirect(base_url()."welcome");
        }
        else
        {
            $this->session->set_flashdata("msg", "Username atau Password Salah!");
            redirect(base_url()."login");
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));    
    }
}
?>