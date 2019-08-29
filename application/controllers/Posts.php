<?php

    class Posts extends CI_Controller 
    {

        public function __construct() {
            parent::__construct();
            $this->load->model('posts_model');
            $this->load->helper('url_helper');
        }

        protected $file_upload_config = array(
            'upload_path'       =>  './assets/images/posts/',
            'allowed_types'     =>  'gif|jpg|jpeg|png',
            'max_size'          =>  2048,
            'max_width'         =>  2000,
            'max_height'        =>  2000
        );


        public function index()
        {
            $data['posts'] = $this->posts_model->get_posts();  //getting Posts
            $data['title'] = 'All Posts';

            $this->load->view('templates/header', $data);
            $this->load->view('posts/index', $data);
            $this->load->view('templates/footer');
        }
        
        public function view($id = null)
        {
            $data['post'] = $this->posts_model->get_posts($id); //getting Post by id
            if(empty($data['post'])) {
                show_404();
            }
            $data['title'] = $data['post']['title'];
            
            $this->load->view('templates/header', $data);
            $this->load->view('posts/view', $data);
            $this->load->view('templates/footer');
        }

        public function create() {
            // check if user is logged in
            if(! $this->session->userdata('logged_in')) {
                
                redirect('users/login');
            }

            $data['title'] = 'Create Post';

            if(isset($_POST['post_form_submit'])) {   // if request type is POST

                // Set form-valdation Rules
                $this->form_validation->set_rules('title', 'Title', 'required');
                $this->form_validation->set_rules('body', 'Body', 'required');

                if($this->form_validation->run() === FALSE) {

                    // render post create page if form validation fails
                    $this->load->view('templates/header', $data);
                    $this->load->view('posts/create', $data);
                    $this->load->view('templates/footer');

                } else { 

                    $this->load->library('upload', $this->file_upload_config);
                    
                    if (!$this->upload->do_upload('userfile')) {
                        $error = array('error' => $this->upload->display_errors());
                        $image = 'default_image.png';       // if upload failed, then use default image
                    }
                    else {
                        $data = array('upload_data' => $this->upload->data());
                        $image = $_FILES['userfile']['name'];
                    }
                    $this->posts_model->create_post($image);
                    
                    $this->session->set_flashdata('post_created', 'Post created successfully');
                    redirect('posts');
                }
            }
            // render form if not a POST request
            $this->load->view('templates/header', $data);
            $this->load->view('posts/create', $data);
            $this->load->view('templates/footer');
            
        }

        public function edit($post_id)
        {
            // check if user is logged in
            if(! $this->session->userdata('logged_in')) {
                redirect('users/login');
            }

            $data['post'] = $this->posts_model->get_posts($post_id);

            // check if logged_in user is authorized
            if($this->session->userdata('id') != $data['post']['user_id']) {
                redirect('posts');
            } 

            $data['title'] = 'Edit post';

            $this->load->view('templates/header', $data);
            $this->load->view('posts/edit', $data);
            $this->load->view('templates/footer');
        }

        public function update()
        {
            // check if user is logged in
            if(! $this->session->userdata('logged_in')) {
                redirect('users/login');
            }
            
            // Set form-valdation Rules
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('body', 'Body', 'required');
            
            $id = $this->input->post('id');

            if($this->form_validation->run() === FALSE) {
                redirect('posts/edit/'.$id);
            }
            else {
 
                $this->load->library('upload', $this->file_upload_config);
            
                if (!$this->upload->do_upload('userfile')) {
                    $image = $this->input->post('image');  // if upload failes, then use previous Image  
                }
                else {
                    $data = array('upload_data' => $this->upload->data());
                    $image = $_FILES['userfile']['name'];
                }

                $this->posts_model->update_post($image);
                $this->session->set_flashdata('post_updated', 'post updated successfully!');
                redirect('posts/'.$id);
            }
        }

        public function delete($post_id)
        {
            // check login
            if(! $this->session->userdata('logged_in')) {   
                redirect('users/login');
            }

            // check user is authorized
            if($this->session->userdata('id') != $this->posts_model->get_posts($post_id)['user_id']) {
                redirect('posts');
            }

            $this->posts_model->delete_post($post_id);
            $this->session->set_flashdata('post_deleted', 'Post Deleted successfully!');
            redirect('posts');
        }
    }
    