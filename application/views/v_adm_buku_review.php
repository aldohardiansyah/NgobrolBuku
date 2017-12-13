<div class="container">
<?php echo $this->session->flashdata('msg');?>
  <div id="page-wrapper">
     <div class="container-fluid">

         <div class="row">
                 <h3 class="">
                    <a href="<?php echo base_url('adm_buku');?>"><small> Daftar Buku</small></a>
                    Daftar Review
                 </h3>
                 <hr>
          </div>

          <div class="row">
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped">
                <thead>
                  <tr>
                    <th width="2%">ID</th>
                    <th>Username</th>
                    <th>Buku</th>
                    <th>Review</th>
                    <th>Tanggal</th>
                    <th>Proses</th>
                    </tr>
                  </thead>
                <tbody>
                  <?php if(!empty($record)) :?>
                  <?php foreach ($record as $row) : ?>
                    <tr>
                      <td><?php echo $row['review_ID']; ?></td>
                      <td><?php echo $row['username']; ?></td>
                      <td><?php echo $row['judul_buku']; ?></td>
                      <td><?php echo $row['isi_review']; ?></td>
                      <td><?php echo $row['created_on']; ?></td>
                      <td><a href="<?php echo base_url('adm_buku/hapus_konten_review/'.$row['review_ID']);?>" onclick="return confirm('Anda yakin ingin menghapus data ini ?')"
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



<br>
