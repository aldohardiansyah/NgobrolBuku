<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

      function index()
      {
       if ($this->session->userdata('role_user')=='Admin')
      {
        $akun_ID_check = $this->session->userdata('akun_ID');
        $data = array('record'=>$this->Core_Model->read_limit('tbl_buku','created_on',3),
                      'record_1'=> $this->M_Buku->getjoin_lagibaca($akun_ID_check),
                      'record_2'=> $this->M_Buku->getjoin_pengenbaca($akun_ID_check),
                      'record_3'=> $this->M_Dashboard->getjoin(),
                      'diskusi'=> $this->M_Diskusi->getjoin_limit(),
                      'level'=> $this->M_Profile->get_level('tbl_level', 'akun_ID', $akun_ID_check),
                      'title'=> 'Ngobrol Buku',
                      'user'=> $this->session->userdata('username'),
                      'akun_ID_check' => $this->session->userdata('akun_ID'),
                      );
        $this->load->view('header_adm', $data);
        $this->load->view('v_dashboard', $data);
        $this->load->view('footer');
      }
      elseif ($this->session->userdata('role_user')=='User')
      {
        $akun_ID_check = $this->session->userdata('akun_ID');
        $data = array('record'=>$this->Core_Model->read_limit('tbl_buku','created_on',3),
                      'record_1'=> $this->M_Buku->getjoin_lagibaca($akun_ID_check),
                      'record_2'=> $this->M_Buku->getjoin_pengenbaca($akun_ID_check),
                      'record_3'=> $this->M_Dashboard->getjoin(),
                      'diskusi'=> $this->M_Diskusi->getjoin_limit(),
                      'level'=> $this->M_Profile->get_level('tbl_level', 'akun_ID', $akun_ID_check),
                      'title'=> 'Ngobrol Buku',
                      'user'=> $this->session->userdata('username'),
                      'akun_ID_check' => $this->session->userdata('akun_ID'),
                      );
        $this->load->view('header', $data);
        $this->load->view('v_dashboard', $data);
        $this->load->view('footer');

      }
      else
      {
        redirect('Login', 'refresh');
      }
      }


      function hapus_review($ID_buku)
      {
          $akun_ID_check = $this->session->userdata('akun_ID');
          $this->Core_Model->delete_2('tbl_review','buku_ID', $ID_buku, 'akun_ID', $akun_ID_check);
          $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Review Berhasil di Hapus</div>');
          redirect('dashboard','refresh');
      }




}
?>
