<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Home extends CI_Controller {
    
        public function index()
        {
            $data['game']= $this->model_game->tampil()->result();
            $this->load->view('Home/Home',$data);
            $this->load->view('Template/Header');
        }
        public function tambah($id){
            $game=$this->model_game->find($id);
            $data=array(
                'id'    =>$game->id_game,
                'nama'    =>$game->nama_game,
                'harga'    =>$game->harga,

            );
            $this->cart->insert($data);
            redirect('Home');
            
        }
        public function ditambah(){
            $data['game']=$this->model_game->tampil()->result();
            $this->load->view('Home/cart',$data);
            $this->load->view('Template/Header');
        }
        public function hapus(){
            $this->cart->destroy();
            redirect('ditambah');
            
        }
        public function detail_keranjang()
       {
           $data['barang']= $this->model_barang->tampil_data()->result();
           $this->load->view('Template/header');
           $this->load->view('Home/cart') ;
       }
    }
    
    /* End of file Home.php */
    
?>