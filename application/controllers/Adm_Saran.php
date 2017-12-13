<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adm_saran extends CI_Controller {

      function index()
      {
        if ($this->session->userdata('role_user')=='Admin')
      {
            $data = array('record' => $this->Core_Model->read('tbl_saran','created_on'),
                        'title' => "Admin - Saran"
                        );
        $this->load->view('header_adm', $data);
        $this->load->view('subnavbar_adm', $data);
        $this->load->view('v_adm_saran', $data);
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

}
?>
