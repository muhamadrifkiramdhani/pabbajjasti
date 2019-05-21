
<div class="content-wrapper">
<section class="content-header">
      <h1>
&nbsp;&nbsp;&nbsp;Akses Pengguna 
        <small>Control panel</small> 
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('users/admin') ?>"><i class="fa fa-user-o"></i>Acount</a></li>
        <li class="active">edit akses pengguna</li>
      </ol><br>
  <section class="content" style="position: relative; left:8%;" >
      <div class="row" > 
        <div class="col-xs-10 ">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Akses Admin</h3>
            </div>
    <?php foreach ($admin as $a) {?>
        <form method="post" action=" <?php echo base_url().'dashboard/update_akses';?> ">
          <div class="content">
            <div class="form-group">
              <label for="id_akse">Nama</label>
              <input type="hidden" name="id_akses" value="<?php echo $a->id_akses ?>">
              <input name="nama" type="text" class="form-control is-valid" id="nama"placeholder="Nama " value="<?php echo $a->nama ?>" required>
              </div>
            <div class="form-group">
                <label for="username">Username</label>
                  <input name="username" type="text" class="form-control is-valid" value="<?php echo $a->username?>" required>
            </div>
             <div class="form-group">
                <label for="password">Password</label>
                  <input name="password" type="text" class="form-control is-valid" value="<?php echo $a->password?>" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
                <input type="email" name="email" class="form-control is-valid" value="<?php echo $a->email?>" required>
            </div>
            <div class="form-group">
              <label for="level">Level</label>
              <select name="level" class="form-control is-valid" required >
                <option>admin</option>
                <option>member</option>
              </select>
            </div>
        <div style="word-spacing: 2px;">
              <a href=" <?php echo base_url('dashboard/akses') ;?> "  class="btn btn-success " > Batal </a>
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
</script>