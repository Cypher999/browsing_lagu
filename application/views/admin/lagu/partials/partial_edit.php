<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h2>Edit Lagu</h2>
			</div>
			<div class="modal-body">
				<?php foreach ($arr["lagu"] as $lg){?>
				<form action="<?php echo site_url("/index.php/Lagu/update?kd=".$lg->kd_lagu);?>" method="post" enctype="multipart/form-data">
					<label>Judul Lagu</label>
					<input class="form-control" placeholder="nama lagu.." name="nm_lagu" value="<?php echo $lg->judul_lagu;?>"><br>
					<label>Genre</label>
					<select class="form-control" name="genre">
						<?php foreach($arr["genre"] as $gnr){?>
							<option value="<?php echo $gnr->kd_gen;?>"
								<?php if($gnr->kd_gen==$lg->kd_gen){echo "selected";}?>
								><?php echo $gnr->gen;?></option>
						<?php } ?>
					</select>
					<label>Artis</label>
					<select class="form-control" name="artis">
						<?php foreach($arr["artis"] as $ar){?>
							<option value="<?php echo $ar->kd_artis;?>"
								<?php if($ar->kd_artis==$lg->kd_artis){echo "selected";}?>
								><?php echo $ar->nm_artis;?></option>
						<?php } ?>
					</select><br>
					<label>File Lagu</label>
					<input type="file" name="lagu"><br>

					<input type="submit" class="btn btn-primary" value="simpan">
				</form>
				<?php } ?>
			</div>
		</div>
	</div>