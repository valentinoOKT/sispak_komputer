</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; S.P.K. 2023</span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div>
  <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
  <div class="modal-footer">
    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
    <a class="btn btn-primary" href="login.html">Logout</a>
  </div>
</div>
</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url(); ?>assets/admin/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url(); ?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url(); ?>assets/admin/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url(); ?>assets/admin/vendor/chart.js/Chart.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url(); ?>assets/admin/js/demo/chart-area-komputer.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/demo/chart-pie-komputer.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/demo/datatables-demo.js"></script>

<script type="text/javascript">
/*
function filterRekomendasi(){
  $.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var inp_keahlian = $('#kategori').val();
        var keahlian = data[4]; // use data for the age column

        if ( inp_keahlian === keahlian )
        {
            return true;
        }
        return false;
    }
  );

  $(document).ready(function() {
    var table = $('#dataTable').DataTable();

    // Event listener to the two range filtering inputs to redraw on input
    $('#keahlian').keyup( function() {
        table.draw();
    } );
  } );
}


$('#btnFilter').on('click', function () {
  var table = $('#dataTable').DataTable();
  var inp_keahlian = $('#kategori').val();
  var inp_topik = $('#topik').val();
  if (inp_topik==='') {
    table.column(4).search(inp_keahlian).draw();
  }else {
    table.columns([5,6]).search(inp_topik).draw();
  }
});


$.fn.dataTable.ext.search.push(
  function( settings, data, dataIndex ) {
    if (data[5] === true || data[6] === true ) {
      return true;
    }
    return false;
  }
);

$(document).ready(function() {
  var table = $('#dataTable').DataTable();
  var inp_topik = $('#topik').val();
  if (inp_topik!=='') {
    table.columns([5]).search(inp_topik).draw();
  }
} );
*/
</script>

</body>

</html>
