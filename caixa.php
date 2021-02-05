<?php
include 'Conta.php';
$valord = $_POST['valor'];
$depocon = new Conexao();
$depocon->session();
$depocon->depocom($_SESSION['$numco'], $valord);
?>