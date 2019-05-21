 <html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   
  <body>
  <div class="content-wrapper">
  <section class="content">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Yang Terdaftar</span>
              <span class="info-box-number">3 <small>orang</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-user"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Yang di Tolak</span>
              <span class="info-box-number">10 <small>Orang</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jumlah  Terdaftar</span>
              <span class="info-box-number">20 <small>Orang</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Ter Pendding</span>
              <span class="info-box-number">Orang <small>Orang</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
     <section class="content-header">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                <div class="box-tools">
                  <div class="navbar-form navbar-right"> 
                    <div class="input-group input-group-sm" style="width: 150px;">
                  </div>
                </div>
              </div>
            </div>
          <div class="box-body">
              <table id="table" class="table table-bordered table-striped">
                <thead>
                 <tr>
                      <th>NO</th> 
                      <th>Nama</th>
                      <th>TTL</th>
                      <th>Alamat</th>
                      <th>Pendidikan</th>
                      <th>NO HP</th>
                      <th>Email</th>  
                      <th>Ukuran Baju</th>
                      <th>Tinggi Bandan</th>
                      <th>Nama Kegiatan</th>
                 </tr>
                 </thead>
               <?php $no = 1; foreach ($pengguna as $ps) :?>
                 <tr>
                      <td><?php echo $no++;              ?>  </td>
                      <td><?php echo $ps->nama           ?>  </td>
                      <td><?php echo $ps->nohp           ?>  </td>
                      <td><?php echo $ps->email          ?>  </td>
                      <td><?php echo $ps->nohp    ?>    </td>
                      <td><?php echo $ps->email    ?>    </td>
                      <td><?php echo $ps->ukuran_baju    ?>    </td>
                      <td><?php echo $ps->tinggi_bdn    ?>    </td>
                </tr>
              <?php endforeach ;?>
              </tbody>
        </table> 
      </section>     
    </div>
