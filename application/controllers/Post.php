<?php

class Post extends CI_Controller{
   
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Post');
    }

    public function index()
    {

        $data['title'] = 'Data Post';
        $data['request'] = $this->Model_Post->getallpost();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('post/post', $data);
        $this->load->view('templates/footer'); 
    }

  public function form_post()
  {
		$data['title'] = 'Form Post';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('post/form_post', $data);
        $this->load->view('templates/footer');
  }
  
  
  public function form_aksi()
   {
         $title = $this->input->post('title');
         $content = $this->input->post('content');
         $date = date('y-m-d');

         $username = $this->session->userdata('username');	
		 $userid = $this->session->username;	

          $data = [
             'title' => $title,
             'content' => $content,
             'date' => $date,
             'username' => $username
           ];		   
         
        $this->db->insert('post', $data);
        redirect('Post');
   }

   public function lihat($id)
    {

        $data['title'] = 'Lihat Post';
        $data['lihat'] = $this->Model_Post->lihatpost($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('post/lihat', $data);
        $this->load->view('templates/footer'); 
    }  
	
  public function hapuspost($id)
    {
       $this->Model_Post->delete($id);
       redirect('Post');
    }		

}

?>
