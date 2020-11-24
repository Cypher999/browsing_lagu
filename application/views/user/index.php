<html>
<head><?php require_once "partials/partial_head.php";?></head>
<body>
<div class="container card col-xl-8 p-5">
<div class="card-header">
<h2>Login</h2>
</div>
<div class="card-body">
<form action="<?php echo site_url("/index.php/User/login");?>" method="post">
<input type="text" name="nm" class="form-control" placeholder="nama user"> <br>
<input type="password" name="ps" class="form-control" placeholder="password"> <br>
<div class="row">
	<div class="col"><input type="submit" class="btn btn-primary" value="Login"></div>
	<div class="col"><input type="button" class="btn btn-secondary" value="Signup" onclick="window.location.href='<?php echo site_url("/index.php/User/signup");?>'"></div>
</div>
</form>
</div>
</div>

"><?php require_once "partials/partial_js.php";?>
</body>
</html>