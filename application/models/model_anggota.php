<?php

use LDAP\Result;
use LDAP\ResultEntry;

class model_anggota extends CI_Model{
function get_anggota(){
    $result = $this->db->get('anggota');
    return $result;
}
function get_admin($n){ 
    $sql ="select * from admin where nama = '$n'";
    $result = $this->db->query($sql);
    return $result;
}
function simpan($id,$username,$nama,$alamat,$email,$no_hp){
    $data =array('id_anggota'=>$id,'username'=>$username,'nama'=>$nama,'alamat'=>$alamat,'email'=>$email,'no_hp'=>$no_hp);
    $this->db->insert('anggota',$data);
}
function hapus($id){
    $this->db->where('id_anggota',$id);
    $this->db->delete('anggota');
}
function get_id_anggota($id){
    $query = $this->db->get_where('anggota', array('id_anggota' => $id));
    return $query;
    }
function ubah($id,$user,$nama,$alamat,$email,$no_hp){
    $data = array( 'username' => $user,'nama' => $nama,'alamat'=>$alamat,'email'=>$email,'no_hp'=>$no_hp );
    $this->db->where('id_anggota', $id);
    $this->db->update('anggota', $data);
    }
}