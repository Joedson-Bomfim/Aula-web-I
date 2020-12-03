<?php /*php_2.php*/ ?>
<html>
	<head>
	<title> Resultado </title>
	</head>
	<body>
		<?php
		echo "O meu nome é ".$_POST['nome']. " ,tenho " .$_POST['idade'].
		" anos e gosto de carros da marca "
		.$_POST['marca'];
		?>
	</body>
</html>