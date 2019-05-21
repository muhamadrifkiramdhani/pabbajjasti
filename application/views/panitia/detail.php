
<div class="content-wrapper">
<section class="content-header">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i>Pengguna</a></li>
        <li class="active">Detail</li>
      </ol><br>
  <section class="content" style="position: relative; left:8%;" >
      <div class="row" >
        <div class="col-xs-10 ">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Detail Panitia</h3>
            </div>
         <div class="content-header">
              <table id="" class="table"> 
                    <tr>
                      <th>Nama</th>
                      <td> :&nbsp; <?php echo $panitia->nama; ?></td>
                    </tr>
                    <tr>
                      <th>Jenis Kelamin</th>
                      <td> :&nbsp; <?php echo $panitia->jk; ?></td>
                    </tr>
                    <tr>
                      <th>No Handphone</th>
                      <td> :&nbsp; <?php echo $panitia->nohp; ?></td>
                    </tr>
                      <th>No Handphone</th>
                      <td> :&nbsp; <?php echo $panitia->nohp; ?></td>
                    </tr>
                     <tr>
                      <th>Email</th>
                      <td> :&nbsp; <?php echo $panitia->email; ?></td>
                    </tr>
                    <tr>
                      <th>Jenis Pelatihan</th>
                      <td> :&nbsp; <?php echo $panitia->id_pelatihan; ?></td>
                    </tr>
                    <tr>
                      <th>Nama Kegiatan</th>
                      <td> :&nbsp; <?php echo $panitia->id_kegiatan; ?></td>
                    </tr>
                </table>

            <div class="content-content" ></div>
             <a href=" <?php echo base_url('panitia/panitia/show_panitia') ;?> " class="btn btn-success" >Kembali </a>
         </div><br> 
</section>
</div>

