<div class="container">
<?php echo $this->session->flashdata('msg');?>
  <div id="page-wrapper">
     <div class="container-fluid">

         <div class="row">
                 <h3 class="">
                     Daftar Biografi penulis
                 </h3>
                 <hr>
                <div class="controls pull-left">
                    <div class="btn-group">
                      <a class="btn btn-large btn-primary" data-toggle="modal" data-target="#myModal_tambah">Tambah Biografi</a>
                    </div>
                </div>
          </div>

          <div class="row">
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Kode Penulis</th>
                    <th>Foto</th>
                    <th>Biografi</th>
                    <th>Proses</th>
                    </tr>
                  </thead>
                <tbody>
                  <?php if(!empty($record)) :?>
                  <?php foreach ($record as $row) : ?>
                    <?php $penulis_biografi=substr($row['penulis_biografi'], 0, 50); ?>
                    <tr>
                      <td><?php echo $row['penulis_nama']; ?></td>
                      <td><?php echo $row['penulis_kode']; ?></td>
                      <td><?php echo $row['penulis_gambar']; ?></td>
                      <td><?php echo $penulis_biografi; ?>...</td>
                      <td><a href="<?php echo base_url('adm_biografi/biografi_lihat/'.$row['penulis_ID']);?>" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-pencil"></i></a>
                      <a href="<?php echo base_url('adm_biografi/hapus_biografi/'.$row['penulis_ID']);?>" onclick="return confirm('Anda yakin ingin menghapus data ini ?')"
                        class="btn btn-invert btn-xs btn-danger"><i class="glyphicon glyphicon-remove"></i></a></td>
                    </tr>
                  <?php endforeach; ?>
                  <?php endif; ?>
                  </tbody>
                </table>
              </div>
              </div>
            </div>
            </div> <!-- /widget-content -->

            <!-- Modal -->
            <div id="myModal_tambah" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- konten modal-->
                <div class="modal-content">
                  <!-- heading modal -->
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><center>Tambah Biografi</center></h4>
                  </div>
                  <!-- body modal -->
                  <div class="modal-body wadidaw2">
                    <form action="<?php echo base_url(); ?>adm_biografi/aksi_tambah" method="POST">
                      <div class="form-group">
                        <input type="text" class="form-control" id="penulis_nama" name="penulis_nama" placeholder="Nama Lengkap" >
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="penulis_kode" name="penulis_kode" placeholder="Kode Penulis" >
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="penulis_gambar" name="penulis_gambar" placeholder="Foto" >
                      </div>
                      <div class="form-group">
                        <labe class="form_control">Biografi</label>
                        <textarea type="text" class="ckeditor" id="ckeditor" name="penulis_biografi"></textarea>
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
