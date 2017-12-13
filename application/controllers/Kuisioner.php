<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kuisioner extends CI_Controller {

      public function __construct(){
        parent::__construct();
      }


      public function index()
      {
          $data['title'] = "Kuisioner";

          $this->load->view('v_kuisioner', $data);
      }


      }


      function aksi_daftar(){
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
              $username_check = $this->input->post('username');
              if ($this->Core_Model->check_data('tbl_akun', 'username', $username_check) == FALSE)
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
                  'password' => md5($this->input->post('password')),
                  'birthdate' => date($thn.'-'.$bln.'-'.$tgl),
                  'address' => $this->input->post('address'),
                  'jenis_kel' => $this->input->post('jenis_kel'),
                  'created_on' 	=> date('Y-m-d'),
              );
              $hasil=$this->Core_Model->insert('tbl_akun',$data);
              if ($hasil!=1)
              {
                  $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Selamat akun anda sudah terdaftar! Silahkan masuk ke akun anda</div>');
                  redirect('login');
              }
              else
              {
                  // error
                  $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Ada yang error!!! Silahkan coba lagi nanti</div>');
                  redirect('login');
              }
            }
            else
            {
              $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Anda Sudah Terdaftar</div>');
              redirect('daftar');
              return FALSE;
            }
          }
}

?>
