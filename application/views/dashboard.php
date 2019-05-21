<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div class="content-wrapper">
  <section class="content">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Yang Terdaftar</span>
              <span class="info-box-number"><?php $query = $this->db->query('select ket_status from tb_fomulir'); echo $query->num_rows();?> <small>orang</small></span>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-user"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Yang di Tolak</span>
              <span class="info-box-number">10 <small>Orang</small></span>
            </div>
          </div>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-people-outline"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Jumlah  Terdaftar</span>
              <span class="info-box-number"><?php  $query = $this->db->query('select * from tb_fomulir'); echo $query->num_rows(); ?> <small>Orang</small></span>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Ter Pendding</span>
              <span class="info-box-number">Orang <small>Orang</small></span>
            </div>
          </div>
        </div>
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
              <table style="border: none;" id="tables" class="display table  table-striped">
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
                 </tr>
                 </thead>
               <?php $no = 1; foreach ($pengguna as $ps) :?>
                 <tr>
                      <td align="center"><?php echo $no++;              ?>  </td>
                      <td><?php echo $ps->nama           ?>  </td>
                      <td><?php echo $ps->tgl_lahir           ?>  </td>
                      <td><?php echo $ps->alamat          ?>  </td>
                      <td align="center"><?php echo $ps->pendidikan    ?>    </td>
                      <td><?php echo $ps->nohp    ?>    </td>
                      <td><?php echo $ps->email    ?>    </td>
                      <td align="center"><?php echo $ps->ukuran_baju    ?>    </td>
                      <td align="center"><?php echo $ps->tinggi_bdn    ?>    </td>
                  </tr>
              <?php endforeach ;?>
              </tbody>
        </table> 
      </section>     
    </div>
</body>
</html>