<main>

    <h2 class="mt-3">Excluir Produto</h2>

    <form method="POST">
        <div class="form-group">
        <p>Realmente deseja excluir o produto <strong><?=$obProduto->nomeProduto?></strong>?</p>
        </div>

        <div class="form-group">
        <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
            
        <a href="index.php">
           <button type="button" class="btn btn-success">Cancelar</button>
        </a>    
        </div>
    </form>
</main>