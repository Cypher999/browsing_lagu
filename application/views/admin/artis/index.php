<html>
<head><?php require_once "partials/partial_head.php";?></head>
<body>
<?php require_once "partials/menu.php";?>
<a class="text-primary p-3" data-toggle="modal" data-target="#modal-add"><i class='fa fa-plus'></i>Tambah data</a>
<div class="card mb-3">
	<div class="card-header">
		<h2>Data Artis</h2>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>Nama Artis</th>
						<th>Kontrol</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($artis as $art){?>
						<tr>
						<td><?php echo $art->nm_artis;?></td>
						<td><a class="text-success p-3 edit-form" key="<?php echo $art->kd_artis;?>" data-toggle="modal" data-target="#modal-edit"><i class='fa fa-edit'></i>Edit</a> <a class="text-danger p-3" href="<?php echo site_url("/index.php/Artis/del?kd=".$art->kd_artis);?>"><i class='fa fa-trash'></i>Hapus</a>
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
				<h2>Tambah data Artis</h2>
			</div>
			<div class="modal-body">
				<form action="<?php echo site_url("/index.php/Artis/add");?>" method="post">
					<label>Nama Artis</label>
					<input class="form-control" placeholder="nama artis.." name="nm"><br>
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