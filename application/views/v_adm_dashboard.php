<div class="container">
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                       <div class="row">
                               <h3 class="">
                                   Dashboard
                               </h3>
                               <hr>
                        </div>

                <div class="row">
                    <div class="col-lg-6">
                      <div class="row">
                        <h5>Laporan</h5>
                          <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th width="70%">Isi Laporan</th>
                                        <th>Oleh</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if(!empty($record_lapor)) :?>
                                  <?php foreach ($record_lapor as $row) : ?>
                                    <tr>
                                        <td><?php echo $row['isi_laporan']; ?></td>
                                        <td><?php echo $row['jenis_pelanggaran']; ?></td>
                                    </tr>
                                  <?php endforeach; ?>
                                <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                      </div>
                      <div class="row">
                        <h5>Diskusi</h5>
                          <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Judul Diskusi</th>
                                        <th>Oleh</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php if(!empty($record_diskusi)) :?>
                                    <?php foreach ($record_diskusi as $row) : ?>
                                    <tr>
                                        <td><?php echo $row['diskusi_judul']; ?></td>
                                        <td><?php echo $row['username']; ?></td>
                                    </tr>
                                  <?php endforeach; ?>
                                <?php endif; ?>
                              </tbody>
                            </table>
                        </div>
                      </div>
                      <div class="row">
                        <h5>Baru Login</h5>
                          <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Waktu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php if(!empty($record_last)) :?>
                                    <?php foreach ($record_last as $row) : ?>
                                    <tr>
                                        <td><?php echo $row['username']; ?></td>
                                        <td><?php echo $row['last_login_date']; ?></td>
                                    </tr>
                                  <?php endforeach; ?>
                                <?php endif; ?>
                              </tbody>
                            </table>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <?php echo $this->session->flashdata('msg');?>
                      <h5>Review Terbaru</h5>
                      <div class="widget">
                        <table>
                          <?php if(!empty($record_3)) :?>
                            <?php foreach ($record_3 as $row) : ?>
                              <tr>
                                <hr>
                                <h6> <a href="<?php echo base_url('buku/buku_lihat/'.$row['buku_ID']);?>"> <?php echo $row['penulis']; ?> - <?php echo $row['judul_buku'] ?> </a> <p class="pull-right"> <small><?php echo $row['created_on']; ?> </small> </a> </h6>
                                <h6><?php echo $row['isi_review']; ?> </h6>
                                <h6> <a href="<?php echo base_url('profile/profile_lihat/'.$row['akun_ID']);?>">- <?php echo $row['username'];?></a> </h6>
                              </tr>
                            <?php endforeach; ?>
                          <?php endif; ?>
                      </table>
                    </div>
                </div>


                <div class="row">

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
