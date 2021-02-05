<?php
session_start();
include 'Conta.php';
$con = new Conexao();
$numcon = mysqli_real_escape_string($con->conexaoAtri(), $_POST['numc']);
$senha = mysqli_real_escape_string($con->conexaoAtri(), $_POST['senha']);
$con->verilo($numcon,$senha);
?>