<?php

require_once __DIR__ . '/CategoriaModel.php';

class ArtigoModel {

    private $categoriaModel;
    private $tabela = "artigo";
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->conectar();
    }

    public function listar() {
        $query = "SELECT * FROM $this->tabela;";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function buscarPorId($id) {
        $query = "SELECT * FROM $this->tabela WHERE id = $id;";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetch();
    }

    private function popularArtigosComCategoria($artigos) {
        $categorias = $this->categoriaModel->categorias;
        $artigosPopulados = [];

        foreach ($this->categoriaModel->categorias as $categoria) {
            foreach ($artigos as $artigo) {
                if ($categoria['id'] == $artigo['categoriaId']) {
                    $artigo['categoria'] = $categoria;
                    array_push($artigosPopulados, $artigo);
                }
            }
        }

        return $artigosPopulados;
    }
    public function excluir($id) {
        $query = "DELETE FROM $this->tabela WHERE id = :id;";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        return $stmt->rowCount() > 0;
    }
    public function criar($nome) {
        
        $query = "INSERT INTO $this->tabela (nome) VALUES (:nome);";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nome', $nome);
        $stmt->execute();

        return $stmt->rowCount() > 0;
    }
    public function editar($artigo) {
        $query = "UPDATE $this->tabela SET nome = :nome WHERE id = :id;";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $artigo["id"]);
        $stmt->bindParam(":nome", $artigo["nome"]);
        $stmt->execute();

        return $stmt->rowCount() > 0;
    }

}