<?php 

require_once './../../config/env.php'; 
require_once __DIR__ . '\..\..\model\UsuarioModel.php';
require __DIR__ . '/../components/InputComponent.php';

$usuariomodel = new UsuarioModel();
$usuario = $usuariomodel->GetAllUser();

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
            <form action="<?= VARIAVEIS['DIR_CONTROLLER'] ?>UsuarioController.php?acao=cadastrar" method="POST">
                <div class="input-box">
                    <label for="">Nome</label>
                    <?php InputComponent('text', 'Digite o Nome', 'nome', null , null) ?>
                </div>
                <div class="input-box">
                    <label for="">E-mail</label>
                    <?php InputComponent('text', 'Digite seu melhor E-mail', 'email', null, null) ?>
                </div>
                <div class="input-box">
                    <label for="">Telefone</label>
                    <?php InputComponent('text', 'Digite seu Telefone', 'telefone', null, null) ?>
                </div>
                <div class="input-box">
                    <label for="">Data de Nascimento</label>
                    <?php InputComponent('date', null , 'data_nascimento', null, null) ?>
                </div>
                <div class="input-box">
                    <label for="">CPF</label>
                    <?php InputComponent('text', 'Insira seu CPF', 'cpf', null, null) ?>
                </div>
                <div class="btn-field">
                    <button onclick="fecharPopup()" class="button">Salvar</button>
                </div>
            </form>
        </div>
    </div>
<main class="content-grid">
    <div class="out_table">
            <button onclick="mostrarPopup()" class="button" id="plus">
                <span class="material-symbols-outlined">
                    add
                </span>
                Adicionar
            </button>
        <table class="tabela">
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
                </div>
                </main>
                
                <?php require_once __DIR__ . '\..\components\footer.php'; ?>
                
                <script src="<?= VARIAVEIS['DIR_JS'] ?>main.js"></script>
</body>
</html>