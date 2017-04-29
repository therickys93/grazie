<?php 
	$images = [
		"http://img.topimmagini.com/to/grazie/grazie_001.jpg", 
		"http://www.rimborsabile.it/wp-content/uploads/2015/01/grazie.jpg", 
		"http://www.aleslic.it/wp-content/uploads/grazie.png", 
		"http://www.profumeriesbraccia.com/wp-content/uploads/2015/12/grazie.gif",
		"http://aforisticamente.com/wp-content/uploads/2015/10/Frasi_per_dire_grazie_a.jpg"
	];
	$index = rand() % count($images);
	$image = $images[$index]; 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Grazie</title>
	<style type="text/css">
		html, body {
			width: 100%;
			height: 100%;
		}

		.container {
			width: 80%;
			margin: 0 auto;
		}

		.image {
			width: 80%;
			margin: 0 auto;
		}
	</style>
</head>
<body>
	<div class="container">
		<img class="image" src="<?= $image ?>" alt="">
		<br />
		<p align="center">Grazie di Cuore!!! Ricarica la pagina per altro!!!</p>
	</div>
</body>
</html>
