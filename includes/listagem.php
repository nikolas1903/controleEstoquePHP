<?php

$resultados = '';


foreach($produtos as $produto){
    $resultados .= '<tr>
                      <td>'.$produto->idProduto.'</td>
                      <td>'.$produto->nomeProduto.'</td>
                      <td>'.$produto->quantidadeProduto.'</td>
                      <td>'.$produto->precoCustoProduto.'</td>
                      <td>'.$produto->precoVendaProduto.'</td>
                      <td>
                      <a href="editarProduto.php?idProduto='.$produto->idProduto.'">
                        <button type="button" class="btn btn-primary">Editar</button></a>
                      <a href="excluir.php?idProduto='.$produto->idProduto.'">
                      <button type="button" class="btn btn-danger">Excluir</button></a>
                      </td>
                    <tr>';
}
?>

<main>



<section>
<a href="cadastrarProduto.php">
<button class="btn btn-success">Cadastrar Produto</button>
</a>
</section>

<section>

    <table class="table bg-light mt-3">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome do Produto</th>
            <th>Quantidade</th>
            <th>Preço de Custo</th>
            <th>Preço de Venda</th>
            <th>Ações</th>
          </tr>
        </thead>

        <tbody>
            <?=$resultados?>
        </tbody>
    </table>

  </section>

</main>