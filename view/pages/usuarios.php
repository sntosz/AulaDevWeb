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
        <div style="width:100%; display: flex; justify-content: flex-end;">
            <div id="exit-btn" onclick="fecharPopup()">
                <img id="exit" src="../assets/img/exit.svg" alt="Fechar popup svg">
            </div>
        </div>
        <div class="content-popup">
            <div class="input-box">
                <label for="">Nome</label>
                <input class="input-field" type="text">
            </div>
            <div class="input-box">
                <label for="">E-mail</label>
                <input class="input-field" type="text">
            </div>
            <div class="input-box">
                <label for="">Telefone</label>
                <input class="input-field" type="text">
            </div>
            <div class="input-box">
                <label for="">Data de Nascimento</label>
                <input class="input-field" type="date">
            </div>
            <div class="input-box">
                <label for="">CPF</label>
                <input class="input-field" type="text">
            </div>
            <div class="btn-field">
                <button onclick="fecharPopup()" class="button">Salvar</button>
            </div>
        </div>
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
                            <td><?php echo $usuarios['id']; ?></td>
                            <td><?php echo $usuarios['nome']; ?></td>
                            <td><?php echo $usuarios['email']; ?></td>
                            <td><?php echo $usuarios['telefone']; ?></td>
                            <td><?php echo $usuarios['data_nascimento']; ?></td>
                            <td><?php echo $usuarios['cpf']; ?></td>
                            <td><button onclick="mostrarPopup()" class="button">Editar</button> <button class="button">Excluir</button></td>
                        </tr>
                        
                    <?php endforeach; ?>
                </table>
                
                <?php require_once __DIR__ . '\..\components\footer.php'; ?>
                
    <script src="<?= VARIAVEIS['DIR_JS'] ?>main.js"></script>
</body>
</html>