<footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div> 
    <center>
    <strong>Copyright &copy;2019<a href='https://www.icommits.co.id/'>Icommits</a>.</strong> All rights
    reserved.
  </footer>
<script src="<?php echo base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?php echo base_url()?>assets/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url()?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?php echo base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>sweetalert2/package/dist/sweetalert2.min.js">" ></script>
<!-- data table -->
<script src="<?php echo base_url() ?>DataTables2/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>DataTables2/datatables/js/dataTables.select.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#tables').DataTable();
} );
</script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

