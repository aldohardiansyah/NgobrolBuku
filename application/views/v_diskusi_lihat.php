    <!-- Page Content -->
    <div class="wadadaw container">
        <div class="row">
            <!-- Blog Post Content Column -->
            <div class="col-lg-12">
                <!-- Blog Post -->
                <?php if(!empty($record)) :?>
                <?php foreach ($record as $row) : ?>
                <!-- Title -->
                <h2><?php echo $row['diskusi_judul'] ?></h2>
                <!-- Author -->
                <p class="lead">
                    <h5>oleh <a href="<?php echo base_url('profile/profile_lihat/'.$row['akun_ID']);?>"><?php echo $row['username'] ?></a> di <a href=""><?php echo $row['diskusi_kategori'] ?></a> </h5>
                    <h5><small><span class="glyphicon glyphicon-time"></span> Diposkan tanggal : <?php echo $row['created_on'] ?></small></h5>
                </p>
                <hr>
                <!-- Post Content -->
                <p><?php echo $row['diskusi_isi']; ?></p>
                <?php endforeach; ?>
                <?php endif; ?>

                <hr>
                <!-- Comments Form -->
                <div class="well">

                    <form class="form-group" action="<?php echo base_url('diskusi/tambah_kasih_komentar/'.$row['diskusi_ID']);?>" method="post">
                        <div class="form-group">
                            <textarea class="form-control" rows="3" name="isi_komentar" placeholder="Pendapat anda.."></textarea>
                        </div>
                        <input type="submit" name="submit" value="Submit" class="btn btn-md btn-primary" >
                    </form>
                </div>

                <hr>

                <!-- Comment -->
                <?php if(!empty($record2)) :?>
                <?php foreach ($record2 as $row) : ?>
                <div class="media">
                    <div class="media-body">
                        <a href="<?php echo base_url('profile/profile_lihat/'.$row['akun_ID']);?>"><h5 class="media-heading"><?php echo $row['username'] ?></a>
                            <small></span> Diposkan tanggal : <?php echo $row['created_on'] ?></small></small>
                        </h5>
                        <?php echo $row['isi_komentar'] ?> <a class="pull-right btn btn-xs btn-danger glyphicon glyphicon-flag" data-toggle="modal" data-target="#myModal_Report<?php echo $row['komentar_ID']; ?>"> </a>
                      </div>
                </div>
                <hr>

                    <!-- Modal Lapor -->
                    <div id="myModal_Report<?php echo $row['komentar_ID']; ?>" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <!-- konten modal-->
                        <div class="modal-content">
                          <!-- heading modal -->
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"><center>Laporkan !</center></h4>
                          </div>
                          <!-- body modal -->
                          <div class="modal-body wadidaw2">
                            <form class="form-group" action="<?php echo base_url('diskusi/report_komentar/'.$row['komentar_ID']);?>" method="post">
                              <div class="form-group">
                                  <input type="radio" name="jenis_pelanggaran" value="Spam" > Review merupakan spam
                              </div>
                              <div class="form-group">
                                  <input type="radio" name="jenis_pelanggaran" value="Sara" > Ungkapan atau Simbol Kebencian Suku Agama Ras
                              </div>
                              <div class="form-group">
                                  <input type="radio" name="jenis_pelanggaran" value="Penghinaan" > Menghina orang lain
                              </div>
                              <div class="form-group">
                                  <input type="radio" name="jenis_pelanggaran" value="Seksual" > Pelecehan Seksual
                              </div>
                              <div class="form-group">
                                <small>Tambahkan Keterangan</small>
                                <textarea class="form-control" type="textarea" name="isi_laporan" rows="5"></textarea>
                              </div>
                              <div class="form-group">
                                <input type="submit" name="submit" value="Laporkan" class="btn btn-lg btn-danger btn-block">
                              </div>
                            </form>
                          </div>
                          <!-- footer modal -->
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                          </div>
                        </div>
                      </div>
                  </div><!--/*MODAL-->


                <?php endforeach; ?>
                <?php endif; ?>


            </div>

          </div>
