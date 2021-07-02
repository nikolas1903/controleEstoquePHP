<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE', 'Cadastrar Produto');

use \App\Entity\Produto;

//Validação do POST.
if(isset($_POST['nomeProduto'], $_POST['quantidadeProduto'], $_POST['precoCustoProduto'], $_POST['precoVendaProduto'],)){
    $obProduto = new Produto;
    $obProduto->nomeProduto = $_POST['nomeProduto'];
    $obProduto->quantidadeProduto = $_POST['quantidadeProduto'];
    $obProduto->precoCustoProduto = $_POST['precoCustoProduto'];
    $obProduto->precoVendaProduto = $_POST['precoVendaProduto'];
    $obProduto->cadastrar();


    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/footer.php';
include __DIR__.'/includes/formulario.php';