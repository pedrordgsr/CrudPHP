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
    <main>
        <div class="div_table">
            <table class="tblclientes">
                <tr>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                </tr>
                <?php foreach($clientes as $cliente) {?>
                <tr>
                    <td><?=$cliente->getNome()?></td>
                    <td><?=$cliente->getEndereco()?></td>
                    <td><?=$cliente->getTelefone()?></td>
                </tr>
                <?php }?>
            </table>
        </div>
        <a href="index.html">Voltar</a>
        <a href="formularioCliente.php">Cadastrar</a>
    </main>
</body>
</html>