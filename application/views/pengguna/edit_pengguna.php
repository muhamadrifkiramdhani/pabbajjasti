
  <div class="content-wrapper">
<section class="content-header">
      <h1>
&nbsp;&nbsp;&nbsp;DATA PENGGUNA 
        <small>Control panel</small> 
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('users/admin') ?>"><i class="fa fa-dashboard"></i>Pengguna</a></li>
        <li class="active">edit data pengguna</li>
      </ol><br>
  <section class="content" style="position: relative; left:8%;" >
      <div class="row" > 
        <div class="col-xs-10 ">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Pengguna</h3>
            </div>
    <?php foreach ($user as $us) {?>
        <form method="post" action=" <?php echo base_url().'users/update';?> ">
          <div class="content">
            <div class="form-group">
              <label for="nama">Nama Lengkap</label>
              <input type="hidden" name="id" value="<?php echo $us->id ?>">
              <input name="nama" type="text" class="form-control is-valid" id="nama"placeholder="Nama Lenkap" value="<?php echo $us->nama ?>" required>
              </div>
            <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                  <input name="tgl_lahir" type="date" class="form-control is-valid" value="<?php echo $us->tgl_lahir?>" required>
            </div>

          <div class="form-group">
              <label for="nama">Alamat</label>
                 <input type="text" name="alamat"  class="form-control" value="<?php echo $us->alamat?>">
          </div>

            <div class="form-group">
              <label for="Status">Status</label>
              <input name="status" type="text" class="form-control is-valid" id="Status" placeholder="status" value="<?php echo $us->status ?>" required>
            </div>
       
            <div class="form-group">
              <label for="pendidikan">Pendidikan</label>
              <select name="pendidikan" class="form-control is-valid" value=" <?php echo $us->pendidikan?>" required >
                <option>SD</option>
                <option>SMP</option>
                <option>SMA</option>
                <option>S1</option>
                <option>S2</option>
                <option>S3</option>
              </select>
            </div>

            <div class="form-group">
              <label for="nama">No Hanphone</label>
              <input name="nohp" type="text" class="form-control is-valid" id="nama" placeholder="No Hanphone" value="<?php echo $us->nohp ?>" minlength="11" max="13" onkeypress="return angka(event)"  required>

            </div>
         
          <div class="form-group">
              <label for="exampleFormControlInput1">Email address</label>
              <input name="email" type="email" class="form-control is-valid" id="email" placeholder="name@example.com" value="<?php echo $us->email ?>"  required>
           </div>

           <div class="form-group">
              <label for="exampleFormControlInput1">Tinggi Badan</label>
              <input name="tinggi_bdn" type="text" class="form-control is-valid" id="tinggi_bdn" placeholder="180" value="<?php echo $us->tinggi_bdn ?>" maxlength="3" onkeypress="return angka(event)" required>
           </div>

            <div class="form-group">
              <label for="ukuran_baju" value="<?php echo $us->ukuran_baju?>" required>Ukuran Baju</label>                  &nbsp;&nbsp;&nbsp;&nbsp;
                 <input type="radio" name="ukuran_baju" value="S" required>S         &nbsp;&nbsp;&nbsp;
                 <input type="radio" name="ukuran_baju" value="M" required>M         &nbsp;&nbsp;&nbsp;
                 <input type="radio" name="ukuran_baju" value="L"checked required>L  &nbsp;&nbsp;&nbsp;
                 <input type="radio" name="ukuran_baju" value="XL" required>XXL      &nbsp;&nbsp;&nbsp;
                 <input type="radio" name="ukuran_baju" value="XXL" required>XXL  
                </form>  
            </div>

          <div class="form-group">
              <label for="pendidikan">Jenis Pabbajja / Latihan</label>
              <select name="id_pelatihan" class="form-control is-valid" value="<?php echo $us->jns_pelatihan ?>"required>
                <?php foreach($pelatihan as $key => $value) : ?>
                          <?php if($value->id_kegiatan == $us->id_kegiatan) { ?>
                            <option value="<?= $us->id_pelatihan; ?>" selected><?= $value->jns_pelatihan; ?></option>
                          <?php } ?>
                            <option value="<?= $value->id_pelatihan; ?>"><?= $value->jns_pelatihan; ?></option>
                          
                <?php endforeach; ?>
              </select>
            </div>

            <div class="form-group">
                <label for="nama_keg">Nama Kegiatan</label>
                  <select name="id_kegiatan" class="form-control is-valid" value="<?php echo $us->nama_keg?>"required>
                     <?php foreach($kegiatan as $key => $value) : ?>
                          <?php if($value->id_kegiatan == $us->id_kegiatan) { ?>
                            <option value="<?= $us->id_kegiatan; ?>" selected><?= $value->nama_keg; ?></option>
                          <?php } ?>
                            <option value="<?= $value->id_kegiatan; ?>"><?= $value->nama_keg; ?></option>
                          

                      <?php endforeach; ?> 
                  </select>
            </div>
        <div style="word-spacing: 2px;">
              <a href=" <?php echo base_url('users/pengguna') ;?> "  class="btn btn-success " > Batal </a>
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