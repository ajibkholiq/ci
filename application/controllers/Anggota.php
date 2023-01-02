
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('model_anggota');
        $this->load->library('session');
        }

    function index(){
        $this->load->view('login');
        
    }
    function val_login(){
        $user = $this->input->post('user');
        $pw =$this->input->post('pw');
        $db= $this->model_anggota->get_admin($user);
        $data=$db->row();
        if ($pw == $data->password){
            $this->session->set_userdata('nama',$user);
            redirect('anggota/main');
        }
        else{
            redirect('anggota');
        }

    }
    function out(){
        $this->session->unset_userdata('nama');
        redirect('anggota');

    }
    function main() {
        $data['user']= $this->session->userdata('nama');
        $data['anggota'] = $this->model_anggota->get_anggota(); 
        $this->load->view('anggota',$data);
        }
     function tambah(){
        $data['user']= $this->session->userdata('nama');

        $this->load->view('tambah_anggota',$data);
        }
     function simpan(){
        $id = $this->input->post('id');
        $user = $this->input->post('user');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $email = $this->input->post('email');
        $nohp = $this->input->post('nohp');
        $this->model_anggota->simpan($id,$user,$nama,$alamat,$email,$nohp);
        redirect('anggota/main');
        }
    function hapus(){
        $id_barang = $this->uri->segment(3);
        $this->model_anggota->hapus($id_barang);
        redirect('anggota/main');
        }
    function get_ubah(){
        $id = $this->uri->segment(3);
        $result = $this->model_anggota->get_id_anggota($id);
        if($result->num_rows() > 0){
            $i = $result->row_array();
            $data['user']= $this->session->userdata('nama');
            $data = array( 'id_anggota' => $i['id_anggota'],'username' => $i['username'] , 'nama' => $i['nama'],'alamat' => $i['alamat'],'email' => $i['email'] ,'no_hp' => $i['no_hp']  );
            $this->load->view('ubah_anggota',$data);
        }
        else{
            echo "Data Tidak Ada";
        }
    }
    function ubah(){
        $id = $this->input->post('id');
        $user = $this->input->post('user');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $email = $this->input->post('email');
        $nohp = $this->input->post('nohp');
        $this->model_anggota->ubah($id,$user,$nama,$alamat,$email,$nohp);
        redirect('anggota/main');
    }
    function test() {
        $data = $this->model_anggota->get_admin();
       print_r( $data->row());
       $row=$data->row();
       echo $row->nama;


    }
    
}

