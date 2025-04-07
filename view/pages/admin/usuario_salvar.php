<?php

require_once __DIR__ . '/../../../config/env.php';
require_once __DIR__ . '/../../../model/UsuarioModel.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $usuarioModel = new UserModel();

    if (empty($_POST['id'])) {
        // Criar - se não tiver id
        $salvou = $usuarioModel->criar([
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'telefone' => $_POST['telefone'],
            'data_nascimento' => $_POST['data_nascimento'],
            'cpf' => $_POST['cpf']
        ]);
    } else {
        // Editar - se tiver id
        $salvou = $usuarioModel->editar([
            'id' => $_POST['id'],
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'telefone' => $_POST['telefone'],
            'data_nascimento' => $_POST['data_nascimento'],
            'cpf' => $_POST['cpf']
        ]);
    }

    if ($salvou) {
        header('Location: ' . APP_CONSTANTS['APP_URL'] . APP_CONSTANTS['PATH_PAGES'] . 'admin/usuarios.php');    
    } else {
        echo "ERRO";
    }

} else {
    header('Location: ' . APP_CONSTANTS['APP_URL'] . APP_CONSTANTS['PATH_PAGES'] . 'admin/usuarios.php');
} 