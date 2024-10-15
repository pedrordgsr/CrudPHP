<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <div class="container">
        <h1>Cadastro de Produtos</h1>
        <div class="card no-hover" style="display:flex; flex-direction:column;">
            <form action="listagemProduto.php" method="post">
                <label>Descrição</label>
                <input type="text" name="descricao" placeholder="Descrição"/>

                <label>Tipo</label>
                <input type="text" name="tipo" placeholder="Tipo"/>

                <label>Quantidade</label>
                <input type="text" name="quantidade" placeholder="Quantidade"/>

                <label>Valor</label>
                <input type="text" name="valor" placeholder="Valor"/>

                <input class="button" type="submit" name="btCadastrar" value="Cadastrar"/>
            </form>
            <a href="listagemProduto.php">Voltar</a>
        </div>
    </main>
</body>
</html>