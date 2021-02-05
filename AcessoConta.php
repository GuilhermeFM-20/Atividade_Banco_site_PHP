<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="img/button-41706_960_720.png">
	<title>Consultando conta Bancária</title>
	<style type="text/css">
		.forml .textl{
			width: 180px;
			height: 30px;
			border-radius: 5px;
			border-style: solid;
			border-color: rgb(182, 189, 185);
			background: white;			
		}
		.forml{
			margin:100px;
			width: 600px;
			height: 400px;
			background:white;
			border-radius:10px;
		}
				.forml .but{
			width: 110px;
			height: 40px;
			background: #00FF7F;
			border-radius: 5px;
			font-size: 16px;
			font-family: Arial;
			color:white;
			border-style: none;
		}
		.forml .but:hover{
			background-color: rgb(14, 190, 102);
		}
		.forml .avis{
		background: #e47777;
		color:white;
		border-radius: 4px;
		width: 200px;
		height: 20px;
		font-size: 15px;
		}
	</style>
</head>
<body>
	<center><div class="tema">
	<h1>Consulta bancária Web</h1>
	</div></center><br>
	<center><div class="forml">
		<form action="AcessoContap.php" method="post">
			<br>
			<h3>informe seus dados</h3>
			<?php 
			 session_start();	
			 if(isset($_SESSION['avi']) == 1){
				 echo'<div class="avis"><p>Numero já em uso</p></div><br>';
			 }	
				 unset($_SESSION['avi']);
		 	?>
			<label>Numero da Conta</label>
			<input type="text" name="numc" class="text" min="8" max="8" required="" value="  Ex:1234553"><br>
			<label>Nome do usuario</label>
			<input type="text" name="nome" required="" class="text"><br>
			<label>senha</label>
			<input type="password" name="senha" required="" class="text"><br>
			<label>Tipo de conta</label>
			<input type="radio" name="tcon" value="CC" class="mar" checked>
			<label>Conta corrente</label>
			<input type="radio" name="tcon" value="CP" class="mar">
			<label>Conta poupança</label>
			<br>
			<input type="submit" name="btn"  value="Enviar" class="but">
			<a href="login.php"><input type="button" value="Voltar" class="but"></a>
		</form>
		
	</div></center>	
</body>
</html>