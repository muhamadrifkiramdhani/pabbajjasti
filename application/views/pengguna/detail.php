<div class="content-wrapper">
<section class="content-header">
      <h1 style="position: absolute; left:1%; ">
            Detail Peserta
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i>Pengguna</a></li>
        <li class="active">Detail</li>
      </ol><br>
  <section class="content" style="position: relative; left:8%;" >
      <div class="row" >
        <div class="col-xs-10 ">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Detail Peserta</h3>
            </div>
         <div class="content-header">
              <table id="" class="table"> 
                    <tr>
                      <th>Nama</th>
                      <td> :&nbsp; <?php echo $detail->nama; ?></td>
                    </tr>
                    <tr>
                      <th>Tanggal Lahir</th>
                      <td> :&nbsp; <?php echo $detail->tgl_lahir; ?></td>
                    </tr>
                    <tr>
                       <tr>
                      <th>Alamat</th>
                      <td> :&nbsp; <?php echo $detail->alamat; ?></td>
                    </tr>
                      <th>Status</th>
                      <td> :&nbsp; <?php echo $detail->status; ?></td>
                    </tr>
                     <tr>
                      <th>Pendidikan</th>
                      <td> :&nbsp; <?php echo $detail->pendidikan; ?></td>
                    </tr>
                    <tr>
                      <th>NO Handphone</th>
                      <td> :&nbsp; <?php echo $detail->nohp; ?></td>
                    </tr>
                    <tr>
                      <th>Email</th>
                      <td> :&nbsp; <?php echo $detail->email; ?></td>
                    </tr>
                    <tr>
                      <th>Tinggi Badan:</th>
                      <td> :&nbsp; <?php echo $detail->tinggi_bdn; ?></td>
                    </tr>
                    <tr>
                      <th>Jenis Pelatihan Yang Dipilih</th>
                      <td> :&nbsp; <?php echo $detail->jns_pelatihan; ?></td>
                    </tr>
                    <tr>
                      <th>Nama Keigatan Yang Dipilih</th>
                      <td> :&nbsp; <?php echo $detail->nama_keg; ?></td>
                    </tr>

                </table>
            <div class="content-content" ></div>
             <a href=" <?php echo base_url('users/pengguna') ;?> " class="btn btn-success" >Kembali </a>
         </div><br>
</section>
</div>

