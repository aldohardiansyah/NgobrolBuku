    <!-- Page Content -->
    <div class="container">
      <?php echo $this->session->flashdata('msg');?>
        <div class="row">
            <!-- Blog Entries Column -->
            <div class="col-md-8">
                <h2 class="page-header">
                    Diskusi Terbaru
                </h2>
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped">
                <thead>
                  <tr>
                    <th width="80%">Judul Diskusi</th>
                    <th>Dibuat oleh</th>
                    <th>Kategori</th>
                    </tr>
                  </thead>
                <tbody>
                  <?php if(!empty($record)) :?>
                  <?php foreach ($record as $row) : ?>
                    <tr>
                      <td><a href="<?php echo base_url('diskusi/diskusi_lihat/'.$row['diskusi_ID']);?>"><?php echo $row['diskusi_judul']; ?></a>
                      <h6><small>Dibuat tanggal : <?php echo $row['created_on']; ?></small><h6></td>
                      <td><?php echo $row['username']; ?></td>
                      <td><?php echo $row['diskusi_kategori']; ?></td>
                    </tr>
                  <?php endforeach; ?>
                  <?php endif; ?>
                  </tbody>
                </table>
              </div>

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">
                <!-- Blog Search Well -->
                <div class="well wadadaw">
                    <div class="form-group">
                        <h4>Kategori</h4>
                        <div class="row">
                          <div class="col-xs-6 col-md-6">
                            <a href="<?php echo base_url('diskusi/index_category/Karya');?>">Diskusi Karya</a>
                          </div>
                          <div class="col-xs-6 col-md-6">
                            <a href="<?php echo base_url('diskusi/index_category/Cari');?>">Cari Barang</a>
                          </div>
                          <div class="col-xs-6 col-md-6">
                            <a href="<?php echo base_url('diskusi/index_category/JualBeli');?>">Forum Jual-Beli</a>
                          </div>
                          <div class="col-xs-6 col-md-6">
                            <a href="<?php echo base_url('diskusi/index_category/TempatKegiatan');?>">Tempat/Kegiatan</a>
                          </div>
                        </div>
                        <hr>
                        <center>
                          <a href="<?php echo base_url('diskusi/diskusi_buat/');?>" class="btn btn-md btn-success"><i class="glyphicon glyphicon-pencil"></i> Buat Artikel Diskusi Anda</a>
                        </div>
                    <!-- /.input-group -->
                </div>
                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Aturan Diskusi</h4>
                    <h6><small>
                    <p>1. Tidak boleh menyinggung Suku, Agama & Ras</p>
                    <p>2. Tidak boleh menghina atau melecehkan orang lain</p>
                    <p>3. Menggunakan bahasa yang baik, sopan, dan benar</p>
                    <p>4. Pengguna bersedia dan bertanggung jawab atas sanksi yang akan diberikan apabila melanggar aturan diskusi</p>
                    <p>5. Dengan ikut membuat diskusi, dan ikut berkomentar, pengguna dinyatakan setuju dengan aturan diskusi</p>
                    <p>6. Kami menyediakan fasilitas lapor dengan mengklik tanda bendera merah, apabila ada komentar yang tidak sesuai dengan aturan diskusi</P>
                  </small>
                  </h6>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <hr>
