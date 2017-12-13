<!DOCTYPE html>
<!--
Nama   : Kolom Sastra
Auhtor : Aldo Hardiansyah
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--CSS BOOTSTRAP-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <!--CSS UTAMA-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <!--JAVACSRIPTssNYA-->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/ckeditor/ckeditor.js"></script>
    <title><?php echo $title; ?></title>
</head>

<body>

<!--NAVBAR-->
<nav class="navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#target-list">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url(); ?>dashboard">Ngobrol Buku </a>
      </div>

      <div class="collapse navbar-collapse" id="target-list">
        <ul class="nav navbar-nav">
          <li><a href="<?php echo base_url(); ?>dashboard"><i class="glyphicon glyphicon-home"></i> Beranda</a></li>
          <li><a href="<?php echo base_url(); ?>biografi"><i class="glyphicon glyphicon-bookmark"></i> Penulis</a></li>
          <li><a href="<?php echo base_url(); ?>buku"><i class="glyphicon glyphicon-book"></i> Buku</a></li>
          <li><a href="<?php echo base_url(); ?>diskusi"><i class="glyphicon glyphicon-th-list"></i> Diskusi</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
        <li><a href="" data-toggle="modal" data-target="#myModal_info"><i class="glyphicon glyphicon-comment"></i> Info & Kontak</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class= "glyphicon glyphicon-user"></i> <?php echo $this->session->userdata['username']; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class=""><a href="<?php echo base_url('profile/profile_lihat/'.$this->session->userdata('akun_ID'));?>"> <i class="glyphicon glyphicon-equalizer pull-right"></i><span>Profil</span> </a> </li>
            <li class="divider"></li>
            <li class=""><a href="<?php echo base_url(); ?>adm_dashboard"><i class="glyphicon glyphicon-dashboard pull-right"></i><span>Dashboard</span> </a> </li>
            <li class="divider"></li>
            <li class=""><a href="<?php echo base_url(); ?>adm_biografi"><i class="glyphicon glyphicon-align-center pull-right"></i><span>Biografi</span> </a> </li>
            <li class="divider"></li>
            <li class=""><a href="<?php echo base_url(); ?>adm_buku"><i class="glyphicon glyphicon-book pull-right"></i><span>Buku</span> </a></li>
            <li class="divider"></li>
            <li class=""><a href="<?php echo base_url(); ?>adm_diskusi"><i class="glyphicon glyphicon-th pull-right"></i><span>Diskusi</span> </a> </li>
            <li class="divider"></li>
            <li class=""><a href="<?php echo base_url(); ?>adm_user"><i class=" glyphicon glyphicon-user pull-right"></i><span>User</span> </a> </li>
            <li class="divider"></li>
            <li class=""><a href="<?php echo base_url(); ?>adm_saran"><i class=" glyphicon glyphicon-send pull-right"></i><span>Kotak Masuk</span> </a> </li>
            <li class="divider"></li>
            <li class=""><a href="<?php echo base_url(); ?>adm_lapor"><i class=" glyphicon glyphicon-flag pull-right"></i><span>Laporan</span> </a> </li>
            <li class="divider"></li>
            <li class=""><a href="<?php echo base_url(); ?>adm_pengaturan"><i class=" glyphicon glyphicon-cog pull-right"></i><span>Pengaturan</span> </a> </li>
            <li class="divider"></li>
            <li><a href="<?php echo base_url(); ?>logout"><i class="glyphicon glyphicon-log-out pull-right"></i>Log out</a></li>
          </ul>
        </li>

        </div>
    </div>
</nav>

<!-- Modal -->
<div id="myModal_info" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- konten modal-->
    <div class="modal-content">
      <!-- heading modal -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><center>Tentang Kami</center></h4>
      </div>
      <!-- body modal -->
      <div class="modal-body wadidaw2">
        <form action="<?php echo base_url(); ?>profile/saran" method="POST">
          <div class="row">
            <div class="col-lg-6">
              <h3>Ngobrol Buku</h3> <small><h5>dibangun dari sebuah pengalaman membaca pengembang, dimana pengembang selalu mendapatkan rekomendasi buku-buku bacaan bagus dari banyak orang sekitar, menyenangkan kalau semua orang mungkin juga bisa menemukan bacaan kesukaannya disini berkat rekomendasi dari orang lain</small></h5>
            </div>
            <div class="col-lg-6">
              <center>
                <br>
              <img class="img-circle" src="<?php echo base_url().'assets/img/founder.jpg';?>" width="140" height="140"></img>
                <h5>Aldo Hardiansyah</h5>
                <h6><small>CO-Founder</small></h6>
                <h6><small>AFlyingStuka@gmail.com</small></h6>
              </center>
            </div>
          </div>
          <hr>
            <div class="form-group">
            <h6>Senang bisa terus berkembang bersama Anda !</h6>
            <textarea class="form-control" rows="3" name="isi_saran"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" value="Kirim Saran" class="btn btn-lg btn-primary btn-block" >
          </div>
        </form>
      </div>
      <!-- footer modal -->
      <div class="modal-footer">
        <h6><small>Diajukan untuk memenuhi tugas akhir setara Sarjana Muda</small></h6>
      </div>
    </div>
  </div>
</div><!--/*MODAL-->
