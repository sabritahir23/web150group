<?php
//application/controllers/Users.php

class Users extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->config->set_item('active','Users');//sets CSS class as active for Users
        $this->load->model('users_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $this->config->set_item('title','Users List');
        $data['users'] = $this->users_model->get_users();
        $data['title'] = 'Users';
        $this->load->view('users/index', $data);
    }

    public function view($id = 0)
    {
        if($id==0){show_404();}
        $this->config->set_item('title','User Page');
        $data['user'] = $this->users_model->get_users($id);
        if(empty($data['user'])){show_404();}
        $data['title'] = $data['user']['FirstName'] . $data['user']['LastName'] . ' user page';     
        $this->load->view('users/view', $data);
    }
   
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create a new user';

        $this->form_validation->set_rules('FirstName', 'First Name', 'required');
        $this->form_validation->set_rules('LastName', 'Last Name', 'required');
        $this->form_validation->set_rules('Email', 'Email', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('users/create', $data);
        }
        else
        {
            $id = $this->users_model->create_user();
            if($id !== false){//id of data returned
                feedback('Data entered successfully!','info');
                redirect('users/view/' . $id);
            }else{//error
                feedback('Data NOT entered!','error');
                redirect('users/create');
            }
        }
    }//end create()
    
    public function update($id=0)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Update User Data';

        $this->form_validation->set_rules('FirstName', 'First Name', 'required');
        $this->form_validation->set_rules('LastName', 'Last Name', 'required');
        $this->form_validation->set_rules('Email', 'Email', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $data['user'] = $this->users_model->get_users($id);
            $this->load->view('users/update', $data);
        }
        else
        {
            $id = $this->users_model->update_user($this->input->post('UserID'));
            if($id !== false){//id of data returned
                feedback('Data updated successfully!','info');
                redirect('users/view/' . $this->input->post('UserID'));
            }else{//error
                feedback('Data NOT updated!','error');
                redirect('users/update/' . $this->input->post('UserID'));
            }
        }
    }//end update()
    
    public function delete($id=0){
        $myReturn = $this->users_model->delete_user($id);
        if($myReturn !== false){//delete successful
            feedback('Data deleted successfully!','info');
            redirect('users/');
        }else{//error
            feedback('Data NOT deleted!','error');
            redirect('users/');
        }
    }//end delete()

}