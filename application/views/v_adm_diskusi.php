<div class="container">
<?php echo $this->session->flashdata('msg');?>
  <div id="page-wrapper">
     <div class="container-fluid">

         <div class="row"><!--MENU TABEL-->
                 <h3 class="">
                    Daftar Diskusi
                    <a href="<?php echo base_url('adm_diskusi/komentar');?>"><small> Daftar Komentar</small></a>
                 </h3>
                 <hr>

          </div><!--PENUTUP MENU TABEL-->

          <div class="row"> <!--TABEL-->
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Judul Diskusi</th>
                    <th>Pembuat</th>
                    <th>Kategori</th>
                    <th>Tgl.Terbit</th>
                    <th>Status</th>
                    <th>Proses</th>
                    </tr>
                  </thead>
                <tbody>
                  <?php if(!empty($record)) :?>
                  <?php foreach ($record as $row) : ?>
                    <?php $isi_diskusi=substr($row['diskusi_isi'], 0, 100); ?>
                    <tr>
                      <td><?php echo $row['diskusi_ID']; ?></td>
                      <td><?php echo $row['diskusi_judul']; ?><br>
                      <h6><small><?php echo $isi_diskusi; ?></small></h6></td>
                      <td width="15%"><?php echo $row['username']; ?></td>
                      <td width="10%"><?php echo $row['diskusi_kategori']; ?></td>
                      <td width="10%"><?php echo $row['created_on']; ?></td>
                      <td width="5%"><?php echo $row['status']; ?></td>
                      <td width="5%"><a data-toggle="modal" data-target="#myModal<?php echo $row['diskusi_ID']; ?>"  class="btn btn-xs btn-warning" title="Tinjau Laporan">Tinjau <i class=" glyphicon glyphicon-eye-open"></i></a>
                    </tr>

                      <!-- Modal Tinjau -->
                      <div id="myModal<?php echo $row['diskusi_ID']; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                          <!-- konten modal-->
                          <div class="modal-content">
                            <!-- heading modal -->
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title"><center>Tinjau Diskusi</center></h4>
                            </div>
                            <!-- body modal -->
                            <div class="modal-body wadidaw2">
                                <div class="form-group">
                                  <label for=""> Kategori Diskusi : </label> <br/>
                                  <?php echo $row['diskusi_kategori']; ?>
                                  <hr>
                                </div>
                                <div class="form-group">
                                  <label for=""> Konten Dibuat Oleh : </label> <br/>
                                    <?php echo $row['username'] ?>
                                    <hr>
                                </div>
                                <div class="form-group">
                                  <label for=""> Isi Konten : </label> <br/>
                                    <?php echo $row['diskusi_isi'] ?>
                                    <hr>
                                </div>
                                    <?php if ($row['status']!=='approve') { ?>
                                    <a href="<?php echo base_url('adm_diskusi/approve_diskusi/'.$row['diskusi_ID']);?>" onclick="return confirm('Approve data ini?')"
                                    class="btn btn-success" title="Approve Diskusi"><i class="glyphicon glyphicon-check"></i> Approve</a>
                                    <?php } else {?>
                                      <?php echo "<div class='btn btn-default' disabled>Sudah Di Approve</div>"; ?>
                                    <?php } ?>
                                    <a href="<?php echo base_url('adm_diskusi/hapus_diskusi/'.$row['diskusi_ID']);?>" onclick="return confirm('Anda yakin ingin menghapus data ini ?')"
                                    class="btn btn-danger" title="Hapus Laporan"> <i class="glyphicon glyphicon-trash"></i> Hapus Diskusi</a>                        </div>
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
          </div> <!--PENUTUP MENU TABEL-->

      </div>
  </div>
<br>
