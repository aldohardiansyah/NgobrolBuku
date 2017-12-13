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
    <title>Edit Data Buku</title>
</head>
<body>
<div class="container">
    <center>
    <h3> Ubah Data Buku </h3>
    </center>

    <?php if(!empty($record)) :?>
    <?php foreach ($record as $row) : ?>

    <form action="<?php echo base_url('adm_buku/edit_buku/'.$row['buku_ID']);?>" method="POST" class="form-signup">
      <br/>
      Penulis : <input class="form-control" name="penulis" value="<?php echo $row['penulis']; ?>" type="text" required />
      <br/>
      Kode Penulis : <input class="form-control" name="penulis_kode" value="<?php echo $row['penulis_kode']; ?>" type="text" required />
      <br/>
      Judul Buku : <input class="form-control" name="judul_buku" value="<?php echo $row['judul_buku']; ?>" type="text" required />
      <br/>
      Penerbit : <input class="form-control" name="penerbit" value="<?php echo $row['penerbit']; ?>" type="text" />
      <br/>
      Tahun Terbit : <input class="form-control" name="thn_terbit" value="<?php echo $row['thn_terbit']; ?>" type="date" />
      <br/>
      ISBN/ISBN13 : <input class="form-control" name="isbn" value="<?php echo $row['isbn']; ?>" type="text" />
      <br/>
      Jumlah Halaman : <input class="form-control" name="hal_buku" value="<?php echo $row['hal_buku']; ?>" type="text" />
      <br/>
      Kategori Buku : <input class="form-control" name="kategori_buku" value="<?php echo $row['kategori_buku']; ?>" type="text" />
      <br/>
      Gambar : <input class="form-control" name="gambar" value="<?php echo $row['gambar']; ?>" type="text" />
      <br/>
      Ringkasan : <textarea class="form-control" type="textarea" name="ringkasan" rows="10"><?php echo $row['ringkasan']; ?></textarea>
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
