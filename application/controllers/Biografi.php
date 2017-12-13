<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class biografi extends CI_Controller {

      function index()
      {
        if ($this->session->userdata('role_user')=='Admin')
        {
        $data = array('record' => $this->Core_Model->read('tbl_penulis','penulis_nama'),
                      'title' => "Biografi"
                      );
        $this->load->view('header_adm', $data);
        $this->load->view('v_biografi', $data);
        $this->load->view('footer');
        }
        elseif ($this->session->userdata('role_user')=='User')
        {
        $data = array('record' => $this->Core_Model->read('tbl_penulis','penulis_ID'),
                      'title' => "Biografi"
                      );
        $this->load->view('header',$data);
        $this->load->view('v_biografi',$data);
        $this->load->view('footer');
        }
      }


      function biografi_lihat($penulis_kode='')
      {
        $data['title'] = "Biografi";
        if ($this->session->userdata('role_user')=='Admin')
        {
        $data = array('record' => $this->Core_Model->read_where('tbl_penulis','penulis_kode',$penulis_kode),
                      'record_2' => $this->Core_Model->read_where('tbl_buku','penulis_kode',$penulis_kode),
                      'title' => "Biografi"
                      );
        $this->load->view('header_adm', $data);
        $this->load->view('v_biografi_lihat', $data);
        $this->load->view('footer');
        }
        elseif($this->session->userdata('role_user')=='User')
        {
        $data = array('record' => $this->Core_Model->read_where('tbl_penulis','penulis_kode',$penulis_kode),
                      'record_2' => $this->Core_Model->read_where('tbl_buku','penulis_kode',$penulis_kode),
                      'title' => "Biografi"
                      );
        $this->load->view('header', $data);
        $this->load->view('v_biografi_lihat', $data);
        $this->load->view('footer');
        }
      }

}
?>
