<div class="content-wrapper">
    <section class="content-header">
            <h1>&nbsp;&nbsp;&nbsp;  
                Izin Orangtua 
              <small>Control panel</small>
            </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Formulir</a></li>
            <li class="active">izin orangtua</li>
          </ol><br>
          <section class="content"  style="position: relative; left:8%;">
      <div class="row" >
        <div class="col-xs-10 ">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Izin Orang Tua</h3>
            </div> 
              <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="nama_ortu" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="nama_ortu" class="form-control is-valid" id="nama_ortu" name="nama_ortu" placeholder="Nama Lengkap" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="ttl_ortu" class="col-sm-2 control-label">Tanggal Lahir</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control is-valid" id="ttl_ortu" name="ttl_ortu" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="hub_ortu" class="col-sm-2 control-label">Hubungan</label>
                    <div class="col-sm-10">
                      <select class="form-control is-valid" required>
                        <option value="1">Orang tua Kandung</option>
                        <option value="2">Wali</option>
                        <option value="3">Suamin</option>
                        <option value="4">Istri</option>
                      </select>
                  </div>
                </div>

              <div class="form-group">
                <label for="profesi_ortu" class="col-sm-2 control-label">Profesi</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control is-valid" id="profesi_ortu" name="profesi_ortu" placeholder="Pegawai Negeri Sipil" required>
                  </div>
                </div>

            <div class="form-group">
              <label for="almt_ortu" class="col-sm-2 control-label">Alamat</label>
                <div class="col-sm-10">
                   <textarea name="almt_ortu" class="form-control is-valid" placeholder="Jl Pasir Subur NO 10 RT/01 RW/09" required></textarea>
                  </div>
                </div>
             <div class="form-group">
                <label for="organisasi_ortu" class="col-sm-2 control-label">Organisasi</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control is-valid" id="organisasi_ortu" name="organisasi_ortu" required>
                  </div>
              </div>
               <div class="form-group">
                <label for="nohp_ortu" class="col-sm-2 control-label">NO Hanphone</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control is-valid" id="nohp_ortu" name="nohp_ortu" required>
                  </div>
              </div>
              <div class="form-group">
                <label for="email_ortu" class="col-sm-2 control-label">E-mail</label>
                    <div class="col-sm-10">
                    <input type="email" class="form-control is-valid" id="nohp_ortu" name="email_ortu" required>
                  </div>
              </div>
              <div style="position: relative; left:17%;"> 
                  <button type="reset" class="btn btn-danger" data-dismiss="modal" >Reset</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
              </div>


          </div>
          </section>
</div>
