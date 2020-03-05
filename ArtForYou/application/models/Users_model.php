<?php
//application/models/Users_model.php
class Users_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
   
    public function get_users($id = 0)
    {
        if ($id==0)
        {//no id, retrieve all
            $query = $this->db->get('Users');
            return $query->result_array();
        }else{//retrieve individual record
            $query = $this->db->get_where('Users', array('UserID' => $id));
            return $query->row_array();
        }
    }//end get_users()  
   

    public function create_user()
    {
        $data = array(
            'FirstName' => $this->input->post('FirstName'),
            'LastName' => $this->input->post('LastName'),
            'Email' => $this->input->post('Email'),
            'Bio' => $this->input->post('Bio'),
            'UserName' => $this->input->post('UserName'),
            'Password' => $this->input->post('Password')
        );

        if($this->db->insert('Users', $data))
        {//return slug - send to view page
            return $this->db->insert_id();
        }else{//return false
            return false;
        }
    }//end create_user()
   
    public function update_user()
    {
        $data = array(
            'FirstName' => $this->input->post('FirstName'),
            'LastName' => $this->input->post('LastName'),
            'Email' => $this->input->post('Email'),
            'Bio' => $this->input->post('Bio'),
            'UserName' => $this->input->post('UserName'),
            'Password' => $this->input->post('Password')
        );

        $this->db->where('UserID', $this->input->post('UserID'));
        if($this->db->update('Users', $data))
        {//update successful - send to view page
            return $this->input->post('UserID');
        }else{//return false
            return false;
        }

    }//end update_user()
   
    public function delete_user($id=0)
    {
        if($this->db->delete('Users', array('UserID' => $id)))
        {//delete successful!
            return true;
        }else{//return false
            return false;
        }
 
    }//end delete_user()
   
}//end Users_model