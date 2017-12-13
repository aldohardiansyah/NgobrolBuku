<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

      function profile_lihat($ID)
      {
       if ($this->session->userdata('role_user')=='Admin')
      {
        $akun_ID_check = $this->session->userdata('akun_ID');
        $data = array('record'=> $this->M_Buku->getjoin_lagibaca($ID),
                      'record_2'=> $this->M_Buku->getjoin_pengenbaca($ID),
                      'record_3'=> $this->M_Profile->getjoin($ID),
                      'record_4'=> $this->M_Profile->getjoin_profile($ID),
                      'level'=> $this->M_Profile->get_level('tbl_level', 'akun_ID', $ID),
                      'title'=> 'Kolom Sastra',
                      'user'=> $this->session->userdata('username'),
                      );
        $this->load->view('header_adm', $data);
        if ($this->session->userdata('akun_ID')==$ID)
        {
        $this->load->view('v_profile', $data, $akun_ID_check);
        }
        else
        {
        $this->load->view('v_profile2', $data, $akun_ID_check);
        }
        $this->load->view('footer');
      }
      elseif ($this->session->userdata('role_user')=='User')
      {
        $akun_ID_check = $this->session->userdata('akun_ID');
        $data = array('record'=> $this->M_Buku->getjoin_lagibaca($ID),
                      'record_2'=> $this->M_Buku->getjoin_pengenbaca($ID),
                      'record_3'=> $this->M_Profile->getjoin($ID),
                      'record_4'=> $this->M_Profile->getjoin_profile($ID),
                      'level'=> $this->M_Profile->get_level('tbl_level', 'akun_ID', $ID),
                      'title'=> 'Kolom Sastra',
                      'user'=> $this->session->userdata('username'),
                      );
        $this->load->view('header', $data);
        if ($this->session->userdata('akun_ID')==$ID)
        {
        $this->load->view('v_profile', $data, $akun_ID_check);
        }
        else
        {
        $this->load->view('v_profile2', $data, $akun_ID_check);
        }
        $this->load->view('footer');

      }
      else
      {
        redirect('login', 'refresh');
      }
      }

      function profile_koleksi($ID)
      {
       if ($this->session->userdata('role_user')=='Admin')
      {
        $akun_ID_check = $this->session->userdata('akun_ID');
        $data = array('record'=> $this->M_Buku->getjoin_lagibaca($ID),
                      'record_2'=> $this->M_Buku->getjoin_pengenbaca($ID),
                      'record_3'=> $this->M_Profile->getjoin($ID),
                      'record_4'=> $this->M_Profile->getjoin_profile($ID),
                      'record_5'=> $this->M_Buku->getjoin_lagibaca_2($ID),
                      'record_6'=> $this->M_Buku->getjoin_pengenbaca_2($ID),
                      'level'=> $this->M_Profile->get_level('tbl_level', 'akun_ID', $ID),
                      'title'=> 'Kolom Sastra',
                      'user'=> $this->session->userdata('username'),
                      );
        $this->load->view('header_adm', $data);
        if ($this->session->userdata('akun_ID')==$ID)
        {
        $this->load->view('v_profile_koleksi', $data, $akun_ID_check);
        }
        else
        {
        $this->load->view('v_profile_koleksi2', $data, $akun_ID_check);
        }
        $this->load->view('footer');
      }
      elseif ($this->session->userdata('role_user')=='User')
      {
        $akun_ID_check = $this->session->userdata('akun_ID');
        $data = array('record'=> $this->M_Buku->getjoin_lagibaca($ID),
                      'record_2'=> $this->M_Buku->getjoin_pengenbaca($ID),
                      'record_3'=> $this->M_Profile->getjoin($ID),
                      'record_4'=> $this->M_Profile->getjoin_profile($ID),
                      'record_5'=> $this->M_Buku->getjoin_lagibaca_2($ID),
                      'record_6'=> $this->M_Buku->getjoin_pengenbaca_2($ID),
                      'level'=> $this->M_Profile->get_level('tbl_level', 'akun_ID', $ID),
                      'title'=> 'Kolom Sastra',
                      'user'=> $this->session->userdata('username'),
                      );
        $this->load->view('header', $data);
        if ($this->session->userdata('akun_ID')==$ID)
        {
        $this->load->view('v_profile_koleksi', $data, $akun_ID_check);
        }
        else
        {
        $this->load->view('v_profile_koleksi2', $data, $akun_ID_check);
        }
        $this->load->view('footer');
      }
      else
      {
        redirect('login', 'refresh');
      }
      }


      function profile_koleksi_ingin($ID)
      {
       if ($this->session->userdata('role_user')=='Admin')
      {
        $akun_ID_check = $this->session->userdata('akun_ID');
        $data = array('record'=> $this->M_Buku->getjoin_lagibaca($ID),
                      'record_2'=> $this->M_Buku->getjoin_pengenbaca($ID),
                      'record_3'=> $this->M_Profile->getjoin($ID),
                      'record_4'=> $this->M_Profile->getjoin_profile($ID),
                      'record_5'=> $this->M_Buku->getjoin_lagibaca_2($ID),
                      'record_6'=> $this->M_Buku->getjoin_pengenbaca_2($ID),
                      'level'=> $this->M_Profile->get_level('tbl_level', 'akun_ID', $ID),
                      'title'=> 'Kolom Sastra',
                      'user'=> $this->session->userdata('username'),
                      );
        $this->load->view('header_adm', $data);
        if ($this->session->userdata('akun_ID')==$ID)
        {
        $this->load->view('v_profile_koleksi_i', $data, $akun_ID_check);
        }
        else
        {
        $this->load->view('v_profile_koleksi2_i', $data, $akun_ID_check);
        }
        $this->load->view('footer');
      }
      elseif ($this->session->userdata('role_user')=='User')
      {
        $akun_ID_check = $this->session->userdata('akun_ID');
        $data = array('record'=> $this->M_Buku->getjoin_lagibaca($ID),
                      'record_2'=> $this->M_Buku->getjoin_pengenbaca($ID),
                      'record_3'=> $this->M_Profile->getjoin($ID),
                      'record_4'=> $this->M_Profile->getjoin_profile($ID),
                      'record_5'=> $this->M_Buku->getjoin_lagibaca_2($ID),
                      'record_6'=> $this->M_Buku->getjoin_pengenbaca_2($ID),
                      'level'=> $this->M_Profile->get_level('tbl_level', 'akun_ID', $ID),
                      'title'=> 'Kolom Sastra',
                      'user'=> $this->session->userdata('username'),
                      );
        $this->load->view('header', $data);
        if ($this->session->userdata('akun_ID')==$ID)
        {
        $this->load->view('v_profile_koleksi_i', $data, $akun_ID_check);
        }
        else
        {
        $this->load->view('v_profile_koleksi2_i', $data, $akun_ID_check);
        }
        $this->load->view('footer');
      }
      else
      {
        redirect('login', 'refresh');
      }
      }


      function hapus_buku_dibaca($ID_buku)
      {
          $akun_ID_check = $this->session->userdata('akun_ID');
          $this->Core_Model->delete_2('tbl_baca','buku_ID', $ID_buku, 'akun_ID', $akun_ID_check);
          $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Buku Berhasil di Hapus</div>');
          redirect('profile/profile_koleksi/'.$akun_ID_check,'refresh');
      }


      function hapus_buku_ibaca($ID_buku)
      {
          $akun_ID_check = $this->session->userdata('akun_ID');
          $this->Core_Model->delete_2('tbl_ibaca','buku_ID', $ID_buku, 'akun_ID', $akun_ID_check);
          $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Buku Berhasil di Hapus</div>');
          redirect('profile/profile_koleksi_ingin/'.$akun_ID_check,'refresh');
      }

      function hapus_review($ID_buku)
      {
          $akun_ID_check = $this->session->userdata('akun_ID');
          $this->Core_Model->delete_2('tbl_review','buku_ID', $ID_buku, 'akun_ID', $akun_ID_check);
          $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Review Berhasil di Hapus</div>');
          redirect('profile/profile_lihat/'.$akun_ID_check,'refresh');
      }

      function saran()
      {
          $akun_ID_check = $this->session->userdata('akun_ID');
          $data = array(
              'akun_ID' => $akun_ID_check,
              'saran_isi' => $this->input->post('isi_saran'),
              'created_on' 	=> date('Y-m-d H:i:s'),
          );
          $hasil=$this->Core_Model->insert('tbl_saran',$data);
          if ($hasil!=1)
          {
              $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Saran disampaikan, senang bisa berkembang bersama</div>');
              redirect('dashboard');
          }
          else
          {
              // error
              $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Ada yang error!!! Silahkan coba lagi nanti</div>');
              redirect('dashboard');
          }
      }
}
?>
