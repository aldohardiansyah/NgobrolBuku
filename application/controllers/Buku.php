<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class buku extends CI_Controller {

      function index()
      {
      if ($this->session->userdata('role_user')=='Admin')
      {
        $data = array('record' => $this->Core_Model->read('tbl_buku','buku_ID'),
                      'record_2' =>$this->Core_Model->read('tbl_review','review_ID'),
                    'title' => "Buku"
                    );
        $this->load->view('header_adm', $data);
        $this->load->view('v_buku', $data);
        $this->load->view('footer');
      }
      elseif ($this->session->userdata('role_user')=='User')
      {
        $data = array('record' => $this->Core_Model->read('tbl_buku','buku_ID'),
                    'title' => "Buku"
                    );
        $this->load->view('header', $data);
        $this->load->view('v_buku', $data);
        $this->load->view('footer');
      }
      else
      {
        redirect('Login', 'refresh');
      }
      }


      function index_categori($Kategori)
      {
      if ($this->session->userdata('role_user')=='Admin')
      {
        $data = array('record' => $this->Core_Model->read_where_order('tbl_buku','kategori_buku',$Kategori,'created_on'),
                    'title' => "Buku"
                    );
        $this->load->view('header_adm', $data);
        $this->load->view('v_buku', $data);
        $this->load->view('footer');
      }
      elseif ($this->session->userdata('role_user')=='User')
      {
        $data = array('record' => $this->Core_Model->read_where_order('tbl_buku','kategori_buku',$Kategori,'created_on'),
                    'title' => "Buku"
                    );
        $this->load->view('header', $data);
        $this->load->view('v_buku', $data);
        $this->load->view('footer');
      }
      else
      {
        redirect('Login', 'refresh');
      }
      }



      function index_cari()
      {
      if ($this->session->userdata('role_user')=='Admin')
      {
        $keyword = $this->input->post('katakunci');
        $data = array('record' => $this->Core_Model->read_where('tbl_buku','judul_buku',$keyword,'buku_ID'),
                      'record_2' =>$this->Core_Model->read('tbl_review','review_ID'),
                    'title' => "Buku"
                    );
        $this->load->view('header_adm', $data);
        $this->load->view('v_buku', $data);
        $this->load->view('footer');
      }
      elseif ($this->session->userdata('role_user')=='User')
      {
        $data = array('record' => $this->Core_Model->read('tbl_buku','buku_ID'),
                    'title' => "Buku"
                    );
        $this->load->view('header', $data);
        $this->load->view('v_buku', $data);
        $this->load->view('footer');
      }
      else
      {
        redirect('Login', 'refresh');
      }
      }




      function buku_lihat($ID_buku='')
      {
        if ($this->session->userdata('role_user')=='Admin')
        {
          $data = array(
                    'record' => $this->Core_Model->read_where('tbl_buku','buku_ID',$ID_buku),
                    'record_2' => $this->M_Buku->getjoin_reviewbuku($ID_buku),
                    'title' => "Buku",

                    );
          $this->load->view('header_adm',$data);
          $this->load->view('v_buku_lihat',$data);
          $this->load->view('footer');
        }
        elseif ($this->session->userdata('role_user')=='User')
        {
          $data = array(
                      'record' => $this->Core_Model->read_where('tbl_buku','buku_ID',$ID_buku),
                      'record_2' => $this->M_Buku->getjoin_reviewbuku($ID_buku),
                      'title' => "Buku",
                      );
          $this->load->view('header', $data);
          $this->load->view('v_buku_lihat', $data);
          $this->load->view('footer');
        }
        else
        {
          redirect('Login', 'refresh');
        }
      }



      function tambah_selesai_baca($ID_buku)
      {
        $akun_ID_check = $this->session->userdata('akun_ID');
        if ($this->Core_Model->check_data_2('tbl_baca', 'akun_ID', $akun_ID_check, 'buku_ID', $ID_buku) == FALSE)
          {
            $data = array(
                'buku_ID' => $ID_buku,
                'akun_ID' => $this->session->userdata('akun_ID'),
                'created_on' 	=> date('Y-m-d H:i:s'),
            );
            $hasil=$this->Core_Model->insert('tbl_baca',$data);
            if ($hasil!=1)
            {
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Buku ditambahkan ke daftar bacaan anda</div>');
                redirect('buku');
            }
            else
            {
                // error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Ada yang error!!! Silahkan coba lagi nanti</div>');
                redirect('buku');
            }
            return TRUE;
          }
          else
          {
            $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Buku Sudah Ditambahkan</div>');
            redirect('buku');
            return FALSE;
          }
      }


      function tambah_ingin_baca($ID_buku)
      {
        $akun_ID_check = $this->session->userdata('akun_ID');
        if ($this->Core_Model->check_data_2('tbl_ibaca', 'akun_ID', $akun_ID_check, 'buku_ID', $ID_buku) == FALSE)
          {
            $data = array(
                'buku_ID' => $ID_buku,
                'akun_ID' => $this->session->userdata('akun_ID'),
                'created_on' 	=> date('Y-m-d H:i:s'),
            );
            $hasil=$this->Core_Model->insert('tbl_ibaca',$data);
            if ($hasil!=1)
            {
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Buku ditambahkan ke daftar bacaan anda</div>');
                redirect('buku');
            }
            else
            {
                // error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Ada yang error!!! Silahkan coba lagi nanti</div>');
                redirect('buku');
            }
            return TRUE;
          }
          else
          {
            $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Buku Sudah Ditambahkan</div>');
            redirect('buku');
            return FALSE;
          }
      }



      function tambah_kasih_review($ID_buku)
      {
        $akun_ID_check = $this->session->userdata('akun_ID');
        if ($this->Core_Model->check_data_2('tbl_review', 'akun_ID', $akun_ID_check, 'buku_ID', $ID_buku) == FALSE)
          {
            $data = array(
                'buku_ID' => $ID_buku,
                'akun_ID' => $this->session->userdata('akun_ID'),
                'isi_review' => $this->input->post('isi_review'),
                'rating' => $this->input->post('rating'),
                'created_on' 	=> date('Y-m-d H:i:s'),
            );
            $data2 = array(
                'buku_ID' => $ID_buku,
                'akun_ID' => $this->session->userdata('akun_ID'),
                'created_on' 	=> date('Y-m-d H:i:s'),
            );
            $data3 = array(
                'akun_ID' => $this->session->userdata('akun_ID'),
            );
            $hasil=$this->Core_Model->insert('tbl_review',$data);
            $hasil2=$this->Core_Model->insert('tbl_baca',$data2);
            $hasil3=$this->Core_Model->insert('tbl_level',$data3);
            if ($hasil!=1 && $hasil2!=1 && $hasil3!=1)
            {
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Terima kasih sudah memberikan review</div>');
                redirect('buku/buku_lihat/'.$ID_buku);
            }
            else
            {
                // error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Ada yang error!!! Silahkan coba lagi nanti</div>');
                redirect('buku/buku_lihat/'.$ID_buku);
            }
            return TRUE;
          }
          else
          {
            $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Anda Sudah Kasih Review</div>');
            redirect('buku/buku_lihat/'.$ID_buku);
            return FALSE;
          }
      }



          /*pelapor_ID=akun_ID TERUS data_ID=review_ID*/
          function report_review_dashboard($ID_review){
          $akun_ID_check = $this->session->userdata('username');
          if ($this->Core_Model->check_data_2('tbl_lapor', 'pelapor', $akun_ID_check, 'data_ID', $ID_review) == FALSE)
            {
             date_default_timezone_set('Asia/Jakarta');
              // set form validation rules
              $this->form_validation->set_rules('jenis_pelanggaran', 'Jenis Pelanggaran', 'trim|required');
              $this->form_validation->set_rules('isi_laporan', 'Isi Laporan', 'trim|required|min_length[10]');

                $data = array(
                  'jenis_pelanggaran' => $this->input->post('jenis_pelanggaran'),
                  'kategori_lapor' => 'Review',
                  'data_ID' => $ID_review,
                  'pelapor' => $akun_ID_check,
                  'isi_laporan' => $this->input->post('isi_laporan'),
                  'created_on' 	=> date('Y-m-d H:i'),
                );

                  $hasil=$this->Core_Model->insert('tbl_lapor',$data);
                  if ($hasil!=1)
                  {
                      $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Laporan Anda Sudah Dilaporkan ke Admin</div>');
                      redirect('dashboard');
                  }
                  else
                  {
                      // error
                      $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Ada yang error!!! Silahkan coba lagi nanti</div>');
                      redirect('dashboard');
                  }

              }
              else
              {
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Maaf, Anda Sudah Melaporkan Review Ini</div>');
                redirect('dashboard');
                return FALSE;
              }
            }



          /*pelapor_ID=akun_ID TERUS data_ID=review_ID*/
          function report_review_buku($ID_review){
          $akun_ID_check = $this->session->userdata('username');
          if ($this->Core_Model->check_data_2('tbl_lapor', 'pelapor', $akun_ID_check, 'data_ID', $ID_review) == FALSE)
            {
             date_default_timezone_set('Asia/Jakarta');
              // set form validation rules
              $this->form_validation->set_rules('jenis_pelanggaran', 'Jenis Pelanggaran', 'trim|required');
              $this->form_validation->set_rules('isi_laporan', 'Isi Laporan', 'trim|required|min_length[10]');

                $data = array(
                  'jenis_pelanggaran' => $this->input->post('jenis_pelanggaran'),
                  'kategori_lapor' => 'Review',
                  'data_ID' => $ID_review,
                  'pelapor' => $akun_ID_check,
                  'isi_laporan' => $this->input->post('isi_laporan'),
                  'created_on' 	=> date('Y-m-d H:i'),
                );

                  $hasil=$this->Core_Model->insert('tbl_lapor',$data);
                  if ($hasil!=1)
                  {
                      $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Laporan Anda Sudah Dilaporkan ke Admin</div>');
                      redirect('buku');
                  }
                  else
                  {
                      // error
                      $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Ada yang error!!! Silahkan coba lagi nanti</div>');
                      redirect('buku');
                  }

              }
              else
              {
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Maaf, Anda Sudah Melaporkan Review Ini</div>');
                redirect('buku');
                return FALSE;
              }
            }



}
?>
