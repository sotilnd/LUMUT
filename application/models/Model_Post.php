<?php

class Model_Post extends CI_Model
{
   public function getallpost()
   {
      if($this->session->userdata('role')=='author'){
         $username = $this->session->userdata('username');
         $query = "SELECT * from post 
		 where username='$username'";
         return $this->db->query($query)->result_array();
      }else{
          $query = "SELECT * from post";
         return $this->db->query($query)->result_array();
      }
   }
   
   public function lihatpost($post)
   {	  
	  $username = $this->session->userdata('username');
	  return $this->db->get_where('post',['username' => $username])->row_array();
   }

     public function insert($data, $table)
   {
      $this->db->insert($table, $data);
   }

    public function delete($id)
   {
      $this->db->delete('post', ['idpost' => $id]);
   }

  public function getpostById($idpost)
   {
      return $this->db->get_where('post', ['idpost' => $idpost])->row_array();
   }

	public function updatepost()
   {
      $idpost = $this->input->post('idpost');      
      $title = $this->input->post('title');
	  $content = $this->input->post('content');
      $date = $this->input->post('date');
	  $username = $this->input->post('username');

      $data = [
      	'idpost' => $idpost,
      	'title' => $title,
      	'content' => $content,
      	'date' => $date,
		'username' => $username
      ];

      $this->db->update('post', $data, ['idpost' => $this->input->post('idpost')]);
   }
   

}

?>