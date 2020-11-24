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
						<td><a class="text-success p-3 edit-form" key="<?php echo $gnr->kd_gen;?>" data-toggle="modal" data-target="#modal-edit"><i class='fa fa-edit'></i>Edit</a> <a class="text-danger p-3" href="<?php echo site_url("/index.php/Genre/del?kd=".$gnr->kd_gen);?>"><i class='fa fa-trash'></i>Hapus</a></td></tr>
					<?php }?>
				</tbody>