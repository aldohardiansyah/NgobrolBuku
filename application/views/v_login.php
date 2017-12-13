<!DOCTYPE html>
<!--
Nama   : Ngobrol Buku
Auhtor : Aldo Hardiansyah
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--CSS BOOTSTRAP-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <!--CSS UTAMA-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style-login.css">
    <!--JAVACSRIPTssNYA-->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
    <title>Login</title>
</head>

<body>
<!--NAVIGASI BLOGG-->
<div class="container">

    <div class="col-sm-8 col-sm-offset-2 main">
    <div class="col-sm-6 panel left-side">
    <h1>Ngobrol Buku</h1>
    <hr color="red">
    <p>Ngobrol-Ngobrol Bareng Soal Buku</p><br>
       <p><i class="glyphicon glyphicon-info-sign"></i> Informasi berbagai judul buku</p>
       <p><i class="glyphicon glyphicon-user"></i> Biografi penulis-penulis terkenal</p>
       <p><i class="glyphicon glyphicon-book"></i> Bagi buku apa yang lagi kamu baca</p>
       <p><i class="glyphicon glyphicon-thumbs-up"></i> Review & kasih rekomendasi buku</p>
       <p><i class="glyphicon glyphicon-th-list"></i> Diskusi bareng pembaca lain</p>
       <p><i class="glyphicon glyphicon-transfer"></i> Mau jual atau cari buku bisa</p>
    </div><!--col-sm-6-->
    <br>
    <br>
    <br>
    <div class="col-sm-6 panel right-side">
    <h3>Login</h3>
    <hr>
<!--Form with header-->
    <div class="form">
        <form action="<?php echo base_url(); ?>login/cek_login" method="post">
        <div class="form-group">
        <label for="username">Username :</label>
            <input type="text" id="username" name="username" class="form-control">
        </div>
        <div class="form-group">
        <label for="password">Password nya :</label>
            <input type="password" id="password" name="password" class="form-control">
        </div>
        <div class="text-xs-center">
            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
        </div>
        <div class="bottom text-center">
          Belum terdaftar ? <a href="<?php echo base_url(); ?>daftar" ><b>Daftar Disini</b></a>
        </div>
      </form>
      </div>
<!--/Form with header-->

    </div><!--col-sm-6-->
  </div><!--col-sm-8-->

</div><!--container-->
</body>

</html>
