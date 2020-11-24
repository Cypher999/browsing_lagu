<script src="<?php echo site_url("assets/jquery/jquery.min.js");?>"></script>
<script src="<?php echo site_url("assets/bootstrap/js/bootstrap.bundle.min.js");?>"></script>
<script src="<?php echo site_url("assets/datatables/jquery.dataTables.min.js");?>"></script>
<script src="<?php echo site_url("assets/datatables/dataTables.bootstrap4.min.js");?>"></script>
<script>
$(document).ready(function() {
  $('#dataTable').DataTable();
  $(document).on("click",".edit-form",function(){
  	var kd=$(this).attr("key");
  	$.ajax({
  		url:'<?php echo site_url("/index.php/admin/Artis/edit?kd=");?>'+kd,
  		success:function(hasil){
  			$("#modal-edit").html(hasil);
  		}
  	})
  });
});
</script>