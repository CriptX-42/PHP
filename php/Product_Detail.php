<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Catálogo de produtos</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>

	<body>
		

		<div class="container">
			

				<!-- <form role="form" action="Product_Catalog.php" method="get"> 
				POST is not visible on URL
				GET is visible on URL-->
					 
			  
			<div class="row">
				<h1>Product Detail</h1>
			</div>
			<div class="row">
			  	<div class="col-md-4"></div>
				  <?php
				  $id_produto = $_POST['id_produto'];
					$detail[1] ='Chairs detail';
					$detail[2] ='Cooker detail';
					$detail[3] ='router Wi-Fi detail';
					$detail[4] ='TV detail';

					echo $detail[$id_produto];

				  ?>
			</div>
		</div>
	</body>
</html>