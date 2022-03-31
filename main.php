<?php

declare(strict_types=1);

class ContaBancaria
{
  
  private string $banco;
  private string $nomeTitular;
  private string $numeroAgencia;
  private string $numeroConta;
  private float $saldo;

  public function __construct(
    string $banco, 
    string $nomeTitular, 
    string $numeroAgencia, 
    string $numeroConta, 
    float $saldo
  )
  {
    $this->banco = $banco;
    $this->nomeTitular = $nomeTitular;
    $this->numeroAgencia = $numeroAgencia;
    $this->numeroConta = $numeroConta;
    $this->saldo = $saldo;
  }

  public function obterSaldo(): string
  {
    return 'Seu saldo atual e R$: ' . $this->saldo;
  }

  public function depositar(float $valor): string
  {
    $this->saldo += $valor;
    return 'Deposito de R$: ' . $valor . ' realizado';
  }

  public function sacar(float $valor): string
  {
    $this->saldo -= $valor;
    return 'Saque de R$: ' . $valor . ' realizado';
  }

}


$conta1 = new ContaBancaria(
  'Banco Bradesco',    //banco
  'Renato Martins',   //nomeTitular
  '3030',            //numeroAgencia
  '557799-2',       //numeroConta
  0,         //saldo
);

$conta2 = new ContaBancaria(
  'Banco do Brasil',    //banco
  'Marley Martins',   //nomeTitular
  '3040',            //numeroAgencia
  '54678-2',       //numeroConta
  300.00,         //saldo
);
/*
echo $conta->obterSaldo();
echo PHP_EOL;
echo $conta->depositar(300.00);
echo PHP_EOL;
echo $conta->obterSaldo();
echo PHP_EOL;
echo $conta->sacar(150.00);
echo PHP_EOL;
echo $conta->obterSaldo();
*/
var_dump($conta1);
var_dump($conta2);