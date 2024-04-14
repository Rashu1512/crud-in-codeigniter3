<?php
class User extends CI_Controller {

    public function index() {
        $this->load->model('User_model');
        $data['data1'] = $this->User_model->all();
        $this->load->view('list', $data);
    }

    public function create() {
        $this->load->model('User_model');
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');

        if ($this->form_validation->run() == false) {
            $this->load->view('create');
        } else {
            $formArray = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            );
            $this->User_model->create($formArray); 
            $this->session->set_flashdata('success', 'Record added successfully');
            redirect(base_url('index.php/user/index'));
        }
    }

         function edit($userId) {
        $this->load->model('User_model');
        $user = $this->User_model->getUser($userId);
        $data = array();
        $data['user'] = $user;
        
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');

        if ($this->form_validation->run ()  == false) {
            $this->load->view('edit',$data);
        } else {
            //update user record
            $formArray = array();
            $formArray['name'] =$this->input->post('name');
            $formArray['email'] =$this->input->post('email');
            $formArray['password'] =$this->input->post('password');
            $this->User_model->updateUser($userId,$formArray);
            $this->session->flashdata('success','Record updated successfully');
            redirect(base_url().'index.php/user/index');

        }
    }

    //delete start
   public function delete($userId)
   {
    $this->load->model('User_model');
    $user = $this->User_model->getUser($userId);
    if(empty($user)){
        $this->session->set_flashdata('failure','Record not found in database');
        redirect(base_url().'index.php/user/index');
    }
    $this->User_model->deleteUser($userId);
    $this->session->set_flashdata('success','Record delete successfully');
    redirect(base_url().'index.php/user/index');
    }
    // delete end
}
?>
