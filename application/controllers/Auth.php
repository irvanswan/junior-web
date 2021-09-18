<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_user', 'mUser');
        if($this->session->userdata('status') == 'login'){
            redirect(site_url('/'));
        }
    }
    public function login()
    {
        $this->load->view('auth/login');
    }
    public function register()
    {
        $this->load->view('auth/register');
    }
    public function forgot_password()
    {
        $this->load->view('auth/forgot_password');
    }

    public function process_login()
    {
        $email = $this->input->post('inputEmail');
        $user = $this->mUser->check_user($email);
        if ($user) {
            $password = $this->input->post('inputPassword');

            if (password_verify($password, $user['password'])) {
                $data_session = array(
                    'id_user' => $user['id'],
                    'status' => "login"
                );
                $this->session->set_userdata($data_session);
                redirect(site_url('/'));
            } else {
                $this->session->set_flashdata(
                    'msg',
                    '<div class="alert alert-danger">
                    	<h4>Wrong password / email !</h4>
                    	<p>Please Chek username and '.password_verify($password, $user['password']).'</p>
                	</div>'
                );
                redirect('/');
            }
        } else {
            $this->session->set_flashdata(
                'msg',
                '<div class="alert alert-danger">
					<h4>Wrong password / email !</h4>
					<p>Please Chek username and password</p>
				</div>'
            );
            redirect('Auth/login');
        }
    }

    public function process_register()
    {
        $config['upload_path'] = './uploads/photos/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 2000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('uploadImage')) {
            $this->session->set_flashdata('pesan','Error upload');
            return $this->register();
        } else {
            $dataUpload = array('upload_data' => $this->upload->data());
            $data = array(
                'name' => $this->input->post('inputName'),
                'email' => $this->input->post('inputEmail'),
                'password' => get_hash($this->input->post('inputPassword')),
                'photo' => $dataUpload['upload_data']['file_name']
            );
            if ($this->mUser->register_user($data)) {
                $this->session->set_flashdata('pesan', 'Register berhasil, silahkan  Sign In.');
                return $this->register();
            } else {
                $this->session->set_flashdata('pesan', 'Register user gagal!');
                return $this->register();
            }
        }
    }
}
