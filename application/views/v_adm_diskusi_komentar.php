<div class="container">
<?php echo $this->session->flashdata('msg');?>
  <div id="page-wrapper">
     <div class="container-fluid">

         <div class="row"><!--MENU TABEL-->
                 <h3 class="">
                    <a href="<?php echo base_url('adm_diskusi');?>"><small> Daftar Diskusi</small></a>
                    Daftar Komentar
                 </h3>
                 <hr>
          </div><!--PENUTUP MENU TABEL-->

          <div class="row"> <!--TABEL-->
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Penulis</th>
                    <th>Judul</th>
                    <th>Penerbit</th>
                    <th>Proses</th>

                    </tr>
                  </thead>
                <tbody>
                  <?php if(!empty($record)) :?>
                  <?php foreach ($record as $row) : ?>
                    <tr>
                      <td><?php echo $row['komentar_ID']; ?></td>
                      <td><?php echo $row['username']; ?></td>
                      <td width='30%'><?php echo $row['diskusi_judul']; ?></td>
                      <td width='30%'><?php echo $row['isi_komentar']; ?></td>
                      <td width='5%'><a href="<?php echo base_url('adm_diskusi/hapus_komentar/'.$row['komentar_ID']);?>" onclick="return confirm('Anda yakin ingin menghapus data ini ?')"
                        class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove"></i></a></td>
                    </tr>
                  <?php endforeach; ?>
                  <?php endif; ?>
                  </tbody>
                </table>
            </div>
          </div> <!--PENUTUP MENU TABEL-->

      </div>
  </div>
<br>
