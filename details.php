<?php 
  include ('inc/header.php'); 
  include 'config.php';
  include 'action.php';
?>
<br>
<body class="bg-light">
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6 mt-3 bg-primary p-2 rounded">
			<h2 class="bg-primary p-2 rounded text-center text-light">
			 	ID : <?= $vid; ?> 
			</h2>
			<div class="text-center">
				<img src="<?= $vphoto; ?>" width="300" alt="" class="img-thumbnail">
			</div>
			<br>	
			<h4 class="text-light"><b>Name</b>  : <?= $vname; ?></h4>
			<h4 class="text-light"><b>Email</b> : <?= $vemail; ?></h4>
			<h4 class="text-light"><b>Phone</b> : <?= $vphone; ?></h4>
		</div>
	</div>
</div>
</body>