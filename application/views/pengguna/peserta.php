<!DOCTYPE html>
<html>
<head></head>
<div class="content-wrapper">
<section class="content-header">
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('users/dashboard') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">DATA PENGGUNA</li>
      </ol><br><br>
       <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title" style="font-family: 'arial'"><i class="fa fa-user"></i> Peserta</h3>
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
              <table id="tables" class="table table-striped">
                <thead>
                  <tr>
                      <th>NO</th> 
                      <th>Nama</th>
                      <th>NO Handphone</th>
                      <th>Email</th>  
                      <th>Ukuran Baju</th>
                      <th>Status</th>
                      <th>Penganturan</th>
                 </tr>
                 </thead>
                 <tbody>
               <?php $no = 1; foreach ($peserta as $p) : ?>
                 <tr>
                      <td><?php echo $no++;?></td>
                      <td><?php echo $p->nama ?>  </td>
                      <td><?php echo $p->nohp ?></td>
                      <td><?php echo $p->email         ?>    </td>
                      <td><?php echo $p->ukuran_baju   ?>    </td>
                      <td><?php echo $p->ket_status ?></td>
                      <td ><?php  echo anchor('users/hapus/'.$p->id,'<div class="btn btn-danger btn-sm "><i class="fa fa-trash"></i></div>');?> 
                        <?php  echo anchor('users/batal/'.$p->id,'<div class="btn btn-success btn-sm "><i class="fa fa-user"></i></div>');?> 
                </tr> 
              <?php endforeach ; ?>
              </tbody>
        </table>  
      </div>
  </section>
</div>

</body>
</html>