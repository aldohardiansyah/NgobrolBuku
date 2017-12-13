<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_Profile extends CI_Model {

		function __construct(){
		parent::__construct();
		}


		/*DIPAKEDI : Dashboard & Profil BUAT: Tampilin Data Profil*/
		function getjoin_profile($ID){
    		$query = $this->db->query("SELECT tbl_review.review_ID, tbl_review.akun_ID, tbl_akun.akun_ID, tbl_akun.firstname, tbl_akun.lastname, tbl_akun.username,
																tbl_akun.address, tbl_akun.last_login_date, tbl_akun.email
    														FROM tbl_review, tbl_akun
    														WHERE tbl_review.akun_ID = tbl_akun.akun_ID AND tbl_review.akun_ID = $ID OR tbl_akun.akun_ID = $ID
                                LIMIT 1");
        if($query->num_rows()>0){
          foreach ($query->result_array() as $row) { $data[]=$row; }
          $query->free_result();
        }
        else{
          $data=NULL;
        }
        return $data;
      }


		/*DIPAKEDI : Dashboard & Profil BUAT: Tampilin Review*/
		function getjoin($ID){
			$query = $this->db->query("SELECT tbl_review.review_ID, tbl_review.akun_ID, tbl_review.buku_ID, tbl_review.isi_review, tbl_review.created_on, tbl_buku.buku_ID,
                                tbl_buku.judul_buku, tbl_buku.penulis, tbl_akun.akun_ID, tbl_akun.firstname, tbl_akun.lastname, tbl_akun.username
																FROM tbl_review, tbl_buku, tbl_akun
																WHERE tbl_review.akun_ID = tbl_akun.akun_ID AND tbl_review.buku_ID = tbl_buku.buku_ID AND tbl_review.akun_ID = $ID
                                ORDER BY created_on DESC");
        if($query->num_rows()>0){
          foreach ($query->result_array() as $row) { $data[]=$row; }
          $query->free_result();
        }
        else{
          $data=NULL;
        }
        return $data;
      }


    function get_level($table, $wherekolom, $datakolom){
        $this->db->where($wherekolom, $datakolom);
        $query=$this->db->get($table);
				$data=$query->num_rows();
				$data=$data/5;
				return $data;
		}

}
?>
