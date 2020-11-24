<script src="<?php echo site_url("assets/jquery/jquery.min.js");?>"></script>
<script src="<?php echo site_url("assets/bootstrap/js/bootstrap.bundle.min.js");?>"></script>
<script src="<?php echo site_url("assets/datatables/jquery.dataTables.min.js");?>"></script>
<script src="<?php echo site_url("assets/datatables/dataTables.bootstrap4.min.js");?>"></script>
<script>
$(document).ready(function() {
  $('#dataTable').DataTable();
  $(document).on("click",".close-prev",function(){
    $(".open").html("Open");
  });
  $(document).on("click",".open",function(){
    var key=$(this).attr("key");
    var nm_file="<?php echo site_url("upload/");?>"+key+".mp3";
    $(".open").html("Open");
    $(this).html("<audio controls><source src='"+nm_file+"'></audio>");
  });
});
</script>