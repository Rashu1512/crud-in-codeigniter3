<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
            $this->load->helper('form');
            $this->load->library('form_validation');
            $this->load->library('session');
            $this->load->model('Admin_model');
    }
    
    public function index()
    {
         $this->load->model('User_model');
        $data['data1'] = $this->User_model->all();
        $this->load->view('admin/list', $data);
    }

    public function register()
    {
        $this->form_validation->set_rules('name','Name','trim|required|alpha');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('password','Password','trim|required');
        $this->form_validation->set_rules('cpassword','Confirm Password','trim|required|matches[password]');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('admin/register');
        }
        else
        {
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            );

            // Insert data into database
            $this->Admin_model->register($data);

            $this->session->set_flashdata('success', 'Registration successful. Please login.');
            redirect(base_url('index.php/admin/login'));
        }
    }

    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/login');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->Admin_model->login($email, $password);

            if ($user) {
                // Set session data
                $this->session->set_userdata('user_id', $user['id']);
                redirect(base_url('index.php/admin/dashboard'));
            } else {
                $this->session->set_flashdata('error', 'Invalid email or password');
                redirect(base_url('index.php/admin/login'));
            }
        }
    }
    public function dashboard(){
        $this->load->view('admin/dashboard');
        
        // $data['content'] = $this->input->get('content');
        // $this->load->view('admin/dashboard', $data);

        
    }

    

     public function logout()
    {
        // Unset user data and destroy session
        $this->session->unset_userdata('user_id');
        $this->session->sess_destroy();
        redirect(base_url('index.php/admin/login'));

}
}
?>
