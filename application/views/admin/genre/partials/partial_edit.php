<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h2>Edit data Genre</h2>
			</div>
			<div class="modal-body">
				<?php foreach($genre as $gnr){?>
				<form action="<?php echo site_url("/index.php/admin/Genre/update?kd=".$gnr->kd_gen);?>" method="post">
					<label>Nama Genre</label>
					<input class="form-control" placeholder="nama genre.." name="nm" value="<?php echo $gnr->gen;?>"><br>
					<input type="submit" class="btn btn-primary" value="simpan">
				</form>
				<?php } ?>
			</div>
		</div>
	</div>