<?php
include 'ferramentas.php';
include 'conexao.php';
class Conta implements Ferramentas{
//Delaração de atributos da classe 
    private $usuario;
    private $numeroConta;
    private $tipo;
    private $saldo;
    private $status;
    private $senha;
            //Método construtor para abertura de conta 
            public function Conta(){
                $this->status = false;
            }
        //Métodos expeciais getters e setters 
        public function setUsuario($usu){
            $this->usuario = $usu;
        }
        public function getUsuario(){
            return $this->usuario;
        }
        public function setNumeroConta($numc){
            $this->numeroConta = $numc;
        }
        public function getNumeroConta(){
            return $this->numeroConta;
        }
        public function setTipo($tip){
            if($tip == 'CC'){
                $this->tipo = 'CC';
                $this->saldo = 50;
                }elseif($tip == 'CP'){
                    $this->tipo = 'CP';
                    $this->saldo = 150;
                    }else{
                        echo 'Tipo de conta não cadastrado';
                    }
        }
        public function getTipo(){
            return $this->tipo;
        }
        public function setSaldo($sal){
            $this->saldo = $sal;
        }
        public function getSaldo(){
            return $this->saldo;
        }
        public function setStatus($sta){
            $this->status = $sta;
        }
        public function getStatus(){
            return $this->status;
        }
        public function setSenha($sen){
            $this->senha = $sen; 
        }
        public function getSenha(){
            return $this->senha;
        }
    // Declaração de métodos da classe 
    public function abrirConta(){
        $this->setStatus(true);
    }
    public function fecharConta(){
        $this->setStatus(false);
    }
    public function depositarConta($valorDepo){
        $this->setSaldo(getSaldo() + $valorDepo);
    }
    public function sacarConta($valorSa){
        if($valorDepo > $this->getSaldo()){
            echo "O valor de saque é mais alto que o do saldo da conta";
        }else{
            $this->setSaldo(getSaldo() - $valorSa);
        }
    }
    public function verificarConta(){
        echo "O valor da conta: R$".$this->getSaldo()."<br>";
    }
}