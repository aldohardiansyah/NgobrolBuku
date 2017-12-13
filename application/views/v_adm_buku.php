<div class="container">
<?php echo $this->session->flashdata('msg');?>
  <div id="page-wrapper">
     <div class="container-fluid">

         <div class="row">
                 <h3 class="">
                     Daftar Buku
                     <a href="<?php echo base_url('adm_buku/buku_review');?>"><small> Daftar Review</small></a>
                 </h3>
                 <hr>
                <div class="controls pull-left">
                    <div class="btn-group">
                      <a class="btn btn-primary" data-toggle="modal" data-target="#myModal_tambah">Tambah Buku</a>
                    </div>
                </div>
          </div>

          <div class="row">
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Penulis</th>
                    <th>Judul</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>ISBN/ISBN13</th>
                    <th>Halaman</th>
                    <th>Kategori</th>
                    <th>Proses</th>
                    </tr>
                  </thead>
                <tbody>
                  <?php if(!empty($record)) :?>
                  <?php foreach ($record as $row) : ?>
                    <tr>
                      <td><?php echo $row['buku_ID']; ?></td>
                      <td><?php echo $row['penulis']; ?></td>
                      <td><?php echo $row['judul_buku']; ?></td>
                      <td><?php echo $row['penerbit']; ?></td>
                      <td><?php echo $row['thn_terbit']; ?></td>
                      <td><?php echo $row['isbn']; ?></td>
                      <td><?php echo $row['hal_buku']; ?></td>
                      <td><?php echo $row['kategori_buku']; ?></td>
                      <td><a href="<?php echo base_url('adm_buku/buku_lihat/'.$row['buku_ID']);?>" title="Ubah Data"class="btn btn-xs btn-success"><i class="glyphicon glyphicon-pencil"></i></a>
                      <a href="<?php echo base_url('adm_buku/hapus_buku/'.$row['buku_ID']);?>" title="Hapus Data" onclick="return confirm('Anda yakin ingin menghapus data ini ?')"
                        class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove"></i></a></td>
                    </tr>
                  <?php endforeach; ?>
                  <?php endif; ?>
                  </tbody>
                </table>
            </div>
          </div>
      </div>
  </div>





          <!-- Modal Tambah -->
          <div id="myModal_tambah" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <!-- konten modal-->
              <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title"><center>Tambah Data Buku</center></h4>
                </div>
                <!-- body modal -->
                <div class="modal-body wadidaw2">
                  <form action="<?php echo base_url(); ?>adm_buku/aksi_tambah" method="POST">
                    <div class="form-group">
                      <input type="text" class="form-control" id="judul_buku" name="judul_buku" placeholder="Judul Buku" required>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="penulis" name="penulis" placeholder="Penulis" required>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="penulis" name="penulis_kode" placeholder="Kode Penulis" required>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Penerbit" required>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="thn_penerbit" name="thn_terbit" placeholder="Tahun Terbit" required>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="penerbit" name="kategori_buku" placeholder="Genre Buku" required>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="penerbit" name="isbn" placeholder="ISBN/ISBN13" required>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="penerbit" name="hal_buku" placeholder="Jumlah Halaman" required>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" type="textarea" id="message" placeholder="ringkasan" name="ringkasan" rows="7"></textarea>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="penerbit" name="gambar" placeholder="gambar" required>
                    </div>
                    <div class="form-group">
                      <input type="submit" name="submit" value="Input Data" class="btn btn-lg btn-primary btn-block" >
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

<br>
