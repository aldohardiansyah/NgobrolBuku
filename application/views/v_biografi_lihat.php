<!-- Page Content -->
<div class="container">
  <br>
      <!-- First Featurette -->
      <div class="featurette" id="about">
        <?php if(!empty($record)) :?>
        <?php foreach ($record as $row) : ?>
          <img class="featurette-image img-circle img-responsive pull-right" src="<?php echo base_url().'assets/img/penulis/'.$row['penulis_gambar'];?>.jpg" width="300" height="300">
          <h3><?php echo $row['penulis_nama']; ?></h3>
          <hr>
        <p><?php echo $row['penulis_biografi']; ?></p>
        <?php endforeach; ?>
        <?php endif; ?>
      </div>

      <div class="featurette" id="about">
        <h4>Karya-karya <?php echo $row['penulis_nama']; ?></h4>
        <hr>
        <?php if(!empty($record_2)) :?>
        <?php foreach ($record_2 as $row) : ?>
            <div class="item">
              <div class="col-md-4">
                  <div class="thumbnail img-buku-tampil">
                      <img src="<?php echo base_url().'assets/img/buku/'.$row['gambar'];?>.jpg" height="50%" width="50%" alt="">
                      <div class="caption">
                          <h4 class="pull-right"></h4>
                          <h4><a href="<?php echo base_url('buku/buku_lihat/'.$row['buku_ID']);?>"><?php echo $row['judul_buku']; ?></a>
                          </h4>
                          <p>Roman Tetralogi Buru mengambil latar belakang dan cikal bakal nation Indonesia di awal abad ke-20.</p>
                      </div>
                      <div class="ratings">
                          <p class="pull-right">15 reviews</p>
                          <p>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                          </p>
                      </div>
                  </div>
              </div>
            </div>
          <?php endforeach; ?>
          <?php endif; ?>
      </div>

      <hr class="featurette-divider">
