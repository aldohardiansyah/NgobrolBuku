<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adm_dashboard extends CI_Controller {

      function index()
    	{
        if ($this->session->userdata('role_user')=='Admin')
			{
            $data = array(
                        'record_lapor' => $this->M_Laporan->getjoin_lapor_review(),
                        'record_diskusi' => $this->M_Diskusi->getjoin_negasi(),
                        'record_last' => $this->Core_Model->read_limit('tbl_akun','last_login_date',5),
                        'record_3'=> $this->M_Dashboard->getjoin(),
                        'title' => "Admin - Dashboard"
                        );
        $this->load->view('header_adm', $data);
        $this->load->view('subnavbar_adm', $data);
        $this->load->view('v_adm_dashboard', $data);
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
