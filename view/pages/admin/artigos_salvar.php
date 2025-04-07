<?php

require_once __DIR__ . '/../../../config/env.php';
require_once __DIR__ . '/../../../model/ArtigoModel.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $artigoModel = new ArtigoModel();

    if (empty($_POST['id'])) {
        // Criar - se não tiver id
        $salvou = $artigoModel->criar([
            'titulo' => $_POST['titulo'],
            'conteudo' => $_POST['conteudo'],
            'categoria_id' => $_POST['categoriaId']
        ]);
    } else {
        // Editar - se tiver id
        $salvou = $artigoModel->editar([
            'id' => $_POST['id'],
            'titulo' => $_POST['titulo'],
            'conteudo' => $_POST['conteudo'],
            'categoria_id' => $_POST['categoriaId']
        ]);
    }

    if ($salvou) {
        header('Location: ' . APP_CONSTANTS['APP_URL'] . APP_CONSTANTS['PATH_PAGES'] . 'admin/artigos.php');    
    } else {
        echo "ERRO";
    }

} else {
    header('Location: ' . APP_CONSTANTS['APP_URL'] . APP_CONSTANTS['PATH_PAGES'] . 'admin/artigos.php');
}