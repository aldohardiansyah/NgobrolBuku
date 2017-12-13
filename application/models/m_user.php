<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_User extends CI_Model {


		function __construct(){
		parent::__construct();
		}

		/*Login Terakhir DIPAKEDI : Logout BUAT: Menulis informasi last login ke database */
		function last_login($username,$data){
				$this->db->where('username', $username);
				$hasil = $this->db->update('tbl_akun', $data);
		}


}
?>
