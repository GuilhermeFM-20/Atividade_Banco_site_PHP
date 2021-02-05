<?php
include 'Conta.php';
$numcon = $_POST['numc'];
$depocon = new Conexao();
$depocon->session();
$depocon->delecon($_SESSION['$numco']);
?>