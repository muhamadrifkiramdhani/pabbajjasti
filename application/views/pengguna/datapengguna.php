
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="<?php echo base_url('assets/bower_components/font-awesome/css/font-awesome.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/Ionicons/css/ionicons.min.css');?>">
  </head>
<body>
<div class="content-wrapper">
<section class="content-header">
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('users/peserta'); ?>"><i class="fa fa-users"></i> Calon Peserta</a></li>
        <li><a href="<?php echo base_url('users/dashboard'); ?>">Dashboard</a></li>
      </ol><br><br>
       <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title" style="font-family: 'arial'"><i class="fa fa-users"></i>  Calon Peserta</h3>
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
               <a class="btn btn-danger" href=" <?php echo base_url('users/pdf'); ?>">
              <i class="fa fa-print"> pdf  </i>
        </a><br><br> 
            <div class="box-body">
              <table style="border: none;" id="tables" class="table table-striped"  >
                <thead>
                  <tr>
                      <th>NO</th> 
                      <th>Nama</th>
                      <th>NO Handphone</th>
                      <th>Email</th>  
                      <th>Ukuran Baju</th>
                      <th>Pendidikan</th>
                      <th>Status</th>
                      <th style="width: 13%;">Penganturan</th>
                 </tr>
                 </thead>
                 <tbody >
                
               <?php $no = 1; foreach ($user as $us) : ?> 
                 <tr >
                  <td style="text-align: center;"> <?php echo $no++;?></td>
                      <td> <?php echo $us->nama; ?>  </td>
                      <td style="width: 14%; text-align: center;"> <?php echo $us->nohp; ?></td>
                      <td> <?php echo $us->email; ?>    </td>
                      <td style="text-align: center; width: 12%"> <?php echo $us->ukuran_baju; ?>    </td>
                      <td style="text-align: center;"> <?php echo $us->pendidikan; ?></td>
                      <td style="width: 12%"> 
                            <a href=" <?php echo base_url("dashboard/send/$us->id");?>" class="btn btn-primary btn-sm " onclick="javascript: return confirm('Apakah Anda yakin Akan menerimanya')"> Terima </a>
                           <a href=" <?php echo base_url("users/tolak/$us->id");?> " class="btn btn-danger btn-sm" onclick="javascript: return confirm('apakah anda yakin akan menolak nya ')"> tolak </a>
                      </td> 
                  
                       <td>
                            <?php echo anchor('users/detail/'.$us->id,'<div class="btn btn-success btn-sm"><i class="fa fa-search plus"></i></div>'); ?>
                            <?php echo anchor('users/edit/'.$us->id,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>'); ?>
                            <?php  echo anchor('users/proses_sampah/'.$us->id,'<div class="btn btn-danger btn-sm "><i class="fa fa-trash"></i></div>');?> 
                      </td>
                </tr> 
                <?php endforeach; ?> 
              </tbody>
        </table>  
      </div>
  </section>
</div>
</body>
</html>