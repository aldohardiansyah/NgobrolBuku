<!-- Page Content -->
<div class="container">
<?php echo $this->session->flashdata('msg');?>
    <!-- Heading Row -->
    <div class="row">

        <div class="col-md-4">
            <!-- Blog Search Well -->
            <div class="widget wadadaw">
              <?php if(!empty($record_4)) :?>
              <?php foreach ($record_4 as $row) : ?>
                <h4><?php echo $row['firstname'];?> <?php echo $row['lastname'];?> <small>( <?php echo $row['username'];?> )</small></h4>
                <h5>Index Baca : <?php echo $level; ?></h5>
                <h4><small><?php echo $row['email'];?></small></h4>
                <h4><small>Terakhir Login : <?php echo $row['last_login_date'];?></small></h4>
              <?php endforeach; ?>
              <?php endif; ?>
                <hr>
                <h5><a href="<?php echo base_url('profile/profile_koleksi/'.$row['akun_ID']);?>"><?php $this->db->select('*');
                                  $this->db->where('akun_ID',$row['akun_ID']);
                                  $query = $this->db->get('tbl_baca');
                                  $num = $query->num_rows();
                                  echo "Selesai Dibaca ("."$num".")"; ?> </h5>
                <div class="item">
                <table>
                <?php if(!empty($record)) :?>
                <?php foreach ($record as $row) : ?>
                <tr><a href="#"><img src="<?php echo base_url().'assets/img/buku/'.$row['gambar'];?>.jpg" height="30%" width="32%" alt=""></a></tr>
              <?php endforeach; ?>
              <?php endif; ?>
                </table>
                </div>
                <hr>
                <!-- /.input-group -->
                <h5><a href="<?php echo base_url('profile/profile_koleksi_ingin/'.$row['akun_ID']);?>"><?php $this->db->select('*');
                                   $this->db->where('akun_ID',$row['akun_ID']);
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
        <div class="col-md-8">
          <div class="breadcrumb">
            <?php if(!empty($record_4)) :?>
            <?php foreach ($record_4 as $row) : ?>
            <li>
              <a href="<?php echo base_url('profile/profile_lihat/'.$row['akun_ID']);?>"> Review </a>
            </li>
          <?php endforeach; ?>
          <?php endif; ?>
            <li>
              <a href="<?php echo base_url('profile/profile_koleksi/'.$row['akun_ID']);?>">Koleksi Buku</a>
            </li>
          </div>
          <div class="widget">
            <table>
            <?php if(!empty($record_3)) :?>
            <?php foreach ($record_3 as $row) : ?>
            <tr>
                    <hr>
                    <a href="<?php echo base_url('buku/buku_lihat/'.$row['buku_ID']);?>"><h5><?php echo $row['penulis'];?> - <?php echo $row['judul_buku'] ?></h5></a>
                    <h4><?php echo $row['isi_review']; ?> </h4>
                    <a href="<?php echo base_url('profile/profile_lihat/'.$row['akun_ID']);?>"><h6> - <?php echo $row['username'];?> </h6> </a>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
            </table>
            </div>
        </div>

        </div> <!--/Row-->
