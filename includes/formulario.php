<main>

    <section>
        <a href="index.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3"><?=TITLE?></h2>
    <form method="POST">
        <div class="form-group">
            <label>Nome do Produto:</label>
            <input type="text" class="form-control" name="nomeProduto" value="<?=$obProduto->nomeProduto?>" required>
        </div>

        <div class="form-group">
            <label>Quantidade:</label>
            <input type="text" class="form-control" name="quantidadeProduto" value="<?=$obProduto->quantidadeProduto?>" required>
        </div>

        <div class="form-group">
            <label>Preço de Custo:</label>
            <input type="text" class="form-control" name="precoCustoProduto" value="<?=$obProduto->precoCustoProduto?>" required>
        </div>

        <div class="form-group">
            <label>Preço de Venda:</label>
            <input type="text" class="form-control" name="precoVendaProduto" value="<?=$obProduto->precoVendaProduto?>" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>

        

    </form>
</main>