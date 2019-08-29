<?php

    class Users_model extends CI_Model 
    {
        public function __construct() {
            $this->load->database();
        }


        public function register($enc_password)
        {
            $data = array(
                'name'      => $this->input->post('full_name'),
                'email'     => $this->input->post('email'),
                'password'  => $enc_password
            );

            return $this->db->insert('users', $data);
        }


        public function login($email, $password)
        {
            $this->db->where('email', $email);
            $query = $this->db->get('users');
        
            $user = $query->row();

            if(isset($user)) {
                if(password_verify($password, $user->password)) {
                    return $user;
                } else {
                    return false;
                }
            }
            else {
                return false;
            }

        }
    }
    