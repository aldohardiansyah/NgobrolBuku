<!-- Page Content -->
<div class="container">

    <!-- Heading Row -->
    <div class="row">
        <div class="col-md-8">
          <div class="well">
          <?php echo $this->session->flashdata('msg');?>
          <h5><center>Review Terbaru</center></h5>

          </div>
          <div class="widget">
            <table>
            <?php if(!empty($record_3)) :?>
            <?php foreach ($record_3 as $row) : ?>
            <?php if ($row['username']==$this->session->userdata('username')): ?>
            <tr>
                    <hr>
                    <h5> <a href="<?php echo base_url('buku/buku_lihat/'.$row['buku_ID']);?>"> <?php echo $row['penulis']; ?> - <?php echo $row['judul_buku'] ?> </a> <p class="pull-right"><small><?php echo $row['created_on']; ?> </small> </p> </h5>
                    <h5><?php echo $row['isi_review']; ?> </h5><a class="pull-right btn btn-xs btn-danger" href="<?php echo base_url('dashboard/hapus_review/'.$row['buku_ID']);?>" onclick="return confirm('Hapus Review Anda ?')"><i class="glyphicon glyphicon-trash"></i></a>
                    <h6> <a href="<?php echo base_url('profile/profile_lihat/'.$row['akun_ID']);?>">- <?php echo $row['username'];?></a> </h6>
            </tr>
            <?php endif; ?>
            <?php if ($row['username'] != $this->session->userdata('username')): ?>
            <tr>
                    <hr>
                    <h5> <a href="<?php echo base_url('buku/buku_lihat/'.$row['buku_ID']);?>"> <?php echo $row['penulis']; ?> - <?php echo $row['judul_buku'] ?> </a> <p class="pull-right"><small><?php echo $row['created_on']; ?> </small> </p> </h5>
                    <h5><?php echo $row['isi_review']; ?> </h5> <a class="pull-right btn btn-xs btn-danger glyphicon glyphicon-flag" data-toggle="modal" data-target="#myModal_Report<?php echo $row['review_ID']; ?>"> </a>
                    <h6> <a href="<?php echo base_url('profile/profile_lihat/'.$row['akun_ID']);?>">- <?php echo $row['username'];?></a> </h6>
            </tr>
            <?php endif; ?>

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
                            <form class="form-group" action="<?php echo base_url('buku/report_review_dashboard/'.$row['review_ID']);?>" method="post">
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
            </table>
            </div>
        </div>
        <div class="col-md-4">
          <!-- Blog Search Well -->
          <div class="widget well">
              <h4>Selamat datang, <?php echo $user;?></h4>
              <h5>Index Baca kamu : <?php echo $level; ?></h5>
              <h5><small>Ayo baca buku, terus share pengalaman membacanya, biar level index baca kalian terus naik !</small></h5>
              <h5>
              <hr>
              <h5>Lagi baca buku apa ?</h5>
              <form class="" action="<?php echo base_url('buku/index_cari');?>" method="post">
                    <input type="text" class="form-control" placeholder="Cari Judul Buku (ex: Bumi Manusia)" name="katakunci">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit" name="submit">
                            <span class="glyphicon glyphicon-search"></span>
                    </button>
                    </span>
              </form>
              <hr>
                <h5><a href="<?php echo base_url('profile/profile_koleksi/'.$akun_ID_check);?>"><?php $this->db->select('*');
                                  $this->db->where('akun_ID',$akun_ID_check);
                                  $query = $this->db->get('tbl_baca');
                                  $num = $query->num_rows();
                                  echo "Selesai Dibaca ("."$num".")"; ?> </h5>
              <div class="item">
              <table>
              <?php if(!empty($record_1)) :?>
              <?php foreach ($record_1 as $row) : ?>
              <tr><a href="#"><img src="<?php echo base_url().'assets/img/buku/'.$row['gambar'];?>.jpg" height="30%" width="32%" alt=""></a></tr>
            <?php endforeach; ?>
            <?php endif; ?>
              </table>
              </div>
              <hr>
              <!-- /.input-group -->
                <h5><a href="<?php echo base_url('profile/profile_koleksi_ingin/'.$akun_ID_check);?>"><?php $this->db->select('*');
                                   $this->db->where('akun_ID',$akun_ID_check);
                                   $query = $this->db->get('tbl_ibaca');
                                   $num = $query->num_rows();
                                   echo "Ingin Dibaca ("."$num".")"; ?></a></h5>
              <div class="item">
              <table>
              <?php if(!empty($record_2)) :?>
              <?php foreach ($record_2 as $row) : ?>
              <tr><a href="#"><img src="<?php echo base_url().'assets/img/buku/'.$row['gambar'];?>.jpg" height="30%" width="32%" alt=""></a></tr>
            <?php endforeach; ?>
            <?php endif; ?>
              </table>
              </div>
              <hr>
          </div>
        </div>

    </div>

    <hr>

    <!-- Call to Action Well -->
    <div class="row">
        <div class="col-lg-12">
            <div class="well wadadaw3 text-center">
                Diskusi Terbaru
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <br/>
    <!-- Content Row -->
    <div class="row">
    <?php if(!empty($diskusi)) :?>
    <?php foreach ($diskusi as $row) : ?>
    <?php $isi_diskusi=substr($row['diskusi_isi'], 0, 200); ?>
        <div class="col-md-4">
            <h4><?php echo $row['diskusi_judul']; ?></h4>
            <p><?php echo $isi_diskusi; ?></p>
            <a class="btn btn-default" href="<?php echo base_url('diskusi/diskusi_lihat/'.$row['diskusi_ID']);?>">More Info</a>
        </div>
    <?php endforeach; ?>
    <?php endif; ?>
    </div>
    <!-- /.row -->
    <hr>
    <!-- Call to Action Well -->
    <div class="row">
        <div class="col-lg-12">
            <div class="well wadadaw3 text-center">
                Buku Terbaru
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <br>
    <!-- /.row -->
    <div class="row">
      <?php if(!empty($record)) :?>
      <?php foreach ($record as $row) : ?>
        <?php $isi_buku=substr($row['ringkasan'], 0, 200); ?>
        <div class="col-sm-4 col-lg-4">
            <div class="thumbnail">
                <img src="<?php echo base_url().'assets/img/buku/'.$row['gambar'];?>.jpg"alt="">
                <div class="caption">
                    <h4 class="pull-right"></h4>
                    <h4><a href="<?php echo base_url('buku/buku_lihat/'.$row['buku_ID']);?>"><?php echo $row['judul_buku']; ?></a>
                    </h4>
                    <p><?php echo $isi_buku; ?></p>
                </div>
                <div class="ratings">
                    <a class="ratings" href="<?php echo base_url('buku/buku_lihat/'.$row['buku_ID']);?>"><?php $this->db->select('*');
                                                $this->db->where('buku_ID',$row['buku_ID']);
                                                $query = $this->db->get('tbl_review');
                                                $num = $query->num_rows();
                                                echo "Review ("."$num".")"; ?></a></p>
                </div>
            </div>
        </div>
      <?php endforeach; ?>
      <?php endif; ?>
    </div>
