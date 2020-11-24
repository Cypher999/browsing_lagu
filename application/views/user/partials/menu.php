<nav class="navbar navbar-expand-md bg-success navbar-dark" style="z-index: 1000;width: 100%">
	<a class="navbar brand"><?php echo NAMA_SITUS;?></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsiblenavbar">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="collapsiblenavbar">
		<ul class="navbar-nav">
			<li class="nav-item">
				<div class='nav-link'>
					<a class="btn sing-it" href="<?php echo site_url("/index.php");?>">Home</a>
				</div>
			</li>
			<li class="nav-item">
				<div class="dropdown nav-link">
					<button class="btn dropdown-toggle" type="button" data-toggle="dropdown">Menu data</button>
					<div class="dropdown-menu">
						<a class="btn dropdown-item" href="<?php echo site_url("/index.php/Genre");?>">Genre Lagu</a>
						<a class="btn dropdown-item" href="<?php echo site_url("/index.php/Artis");?>">Artis</a>
						<a class="btn dropdown-item" href="<?php echo site_url("/index.php/Lagu");?>">Lagu</a>
					</div>
				</div>
			</li>
			<li class="nav-item">
				<div class='nav-link'>
					<a class="btn sing-it" href="#">Menu 3</a>
				</div>
			</li>
		</ul>
	</div>
</nav><br>