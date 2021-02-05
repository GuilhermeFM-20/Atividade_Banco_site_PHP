<?php 
	 include 'verilo.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="img/button-41706_960_720.png">
	<title>Consultando conta Bancária</title>
</head>
<body>
	<center><div class="tema">
	<h1>Consulta bancária Web</h1>
	</div></center><br>
	<center><div class="form">
			<br>
            <h2>Visualização</h2>
            <?php
            include 'Conta.php';
			$vis = new Conexao();
            $vis->visu($_SESSION['$numco']);      
            ?>
            <a href="Opc.php"><input type="button" value="Voltar" class="but"></a>
	</div></center>	
</body>

</html>