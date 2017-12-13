<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$autoload['packages'] = array();

$autoload['libraries'] = array('database','form_validation','session','pagination', 'upload');

$autoload['drivers'] = array();

$autoload['helper'] = array('URL','file','form');

$autoload['config'] = array();

$autoload['language'] = array();

$autoload['model'] = array('M_Login','M_User','M_Daftar','M_Buku','Core_Model','M_Dashboard', 'M_Profile', 'M_Laporan', 'M_Diskusi');
