<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="img/button-41706_960_720.png">
	<title>Consultando conta Bancária</title>
	<style>
	.form .conta{
	width:200px;
	background-color: rgb(43, 155, 99);
	border-style: solid;
	border-radius: 4px;
	border-color: rgb(8, 85, 46);
	color: white;
	border-width: 1px;
	padding: 10px 10px 10px 10px  ;
	}
	</style>
	 <?php 
	 include 'verilo.php';
	 ?>
</head>
<body>
	<center><div class="tema">
	<h1>Consulta bancária Web</h1>
	</div></center><br>
	<center><div class="form">
			<br>
			<h3><?php echo'<div class="conta">'.$_SESSION['$nome']."</div>";?></h3>
			<h2>Escolha a opção</h2>
			<a href="caixal.php"><input type="button" value="Depositar" class="but"></a><br>
			<a href="sacarl.php"><input type="button" value="Sacar" class="but"></a><br>
			<a href="visual.php"><input type="button" value="Visualizar" class="but"></a><br>
			<a href="confie.html"><input type="button" value="Excluir" class="but"></a><br>
			<a href="sair.php"><input type="button" value="Sair" class="but"></a><br>
	</div></center>	
</body>

</html>