<?php 
require_once __DIR__ .'/../db/Database.php';
class UsuarioModel{
    private $conn;

    public function __construct()
    {
        $objDb = new Database();
        $this->conn = $objDb->connect();
    }

    public function GetAllUser(){
        try {
            $sql = "SELECT * FROM usuarios";
            $db = $this->conn->prepare($sql);
            $db->execute();
            $user = $db->fetchAll(PDO::FETCH_ASSOC);
            return $user;
        } catch (\Exception $th) {
            return $th->getMessage();
        }
    }
    public function CreateUser($nome, $email, $telefone, $data_nascimento, $cpf){
        try {

           
            $sql = "INSERT INTO usuario (nome, email, telefone, data_nascimento, cpf) VALUES(:nome,:email,:telefone,:data_nascimento,:cpf)";
            $db = $this->conn->prepare($sql);
            $db->bindParam(":nome", $nome);
            $db->bindParam(":email", $email);
            $db->bindParam(":telefone", $telefone);
            $db->bindParam(":data_nascimento", $data_nascimento);
            $db->bindParam(":cpf", $cpf);
            if($db->execute()){
                return true;
            }else{
                return false;
            }
        } catch (\Exception $th) {
            //throw $th;
        }
    }
    public function DeleteUser($id){
        try {
            $sql = "DELETE FROM usuario WHERE id_usuario = :id";
            $db = $this->conn->prepare($sql);
            $db->bindParam(":id", $id);
            if($db->execute()){
                return true;
            }else{
                return false;
            }
        } catch (\Exception $th) {
            //throw $th;
        }
    }
    public function UpdateUser($id,$nome, $senha){
        try {
            $sql = "UPDATE usuario SET nome = :nome, email = :email, telefone = :telefone, data_nascimento = :data_nascimento, cpf = :cpf WHERE id_usuario = :id";
            $db = $this->conn->prepare($sql);
            $db->bindParam(":nome", $nome);
            $db->bindParam(":email", $email);
            $db->bindParam(":telefone", $telefone);
            $db->bindParam(":data_nascimento", $data_nascimento);
            $db->bindParam(":cpf", $cpf);
            $db->bindParam(":id", $id);
            if($db->execute()){
                return true;
            }else{
                return false;
            }
        } catch (\Exception $th) {
            //throw $th;
        }
    }
    
}
?>