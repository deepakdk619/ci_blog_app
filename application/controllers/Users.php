<?php

    class Users extends CI_Controller {

        public function __construct() {
            parent::__construct();
            $this->load->model('users_model');
            $this->load->helper('url_helper');
        }

        public function register()
        {
            // if user is logged in, redirect to posts page
            if($this->session->userdata('logged_in')) {
                redirect('posts');
            }
            
            $data['title'] = 'Register';

            if(isset($_POST['register_form_submit'])) {
                //  Set form validation RULES
                 $this->form_validation->set_rules('full_name', 'Full Name', 'required');
                 $this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]', array('is_unique' => 'This email is already exists'));
                 $this->form_validation->set_rules('password', 'Password', 'required');
                 $this->form_validation->set_rules('password_confirm', 'Confirm Password', 'required|matches[password]');

                 if($this->form_validation->run() === FALSE) {
                    //  redirect to register page if form vailidation fails
                    $this->load->view('templates/header', $data);
                    $this->load->view('users/register');
                    $this->load->view('templates/footer');
                 } else {
                        $enc_password =  password_hash($this->input->post('password'), PASSWORD_DEFAULT); 

                        $this->users_model->register($enc_password);

                        $this->session->set_flashdata('user_registered', 'your are now registered and can log in'); //setting flashdata

                        redirect('posts');
                 }  
            } else {
                // show register form if not a POST request
                $this->load->view('templates/header', $data);
                $this->load->view('users/register', $data);
                $this->load->view('templates/footer', $data);
            }


        }


        public function login()
        {
            // if user is logged in, redirect to posts page
            if($this->session->userdata('logged_in')) {
                redirect('posts');
            }

            $data['title'] = 'Login';

            if(isset($_POST['submit'])) {
                //  Set form validation RULES
                $this->form_validation->set_rules('email', 'Email', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required');

                if($this->form_validation->run() === FALSE) {
                //  redirect to register page if form vailidation fails
                   $this->load->view('templates/header', $data);
                   $this->load->view('users/login', $data);
                   $this->load->view('templates/footer', $data);
                } else {
                        $email = $this->input->post('email');
                        $password = $this->input->post('password');

                        $user = $this->users_model->login($email, $password);

                        if($user) {
                            // create session
                            $user_data = array(
                                'id' => $user->id,
                                'name' => $user->name,
                                'email' => $user->email,
                                'logged_in' => TRUE
                            );
                            $this->session->set_userdata($user_data);
                            
                            $this->session->set_flashdata('login_success', 'you are logged in succesfully');
                            redirect('posts');
                        } else {
                            $this->session->set_flashdata('login_failed', 'Email or Password is incorrect');
                            redirect('users/login');
                        }

                       
                }  
           } else {
               // show login form if not a POST request
                $this->load->view('templates/header', $data);
                $this->load->view('users/login', $data);
                $this->load->view('templates/footer', $data);
           }
        }

        public function logout()
        {
            $session_key = array('email', 'logged_in');

            $this->session->unset_userdata($session_key);  // Clear Session 

            $this->session->set_flashdata('logout_success', 'you are logged out succesfully');
            redirect('posts');
        }
    }