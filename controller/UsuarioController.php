<?php 
require_once __DIR__ . "/../model/UsuarioModel.php";
$userModel = new UsuarioModel();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    switch ($_GET["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            $data_nascimento = $_POST["data_nascimento"];
            $cpf = $_POST["cpf"];
            if(!(empty($nome) || empty($email) || empty($telefone) || empty($data_nascimento) || empty($cpf))){
                $resposta = $userModel->CreateUser($nome,$email,$telefone,$data_nascimento,$cpf);
                if($resposta){
                    header("Location: ../../view/pages/usuarios.php");
                    var_dump($resposta);
                }
            }
            break;
        }
    }
?>