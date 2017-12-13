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
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/ckeditor/ckeditor.js"></script>
    <title>Edit Data Biografi</title>
</head>
<div class="container">
    <center>
    <h3> Ubah Data Biografi </h3>
    </center>

    <?php if(!empty($record)) :?>
    <?php foreach ($record as $row) : ?>
      <form action="<?php echo base_url('adm_biografi/edit_biografi/'.$row['penulis_ID']);?>" method="POST" class="form-signup">
        <div class="form-group">
          <input type="text" class="form-control" id="penulis_nama" name="penulis_nama" value="<?php echo $row['penulis_nama']; ?>" >
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="penulis_kode" name="penulis_kode" value="<?php echo $row['penulis_kode']; ?>" >
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="penulis_gambar" name="penulis_gambar" value="<?php echo $row['penulis_gambar']; ?>" >
        </div>
        <div class="form-group">
          <textarea type="text" class="ckeditor" id="ckeditor" name="penulis_biografi"><?php echo $row['penulis_biografi']; ?></textarea>
        </div>
        <div class="form-group">
          <input type="submit" name="submit" value="Ubah Data" class="btn btn-lg btn-primary btn-block" >
        </div>
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
