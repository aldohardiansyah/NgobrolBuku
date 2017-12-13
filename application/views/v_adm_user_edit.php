<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--CSS BOOTSTRAP-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <!--CSS UTAMA-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style-signup.css">
    <!--JAVACSRIPTssNYA-->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
    <title>Edit Data User</title>
</head>
<body>
<div class="container">
    <center>
    <h3> Ubah Data Akun </h3>
    </center>
    <br/>
    <?php if(!empty($record)) :?>
    <?php foreach ($record as $row) : ?>

    <form action="<?php echo base_url('adm_user/edit_akun/'.$row['akun_ID']);?>" method="POST" class="form-signup">
      <div class="row">
      <div class="col-xs-6 col-md-6">
        <input class="form-control" name="firstname" value="<?php echo $row['firstname']; ?>" type="text" required autofocus />
      </div>
      <div class="col-xs-6 col-md-6">
        <input class="form-control" name="lastname" value="<?php echo $row['lastname']; ?>" type="text" required />
      </div>
      </div>
      <br/>
      <input class="form-control" name="username" value="<?php echo $row['username']; ?>" type="username" />
      <br/>
      <input class="form-control" name="password" value="<?php echo $row['password']; ?>" type="password" />
      <br/>
      <input class="form-control" name="email" value="<?php echo $row['email']; ?>" type="email" />
      <br/>
      <select class="form-control" name="role_user">
      <option value="" disabled selected><?php echo $row['role_user']; ?></option>
      <option value="Admin">Admin</option>
      <option value="User">User</option>
      </select>
      <br/>
      <input class="form-control" name="birthdate" value="<?php echo $row['birthdate']; ?>" type="birthdate" />
      <br/>
      <input class="form-control" name="address" value="<?php echo $row['address']; ?>" type="address" />
      <br/>
      <select class="form-control" name="jenis_kel">
      <option value="" disabled selected><?php echo $row['jenis_kel']; ?></option>
      <option value="L">L</option>
      <option value="P">P</option>
      </select>
      <br/>
      <input type="submit" name="submit" value="Ubah Data" class="btn btn-lg btn-primary btn-block" >
      <br/>
      </form>
      <?php endforeach; ?>
      <?php endif; ?>
      </div>
  </div>
  <!--SCRIPT WAJIB DARI SONONYE-->
  <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </body>
  </html>
