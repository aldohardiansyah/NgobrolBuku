<div class="container">
<?php echo $this->session->flashdata('msg');?>
  <div id="page-wrapper">
     <div class="container-fluid">

         <div class="row">
                 <h3 class="">
                     Laporan Review
                     <a href="<?php echo base_url('adm_lapor/komentar');?>"><small> Laporan Komentar</small></a>
                 </h3>
                 <hr>
          </div>

          <div class="row">
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped">
                <thead>
                  <tr>
                    <th>Kategori</th>
                    <th>Isi Review</th>
                    <th>Pembuat</th>
                    <th>Pelapor</th>
                    <th>Pelanggaran</th>
                    <th>Proses</th>
                    </tr>
                  </thead>
                <tbody>
                  <?php if(!empty($record)) :?>
                  <?php foreach ($record as $row) : ?>
                    <tr>
                      <td><?php echo $row['kategori_lapor']; ?></td>
                      <td <td width='50%'><?php echo $row['isi_review']; ?></td>
                      <td><?php echo $row['username']; ?></td>
                      <td><?php echo $row['pelapor']; ?></td>
                      <td><?php echo $row['jenis_pelanggaran']; ?></td>
                      <td><a data-toggle="modal" data-target="#myModal<?php echo $row['lapor_ID']; ?>"  class="btn btn-xs btn-warning" title="Tinjau Laporan">Tinjau <i class=" glyphicon glyphicon-eye-open"></i></a>
                    </tr>

                    <!-- Modal Tinjau -->
                    <div id="myModal<?php echo $row['lapor_ID']; ?>" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <!-- konten modal-->
                        <div class="modal-content">
                          <!-- heading modal -->
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"><center>Tinjau Laporan</center></h4>
                          </div>
                          <!-- body modal -->
                          <div class="modal-body wadidaw2">
                              <div class="form-group">
                                <label for=""> Jenis Konten Yang Dilaporkan : </label> <br/>
                                <?php echo $row['kategori_lapor']; ?>
                                <hr>
                              </div>
                              <div class="form-group">
                                <label for=""> Konten Dibuat Oleh : </label> <br/>
                                  <?php echo $row['username'] ?>
                                  <hr>
                              </div>
                              <div class="form-group">
                                <label for=""> Isi Konten : </label> <br/>
                                  <?php echo $row['isi_review'] ?>
                                  <hr>
                              </div>
                                  <a href="<?php echo base_url('adm_lapor/hapus_konten_komentar/'.$row['data_ID'].'/'.$row['lapor_ID']);?>" onclick="return confirm('Anda yakin ingin menghapus data ini ?')"
                                  class="btn btn-danger" title="Hapus Laporan"><i class="glyphicon glyphicon-trash"></i> Hapus Konten</a>
                                  <a href="<?php echo base_url('adm_lapor/hapus_laporan/'.$row['lapor_ID']);?>" onclick="return confirm('Anda yakin ingin menghapus data ini ?')"
                                    class="btn btn-xs btn-danger" title="Hapus Laporan"><i class="glyphicon glyphicon-remove"></i> Hapus Laporan</a>                          </div>
                          <!-- footer modal -->
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                          </div>
                        </div>
                      </div>
                  </div><!--/*MODAL-->
                  <?php endforeach; ?>
                  <?php endif; ?>
                </tbody>
              </table>
            </div>
          </div>

      </div>
    </div>





<br>
