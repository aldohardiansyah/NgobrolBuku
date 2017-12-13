<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_Dashboard extends CI_Model {

		function __construct(){
		parent::__construct();
		}


		/*DIPAKEDI : Dashboard & Profil BUAT: Tampilin data buku yang sudah dibaca*/
		function getjoin(){
			$query = $this->db->query("SELECT tbl_review.review_ID, tbl_review.akun_ID, tbl_review.buku_ID, tbl_review.isi_review, tbl_review.created_on, tbl_buku.buku_ID,
                                tbl_buku.judul_buku, tbl_buku.penulis, tbl_akun.akun_ID, tbl_akun.username
																FROM tbl_review, tbl_buku, tbl_akun
																WHERE tbl_review.akun_ID = tbl_akun.akun_ID AND tbl_review.buku_ID = tbl_buku.buku_ID
                                ORDER BY created_on DESC LIMIT 5");
        if($query->num_rows()>0){
          foreach ($query->result_array() as $row) { $data[]=$row; }
          $query->free_result();
        }
        else{
          $data=NULL;
        }
        return $data;
    }


}
?>
