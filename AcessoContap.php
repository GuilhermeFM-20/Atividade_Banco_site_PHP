<?php 
include 'Conta.php';
$conta = new Conta();
$conex = new Conexao();
$conta->setNumeroConta(ucwords($_POST['numc']));
$conta->setNumeroConta(ucwords($_POST['numc']));
$conta->setUsuario(ucwords($_POST['nome']));
$conta->setTipo($_POST['tcon']);
$conta->setSenha($_POST['senha']);
if($conex->verire($conta->getNumeroConta()) == 1){
    $conex->session();
    $_SESSION['avi'] = 1;
     header('Location: AcessoConta.php');
}else{ 
$conta->abrirConta();
//$conex->conenumero($conta->getNumeroConta(),$conta->getTipo(),$conta->getUsuario(),$conta->getSaldo(),$conta->getStatus(),$conta->getSenha());
echo $conta->getNumeroConta(),$conta->getTipo(),$conta->getUsuario(),$conta->getSaldo(),$conta->getStatus(),$conta->getSenha();
}
?>
