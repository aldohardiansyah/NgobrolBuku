<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_Daftar extends CI_Model{


		function __construct(){
		parent::__construct();
  	}


		/*DIPAKEDI : Daftar BUAT: Cek username sudah tersedia atau belum*/
		function check_data($table, $wherekolom, $datakolom, $wherekolom2, $datakolom2) {
      	$this->db->where($wherekolom, $datakolom);
      	$this->db->where($wherekolom2, $datakolom2);
      	$query=$this->db->get($table);
    		if ($query->num_rows() > 0)
      	{
          	return TRUE;
      	}
      	else
      	{
          	return FALSE;
      	}
    }


}
?>
