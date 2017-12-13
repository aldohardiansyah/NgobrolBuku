<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_Login extends CI_Model{

    function __construct(){
  	parent::__construct();
    }


    /*DIPAKEDI : Login BUAT: Buat Ujian Nasional, ya buat Login lah */
    function aksi_login($username,$password)
    {
        $this->db->select('*');
        $this->db->from('tbl_akun');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get();
        if($query->num_rows()==1)
          {
            $result = $query->result();
            return $result;
          }
        else
          {
            redirect('login','refresh');
          }
    }


}
?>
