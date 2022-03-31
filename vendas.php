<?php

declare(strict_types=1);

class Vendas
{
  private string $data;
  private string $produto;
  private int $quantidade;
  private float $valorTotal;

  public function __construct(
    string $data,
    string $produto,
    int $quantidade,
    float $valorTotal
  )
  {
    $this->data = $data;
    $this->produto = $produto;
    $this->quantidade = $quantidade;
    $this->valorTotal = $valorTotal;
  }

  public function realizarVenda(float $adiciona): string
  {
    $this->valorTotal += $adiciona;
    return 'A venda foi efetuada com sucesso: ' . $adiciona;
  }

  public function dataVenda(string $dia): string
  {
    return 'Venda realizada em: ' . $dia;
  }

  public function itemVendido(string $item): string
  {
    return 'A venda dos: ' . $item . ' foi efetuada.';
  }
  public function quantidadeVendida(int $sproduto): string
  {
    $this->quantidade -= $sproduto;
    return 'Quantidade em estoque: ' . $this->quantidade;
  }
}

$venda = new Vendas(
  '',  //data
  '',  //produto
  50,         //quantidade
  0,    //valor total
);

echo $venda->itemVendido('Computador');
echo PHP_EOL;
echo $venda->dataVenda('31/03/2020');
echo PHP_EOL;
echo $venda->quantidadeVendida(3);
echo PHP_EOL;
echo $venda->realizarVenda(3000.00);
//var_dump($venda);