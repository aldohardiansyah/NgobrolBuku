<!-- Page Content -->
<div class="container">
    <!-- Introduction Row -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Biografi
                <small>penulis-penulis tekenal Indonesia</small>
            </h2>
            <p>Mengenal lebih jauh tentang siapa-siapa saja pembesar sastra Indonesia dari generasi ke generasi</p>
            <br>
        </div>
    </div>

    <!-- Biografi Angkatan Pujangga Lama -->
    <div class="container biografi">
    <div class="row">
        <?php if(!empty($record)) :?>
        <?php foreach ($record as $row) : ?>
        <?php $penulis_biografi=substr($row['penulis_biografi'], 0, 200); ?>
        <div class="col-lg-4">
           <img class="img-circle" src="<?php echo base_url().'assets/img/penulis/'.$row['penulis_gambar'];?>.jpg" alt="Generic placeholder image" width="140" height="140">
           <h3><?php echo $row['penulis_nama']; ?></h3>
           <p><?php echo $penulis_biografi; ?>...</p>
           <p><a class="btn btn-default" href="<?php echo base_url('biografi/biografi_lihat/'.$row['penulis_kode']);?>" role="button">View details &raquo;</a></p>
         </div><!-- /.col-lg-4 -->
       <?php endforeach; ?>
       <?php endif; ?>
    </div>
    </div>
