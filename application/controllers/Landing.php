<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{
    function __construct(){
		parent::__construct();
		$this->load->model('M_user','mUser');
	}   

    public function index(){
        if($this->session->userdata('status') == 'login'){
            $id_user = $this->session->userdata('id_user');
            $data['user'] = $this->mUser->get_by_id($id_user)->result();
            $this->load->view('dashboard/index', $data);
        }else{
            redirect(site_url('Auth/login'));
        }
    }
    public function process_logout(){
        $this->session->sess_destroy();
        redirect(site_url('/'));
    }
}