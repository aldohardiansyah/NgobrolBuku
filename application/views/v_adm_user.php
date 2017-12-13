<div class="container">
<?php echo $this->session->flashdata('msg');?>
  <div id="page-wrapper">
     <div class="container-fluid">

         <div class="row">
                 <h3 class="">
                     Daftar User
                 </h3>
                 <hr>
                <div class="controls pull-left">
                    <div class="btn-group">
                      <a class="btn btn-primary" data-toggle="modal" data-target="#myModal_tambah">Tambah User</a>
                    </div>
                </div>
          </div>

          <div class="row">
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama Lengkap</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Status</th>
                    <th>Terakhir Login</th>
                    <th>Dibuat Tanggal</th>
                    <th>Aktif</th>
                    <th>Proses</th>
                    </tr>
                  </thead>
                <tbody>
                  <?php if(!empty($record)) :?>
                  <?php foreach ($record as $row) : ?>
                    <?php $password=substr($row['password'], 0, 10); ?>
                    <tr>
                      <td><?php echo $row['akun_ID']; ?></td>
                      <td><?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?></td>
                      <td><?php echo $row['username']; ?></td>
                      <td><?php echo $password; ?></td>
                      <td><?php echo $row['role_user']; ?></td>
                      <td><?php echo $row['last_login_date']; ?></td>
                      <td><?php echo $row['created_on']; ?></td>
                      <td><?php echo $row['active']; ?></td>
                      <td><a href="<?php echo base_url('adm_user/akun_lihat/'.$row['akun_ID']);?>"  class="btn btn-xs btn-success"><i class="glyphicon glyphicon-pencil"></i></a>
                      <a href="<?php echo base_url('adm_user/hapus_akun/'.$row['akun_ID']);?>" onclick="return confirm('Anda yakin ingin menghapus data ini ?')"
                        class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove"></i></a></td>
                  <?php endforeach; ?>
                  <?php endif; ?>
                </tbody>
              </table>
            </div>
          </div>

      </div>
    </div>



          <!-- Modal Tambah User-->
          <div id="myModal_tambah" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <!-- konten modal-->
              <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title"><center>Tambah Data User</center></h4>
                </div>
                <!-- body modal -->
                <div class="modal-body">
                  <form action="<?php echo base_url(); ?>adm_user/tambah_akun" method="POST" class="form-signup">
                    <div class="row">
                    <div class="col-xs-6 col-md-6">
                      <input class="form-control" name="firstname" placeholder="Nama Depan" type="text" required autofocus />
                    </div>
                    <div class="col-xs-6 col-md-6">
                      <input class="form-control" name="lastname" placeholder="Nama Belakang" type="text" required />
                    </div>
                    </div>
                    <br/>
                    <input class="form-control" name="username" placeholder="Username (tidak boleh spasi)" type="username" />
                    <br/>
                    <input class="form-control" name="password" placeholder="Password baru" type="password" />
                    <br/>
                    <input class="form-control" name="cpassword" placeholder="Konfirmasi Password" type="password" />
                    <br/>
                    <input class="form-control" name="email" placeholder="Email" type="email" />
                    <br/>
                    <input class="form-control" name="address" placeholder="Lokasi Anda (ex. Depok, Jakarta)" type="address" />
                    <br/>
                    <label for=""> Tanggal Lahir</label>
                    <div class="row">
                      <div class="col-xs-4 col-md-4">
                        <select class="form-control" name="tgl_lahir">
                        <option value="01">1</option>
                        <option value="02">2</option>
                        <option value="03">3</option>
                        <option value="04">4</option>
                        <option value="05">5</option>
                        <option value="06">6</option>
                        <option value="07">7</option>
                        <option value="08">8</option>
                        <option value="09">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                        </select>
                      </div>
                      <div class="col-xs-4 col-md-4">
                      <select class="form-control" name="bln_lahir">
                        <option value="01">Januari</option>
                        <option value="02">Februari</option>
                        <option value="03">Maret</option>
                        <option value="04">April</option>
                        <option value="05">Mei</option>
                        <option value="06">Juni</option>
                        <option value="07">Juli</option>
                        <option value="08">Agustus</option>
                        <option value="09">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                      </select>
                      </div>
                      <div class="col-xs-4 col-md-4">
                        <select class="form-control" name="thn_lahir">
                          <option value="1980">1980</option>
                          <option value="1981">1981</option>
                          <option value="1982">1982</option>
                          <option value="1983">1983</option>
                          <option value="1984">1984</option>
                          <option value="1985">1985</option>
                          <option value="1986">1986</option>
                          <option value="1987">1987</option>
                          <option value="1988">1988</option>
                          <option value="1989">1989</option>
                          <option value="1990">1990</option>
                          <option value="1991">1991</option>
                          <option value="1992">1992</option>
                          <option value="1993">1993</option>
                          <option value="1994">1994</option>
                          <option value="1995">1995</option>
                          <option value="1996">1996</option>
                          <option value="1997">1997</option>
                          <option value="1998">1998</option>
                          <option value="1999">1999</option>
                          <option value="2000">2000</option>
                          <option value="2001">2001</option>
                          <option value="2002">2002</option>
                          <option value="2003">2003</option>
                          <option value="2004">2004</option>
                          <option value="2005">2005</option>
                          <option value="2006">2006</option>
                          <option value="2007">2007</option>
                      </select>
                      </div>
                      </div>
                      <br />
                      <label for=""> Jenis Kelamin</label>
                      <div class="row">
                      <div class="col-xs-6 col-md-6">
                        <input type="radio" name="jenis_kel" value="L" > Laki - laki
                      </div>
                      <div class="col-xs-6 col-md-6">
                        <input type="radio" name="jenis_kel" value="P" > Perempuan
                      </div>
                      </div>
                      <br />
                      <input type="submit" name="submit" value="Tambah" class="btn btn-lg btn-primary btn-block" >
                      </form>
                </div>
                <!-- footer modal -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                </div>
              </div>
            </div>
          </div>

<br>
