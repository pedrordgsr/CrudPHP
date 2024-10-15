<?php

require_once "classes/ProdutoCSV.class.php";
require_once "classes/Produto.class.php";

$produtoCSV = new produtoCSV();

if (isset($_POST['btCadastrar'])) {

    $produto = new produto();
    $produto->setDescricao($_POST["descricao"]);
    $produto->setTipo($_POST["tipo"]);
    $produto->setQuantidade($_POST["quantidade"]);
    $produto->setValor($_POST["valor"]);

    $produtoCSV->create($produto);
}

$produtos = $produtoCSV->read_all();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Listagem de produtos</title>
</head>
<body>
    <main>
        <div class="div_table">
            <table class="tblprodutos">
                <tr>
                    <th>Descrição</th>
                    <th>Tipo</th>
                    <th>Quantidade</th>
                    <th>Valor</th>
                </tr>
                <?php foreach($produtos as $produto) {?>
                <tr>
                    <td><?=$produto->getDescricao()?></td>
                    <td><?=$produto->getTipo()?></td>
                    <td><?=$produto->getQuantidade()?></td>
                    <td><?=$produto->getValor()?></td>
                </tr>
                <?php }?>
            </table>
        </div>
        <a href="index.html">Voltar</a>
        <a href="formularioProduto.php">Cadastrar</a>
    </main>
</body>
</html>