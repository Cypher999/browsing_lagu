<html>
<head><?php require_once "partials/partial_head.php";?></head>
<body>
<?php require_once "partials/menu.php";?>
<a class="text-primary p-3" data-toggle="modal" data-target="#modal-add"><i class='fa fa-plus'></i>Tambah data</a>
<div class="card mb-3">
	<div class="card-header">
		<h2>Data Lagu</h2>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>Judul Lagu</th>
						<th>Genre</th>
						<th>Nama Artis</th>
						<th>Preview lagu</th>
						<th>Kontrol</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($arr["lagu"] as $lg){?>
						<tr>
						<td><?php echo $lg->judul_lagu;?></td>
						<td><?php echo $lg->gen;?></td>
						<td><?php echo $lg->nm_artis;?></td>
						<td><div class="open" key="<?php echo $lg->kd_lagu;?>">Open preview</div></td>
						<td><a class="text-success p-3 edit-form" key="<?php echo $lg->kd_lagu;?>" data-toggle="modal" data-target="#modal-edit"><i class='fa fa-edit'></i>Edit</a> <a class="text-danger p-3" href="<?php echo site_url("/index.php/Lagu/del?kd=".$lg->kd_lagu);?>"><i class='fa fa-trash'></i>Hapus</a>
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
				<h2>Tambah Lagu</h2>
			</div>
			<div class="modal-body">
				<form action="<?php echo site_url("/index.php/Lagu/add");?>" method="post" enctype="multipart/form-data">
					<label>Judul Lagu</label>
					<input class="form-control" placeholder="nama artis.." name="nm_lagu"><br>
					<label>Genre</label>
					<select class="form-control" name="genre">
						<?php foreach($arr["genre"] as $gnr){?>
							<option value="<?php echo $gnr->kd_gen;?>"><?php echo $gnr->gen;?></option>
						<?php } ?>
					</select>
					<label>Artis</label>
					<select class="form-control" name="artis">
						<?php foreach($arr["artis"] as $ar){?>
							<option value="<?php echo $ar->kd_artis;?>"><?php echo $ar->nm_artis;?></option>
						<?php } ?>
					</select><br>
					<label>File Lagu</label>
					<input type="file" name="lagu"><br>

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