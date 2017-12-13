    <!-- Page Content -->
    <div class="container buku">
        <div class="row">
            <div class="col-md-6">
              <?php if(!empty($record)) :?>
              <?php foreach ($record as $row) : ?>
              <div class="thumbnail">
                  <img class="img-responsive" id="img-buku-lihat" src="<?php echo base_url().'assets/img/buku/'.$row['gambar'];?>.jpg" alt="">
                  <div class="caption-full">
                      <h5 class="pull-right"><?php echo $row['penulis'];?></h5>
                      <h4><?php echo $row['judul_buku'];?></a>
                      <hr>
                      </h4>
                      <p><?php echo $row['ringkasan']; ?></p>
                  </div>
                  <div class="ratings">
                      <p class=""><a class="ratings" href="<?php echo base_url('buku/buku_lihat/'.$row['buku_ID']);?>"><?php $this->db->select('*');
                                                  $this->db->where('buku_ID',$row['buku_ID']);
                                                  $query = $this->db->get('tbl_review');
                                                  $num = $query->num_rows();
                                                  echo "Review ("."$num".")"; ?></a></p>
                  <br>
                      <p class="pull-right"><a class="btn btn-default" href="<?php echo base_url('buku/tambah_ingin_baca/'.$row['buku_ID']);?>" onclick="return confirm('Tambahkan ke daftar buku yang sedang anda baca ?')">+ Ingin dibaca</a></p>
                      <a class="btn btn-success" data-toggle="modal" data-target="#myModal<?php echo $row['buku_ID']; ?>">+ Selesai dibaca</a></p>
                  </div>
              </div>

                <!-- Modal Tambah -->
                <div id="myModal<?php echo $row['buku_ID']; ?>" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                    <!-- konten modal-->
                    <div class="modal-content">
                      <!-- heading modal -->
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><center>Bagaimana Bukunya ?</center></h4>
                      </div>
                      <!-- body modal -->
                      <div class="modal-body wadidaw2">
                        <form class="form-group" action="<?php echo base_url('buku/tambah_kasih_review/'.$row['buku_ID']);?>" method="post">
                          <div class="form-group">
                            <center>
                            <h5>Silahkan bagi pengalaman membaca anda tentang buku ini, seperti bagaimana isi buku nya atau apa saja cerita erita menarik didalamnya</h5>
                            <h5><small>* Setiap kamu selesai membaca dan memberikan review tentang buku yang kamu baca tersebut, maka level kamu akan terus naik !</small></h5>
                            </center>
                          </div>
                          <div class="form-group">
                            <textarea type="text" class="ckeditor" id="ckeditor" name="isi_review"></textarea>
                          </div>
                          <div class="text-left">
                              <br/>
                              <label for=""> Rating Anda :</label>
                              <select class="form-group" name="rating">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <input type="submit" name="submit" value="Tambah ke Daftar Selesai Baca Anda" class="btn btn-lg btn-success btn-block">
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

            <div class="col-md-6">
                <div class="well wadadaw3">
                  <?php echo $this->session->flashdata('msg');?>
                    <form class="form-group" action="<?php echo base_url('buku/tambah_kasih_review/'.$row['buku_ID']);?>" method="post">
                          <textarea class="form-control input-block-level vresize" name="isi_review" rows="7" id="comment_content"></textarea>
                          <div class="text-left">
                              <br/>
                              <label for=""> Rating Anda :</label>
                              <select class="form-group" name="rating">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                            </select>
                          </div>
                          <div class="text-right">
                              <input type="submit" name="submit" value="Kasih Review" class="btn btn-md btn-primary" >
                          </div>
                    </form>

                    <?php if(!empty($record_2)) :?>
                    <?php foreach ($record_2 as $row) : ?>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                          <?php
                            switch ($row['rating']) {
                                case '1':
                                    echo "<span class='glyphicon glyphicon-star starratings'></span>
                                          <span class='glyphicon glyphicon-star-empty starratings'></span>
                                          <span class='glyphicon glyphicon-star-empty starratings'></span>
                                          <span class='glyphicon glyphicon-star-empty starratings'></span>
                                          <span class='glyphicon glyphicon-star-empty starratings'></span>";
                                    break;
                                case '2':
                                    echo "<span class='glyphicon glyphicon-star starratings'></span>
                                          <span class='glyphicon glyphicon-star starratings'></span>
                                          <span class='glyphicon glyphicon-star-empty starratings'></span>
                                          <span class='glyphicon glyphicon-star-empty starratings'></span>
                                          <span class='glyphicon glyphicon-star-empty starratings'></span>";
                                    break;
                                case '3':
                                    echo "<span class='glyphicon glyphicon-star starratings'></span>
                                          <span class='glyphicon glyphicon-star starratings'></span>
                                          <span class='glyphicon glyphicon-star starratings'></span>
                                          <span class='glyphicon glyphicon-star-empty starratings'></span>
                                          <span class='glyphicon glyphicon-star-empty starratings'></span>";
                                    break;
                                case '4':
                                    echo "<span class='glyphicon glyphicon-star starratings'></span>
                                          <span class='glyphicon glyphicon-star starratings'></span>
                                          <span class='glyphicon glyphicon-star starratings'></span>
                                          <span class='glyphicon glyphicon-star starratings'></span>
                                          <span class='glyphicon glyphicon-star-empty starratings'></span>";
                                    break;
                                case '5':
                                    echo "<span class='glyphicon glyphicon-star starratings'></span>
                                          <span class='glyphicon glyphicon-star starratings'></span>
                                          <span class='glyphicon glyphicon-star starratings'></span>
                                          <span class='glyphicon glyphicon-star starratings'></span>
                                          <span class='glyphicon glyphicon-star starratings'></span>";
                                    break;
                                default:
                                    echo "Your favorite color is neither red, blue, nor green!";
                            }
                          ?>

                            <?php echo $row['username']; ?>
                            <span class="pull-right"><?php echo $row['created_on'] ?></span>
                            <p><?php echo $row['isi_review']; ?></p>
                            <?php if ($row['username']==$this->session->userdata('username')): ?>
                              <div class="form-group">
                              <a class="pull-right btn btn-xs btn-danger" href="<?php echo base_url('dashboard/hapus_review/'.$row['buku_ID']);?>" onclick="return confirm('Hapus Review Anda ?')"><i class="glyphicon glyphicon-trash"></i></a>
                              </div>
                            <?php else : ?>
                              <div class="form-group">
                              <a class="pull-right btn btn-xs btn-danger glyphicon glyphicon-flag" data-toggle="modal" data-target="#myModal_Report<?php echo $row['review_ID']; ?>"> </a>
                              </div>
                          <?php endif; ?>
                        </div>
                    </div>

                    <!-- Modal Tambah -->
                    <div id="myModal_Report<?php echo $row['review_ID']; ?>" class="modal fade" role="dialog">
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
                            <form class="form-group" action="<?php echo base_url('buku/report_review_buku/'.$row['review_ID']);?>" method="post">
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
            </div>
        </div>



<hr>
=
