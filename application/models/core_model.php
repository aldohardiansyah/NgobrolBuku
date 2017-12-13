<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Core_Model extends CI_Model{

    function __construct(){
    parent::__construct();
    }


    /*INSERT DATA*/
    function insert($table,$data){
        $this->db->insert($table,$data);
    }


    /*BACA DATA*/
    function read($table, $order_by){
        $query=$this->db->query("Select * from $table order by $order_by ASC");
        if($query->num_rows()>0){
          foreach ($query->result_array() as $row) { $data[]=$row; }
          $query->free_result();
        }
        else{
          $data=NULL;
        }
        return $data;
      }


    /*BACA DATA DENGAN KONDISI*/
    function read_where($table, $wherekolom, $datakolom){
        $this->db->where($wherekolom, $datakolom);
        $query=$this->db->get($table);
        if($query->num_rows()>0){
          foreach ($query->result_array() as $row) { $data[]=$row; }
          $query->free_result();
        }
        else{
          $data=NULL;
        }
        return $data;
      }


    /*BACA DATA DENGAN KONDISI*/
    function read_where_order($table, $wherekolom, $datakolom, $order_by){
        $this->db->where($wherekolom, $datakolom);
        $this->db->order_by($order_by,'DESC');
        $query=$this->db->get($table);
        if($query->num_rows()>0){
          foreach ($query->result_array() as $row) { $data[]=$row; }
          $query->free_result();
        }
        else{
          $data=NULL;
        }
        return $data;
      }


    /*BACA DATA DENGAN LIMIT*/
    function read_limit($table, $order_by, $limit){
        $query=$this->db->query("Select * from $table order by $order_by DESC limit $limit");
        if($query->num_rows()>0){
          foreach ($query->result_array() as $row) { $data[]=$row; }
          $query->free_result();
        }
        else{
          $data=NULL;
        }
        return $data;
      }


    /*UPDATE DATA*/
    function update($table,$wherekolom,$datakolom,$data){
    	$this->db->where($wherekolom, $datakolom);
    	$hasil = $this->db->update($table, $data);
    }


    /*CHECK DATA*/
    function check_data($table, $wherekolom, $datakolom){
        $this->db->where($wherekolom, $datakolom);
        $query=$this->db->get($table);
        if($query->num_rows()>0){
          foreach ($query->result_array() as $row) { $data[]=$row; }
          $query->free_result();
        }
        else{
          $data=NULL;
        }
        return $data;
      }


    /*CHECK DATA 2 KOLOM */
    function check_data_2($table, $wherekolom, $datakolom, $wherekolom2, $datakolom2){
        $this->db->where($wherekolom, $datakolom);
        $this->db->where($wherekolom2, $datakolom2);
        $query=$this->db->get($table);
        if($query->num_rows()>0){
          foreach ($query->result_array() as $row) { $data[]=$row; }
          $query->free_result();
        }
        else{
          $data=NULL;
        }
        return $data;
      }


    /*HAPUS DATA*/
    function delete($table,$wherekolom,$datakolom){
        $this->db->where($wherekolom, $datakolom);
        $this->db->delete($table);
    }


    function delete_2($table,$wherekolom,$datakolom, $wherekolom2, $datakolom2){
        $this->db->where($wherekolom, $datakolom);
        $this->db->where($wherekolom2, $datakolom2);
        $this->db->delete($table);
    }

}
?>
