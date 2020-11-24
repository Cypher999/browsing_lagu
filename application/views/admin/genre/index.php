<html>
<head><?php require_once "partials/partial_head.php";?></head>
<body>
<?php require_once "partials/menu.php";?>
<a class="text-primary p-3" data-toggle="modal" data-target="#modal-add"><i class='fa fa-plus'></i>Tambah data</a>
<div class="card mb-3">
	<div class="card-header">
		<h2>Data Genre</h2>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>Genre</th>
						<th>Kontrol</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($genre as $gnr){?>
						<tr>
						<td><?php echo $gnr->gen;?></td>
						<td><a class="text-success p-3 edit-form" key="<?php echo $gnr->kd_gen;?>" data-toggle="modal" data-target="#modal-edit"><i class='fa fa-edit'></i>Edit</a> <a class="text-danger p-3" href="<?php echo site_url("/index.php/Genre/del?kd=".$gnr->kd_gen);?>"><i class='fa fa-trash'></i>Hapus</a>
						</td></tr>
					<?php }?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<div class="modal" id="modal-add">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h2>Tambah data Genre</h2>
			</div>
			<div class="modal-body">
				<form action="<?php echo site_url("/index.php/Genre/add");?>" method="post">
					<label>Nama Genre</label>
					<input class="form-control" placeholder="nama genre.." name="nm"><br>
					<input type="submit" class="btn btn-primary" value="simpan">
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal" id="modal-edit">
	
</div>
<?php require_once "partials/partial_js.php";?>
</body>
</html>