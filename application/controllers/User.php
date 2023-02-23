<?php

class User extends CI_Controller{
   
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_user');
    }

    public function index()
    {
        $data['title'] = 'Data User';
        $data['account'] = $this->Model_user->getalluser();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/user', $data);
        $this->load->view('templates/footer'); 
    }

    public function tambahuser()
    {
       $nama = $this->input->post('nama');
       $password = $this->input->post('password');
       $role = $this->input->post('role');
       $username = $this->input->post('username');
        $data = [
      	'username' => $username,
      	'password' => $password,
      	'name' => $nama,
      	'role' => $role
      ];

      $this->Model_user->insert($data, 'account');
       redirect('User');
    }

    public function edituser($username)
    {
       $data['title'] = 'Edit';
       $data['account'] = $this->Model_user->getuserById($username);
       $this->form_validation->set_rules('role', 'role', 'required');
       if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('user/edit_user', $data);
            $this->load->view('templates/footer'); 
       } else {
          $this->Model_user->updateuser();
          redirect('User');
       }
    }

    public function hapususer($id)
    {
       $this->Model_user->delete($id);
       redirect('User');
    }

}

?>