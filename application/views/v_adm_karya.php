<div class="container">
<?php echo $this->session->flashdata('msg');?>
  <div id="page-wrapper">
     <div class="container-fluid">

         <div class="row">
                 <h3 class="">
                     Daftar Karya Sastra
                 </h3>
                 <hr>
                 <div class="controls2 pull-right">
 	                  <div class="btn-group">
                      <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#"> Sortir Berdasarkan <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href=""><i class="glyphicon glyphicon-sort-by-alphabet"></i> Penulis/a></li>
                        <li><a href=""><i class="glyphicon glyphicon-sort-by-order-alt"></i> Judul</a></li>
                      </ul>
 	                 </div>
 								</div>
                <div class="controls pull-left">
                    <div class="btn-group">
                      <a class="btn btn-primary" data-toggle="modal" data-target="#myModal_tambah">Tambah Karya</a>
                    </div>
                </div>
          </div>

          <div class="row">
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped">
                <thead>
                  <tr>
                    <th>Judul</th>
                    <th>Pengarang/Penulis</th>
                    <th>Tahun</th>
                    <th>Isi</th>
                    <th>Proses</th>
                    </tr>
                  </thead>
                <tbody>
                  <?php if(!empty($record)) :?>
                  <?php foreach ($record as $row) : ?>
                    <tr>
                      <td><?php echo $row['judul']; ?></td>
                      <td><?php echo $row['pengarang/penulis']; ?></td>
                      <td><?php echo $row['tahun']; ?></td>
                      <td><?php echo $row['isi']; ?></td>
                      <td><a href="<?php echo base_url('adm_buku/buku_lihat/'.$row['buku_ID']);?>" class="link-edit btn btn-small btn-info" class="link-edit btn btn-small btn-info"><i class=""></i> Edit</a>
                      <a href="<?php echo base_url('adm_buku/hapus_buku/'.$row['buku_ID']);?>" class="btn btn-invert btn-small btn-info" onclick="return confirm('Anda yakin ingin menghapus data ini ?')"><i class="" id="hapus_1"></i> Hapus</a></td>
                    </tr>
                  <?php endforeach; ?>
                  <?php endif; ?>
                  </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>
