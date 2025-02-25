<?php 

require_once './../../config/env.php'; 
require_once __DIR__ . '\..\..\model\UsuarioModel.php';

$usuariomodel = new UsuarioModel();
$usuario = $usuariomodel->usuarios;

?>

<?php require_once __DIR__ . '\..\components\head.php'; ?>
<body class="content">
    <?php require_once __DIR__ . '\..\components\navbar.php'; ?>
    <?php require_once __DIR__ . '\..\components\sidebar.php'; ?>
    <div class="popup-overlay" id="popupOverlay"></div>
        <div class="popup" id="popup">
            <div style="width:100%; display:flex; justify-content: flex-end;">
                <div id="exit-btn" onclick="fecharPopup()">
                    <img id="exit" src="../../image/exit.svg" alt="Fechar popup svg">
                </div>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Telefone</th>
                        <th>Data de Nascimento</th>
                        <th>CPF</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach ($usuario as $usuarios): ?>
                    <tr>
                        <td><?php echo $usuario['id']; ?></td>
                        <td><?php echo $usuario['nome']; ?></td>
                        <td><?php echo $usuario['email']; ?></td>
                        <td><?php echo $usuario['telefone']; ?></td>
                        <td><?php echo $usuario['data_nascimento']; ?></td>
                        <td><?php echo $usuario['cpf']; ?></td>
                        <td><button onclick="mostrarpopup()">Criar</button></td>
                    </tr>
                    
                <?php endforeach; ?>
            </table>

    <?php require_once __DIR__ . '\..\components\footer.php'; ?>

    <script src="<?= VARIAVEIS['DIR_JS'] ?>main.js"></script>
</body>
</html>
<style>table {
            width: 100%;
            border-collapse: collapse;
            
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
            text-align: left;
        }
</style>

<script>
    function mostrarPopup() {
    document.getElementById('popup').style.display = 'block';
    document.getElementById('popupOverlay').style.display = 'block';
}

function fecharPopup() {
    document.getElementById('popup').style.display = 'none';
    document.getElementById('popupOverlay').style.display = 'none';
}
</script>