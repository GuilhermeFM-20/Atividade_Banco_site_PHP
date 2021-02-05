<?php
include 'Conta.php';
$numcon = $_POST['numc'];
$valord = $_POST['valor'];
$depocon = new Conexao();
$depocon->session();
$depocon->sacacom($_SESSION['$numco'],$valord);
?>