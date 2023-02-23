<?php

class auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_user');
    }
    
   public function index()
   {
       if (!$this->session->userdata('username')) {
         
         $data = [
            'title' => 'Login'
         ];
         $this->load->view('login_template/header', $data);
         $this->load->view('user/login');
         $this->load->view('login_template/footer');
      }else{
         redirect('dashboard');
      }
   }

   public function login()
   {
      $username = $this->input->post('username');
      $password = $this->input->post('password');

      $user = $this->db->get_where('account', ['username' => $username])->row_array();
      
       if ($user) {
         if ($user['password'] == $password) {
            $data = [
               'username' => $user['username'],
               'nama' => $user['nama'],
               'password' => $user['password'],
               'role' => $user['role']
            ];
            $this->session->set_userdata($data);
            redirect('Home');
         } else {
            redirect('auth');
         }
      } else {
         redirect('auth');
      }      
   }

   public function register()
   {
         
         $data = [
            'title' => 'register'
         ];
         $this->load->view('login_template/header', $data);
         $this->load->view('user/register');
         $this->load->view('login_template/footer');
      
   }

    public function proses_registrasi()
   {
         
       $name = $this->input->post('name');
       $password = $this->input->post('password');
	   $username = $this->input->post('username');
       $role = $this->input->post('role');
       $data = [
             'name' => $name,
             'username' => $username,
             'password' => $password,
             'level' => 'pemohon'
           ];
      $this->Model_user->insert($data, 'account');
       redirect('auth');
      
   }

   public function logout()
   {
      $this->session->unset_userdata('username');
      $this->session->unset_userdata('password');

      redirect('auth');
   }
}
