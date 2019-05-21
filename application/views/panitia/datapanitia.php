<!DOCTYPE html>
<html>
<head></head>
<link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
<body>
<div class="content-wrapper">
<section class="content-header">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-users"></i>Panitia</a></li>
        <li><a href="#">Calon Peserta</a></li>
      </ol><br><br>
       <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title" style="font-family: 'arial'"><i class="fa fa-user"></i> Panitia</h3>
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
             <a class="btn btn-primary" type="submit" href="" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-user-plus"> Tambah</i></a>
               <a class="btn btn-danger" href=" <?php echo base_url('users/pdf') ?>">
              <i class="fa fa-print"> pdf  </i>
        </a><br>
            <div class="box-body">
              <table style="border: none;" id="tables" class="table table-striped"  >
                <thead>
                  <tr>
                      <th>NO</th> 
                      <th>Nama</th>
                      <th>Jenis Kelamin</th>
                      <th>NO Handphone</th>
                      <th>Email</th>  
                      <th>Jenis Pelatihan</th>
                      <th>Nama Kegiatan</th>
                      <th  style="width: 12%">Pengaturan</th>
                 </tr>
                 </thead>
                 <tbody >
               <?php $no = 1; foreach ($panitia as $p) : ?>
                 <tr >
                      <td> <?php echo $no++;?>            </td>
                      <td> <?php echo $p->nama ?>         </td>
                      <td> <?php echo $p->jk ?>           </td>
                      <td> <?php echo $p->nohp ?>         </td>
                      <td> <?php echo $p->email?>         </td>
                      <td> <?php echo $p->id_pelatihan ?> </td>
                      <td> <?php echo $p->id_kegiatan ?>  </td>
                      <td>
                             <a href=" <?php echo base_url("panitia/panitia/detail/$p->id_panitia");?>" class="btn btn-success btn-sm "><i class="fa fa-search plus"></i></a>
                             <a href=" <?php echo base_url("panitia/panitia/edit/$p->id_panitia");?>" class="btn btn-primary btn-sm "><i class="fa fa-edit"></i></a>
                              <a href=" <?php echo base_url("panitia/panitia/sampah_panitia/$p->id_panitia");?>" class="btn btn-danger btn-sm " onclick="javascript: return confirm('Apakah Anda yakin Akan menerimanya')"><i class="fa fa-trash"></i></a>
                      </td> 
                </tr> 
              <?php endforeach ; ?>
              </tbody>
        </table>  
      </div>
                   <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="<?php echo base_url().'panitia/panitia/tambah';?> ">
                                <div> 
                                  <label for>Nama</label>
                                  <input type="text" name="nama" class="form-control is-valid" required>
                                </div>
                                <div> 
                                  <label for="jk">Jenis Kelamin</label>
                                    <select name="jk" class="form-control is-valid" required >
                                            <option></option>
                                            <option>Laki-laki</option>
                                            <option>Perempuan</option>
                                    </select>
                                </div>
                                <div> 
                                  <label for>No Hanphone</label>
                                  <input type="text" name="nohp" class="form-control is-valid" minlength="11"  maxlength="13" onkeypress="return angka(event)" required>
                                </div>
                                <div> 
                                  <label for>email</label>
                                  <input type="email" name="email" class="form-control is-valid" required>
                                </div>
                                <div> 
                                  <!-- <label for>Jenis Pelatihan</label>
                                  <select name="id_pelatihan" class="form-control is-valid" >
                        <?php foreach ($pelatihan as $key => $value) :?>
                          <option value="<?= $value->id_pelatihan; ?>"><?=  $value->jns_pelatihan; ?></option>
                        <?php endforeach; ?>
                      </select> -->
                                </div>
                                <div> 
                                  <label for>Nama Kegiatan</label>
                                  <select name="id_kegiatan" class="form-control is-valid" required>
                                    <option>001</option>
                                    </select>
                                </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" oncli data-dismiss="modal" >Close</button>
                                        <button type="submit" class="btn btn-primary" onclick="return simpan()">Save changes</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                </div>
                            </form>
                        </section>
                      </div>
                      <script type="text/javascript">
                         function simpan(){
                          Swal.fire(
                        'Berhasil',
                        'Terimakasih!',
                        'success'
                      )
                        }

                        function angka(evt) {
                          var charCode = (evt.which) ? evt.which : event.keyCode
                           if (charCode > 31 && (charCode < 48 || charCode > 57))
                            return false;
                          return true;
                        }
                      </script>
                      </body></html>