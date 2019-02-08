<?php 
    class Manage_model extends CI_Model 
    {
        public function __construct() {
            $this->load->database();
        }

        public function create_new_user ($username, $password) {
            $data = ['User_Name' => $username, 
            'User_Password' => $password, 'Stations_id' => 1];
            if($this->db->insert('authors', $data)){
                return TRUE;
            }else{  
                return FALSE;
            }
        }

        public function view_users () {
            $this->db->select('*');
            $this->db->from('authors');
            return $this->db->get()->result_array();
        }

        public function delete_user ($id) {
            $this->db->where('id', $id);
            if($this->db->delete('authors')){
                return TRUE;
            }else{
                return FALSE;
            }
        }

        public function add_category ($type, $cat) {
          
            $ins = $this->db->insert('category', ['Categories' => $cat, 'News_Type_id' => $type]);
        
            if($ins) {
                return TRUE;
            } else {
                return FALSE;
            }
        
        }

        public function delete_category ($id) {
            $this->db->where('id', $id);
            if($this->db->delete('category')){
                return TRUE;
            }else{
                return FALSE;
            }
        }
    }