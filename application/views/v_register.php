<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--CSS BOOTSTRAP-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <!--CSS UTAMA-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style-signup.css">
    <!--JAVACSRIPTssNYA-->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
    <title>PDS H.B. Jassin</title>
</head>
<body>
<div class="container">
  <?php echo $this->session->flashdata('msg');?>
    <center>
    <h3> Daftar Disini </h3>
    </center>
    <br/>
    <form action="<?php echo base_url(); ?>daftar/aksi_daftar" method="POST" class="form-signup">
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
        <input type="submit" name="submit" value="Daftar" class="btn btn-lg btn-primary btn-block" >
        </form>
  </div>
  <!--SCRIPT WAJIB DARI SONONYE-->
  <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </body>
  </html>
