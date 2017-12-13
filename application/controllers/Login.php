<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller{

      public function index()
      {
          if ($this->session->userdata('role_user')=='Admin')
        {
          Redirect('adm_dashboard','refresh');
        }
          elseif ($this->session->userdata('role_user')=='User')
        {
          Redirect('dashboard','refresh');
        }
          else
          {
          echo $this->session->flashdata('msg');
          $this->load->view('v_login');

        }
      }

      public function cek_login()
      {
        date_default_timezone_set('Asia/Jakarta');
        $this->form_validation->set_rules('username','Username','required|');
		    $this->form_validation->set_rules('password','Password','required|min_length[6]|callback_checkPassword');
        $username = $this->input->post('username');
		    $password = md5($this->input->post('password'));
        $query = $this->M_Login->aksi_login($username,$password);
        foreach ($query as $hasil)
          {
            $role_user = $hasil->role_user;
            $akun_ID = $hasil->akun_ID;
          }
          if($query)
          {
            if($role_user=="Admin")
            {
              $this->session->set_userdata('akun_ID', $akun_ID);
              $this->session->set_userdata('username', $username);
              $this->session->set_userdata('password', $password);
              $this->session->set_userdata('role_user', $role_user);

              $data = array(
                'last_login_date' 	=> date('Y-m-d'),
                'last_login_time'		=> date('H:i:s'),
                'active' => 1

              );
              $this->Core_Model->update('tbl_akun','username',$username,$data);
              $akun_ID_check = $this->session->userdata('akun_ID'); /*Dipake di Controller Buku, Function tambah_lagi_baca*/
              redirect('adm_dashboard','refresh');
            }

            else if ($role_user=="User")
            {
              $this->session->set_userdata('akun_ID', $akun_ID);
              $this->session->set_userdata('username', $username);
              $this->session->set_userdata('password', $password);
              $this->session->set_userdata('role_user', $role_user);

              $data = array(
                'last_login_date' 	=> date('Y-m-d'),
                'last_login_time'		=> date('H:i:s'),
                'active' => 1
              );
              $this->Core_Model->update('tbl_akun','username',$username,$data);
              redirect('dashboard','refresh');
            }
          }

        }
}
?>
