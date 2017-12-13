<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adm_pengaturan extends CI_Controller {

      function index()
      {
        $akun_ID_check = $this->session->userdata('akun_ID');
        if ($this->session->userdata('role_user')=='Admin')
      {
            $data = array('record' => $this->Core_Model->read_where('tbl_akun','akun_ID',$akun_ID_check),
                        'title' => "Admin - Pengaturan"
                        );
        $this->load->view('header_adm', $data);
        $this->load->view('subnavbar_adm', $data);
        $this->load->view('v_adm_pengaturan', $data);
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


      function Update_profil()
      {
            $akun_ID_check = $this->session->userdata('akun_ID');
            $data = array(
                  'firstname' => $this->input->post('firstname'),
                  'lastname' => $this->input->post('lastname'),
                  'username' => $this->input->post('username'),
                  'email' => $this->input->post('email'),
                  'password' => md5($this->input->post('password')),
                  'address' => $this->input->post('address'),
            );
            $hasil=$this->Core_Model->update('tbl_akun','akun_ID',$akun_ID_check,$data);

            if ($hasil!=1)
              {
                  $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Buku Berhasil Ditambahkan</div>');
                  redirect('adm_pengaturan','refresh');
              }
            else
              {
                  $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Ada yang error!!! Silahkan coba lagi nanti</div>');
                  redirect('adm_pengaturan','refresh');
              }

      }

}
?>
