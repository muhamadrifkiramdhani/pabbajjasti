
            <div class="content-wrapper">
          <section class="content-header">
                <ol class="breadcrumb">
                  <li><a href="<?php echo base_url('users/admin') ?>"><i class="fa fa-dashboard"></i>Peserta</a></li>
                  <li class="active">Edit Panitia</li>
                </ol><br>
            <section class="content" style="position: relative; left:8%;" >
                <div class="row" > 
                  <div class="col-xs-10 ">
                    <div class="box box-primary">
                      <div class="box-header with-border">
                        <h3 class="box-title">Edit Data Pengguna</h3>
                      </div>
                <?php foreach ($panitia as $p) {?> 
                  <form method="post" action=" <?php echo base_url().'panitia/panitia/update';?> ">
                    <div class="content">
                      <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="hidden" name="id_panitia" value="<?php echo $p->id_panitia ?>">
                        <input name="nama" type="text" class="form-control is-valid" value="<?php echo $p->nama ?>" required>
                      </div>
                      <div class="form-group">
                          <label for="jk">Jenis Kelamin</label>
                            <select name="jk" class="form-control is-valid" value="<?php echo $p->jk ?>" required >
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                               </select>
                      </div>
                       <div class="form-group">
                          <label for="nohp">No Handphone</label>
                            <input name="nohp" type="text" class="form-control is-valid" value="<?php echo $p->nohp?>" minlength="11"  maxlength="13" onkeypress="return angka(event)" required>
                      </div>
                       <div class="form-group">
                          <label for="email">E Mail</label>
                            <input name="email" type="email" class="form-control is-valid" value="<?php echo $p->email?>" required>
                      </div>
                       <div class="form-group">
                          <label for="jenis_pelatihan">Kode Pelatihan</label>
                            <select name="id_pelatihan" class="form-control is-valid" required>
                                <?php foreach ($pelatihan as $key => $value) :?>
                                    <option value="<?= $value->id_pelatihan ?>"><?=  $value->jns_pelatihan ?></option>
                                  <?php endforeach; ?>
                                </select>
                      </div>
                       <div class="form-group"> 
                          <label for="nama_keg">Kode Kegiatan</label>
                            <select name="id_kegiatan" class="form-control is-valid" required>
                                <?php foreach ($kegiatan as $key => $value) :?>
                                    <option value="<?= $value->id_kegiatan ?>"><?=  $value->nama_keg ?></option>
                                  <?php endforeach; ?>
                                  </select>
                      </div>
                     <div style="word-spacing: 2px;">
                        <a href=" <?php echo base_url('panitia/panitia/show_panitia') ;?> "  class="btn btn-success " > Batal </a>
                          <button type="submit" class="btn btn-primary " onclick="simpan()">Simpan</button>
                    </div>
              </form>
            <?php }?>
            </section>
          </div>
                      <script type="text/javascript">
                        function simpan(){
                          Swal.fire(
                        'Data Telah di Udate!',
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