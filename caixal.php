<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="img/button-41706_960_720.png">
	<title>Consultando conta Bancária</title>
	<?php
	 include 'verilo.php';
	 ?>
</head>
<body>
	<center><div class="tema">
	<h1>Consulta bancária Web</h1>
	</div></center><br>
	<center><div class="form">
		<form action="caixa.php" method="post">
			<br>
			<h2>Deposito</h2>	
			<label>Valor de deposito</label>
			<input type="number" name="valor" required="" class="text2"><br>
			<input type="submit" name="btn" value="Depositar" class="but">
			<a href="Opc.php"><input type="button" value="Voltar" class="but"></a>
		</form>
	</div></center>	
</body>
</html>