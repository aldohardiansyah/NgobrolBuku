<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adm_buku extends CI_Controller {

      function index()
      {
          if ($this->session->userdata('role_user')=='Admin')
          {
            $data = array('record' => $this->Core_Model->read('tbl_buku','buku_ID'),
                        'title' => "Admin - Buku"
                        );
                      $this->load->view('header_adm', $data);
                      $this->load->view('subnavbar_adm', $data);
                      $this->load->view('v_adm_buku', $data);
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


      function buku_review()
      {
          if ($this->session->userdata('role_user')=='Admin')
          {
            $data = array('record' => $this->M_Buku->getjoin_reviewbuku_2(),
                        'title' => "Admin - Buku"
                        );
                      $this->load->view('header_adm', $data);
                      $this->load->view('subnavbar_adm', $data);
                      $this->load->view('v_adm_buku_review', $data);
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


      function aksi_tambah()
      {
        date_default_timezone_set('Asia/Jakarta');
        $this->form_validation->set_rules('judul_buku', 'Judul Buku', 'trim|required');
        $this->form_validation->set_rules('penulis', 'Penulis', 'trim|required');
        $this->form_validation->set_rules('penerbit', 'Penerbit', 'trim|required');
        $this->form_validation->set_rules('thn_terbit', 'Tahun Terbit', 'trim|required');
        $this->form_validation->set_rules('isbn', 'ISBN/ISBN13', 'trim|required');
        $this->form_validation->set_rules('hal_buku', 'Halaman', 'trim|required');
        $this->form_validation->set_rules('kategori_buku', 'Kategori', 'trim|required');

        if ($this->form_validation->run() == FALSE)
        {
            redirect('dashboard','refresh');
        }
        else
        {

            $data = array(
                    'judul_buku' => $this->input->post('judul_buku'),
                    'penulis' => $this->input->post('penulis'),
                    'penulis_kode' => $this->input->post('penulis_kode'),
                    'penerbit' => $this->input->post('penerbit'),
                    'thn_terbit' => $this->input->post('thn_terbit'),
                    'isbn' => $this->input->post('isbn'),
                    'hal_buku' => $this->input->post('hal_buku'),
                    'kategori_buku' => $this->input->post('kategori_buku'),
                    'gambar' => $this->input->post('gambar'),
                    'ringkasan' => $this->input->post('ringkasan'),
                    'created_on' 	=> date('Y-m-d'),
                    );
            $hasil=$this->Core_Model->insert('tbl_buku',$data);
            if ($hasil!=1)
            {
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Buku Berhasil Ditambahkan</div>');
                redirect('adm_buku','refresh');
            }
            else
            {
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Ada yang error!!! Silahkan coba lagi nanti</div>');
                redirect('adm_buku','refresh');
            }

        }

      }/* /aksi_tambah */


      function hapus_buku($ID='0')
      {
          $this->Core_Model->delete('tbl_buku','buku_ID', $ID);
          $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Buku Berhasil di Hapus</div>');
          redirect('adm_buku','refresh');
      }


      function buku_lihat($ID='0')
      {
        if ($this->session->userdata('role_user')=='Admin')
        {
          $data = array('record' => $this->Core_Model->read_where('tbl_buku','buku_ID',$ID),
                    'title' => "Ubah Data"
                    );
          $this->load->view('v_adm_buku_edit', $data);
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

      function edit_buku($ID='')
      {
        if ($this->session->userdata('role_user')=='Admin')
        {
          $data = array(
              'penulis' => $this->input->post('penulis'),
              'judul_buku' => $this->input->post('judul_buku'),
              'penerbit' => $this->input->post('penerbit'),
              'thn_terbit' => $this->input->post('thn_terbit'),
              'isbn' => $this->input->post('isbn'),
              'hal_buku' => $this->input->post('hal_buku'),
              'kategori_buku' => $this->input->post('kategori_buku'),
              'gambar' => $this->input->post('gambar'),
              'ringkasan' => $this->input->post('ringkasan'),
          );
          $hasil=$this->Core_Model->update('tbl_buku','buku_ID',$ID, $data);
          if ($hasil!=1)
          {
              $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Data Berhasil di Ubah </div>');
              redirect('adm_buku');
          }
          else
          {
              // error
              $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Ada yang error! Silahkan coba lagi nanti</div>');
              redirect('adm_buku');
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

      function hapus_konten_review($ID)
      {
          $this->Core_Model->delete('tbl_review','review_ID', $ID);
          $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Data Berhasil di Hapus</div>');
          redirect('adm_buku/buku_review','refresh');
      }

}
?>
