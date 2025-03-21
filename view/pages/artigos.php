<?php 
require_once __DIR__ . '\..\../model/ArtigosModel.php';
$ArtigosModel = new ArtigoModel();
$artigos = $ArtigosModel->artigos;
//require_once __DIR__ . '\..\components\head.php';
require_once '../components/head.php';
?>
<body class="content">
    <?php require_once '../components/navbar.php'; ?>
    <?php require_once '../components/sidebar.php'; ?>
<main class="content-grid">

    <div class="popup-overlay" id="popupOverlay"></div>
    <div class="popup" id="popup">
        <div style="width:100%; display: flex; justify-content: flex-end;">
            <div id="exit-btn" onclick="fecharPopup()">
                <img id="exit" src="../assets/img/exit.svg" alt="Fechar popup svg">
            </div>
        </div>
    </div>
    <table class="tabela">
        <thead>
            <tr>
                <th>ID</th>
                <th>Artigo</th>
                <th>Autor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($artigos as $artigo): ?>
            <tr>
                <td><?php echo $artigo['id']; ?></td>
                <td><?php echo $artigo['artigo']; ?></td>
                <td><?php echo $artigo['autor']; ?></td>
                <td>
                    <button onclick="mostrarPopup()" class="button">Editar</button> 
                    <button class="button">Excluir</button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</main>
    <?php require_once '../components/footer.php'; ?>
''
    <script src="<?= VARIAVEIS['DIR_JS'] ?>main.js"></script>
</body>
</html>