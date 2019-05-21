<!DOCTYPE html>
<html>
<head></head>
<body>
<div class="content-wrapper">
<section class="content-header">
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('users/dashboard') ?>"><i class="fa fa-trash"></i>  Sampah </a></li>
        <li class="active"><a href="<?php echo base_url('panitia/panitia/show_panitia') ?>">Panitia</a></li>
      </ol><br><br>
       <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title" style="font-family: 'arial'"><i class="fa fa-trash"> Recycle Panitia</i></h3>
                <div class="box-tools">
                  <div class="navbar-form navbar-right"> 
                    <div class="input-group input-group-sm" style="width: 220px;">
                  </div>
                </div>
              </div>
            </div>
          </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                <div class="box-tools">
                  <div class="navbar-form navbar-right"> 
                    <div class="input-group input-group-sm" style="width: 220px;">
                  </div>
                </div>
              </div>
            </div>&nbsp;&nbsp;&nbsp;  
               <a class="btn btn-danger" href=" <?php echo base_url('users/pdf') ?>">
              <i class="fa fa-print"> pdf  </i>
        </a><br><br> 
            <div class="box-body">
              <table id="tables" class="table table-striped" >
                <thead>
                  <tr>
                      <th>NO</th> 
                      <th>Nama</th>
                      <th>Jenis Kelamin</th>
                      <th>NO Handphone</th>
                      <th>Email</th>  
                      <th>Jenis Pelatihan</th>
                      <th>Nama Kegiatan</th>
                      <th>Pengaturan</th>
                 </tr>
                 </thead>
                 <tbody>
              <?php $no = 1; foreach ($panitia as $p) : ?>
                 <tr >
                      <td> <?php echo $no++;?>            </td>
                      <td> <?php echo $p->nama ?>         </td>
                      <td> <?php echo $p->jk ?>           </td>
                      <td> <?php echo $p->nohp ?>         </td>
                      <td> <?php echo $p->email?>         </td>
                      <td> <?php echo $p->id_pelatihan ?></td>
                      <td> <?php echo $p->id_kegiatan ?>     </td>
                      <td onclick="simpan()">
                            <?php  echo anchor('panitia/panitia/hapus/'.$p->id_panitia,'<div class="btn btn-danger btn-sm "><i class="fa fa-trash"></i></div>');?> 
                            <?php echo anchor('panitia/panitia/restore_panitia/'.$p->id_panitia,'<div class="btn btn-success btn-sm"><i class="fa fa-gear"></i></div>'); ?>
                      </td> 
                </tr> 
              <?php endforeach ; ?>
              </tbody>
        </table>  
      </div>
  </section>
  <script type="text/javascript">
       function simpan(){
                Swal.fire(
              'Berhasil!',
              'Terimakasih!',
              'success'
            )
              }
  </script>
</div>
</body></html>