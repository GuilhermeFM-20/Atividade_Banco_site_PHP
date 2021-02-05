<?php
interface Ferramentas{
//Declaração da interface de ferramnetas para o usuario
public function abrirConta();
public function fecharConta();
public function depositarConta($valorDepo);
public function sacarConta($valorSa);
public function verificarConta();
}