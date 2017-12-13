 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class diskusi extends CI_Controller {

      function index()
      {
      if ($this->session->userdata('role_user')=='Admin')
      {
        $data = array('record' => $this->M_Diskusi->getjoin(),
                      'title' => "Diskusi"
                    );
        $this->load->view('header_adm', $data);
        $this->load->view('v_diskusi', $data);
        $this->load->view('footer');
      }
      elseif ($this->session->userdata('role_user')=='User')
      {
        $data = array('record' => $this->M_Diskusi->getjoin(),
                      'title' => "Diskusi"
                    );
        $data['title'] = "Diskusi";
        $this->load->view('header', $data);
        $this->load->view('v_diskusi', $data);
        $this->load->view('footer');

      }
      else
      {
        redirect('Login', 'refresh');
      }
      }


      function index_category($category)
      {
      if ($this->session->userdata('role_user')=='Admin')
      {
        $data = array('record' => $this->M_Diskusi->getjoin_category($category),
                      'title' => "Diskusi"
                    );
        $this->load->view('header_adm', $data);
        $this->load->view('v_diskusi', $data);
        $this->load->view('footer');
      }
      elseif ($this->session->userdata('role_user')=='User')
      {
        $data = array('record' => $this->M_Diskusi->getjoin_category($category),
                      'title' => "Diskusi"
                    );
        $data['title'] = "Diskusi";
        $this->load->view('header', $data);
        $this->load->view('v_diskusi', $data);
        $this->load->view('footer');

      }
      else
      {
        redirect('Login', 'refresh');
      }
      }



      function diskusi_buat()
      {
      date_default_timezone_set('Asia/Jakarta');
      if ($this->session->userdata('role_user')=='Admin')
      {
        $data['title'] = "Buat Diskusi";
        $this->load->view('header_adm', $data);
        $this->load->view('v_diskusi_buat', $data);
        $this->load->view('footer');
      }
      elseif ($this->session->userdata('role_user')=='User')
      {
        $data['title'] = "Buat Diskusi";
        $this->load->view('header', $data);
        $this->load->view('v_diskusi_buat', $data);
        $this->load->view('footer');

      }
      else
      {
        redirect('Login', 'refresh');
      }
      }



      function diskusi_lihat($ID)
      {
      date_default_timezone_set('Asia/Jakarta');
      if ($this->session->userdata('role_user')=='Admin')
      {
        $data = array('record' => $this->M_Diskusi->getjoin_where($ID),
                      'record2' => $this->M_Diskusi->getjoin_where_2($ID),
                      'title' => "Lihat Diskusi"
                    );
        $this->load->view('header_adm', $data);
        $this->load->view('v_diskusi_lihat', $data);
        $this->load->view('footer');
      }
      elseif ($this->session->userdata('role_user')=='User')
      {
        $data = array('record' => $this->M_Diskusi->getjoin_where($ID),
                      'record2' => $this->M_Diskusi->getjoin_where_2($ID),
                      'title' => "Lihat Diskusi"
                    );
        $this->load->view('header', $data);
        $this->load->view('v_diskusi_lihat', $data);
        $this->load->view('footer');

      }
      else
      {
        redirect('Login', 'refresh');
      }
      }


      function tambah_diskusi()
      {
        $akun_ID_check = $this->session->userdata('akun_ID');
        date_default_timezone_set('Asia/Jakarta');
        $this->form_validation->set_rules('diskusi_judul', 'Judul Diskusi', 'trim|required');
        $this->form_validation->set_rules('diskusi_isi', 'Isi Diskusi', 'trim|required');
        $this->form_validation->set_rules('diskusi_kategori', 'Kategori Isi', 'trim|required');

        if ($this->form_validation->run() == FALSE)
        {
            redirect('dashboard','refresh');
        }
        else
        {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '100';
            $data = array(
                    'diskusi_judul' => $this->input->post('diskusi_judul'),
                    'akun_ID' => $akun_ID_check,
                    'diskusi_isi' => $this->input->post('diskusi_isi'),
                    'diskusi_kategori' => $this->input->post('diskusi_kategori'),
                    'diskusi_gambar' => 'blur',
                    'created_on' 	=> date('Y-m-d'),
                    );
            $hasil=$this->Core_Model->insert('tbl_diskusi',$data);
            if ($hasil!=1)
            {
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Diskusi Berhasil Ditambahkan, menunggu konfirmasi admin</div>');
                redirect('diskusi','refresh');
            }
            else
            {
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Ada yang error!!! Silahkan coba lagi nanti</div>');
                redirect('diskusi','refresh');
            }
          }
          }/* /aksi_tambah */


          function tambah_kasih_komentar($ID_diskusi)
          {
            $akun_ID_check = $this->session->userdata('akun_ID');
                $data = array(
                    'diskusi_ID' => $ID_diskusi,
                    'akun_ID' => $this->session->userdata('akun_ID'),
                    'isi_komentar' => $this->input->post('isi_komentar'),
                    'created_on' 	=> date('Y-m-d H:i:s'),
                  );
                $hasil=$this->Core_Model->insert('tbl_komentar',$data);
                if ($hasil!=1)
                {
                    $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Komentar anda terkirim</div>');
                    redirect('diskusi/diskusi_lihat/'.$ID_diskusi);
                }
                else
                {
                    // error
                    $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Ada yang error!!! Silahkan coba lagi nanti</div>');
                    redirect('buku/buku_lihat/'.$ID_buku);
                }
                return TRUE;
          }


          /*pelapor_ID=akun_ID TERUS data_ID=review_ID*/
          function report_komentar($ID_komentar){
          $akun_ID_check = $this->session->userdata('username');
          if ($this->Core_Model->check_data_2('tbl_lapor', 'pelapor', $akun_ID_check, 'data_ID', $ID_komentar) == FALSE)
            {
             date_default_timezone_set('Asia/Jakarta');
              // set form validation rules
              $this->form_validation->set_rules('jenis_pelanggaran', 'Jenis Pelanggaran', 'trim|required');
              $this->form_validation->set_rules('isi_laporan', 'Isi Laporan', 'trim|required|min_length[10]');

                $data = array(
                  'jenis_pelanggaran' => $this->input->post('jenis_pelanggaran'),
                  'kategori_lapor' => 'Komentar',
                  'data_ID' => $ID_komentar,
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



}
?>
