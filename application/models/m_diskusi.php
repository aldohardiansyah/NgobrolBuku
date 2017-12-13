<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_Diskusi extends CI_Model {

		function __construct(){
		parent::__construct();
		}


		/*DIPAKEDI : Dashboard & Profil BUAT: Tampilin data buku yang sudah dibaca*/
		function getjoin(){
			$query = $this->db->query("SELECT *
																FROM tbl_diskusi, tbl_akun
																WHERE tbl_diskusi.akun_ID = tbl_akun.akun_ID
																AND tbl_diskusi.status = 'approve'
                                ORDER BY tbl_diskusi.created_on");
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
		function getjoin_negasi(){
			$query = $this->db->query("SELECT *
																FROM tbl_diskusi, tbl_akun
																WHERE tbl_diskusi.akun_ID = tbl_akun.akun_ID
																AND tbl_diskusi.status != 'approve'
                                ORDER BY tbl_diskusi.created_on");
        if($query->num_rows()>0){
          foreach ($query->result_array() as $row) { $data[]=$row; }
          $query->free_result();
        }
        else{
          $data=NULL;
        }
        return $data;
    }

			function getjoin_category($category){
				$query = $this->db->query("SELECT *
																	FROM tbl_diskusi, tbl_akun
																	WHERE tbl_diskusi.akun_ID = tbl_akun.akun_ID
																	AND tbl_diskusi.status = 'approve'
																	AND tbl_diskusi.diskusi_kategori = '$category'
	                                ORDER BY tbl_diskusi.created_on");
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
		function getjoin_where($ID){
			$query = $this->db->query("SELECT *
																FROM tbl_diskusi, tbl_akun
																WHERE tbl_diskusi.akun_ID = tbl_akun.akun_ID
																AND tbl_diskusi.diskusi_ID = $ID
                                ORDER BY tbl_diskusi.created_on");
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
		function getjoin_where_2($ID){
			$query = $this->db->query("SELECT tbl_akun.akun_ID, tbl_akun.username, tbl_diskusi.diskusi_ID,
																tbl_komentar.akun_ID, tbl_komentar.komentar_ID, tbl_komentar.diskusi_ID, tbl_komentar.isi_komentar, tbl_komentar.created_on
																FROM tbl_diskusi, tbl_akun, tbl_komentar
																WHERE tbl_komentar.akun_ID = tbl_akun.akun_ID
																AND tbl_diskusi.diskusi_ID = tbl_komentar.diskusi_ID
																AND tbl_komentar.diskusi_ID = $ID
                                ORDER BY tbl_komentar.created_on");
        if($query->num_rows()>0){
          foreach ($query->result_array() as $row) { $data[]=$row; }
          $query->free_result();
        }
        else{
          $data=NULL;
        }
        return $data;
    }

		function getjoin_limit(){
			$query = $this->db->query("SELECT *
																FROM tbl_diskusi, tbl_akun
																WHERE tbl_diskusi.akun_ID = tbl_akun.akun_ID
																AND tbl_diskusi.status = 'approve'
                                ORDER BY tbl_diskusi.created_on DESC LIMIT 3");
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
		function getjoin_diskusi_admin(){
			$query = $this->db->query("SELECT *
																FROM tbl_diskusi, tbl_akun
																WHERE tbl_diskusi.akun_ID = tbl_akun.akun_ID
                                ORDER BY tbl_diskusi.created_on");
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
		function getjoin_komentar_admin(){
			$query = $this->db->query("SELECT *
																FROM tbl_diskusi, tbl_akun, tbl_komentar
																WHERE tbl_komentar.akun_ID = tbl_akun.akun_ID
																AND tbl_diskusi.diskusi_ID = tbl_komentar.diskusi_ID
                                ORDER BY tbl_komentar.created_on");
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
