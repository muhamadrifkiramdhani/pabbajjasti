              <div class="content-wrapper">
              <section class="content-header">
                    <ol class="breadcrumb">
                      <li><a href="<?php echo base_url('users/pengguna') ?>"><i class="fa fa-users-o"></i>Calon Peserta</a></li>
                      <li class="active"><a href="<?php echo base_url('users/pengguna') ?>">Acount</a></li>
                    </ol><br>
                     <div class="row">\
                      <div class="col-xs-12">
                        <div class="box">
                          <div class="box-header">
                            <h3 class="box-title" style="font-family: 'arial'"><i class="fa fa-users">  Akses Login Pabbjjasti</i> </h3>
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
                                  <div class="input-group input-group-sm" style="width: 200px;">
                                </div>
                              </div>
                            </div>
                          </div> &nbsp;&nbsp;&nbsp;            
                      <a class="btn btn-primary" type="submit" href="" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-user-plus"> Tambah</i></a>
                            <a class="btn btn-danger" href=" <?php echo base_url('users/print') ?>">
                            <i class="fa fa-print"> Print </i>
                      </a>
                          <div class="box-body">
                            <table  id="tables" class="table table-striped" >
                              <thead>
                               <tr>
                                    <th>NO</th>
                                    <th>Nama</th> 
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Email</th>
                                    <th>level</th>
                                    <th>Penganturan</th>
                               </tr>
                               </thead>
                               <tbody>
                             <?php $no = 1; foreach ($admin as $a){?>
                               <tr>
                                    <td><?php echo $no++;              ?>  </td>
                                    <td><?php echo $a->nama                           ?>  </td>
                                    <td><?php echo $a->username                       ?>  </td>
                                    <td><?php echo $a->password                       ?>  </td>
                                    <td><?php echo $a->email                          ?>  </td>
                                    <td><?php echo $a->level           ?>  </td>
                                    <td onclick="javascript: return confirm('Apa anda Yakin')"><?php echo anchor('dashboard/hapus/'.$a->id_akses,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>');?>       
                                       <?php echo anchor('dashboard/edit_akses/'.$a->id_akses,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>'); ?>
                                    </td>
                              </tr> 
                            <?php } ?>
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
                              <form method="post" action=" <?php echo base_url().'dashboard/tambah_akses';?> ">
                                  <div> 
                                    <label for>Nama</label>
                                    <input type="hidden" name="id" value="<?php echo $a->id_akses ?>">
                                    <input type="text" name="nama" class="form-control is-valid" required>
                                  </div>
                                  <div> 
                                    <label for>Username</label>
                                    <input type="text" name="username" class="form-control is-valid" required>
                                  </div>
                                  <div> 
                                    <label for>Password</label>
                                    <input type="password" name="password" class="form-control is-valid" required>
                                  </div>
                                  <div> 
                                    <label for>email</label>
                                    <input type="email" name="email" class="form-control is-valid" required>
                                  </div>
                                  <div> 
                                    <label for="level">level</label>
                                      
                                   </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" oncli data-dismiss="modal">Close</button>
                                          <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  </div>
                              </form>
                        </section>
                      </div>