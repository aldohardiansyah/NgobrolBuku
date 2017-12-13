    <!-- Page Content -->
    <div class="container">

        <div class="row">
    	     <?php echo form_open_multipart(base_url("Diskusi/tambah_diskusi"), 'method="POST"');?>

            <div class="col-md-4">
                <h3 class="wadadaw2">Buat Diskusi</h3>
                <div class="well wadadaw">
                    <center><label> Detail Diskusi</label></center>
                    <hr>
                    <div class="form-group">
                      <i class="glyphicon glyphicon-tags"></i> <label for="">Label</label>
                      <div class="row">
                        <div class="col-xs-6 col-md-6">
                          <input type="radio" name="diskusi_kategori" value="Karya" required> Diskusi Karya
                        </div>
                        <div class="col-xs-6 col-md-6">
                          <input type="radio" name="diskusi_kategori" value="TempatKegiatan" required> Tempat/Kegiatan
                        </div>
                        <div class="col-xs-6 col-md-6">
                          <input type="radio" name="diskusi_kategori" value="JualBeli" required> Forum Jual-Beli
                        </div>
                        <div class="col-xs-6 col-md-6">
                          <input type="radio" name="diskusi_kategori" value="Cari" required> Cari Barang
                        </div>
                      </div>
                      <hr>
                      <div>
                        <i class="glyphicon glyphicon-user"></i> <label for=""> Penulis : </label><small> <?php echo $this->session->userdata('username'); ?></small>
                      </div>
                      <i class="glyphicon glyphicon-calendar"></i> <label for=""> Dibuat pada : </label>
                      <small> <?php echo date('Y-m-d h:s'); ?></small>
                      <hr>
                      <center>
                        <button type="submit" name="submit" class="btn btn-md btn-success"><span class="glyphicon glyphicon-ok"></span> Publikasikan Diskusi</button>
                      </center>
                    </div>
                </div>
            </div>
            <!-- Blog Entries Column -->
            <div class="col-md-8">

                  <div class="wadadaw2 form-group">
                    <input type="text" class="form-control" placeholder="Judul Diskusi" name="diskusi_judul" required>
                  </div>
                  <hr>

                  <div class="form-group">
                    <textarea type="text" class="ckeditor" id="ckeditor" name="diskusi_isi" required></textarea>
                  </div>
            </div>

          <?php echo form_close(); ?>
      </div>

<hr>
