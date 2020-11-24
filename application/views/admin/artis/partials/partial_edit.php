<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h2>Edit data Artis</h2>
			</div>
			<div class="modal-body">
				<?php foreach($artis as $gnr){?>
				<form action="<?php echo site_url("/index.php/Artis/update?kd=".$gnr->kd_artis);?>" method="post">
					<label>Nama Artis</label>
					<input class="form-control" placeholder="nama artis.." name="nm" value="<?php echo $gnr->nm_artis;?>"><br>
					<input type="submit" class="btn btn-primary" value="simpan">
				</form>
				<?php } ?>
			</div>
		</div>
	</div>