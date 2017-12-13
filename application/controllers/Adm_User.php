<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adm_user extends CI_Controller {

      function index()
      {
        if ($this->session->userdata('role_user')=='Admin')
      {
        $data = array('record' => $this->Core_Model->read('tbl_akun','akun_ID'),
                      'title' => "Admin - User"
                      );
        $this->load->view('header_adm', $data);
        $this->load->view('subnavbar_adm', $data);
        $this->load->view('v_adm_user', $data);
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

    function tambah_akun(){
        date_default_timezone_set('Asia/Jakarta');
        // set form validation rules
        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required|min_length[3]|max_length[30]');
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required|min_length[3]|max_length[30]');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|max_length[30]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('address', 'Address', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required');

        // submit
        if ($this->form_validation->run() == FALSE)
        {
            // fails
            $this->load->view('v_dashboard');
        }
        else
        {
            $tgl=$this->input->post('tgl_lahir');
            $bln=$this->input->post('bln_lahir');
            $thn=$this->input->post('thn_lahir');
            //insert user details into db
            $data = array(
                'firstname' => $this->input->post('firstname'),
                'lastname' => $this->input->post('lastname'),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'role_user' => 'User',
                'password' => $this->input->post('password'),
                'birthdate' => date($thn.'-'.$bln.'-'.$tgl),
                'address' => $this->input->post('address'),
                'jenis_kel' => $this->input->post('jenis_kel'),
                'created_on' 	=> date('Y-m-d'),
            );
            $hasil=$this->M_Daftar->daftar_akun($data);
            if ($hasil!=1)
            {
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Akun Berhasil Ditambahkan </div>');
                redirect('adm_user');
            }
            else
            {
                // error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Ada yang error! Silahkan coba lagi nanti</div>');
                redirect('adm_user');
            }
        }
    }


    function hapus_akun($ID='0')
    {
      if ($this->session->userdata('role_user')=='Admin')
      {
        $this->Core_Model->delete('tbl_akun','akun_ID', $ID);
        $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Akun Berhasil di Hapus</div>');
        redirect('adm_user','refresh');
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


    function akun_lihat($ID='0')
    {
      if ($this->session->userdata('role_user')=='Admin')
      {
        $data = array('record' => $this->Core_Model->read_where('tbl_akun','akun_ID',$ID),
                  'title' => "Ubah Data"
                  );
        $this->load->view('v_adm_user_edit', $data);
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

    function edit_akun($ID='0')
    {
      if ($this->session->userdata('role_user')=='Admin')
      {
        $data = array(
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'role_user' => $this->input->post('role_user'),
            'password' => $this->input->post('password'),
            'birthdate' => $this->input->post('birthdate'),
            'address' => $this->input->post('address'),
            'jenis_kel' => $this->input->post('jenis_kel'),
        );
        $hasil=$this->Core_Model->update('tbl_akun','akun_ID',$ID,$data);
        if ($hasil!=1)
        {
            $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Data Berhasil di Ubah </div>');
            redirect('adm_user');
        }
        else
        {
            // error
            $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Ada yang error! Silahkan coba lagi nanti</div>');
            redirect('adm_user');
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
