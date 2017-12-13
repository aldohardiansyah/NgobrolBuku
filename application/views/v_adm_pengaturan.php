<div class="container">
<?php echo $this->session->flashdata('msg');?>
  <div id="page-wrapper">
     <div class="container-fluid">

         <div class="row">
                 <h3 class="">
                     Pengaturan Akun Anda
                 </h3>
                 <hr>
        </div>

        <div class="row">
          <form action="<?php echo base_url(); ?>adm_pengaturan/update_profil" method="POST">
          <?php if(!empty($record)) :?>
          <?php foreach ($record as $row) : ?>
            <div class="col-xs-6 col-md-6">
              <input class="form-control" name="firstname" value="<?php echo $row['firstname'];?>" type="text" required />
            </div>
            <div class="col-xs-6 col-md-6">
              <input class="form-control" name="lastname" value="<?php echo $row['lastname'];?>" type="text" required />
            </div>
            </div>
            <br/>
            <input class="form-control" name="username" value="<?php echo $row['username'];?>" type="username" />
            <br/>
            <input class="form-control" name="password" placeholder="Password baru" type="password" />
            <br/>
            <input class="form-control" name="cpassword" placeholder="Konfirmasi Password" type="password" />
            <br/>
            <input class="form-control" name="email" value="<?php echo $row['email'];?>" type="email" />
            <br/>
            <input class="form-control" name="address" value="<?php echo $row['address'];?>" type="address" />
            <br />
            <input type="submit" name="submit" value="Simpan" class="btn btn-lg btn-primary btn-block" >
          <?php endforeach; ?>
          <?php endif; ?>
          </form>
        </div>
      </div>
   </div>

   <hr>
