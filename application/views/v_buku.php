<!-- Page Content -->
    <div class="container buku">
      <?php echo $this->session->flashdata('msg');?>
        <div class="row"> <!--BARIS 1-->
          <form class="" action="<?php echo base_url('buku/index_cari');?>" method="post">
            <div class="col-md-3">
                <div class=" well wadadaw3 input-group">
                    <input type="text" class="form-control" placeholder="Cari Judul Buku" name="katakunci">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit" name="submit">
                            <span class="glyphicon glyphicon-search"></span>
                    </button>
                    </span>
                </div>
              </form>
                <br>
                <div class="list-group">
                    <a href="<?php echo base_url('buku/index_categori/'.'Antologi');?>" class="list-group-item"><b>Antologi</b><br><small>Kumpulan dari banyak karya sastra misalnya kumpulan puisi-puisi, cerita</small>
                    </a>
                    <a href="<?php echo base_url('buku/index_categori/'.'Novel');?>" class="list-group-item"><b>Novel</b><br><small>Kumpulan dari banyak karya sastra misalnya kumpulan puisi-puisi, cerita</small>
                    </a>
                    <a href="<?php echo base_url('buku/index_categori/'.'Roman');?>" class="list-group-item"><b>Roman</b><br><small>Kumpulan dari banyak karya sastra misalnya kumpulan puisi-puisi, cerita</small>
                    </a>
                    <a href="<?php echo base_url('buku/index_categori/'.'Biografi');?>" class="list-group-item"><b>Biografi</b><br><small>Kumpulan dari banyak karya sastra misalnya kumpulan puisi-puisi, cerita</small>
                    </a>
                    <a href="<?php echo base_url('buku/index_categori/'.'SejarahEnsiklop');?>" class="list-group-item"><b>Sejarah & Ensiklopedia</b><br><small>Kumpulan dari banyak karya sastra misalnya kumpulan puisi-puisi, cerita</small>
                    </a>
                </div>
            </div>

            <div class="col-md-9">
              <?php if(!empty($record)) :?>
              <?php foreach ($record as $row) : ?>
                  <div class="item">
                    <div class="col-lg-4">
                        <div class="thumbnail img-buku-tampil">
                            <img src="<?php echo base_url().'assets/img/buku/'.$row['gambar'];?>.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right"></h4>
                                <h4><a href="<?php echo base_url('buku/buku_lihat/'.$row['buku_ID']);?>"><?php echo $row['judul_buku']; ?></a>
                                </h4>
                                <p><?php echo $row['ringkasan']; ?></p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right"><a class="ratings" href="<?php echo base_url('buku/buku_lihat/'.$row['buku_ID']);?>"><?php $this->db->select('*');
                                                            $this->db->where('buku_ID',$row['buku_ID']);
                                                            $query = $this->db->get('tbl_review');
                                                            $num = $query->num_rows();
                                                            echo "Review ("."$num".")"; ?></a></p>

                                <table class="">
                                <tr>
                                  <td>
                                    <a class="pull-left btn btn-xs btn-success" data-toggle="modal" data-target="#myModal<?php echo $row['buku_ID']; ?>">+ Selesai dibaca</a>
                                  <td>
                                    <a class="pull-right btn btn-xs btn-default" href="<?php echo base_url('buku/tambah_ingin_baca/'.$row['buku_ID']);?>" onclick="return confirm('Tambahkan ke daftar buku yang sedang anda baca ?')">+ Ingin dibaca</a>
                                  </td>
                                </tr>
                              </table>
                            </div>
                        </div>
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
                              <textarea type="text" class="ckeditor" id="ckeditor" name="isi_review" required></textarea>
                            </div>
                          <div class="text-left">
                              <br/>
                              <label for=""> Rating Anda :</label>
                              <select class="form-group" name="rating">
                              <option value="1" required>1</option>
                              <option value="2" required>2</option>
                              <option value="3" required>3</option>
                              <option value="4" required>4</option>
                              <option value="5" required>5</option>
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

  </div>
<hr>
