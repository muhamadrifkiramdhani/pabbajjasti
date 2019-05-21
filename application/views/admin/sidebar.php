                  <aside class="main-sidebar">
                      <section class="sidebar">
                        <div class="user-panel">
                          <div class="pull-left image">
                            <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                          </div>
                          <div class="pull-left info">
                            <p>ADMIN</p> 
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                          </div>
                        </div>
                        <form action="#" method="get" class="sidebar-form">
                          <div class="input-group">
                            <input type="text" name="g" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                  <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                          </div> 
                        </form>
                        <ul class="sidebar-menu" data-widget="tree">
                          <li class="header">MAIN NAVIGATION</li>
                          <li class="active treeview menu-open">
                          </li>
                          <li class="tree">
                              <a href="<?php echo base_url('users/Dashboard') ?>">
                                <i class="fa fa-user-o"></i><span>Dashboard</span>
                              </a>  
                                <li class="treeview">
                            <a href="#">
                              <i class="fa fa-user"></i>
                                <span>Panitia</span>
                                <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                              <li>
                                <a href="<?php echo base_url('panitia/panitia/show_panitia')?>"><i class="fa fa-circle-o"></i> Data Panita</a>
                              </li> 
                              <li>
                                <a href="<?php echo base_url('panitia/panitia/sampah')?>"><i class="fa fa-circle-o"></i> Sampah </a>
                              </li>
                            </li>
                          </li>
                        </ul>
                      </li>
                          <li class="treeview">
                            <a href="#">
                              <i class="fa fa-users"></i>
                                <span>Calon Peserta</span>
                                <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                              <li>
                                <a href="<?php echo base_url('users/pengguna')?>"><i class="fa fa-circle-o"></i> Calon Peserta</a>
                              </li> 
                              <li>
                                <a href="<?php echo base_url('users/daftar')?>"><i class="fa fa-circle-o"></i> Daftar</a>
                              </li>
                              <li>
                                <a href="<?php echo base_url('users/sampah')?>"><i class="fa fa-circle-o"></i> Sampah </a>
                              </li>
                            </li>
                          </li>
                        </ul>
                      </li>
                      <li class="active tree">
                        <li class="tree">
                          <a href="<?php echo base_url('users/peserta') ?>">
                            <i class="fa fa-user"></i> <span>Peserta</span>
                          </a>  
                      </li>
                      <li class="active tree">
                          <li class="tree">
                            <a href="#">
                              <i class="fa fa-lock"></i> <span>Ganti Password</span>
                            </a>  
                      </li>
                      <li class="tree">
                        <a href="<?php echo base_url('stilogin/logout') ?>">
                          <i class="fa fa-sign-out"></i> <span>Logout</span>
                        </a>  
                      </li>
                      <ul class="sidebar-menu" data-widget="tree">
                      <li class="header">Acount</li> 
                      <li class="treview">
                        <a href="<?php echo base_url('dashboard/akses')?>">
                          <i class="fa fa-user"></i> <span>Acount</span>
                        </a>  
                      </li>
                  </ul>
      </section>
  </aside>
  