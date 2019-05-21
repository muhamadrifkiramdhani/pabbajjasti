<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>User| Daftar</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet"href="<?php echo base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head> 
    <body class="hold-transition login-page">
    <br><br><br><br><br><br>
     <section class="content"  style="position: relative; left:19%;">
      <div class="row" >
        <div class="col-xs-8 ">
          <div class="box box-primary">
            <div class="box-header with-border">
              <center><h3 class="box-title" >Formulir Pendaftaran</h3></center>
            </div>
          <form id="form1" action="<?php echo base_url() . 'users/tambah_pengguna'; ?>" class="form-horizontal"  method="post">
              <div class="box-body">
                <a href=" <?php echo base_url('auth/index') ;?> " class="btn btn-success  btn-sm " ><i class=" fa fa-edit "></i>Kembali </a>
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                   <input name="nama" type="text" class="form-control is-valid" id="nama" placeholder="Nama Lenkap" minlength="8" maxlength="40" required>
                  </div>
                </div>
               <div class="form-group">
                  <label for="date" class="col-sm-2 control-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                      <input type="date" id="date" name="tgl_lahir" max="2018-01-01"  class="form-control is-valid">
                  </div>
                </div>
                <div class="form-group">
                  <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                      <textarea name="alamat" id="alamat" maxlength="50" minlength="10" class="form-control is-valid" placeholder="Address" required></textarea>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="status" class="col-sm-2 control-label">Profesi / Status</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control is-valid" id="status" name="status" placeholder="Student" minlength="5" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="pendidikan" class="col-sm-2 control-label">Pendidikan</label>
                  <div class="col-sm-10">
                     <select name="pendidikan" class="form-control is-valid" required >
                          <option>SD</option>
                          <option>SMP</option>
                          <option>SMA</option>
                          <option>S1</option>
                          <option>S2</option>
                          <option>S3</option>
                     </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="nohp" class="col-sm-2 control-label">NO Handphone</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control is-valid" id="nohp" name="nohp" placeholder="62812 4567 8901" onkeypress="return angka(event)" minlength="11" max="13" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="col-sm-2 control-label">Email </label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control is-valid" id="email" name="email" placeholder="name@Example" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="tinggi_bdn" class="col-sm-2 control-label"">Tinggi Badan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control is-valid" id="tinggi_bdn" name="tinggi_bdn" placeholder="170 Cm" onkeypress="return angka(event)" maxlength="3" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="ukuran_baju" class="col-sm-2 control-label" style="bottom: 7px;">Ukuran Baju</label>
                  <div class="col-sm-10" style="letter-spacing:5px; ">
                      <input type="radio" name="ukuran_baju" value="S" required>S       
                      <input type="radio" name="ukuran_baju" value="M" required>M        
                      <input type="radio" name="ukuran_baju" value="L"checked required>L  
                      <input type="radio" name="ukuran_baju" value="XL" required>XXL      
                      <input type="radio" name="ukuran_baju" value="XXL" required>XXL 
                  </div>
                </div>
                <div class="form-group">
                  <label for="jns_pelatihan" class="col-sm-2 control-label">Jenis Pelatihan</label>
                    <div class="col-sm-10">
                      <select name="id_pelatihan" class="form-control is-valid" required>
                        <?php foreach ($pelatihan as $key => $value) :?>
                          <option value="<?= $value->id_pelatihan; ?>"><?=  $value->jns_pelatihan; ?></option>
                        <?php endforeach; ?>
                      </select>
                  </div>
                </div>
                 <div class="form-group">
                    <label for="nama_keg" class="col-sm-2 control-label">Nama Kegiatan</label>
                      <div class="col-sm-10">
                        <select name="id_kegiatan" class="form-control is-valid" required>
                          <?php foreach ($kegiatan as $key => $value) :?>
                          <option value="<?= $value->id_kegiatan ?>"><?=  $value->nama_keg ?></option>
                        <?php endforeach; ?>
                        </select>
                </div><br><br><br>
                  <div class="content-header">
                    <div class="box box-primary"> 
                      <center><h3>Izin Orang tua</h3></center>
                  </div>
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                      <input name="nama_ortu" type="text" class="form-control is-valid" id="nama" placeholder="Nama Orang Tua" minlength="5" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="ttl_ortu" class="col-sm-2 control-label">Tanggal lahir</label>
                    <div class="col-sm-10">
                      <input name="ttl_ortu" type="date"  class="form-control is-valid" id="ttl_ortu"  required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="hub_ortu" class="col-sm-2 control-label">Hubungan</label>
                    <div class="col-sm-10">
                       <select name="hub_ortu" class="form-control is-valid" required>
                          <option value="1">Orang tua Kandung</option>
                          <option value="2">Wali</option>
                          <option value="3">Suamin</option>
                          <option value="4">Istri</option>
                      </select>
                  </div>
                </div>  
                <div class="form-group">
                  <label for="almt_ortu" class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                      <textarea name="almt_ortu" id="almt_ortu" class="form-control is-valid" minlength="10" placeholder="Address" required></textarea>
                    </div>
                </div>
              <div class="form-group">
                  <label for="organisasi_ortu"  class="col-sm-2 control-label">Organisasi Ortu</label>
                    <div class="col-sm-10">
                      <textarea name="organisasi_ortu" minlength="10" class="form-control" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="nohp_ortu" class="col-sm-2 control-label">No Handphone</label>
                    <div class="col-sm-10">
                      <input name="nohp_ortu" type="text"  class="form-control is-valid" minlength="11" max="13" id="nohp_ortu" onkeypress="return angka(event)" required>
                  </div>
                </div>
              <div class="form-group">
                  <label for="email_ortu" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input name="email_ortu" type="email" class="form-control is-valid" id="email_ortu" placeholder="name@Example" required>
                  </div>
                </div>
                <div style="position: relative; left: 17%; top: 10px;">
                 <button type="submit" class="btn btn-primary">Simpan</button>
                    <button class="btn btn-danger" type="reset"> Reset </button>
                </div>             
      </form>
  </section>
</div>
  <script>
    function angka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
      return true;
    }
  </script>
</body>
</html>
  