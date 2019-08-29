<?php 

    class Posts_model extends CI_Model {
        public function __construct() {
            $this->load->database();
        }

        public function get_posts($id = false)
        {
            if($id === false) {
                $this->db->order_by('posts.id', 'DESC');
                $this->db->select('posts.id,user_id, posts.created_at, posts.title, posts.body, posts.image, users.name');
                $this->db->from('posts');
                $this->db->join('users', 'users.id = posts.user_id');

                $query = $this->db->get();
                    return $query->result_array();
            }
            $this->db->select('posts.id,user_id, posts.created_at, posts.title, posts.body, posts.image, users.name');
            $this->db->from('posts');
            $this->db->join('users', 'users.id = posts.user_id');
            $this->db->where('posts.id', $id);

            $query = $this->db->get();
            return $query->row_array();
        }

        public function create_post($image)
        {
            $data = array(
                'user_id' => $this->session->userdata('id'),
                'title' => $this->input->post('title'),
                'body' => $this->input->post('body'),
                'image' => $image
            );

            return $this->db->insert('posts', $data);
        }  
        
        public function update_post($image)
        {
            $id = $this->input->post('id');
            $data = array(
                'title' => $this->input->post('title'),
                'body' => $this->input->post('body'),
                'image' => $image
            );

            return $this->db->update('posts', $data, array('id' => $id));
            
        }
        
        public function delete_post($id)
        {
            return $this->db->delete('posts', array('id' => $id));
        }
    }