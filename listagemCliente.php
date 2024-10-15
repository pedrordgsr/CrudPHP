<?php

require_once "classes/ClienteCSV.class.php";
require_once "classes/Cliente.class.php";

$clienteCSV = new ClienteCSV();

if (isset($_POST['btCadastrar'])) {

    $cliente = new cliente();
    $cliente->setNome($_POST["nome"]);
    $cliente->setEndereco($_POST["endereco"]);
    $cliente->setTelefone($_POST["telefone"]);

    $clienteCSV->create($cliente);
}

$clientes = $clienteCSV->read_all();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Listagem de clientes</title>
</head>

<body>
    <div class="container">
        <h1>Clientes</h1>
        <div class="card" style="padding:8px">
            <table class="tbl">
                <tr>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                </tr>
                <?php foreach ($clientes as $cliente) { ?>
                    <tr>
                        <td><?= $cliente->getNome() ?></td>
                        <td><?= $cliente->getEndereco() ?></td>
                        <td><?= $cliente->getTelefone() ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
        <div class="buttons" style="display:flex; gap:5px ">
            <a href="index.html"><div class="button">Voltar</div></a>
            <a href="formularioCliente.php"><div class="button">Cadastrar</div></a>
        </div>

    </div>
</body>

</html>