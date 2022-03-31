<?php

class ContaBancaria
{
  //tipos de visibilidade: public - private - protected
  private $banco;
  private $nomeTitular;
  private $numeroAgencia;
  private $numeroConta;
  private $saldo;

  public function __construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo)
  {
    $this->banco = $banco;
    $this->nomeTitular = $nomeTitular;
    $this->numeroAgencia = $numeroAgencia;
    $this->numeroConta = $numeroConta;
    $this->saldo = $saldo;
  }

  public function obterSaldo()
  {
    return 'Metodo obterSaldo()';
  }

}


$conta = new ContaBancaria(
  'Banco Bradesco',    //banco
  'Renato Martins',   //nomeTitular
  '3030',            //numeroAgencia
  '557799-2',       //numeroConta
  1000.00,         //saldo
);

var_dump($conta);