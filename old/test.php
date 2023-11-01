<?php  

	$title = "Hola2";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<h1 id="title"> 
		Hola <?= $title ?>
	</h1>

	<script type="text/javascript">
		var title = document.getElementById('title')
	</script>
</body>
</html>