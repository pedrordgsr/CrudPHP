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
    <div class="container">
        <h1>Produtos</h1>
        <div class="card" style="padding:8px">
            <div class="div_table">
                <table class="tbl">
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
        </div>
        <div style="display:flex; gap:5px ">
            <a href="index.html"><div class="button">Voltar</div></a>
            <a href="formularioProduto.php"><div class="button">Cadastrar</div></a>
        </div>
        
        
        
                    </div>

        

    
</body>
</html>