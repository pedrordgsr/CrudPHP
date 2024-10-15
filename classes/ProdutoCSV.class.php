<?php

require_once "produto.class.php";

class produtoCSV {

    private $fileName;

    public function __construct() {
        $this->fileName = "dados\produto.csv";
    }

    public function create($produto) {
        // Abre o arquivo no modo de gravação
        $arquivo = fopen($this->fileName, 'a');

        $descricao = $produto->getDescricao();
        $tipo = $produto->getTipo();
        $quantidade = $produto->getQuantidade();
        $valor = $produto->getValor();

        $linha = "$descricao,$tipo,$quantidade,$valor\n";

        fwrite($arquivo, $linha);

        fclose($arquivo);
    }

    public function read_all() {
        // Abrir o arquivo para leitura
        $arquivo = fopen($this->fileName, 'r');
        // Devolve o tamanho do arquivo
        $tamanhoArquivo = filesize($this->fileName);
        $produtos = array(); // Array de objetos de produto

        while ($linha = fgets($arquivo, $tamanhoArquivo)):
            if (!feof($arquivo)) {
                $result = explode(",", $linha);

                $produto = new produto();
                $produto->setDescricao($result[0]);
                $produto->setTipo($result[1]);
                $produto->setQuantidade($result[2]);
                $produto->setValor($result[3]);

                $produtos[] = $produto;
            }
        endwhile;
        return $produtos;
    }

}

?>