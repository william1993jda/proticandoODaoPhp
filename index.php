<?php

require_once "vendor/autoload.php";

$produto = new \App\Model\Produto();

$produto->setId(3);
$produto->setNome('Janela de vidro');
$produto->setDescricao('Janela linda.');


$produtoDao = new \App\Model\ProdutoDao();

$produtoDao->delete(1);
//$produtoDao->update($produto);
//$produtoDao->create($produto);
$produtoDao->read();

//foreach ($produtoDao->read() as $produto) {
//    echo "Nome do produto: {$produto['nome']} - Descrição do produto: {$produto['descricao']}<br>";
//}