<?php

require_once "cliente.class.php";


class clienteCSV {

    private $fileName;

    public function __construct() {
        $this->fileName = "dados\cliente.csv";
    }

    public function create($cliente) {
        // Abre o arquivo no modo de gravação
        $arquivo = fopen($this->fileName, 'a');

        $nome = $cliente->getNome();
        $endereco = $cliente->getEndereco();
        $telefone = $cliente->getTelefone();

        $linha = "$nome,$endereco,$telefone\n";

        fwrite($arquivo, $linha);

        fclose($arquivo);
    }

    public function read_all() {
        // Abrir o arquivo para leitura
        $arquivo = fopen($this->fileName, 'r');
        // Devolve o tamanho do arquivo
        $tamanhoArquivo = filesize($this->fileName);
        $clientes = array(); // Array de objetos de cliente

        while ($linha = fgets($arquivo, $tamanhoArquivo)):
            if (!feof($arquivo)) {
                $result = explode(",", $linha);

                $cliente = new cliente();
                $cliente->setNome($result[0]);
                $cliente->setEndereco($result[1]);
                $cliente->setTelefone($result[2]);

                $clientes[] = $cliente;
            }
        endwhile;
        return $clientes;
    }

}

?>