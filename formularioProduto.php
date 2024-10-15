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
        <div class="card no-hover">
            <form action="listagemProduto.php" method="post">
                <div style="display:flex;flex-direction:column; gap:10px">
                    <label>Descrição</label>
                    <input type="text" name="descricao" placeholder="Descrição"/>

                    <label>Tipo</label>
                    <input type="text" name="tipo" placeholder="Tipo"/>

                    <label>Quantidade</label>
                    <input type="text" name="quantidade" placeholder="Quantidade"/>

                    <label>Valor</label>
                    <input type="text" name="valor" placeholder="Valor"/>
                </div>
               
                <div style="display:flex;gap:5px;margin-top:20px;">
                    <button class="button" type="submit" name="btCadastrar" value="Cadastrar">Cadastrar</button>
                    <a href="listagemProduto.php"><button class="button">Voltar</button></a>
                </div>
                
            </form>
            
        </div>
    </main>
</body>
</html>