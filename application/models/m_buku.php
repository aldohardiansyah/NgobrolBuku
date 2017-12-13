<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_Buku extends CI_Model {

		function __construct(){
		parent::__construct();
		}


		/*DIPAKEDI : Dashboard & Profil BUAT: Tampilin data buku yang sudah dibaca*/
		function getjoin_lagibaca($ID) {
				$query = $this->db->query("SELECT tbl_baca.akun_ID, tbl_baca.created_on, tbl_buku.buku_ID, tbl_buku.judul_buku, tbl_buku.gambar
																FROM tbl_baca, tbl_buku
																WHERE tbl_baca.akun_ID = $ID AND tbl_baca.buku_ID=tbl_buku.buku_ID ORDER BY created_on DESC LIMIT 3");
        if($query->num_rows()>0){
          foreach ($query->result_array() as $row) { $data[]=$row; }
          $query->free_result();
        }
        else{
          $data=NULL;
        }
        return $data;
    }


		/*DIPAKEDI : Dashboard & Profil BUAT: Tampilin data buku yang ingin dibaca*/
		function getjoin_pengenbaca($ID){
				$query = $this->db->query("SELECT tbl_ibaca.akun_ID, tbl_ibaca.created_on, tbl_buku.buku_ID, tbl_buku.judul_buku, tbl_buku.gambar
																FROM tbl_ibaca, tbl_buku
																WHERE tbl_ibaca.akun_ID = $ID AND tbl_ibaca.buku_ID=tbl_buku.buku_ID ORDER BY created_on DESC LIMIT 3");
        if($query->num_rows()>0){
          foreach ($query->result_array() as $row) { $data[]=$row; }
          $query->free_result();
        }
        else{
          $data=NULL;
        }
        return $data;
    }


		/*DIPAKEDI : Dashboard & Profil BUAT: Tampilin data buku yang sudah dibaca*/
		function getjoin_lagibaca_2($ID){
				$query = $this->db->query("SELECT tbl_baca.akun_ID, tbl_baca.created_on, tbl_buku.buku_ID, tbl_buku.judul_buku, tbl_buku.gambar, tbl_buku.ringkasan
																FROM tbl_baca, tbl_buku
																WHERE tbl_baca.akun_ID = $ID AND tbl_baca.buku_ID=tbl_buku.buku_ID ORDER BY created_on DESC");
        if($query->num_rows()>0){
          foreach ($query->result_array() as $row) { $data[]=$row; }
          $query->free_result();
        }
        else{
          $data=NULL;
        }
        return $data;
    }


			/*DIPAKEDI : Dashboard & Profil BUAT: Tampilin data buku yang ingin dibaca*/
		function getjoin_pengenbaca_2($ID){
				$query = $this->db->query("SELECT tbl_ibaca.akun_ID, tbl_ibaca.created_on, tbl_buku.buku_ID, tbl_buku.judul_buku, tbl_buku.gambar
																	FROM tbl_ibaca, tbl_buku
																	WHERE tbl_ibaca.akun_ID = $ID AND tbl_ibaca.buku_ID=tbl_buku.buku_ID ORDER BY created_on DESC");
        if($query->num_rows()>0){
          foreach ($query->result_array() as $row) { $data[]=$row; }
          $query->free_result();
        }
        else{
          $data=NULL;
        }
        return $data;
    }


		/*DIPAKEDI : Dashboard & Profil BUAT: Tampilin rview ingin dibaca*/
		function getjoin_reviewbuku($ID_buku) {
				$query = $this->db->query("SELECT tbl_review.review_ID, tbl_review.rating, tbl_review.akun_ID, tbl_review.buku_ID, tbl_review.isi_review, tbl_review.created_on, tbl_review.cekricek, tbl_buku.buku_ID, tbl_akun.username
																FROM tbl_review, tbl_buku, tbl_akun
																WHERE tbl_review.akun_ID = tbl_akun.akun_ID
																AND tbl_review.buku_ID=tbl_buku.buku_ID
																AND tbl_review.buku_ID=$ID_buku
																ORDER BY created_on DESC LIMIT 3");
        if($query->num_rows()>0){
          foreach ($query->result_array() as $row) { $data[]=$row; }
          $query->free_result();
        }
        else{
          $data=NULL;
        }
        return $data;
      }


		/*DIPAKEDI : Dashboard & Profil BUAT: Tampilin rview ingin dibaca*/
		function getjoin_reviewbuku_2(){
			$query = $this->db->query("SELECT tbl_review.review_ID,tbl_review.akun_ID, tbl_review.buku_ID, tbl_review.isi_review, tbl_review.created_on, tbl_review.cekricek, tbl_buku.buku_ID, tbl_buku.judul_buku,
																tbl_akun.username
																FROM tbl_review, tbl_buku, tbl_akun
																WHERE tbl_review.akun_ID = tbl_akun.akun_ID
																AND tbl_review.buku_ID = tbl_buku.buku_ID
																ORDER BY created_on");
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
