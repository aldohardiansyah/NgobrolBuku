<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adm_lapor extends CI_Controller {

      function index()
      {
        if ($this->session->userdata('role_user')=='Admin')
      {
        $data = array('record' => $this->M_Laporan->getjoin_lapor_review(),
                      'title' => "Admin - Laporan"
                      );
        $this->load->view('header_adm', $data);
        $this->load->view('subnavbar_adm', $data);
        $this->load->view('v_adm_laporan', $data);
        $this->load->view('footer');

      }
       elseif ($this->session->userdata('role_user')=='User')
      {
        redirect('dashboard', 'refresh');
      }
      else
      {
        redirect('login', 'refresh');
      }
      }


      function komentar()
      {
        if ($this->session->userdata('role_user')=='Admin')
      {
        $data = array('record' => $this->M_Laporan->getjoin_lapor_komentar(),
                      'title' => "Admin - Laporan"
                      );
        $this->load->view('header_adm', $data);
        $this->load->view('subnavbar_adm', $data);
        $this->load->view('v_adm_laporan_komentar', $data);
        $this->load->view('footer');

      }
       elseif ($this->session->userdata('role_user')=='User')
      {
        redirect('dashboard', 'refresh');
      }
      else
      {
        redirect('login', 'refresh');
      }
      }


      function hapus_laporan($ID)
      {
          $this->Core_Model->delete('tbl_lapor','lapor_ID', $ID);
          $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Data Berhasil di Hapus</div>');
          redirect('adm_lapor','refresh');
      }

      function hapus_konten_review($ID)
      {
          $LaporID = $this->uri->segment(4);
          $this->Core_Model->delete('tbl_review','review_ID', $ID);
          $this->Core_Model->delete_2('tbl_lapor','lapor_ID',$LaporID,'data_ID', $ID);
          $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Data Berhasil di Hapus</div>');
          redirect('adm_lapor','refresh');
      }


      function hapus_konten_komentar($ID)
      {
          $LaporID = $this->uri->segment(4);
          $this->Core_Model->delete('tbl_komentar','komentar_ID', $ID);
          $this->Core_Model->delete_2('tbl_lapor','lapor_ID',$LaporID,'data_ID', $ID);
          $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Data Berhasil di Hapus</div>');
          redirect('adm_lapor/komentar','refresh');
      }

}
?>
