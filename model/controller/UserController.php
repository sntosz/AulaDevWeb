<?php 
require_once '..\db\Database.php';
class UserController{
    private $conn;

    public function __construct()
    {
        $objDb = new Database();
        $this->conn = $objDb->connect();
    }

    public function GetAllUser(){
        try {
            $sql = "SELECT * FROM usuario";
            $db = $this->conn->prepare($sql);
            $db->execute();
            $user = $db->fetchAll(PDO::FETCH_ASSOC);
            return $user;
        } catch (\Exception $th) {
            return $th->getMessage();
        }
    }
}

?>