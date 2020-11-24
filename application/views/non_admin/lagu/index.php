<html>
<head><?php require_once "partials/partial_head.php";?></head>
<body>
<?php require_once "partials/menu.php";?>

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
					</tr>
				</thead>
				<tbody>
					<?php foreach ($arr["lagu"] as $lg){?>
						<tr>
						<td><?php echo $lg->judul_lagu;?></td>
						<td><?php echo $lg->gen;?></td>
						<td><?php echo $lg->nm_artis;?></td>
						<td><div class="open" key="<?php echo $lg->kd_lagu;?>">Open preview</div></td>
						</tr>
					<?php }?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php require_once "partials/partial_js.php";?>
</body>
</html>