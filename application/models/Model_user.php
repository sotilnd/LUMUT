<?php

class Model_user extends CI_Model
{
   public function getAlluser()
   {
      if($this->session->userdata('role')=='author'){
		  $username = $this->session->userdata('username');
      $query = "SELECT * from account where username='$username'";
      return $this->db->query($query)->result_array();
	  }else{
          $query = "SELECT * from account";
         return $this->db->query($query)->result_array();
      }
   }

    public function insert($data, $table)
   {
      $this->db->insert($table, $data);
   }

    public function delete($id)
   {
      $this->db->delete('account', ['username' => $id]);
   }

  public function getuserById($username)
   {
      return $this->db->get_where('account', ['username' => $username])->row_array();
   }

	public function updateuser()
   {
      $username = $this->input->post('username');      
      $password = $this->input->post('password');
	  $nama = $this->input->post('nama');
      $role = $this->input->post('role');

      $data = [
      	'username' => $username,
      	'password' => $password,
      	'name' => $nama,
      	'role' => $role
      ];	 

      $this->db->update('account', $data, ['username' => $this->input->post('username')]);
   }


}

?>