<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro de Clientes</title>
</head>
<body>
    <main>
    <h1>Cadastro de Clientes</h1>
        <div class="card no-hover">
            <form action="listagemCliente.php" method="post">
            <div style="display:flex;flex-direction:column; gap:10px">
                <label>Nome</label>
                <input type="text" name="nome" placeholder="Nome"/>

                <label>Endereço</label>
                <input type="text" name="endereco" placeholder="Endereço"/>

                <label>Telefone</label>
                <input type="text" name="telefone" placeholder="Telefone"/>
            </form>
            <div style="display:flex;gap:5px;margin-top:20px;">
                    <button class="button" type="submit" name="btCadastrar" value="Cadastrar">Cadastrar</button>
                    <a href="listagemCliente.php"><button class="button">Voltar</button></a>
                </div>
        </div>
        </div>
    </main>
</body>
</html>