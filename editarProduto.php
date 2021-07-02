<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE', 'Editar Produto');

use \App\Entity\Produto;

//Validação do ID
if(!isset($_GET['idProduto']) or !is_numeric($_GET['idProduto'])){
    header('location: index.php?status=error');
    exit;
  }

  $obProduto = Produto::getProduto($_GET['idProduto']);




//Validação do Produto
if(!$obProduto instanceof Produto){
    header('location: index.php?status=error');
    exit;
  }




//Validação do POST.
if(isset($_POST['nomeProduto'], $_POST['quantidadeProduto'], $_POST['precoCustoProduto'], $_POST['precoVendaProduto'],)){
    
    $obProduto->nomeProduto = $_POST['nomeProduto'];
    $obProduto->quantidadeProduto = $_POST['quantidadeProduto'];
    $obProduto->precoCustoProduto = $_POST['precoCustoProduto'];
    $obProduto->precoVendaProduto = $_POST['precoVendaProduto'];
    $obProduto->atualizar();

    
    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/footer.php';
include __DIR__.'/includes/formulario.php';