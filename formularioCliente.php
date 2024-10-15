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
        <h3>Cadastro de Clientes</h3>
        <div>
            <form action="listagemCliente.php" method="post">
                <label>Nome</label>
                <input type="text" name="nome" placeholder="Nome"/>

                <label>Endereço</label>
                <input type="text" name="endereco" placeholder="Endereço"/>

                <label>Telefone</label>
                <input type="text" name="telefone" placeholder="Telefone"/>

                <input type="submit" name="btCadastrar" value="Cadastrar"/>
            </form>
        <a href="listagemCliente.php">Voltar<a/>
        </div>
    </main>
</body>
</html>