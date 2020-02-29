<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class model_game extends CI_Model {
        public function tampil(){
            return $this->db->get('game');
        }
        public function tambah($data,$table){
            $this->db->insert($table,$data);
        }
        public function find(){
            $result=$this->db   ->where('id_game',$id)
                                ->limit(1)
                                ->get('game');
            if($result->num_rows()>0){
                return $result->row();
            }else{
                return array();
            }
        }    
    }
    
    /* End of file ModelName.php */
    
?>