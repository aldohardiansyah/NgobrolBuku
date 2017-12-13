<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adm_diskusi extends CI_Controller {

      function index()
      {
        if ($this->session->userdata('role_user')=='Admin')
      {
            $data = array('record' => $this->M_Diskusi->getjoin_diskusi_admin(),
                        'title' => "Admin - Buku"
                        );
        $this->load->view('header_adm', $data);
        $this->load->view('subnavbar_adm', $data);
        $this->load->view('v_adm_diskusi', $data);
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
            $data = array('record' => $this->M_Diskusi->getjoin_komentar_admin(),
                        'title' => "Admin - Buku"
                        );
        $this->load->view('header_adm', $data);
        $this->load->view('subnavbar_adm', $data);
        $this->load->view('v_adm_diskusi_komentar', $data);
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


      function approve_diskusi($diskusi_ID)
      {
        $data = array(
            'status' => 'approve',
        );
        $hasil=$this->Core_Model->update('tbl_diskusi','diskusi_ID',$diskusi_ID,$data);
        if ($hasil!=1)
        {
            $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Diskusi telah di Approve</div>');
            redirect('adm_diskusi');
        }
        else
        {
            // error
            $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Ada yang error!!! Silahkan coba lagi nanti</div>');
            redirect('adm_diskusi');
        }
      }


        function hapus_diskusi($diskusi_ID)
        {
          $hasil=$this->Core_Model->delete('tbl_diskusi','diskusi_ID',$diskusi_ID);
          if ($hasil!=1)
          {
              $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Diskusi berhasil dihapus</div>');
              redirect('adm_diskusi');
          }
          else
          {
              // error
              $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Ada yang error!!! Silahkan coba lagi nanti</div>');
              redirect('adm_diskusi');
          }
        }


        function hapus_komentar($ID)
        {
            $this->Core_Model->delete('tbl_komentar','komentar_ID', $ID);
            $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Data Berhasil di Hapus</div>');
            redirect('adm_diskusi/komentar','refresh');
        }


}
?>
