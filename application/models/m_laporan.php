<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_Laporan extends CI_Model {

		function __construct(){
		parent::__construct();
		}

		/*DIPAKEDI : Dashboard & Profil BUAT: Tampilin rview ingin dibaca*/
		function getjoin_lapor_review() {
				$query = $this->db->query("SELECT tbl_lapor.lapor_ID, tbl_lapor.pelapor,
                                tbl_lapor.kategori_lapor, tbl_lapor.data_ID,
                                tbl_lapor.jenis_pelanggaran, tbl_lapor.isi_laporan,
                                tbl_lapor.created_on, tbl_review.review_ID, tbl_review.isi_review,
                                tbl_review.akun_ID, tbl_akun.akun_ID, tbl_akun.username
                                FROM tbl_review, tbl_lapor, tbl_akun
																WHERE tbl_review.akun_ID = tbl_akun.akun_ID
																AND tbl_lapor.data_ID = tbl_review.review_ID
																AND tbl_lapor.kategori_lapor = 'Review'
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

		/*DIPAKEDI : Dashboard & Profil BUAT: Tampilin rview ingin dibaca*/
		function getjoin_lapor_komentar() {
				$query = $this->db->query("SELECT tbl_lapor.lapor_ID, tbl_lapor.pelapor,
                                tbl_lapor.kategori_lapor, tbl_lapor.data_ID,
                                tbl_lapor.jenis_pelanggaran, tbl_lapor.isi_laporan,
                                tbl_lapor.created_on, tbl_komentar.komentar_ID, tbl_komentar.isi_komentar,
                                tbl_komentar.akun_ID, tbl_akun.akun_ID, tbl_akun.username
                                FROM tbl_komentar, tbl_lapor, tbl_akun
																WHERE tbl_komentar.akun_ID = tbl_akun.akun_ID
																AND tbl_lapor.data_ID = tbl_komentar.komentar_ID
																AND tbl_lapor.kategori_lapor = 'Komentar'
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

		/*DIPAKEDI : Dashboard & Profil BUAT: Tampilin rview ingin dibaca*/
		function getjoin_lapor_review_where($ID) {
				$query = $this->db->query("SELECT tbl_lapor.lapor_ID, tbl_lapor.pelapor,
                                tbl_lapor.kategori_lapor, tbl_lapor.data_ID,
                                tbl_lapor.jenis_pelanggaran, tbl_lapor.isi_laporan,
                                tbl_lapor.created_on, tbl_review.review_ID, tbl_review.isi_review,
                                tbl_review.akun_ID, tbl_akun.akun_ID, tbl_akun.username
                                FROM tbl_review, tbl_lapor, tbl_akun
																WHERE tbl_lapor.lapor_ID = $ID
																AND tbl_review.akun_ID = tbl_akun.akun_ID
																AND tbl_lapor.data_ID = tbl_review.review_ID
																AND tbl_lapor.kategori_lapor = 'Review'
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
