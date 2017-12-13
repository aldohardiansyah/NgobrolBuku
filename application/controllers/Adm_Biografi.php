<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adm_biografi extends CI_Controller {

      function index()
      {
        if ($this->session->userdata('role_user')=='Admin')
      {
        $data = array('record' => $this->Core_Model->read('tbl_penulis','penulis_ID'),
                      'title' => "Admin - Biografi"
                      );
        $this->load->view('header_adm', $data);
        $this->load->view('subnavbar_adm', $data);
        $this->load->view('v_adm_biografi', $data);
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
    }/* /index */


    function aksi_tambah()
    {
      date_default_timezone_set('Asia/Jakarta');
      $this->form_validation->set_rules('penulis_nama', 'Nama penulis', 'trim|required');
      $this->form_validation->set_rules('penulis_gambar', 'Foto', 'trim|required');
      $this->form_validation->set_rules('penulis_kode', 'Kode', 'trim|required');
      $this->form_validation->set_rules('penulis_biografi', 'Biografi', 'trim|required');

      if ($this->form_validation->run() == FALSE)
      {
          redirect('dashboard','refresh');
      }
      else
      {

          $data = array(
                  'penulis_nama' => $this->input->post('penulis_nama'),
                  'penulis_kode' => $this->input->post('penulis_kode'),
                  'penulis_gambar' => $this->input->post('penulis_gambar'),
                  'penulis_biografi' => $this->input->post('penulis_biografi'),
                  'created_on' 	=> date('Y-m-d'),
                  );

          $hasil=$this->Core_Model->insert('tbl_penulis',$data);
          if ($hasil!=1)
          {
              $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Buku Berhasil Ditambahkan</div>');
              redirect('adm_biografi','refresh');
          }
          else
          {
              $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Ada yang error!!! Silahkan coba lagi nanti</div>');
              redirect('adm_biografi','refresh');
          }
      }
    }/* /aksi_tambah */


    function hapus_biografi($ID='0')
    {
        $this->Core_Model->delete('tbl_penulis','penulis_ID', $ID);
        $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Data Berhasil di Hapus</div>');
        redirect('adm_biografi','refresh');
    }/* /hapus_buku*/


    function biografi_lihat($ID='0')
    {
      if ($this->session->userdata('role_user')=='Admin')
      {
        $data = array('record' => $this->Core_Model->read_where('tbl_penulis','penulis_ID',$ID),
                  'title' => "Ubah Data"
                  );
        $this->load->view('v_adm_biografi_edit', $data);
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


    function edit_biografi($ID='0')
    {
      date_default_timezone_set('Asia/Jakarta');
      if ($this->session->userdata('role_user')=='Admin')
      {
        $data = array(
            'penulis_nama' => $this->input->post('penulis_nama'),
            'penulis_kode' => $this->input->post('penulis_kode'),
            'penulis_gambar' => $this->input->post('penulis_gambar'),
            'penulis_biografi' => $this->input->post('penulis_biografi'),
            'created_on' 	=> date('Y-m-d'),
        );
        $hasil=$this->Core_Model->update('tbl_penulis','penulis_ID',$ID, $data);
        if ($hasil!=1)
        {
            $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Data Berhasil di Ubah </div>');
            redirect('adm_biografi');
        }
        else
        {
            // error
            $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Ada yang error! Silahkan coba lagi nanti</div>');
            redirect('adm_biografi');
        }
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

}
?>
