<?php
    require_once __DIR__ . '/../../../config/env.php';
    require_once __DIR__ . '/../../../model/UsuarioModel.php';

    $usuarioModel = new UserModel();
    $lista = $usuarioModel->listar();
?>

<?php require_once __DIR__ . '/../../components/head.php'; ?>

<body class="container-adm">
    <?php require_once __DIR__ . '/../../components/navbar.php'; ?>
    <?php require_once __DIR__ . '/../../components/sidebar.php'; ?>

    <main class="content-adm">
        <h3>Usuários >> Listagem</h3>

        <div class="container">
            <div class="actions">
                <a href="<?= APP_CONSTANTS['APP_URL'] . APP_CONSTANTS['PATH_PAGES'] . 'admin/usuario.php' ?>">
                    <button class="btn btn-primary">Novo</button>
                </a>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nome</td>
                        <td>Email</td>
                        <td>Telefone</td>
                        <td>Data Nascimento</td>
                        <td>CPF</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lista as $item) { ?>
                    <tr>
                        <td><?= $item['id'] ?></td>
                        <td><?= $item['nome'] ?></td>
                        <td><?= $item['email'] ?></td>
                        <td><?= $item['telefone'] ?></td>
                        <td><?= $item['data_nascimento'] ?></td>
                        <td><?= $item['cpf'] ?></td>
                        <td class="table-actions">
                            <a
                                href="<?= APP_CONSTANTS['APP_URL'] . APP_CONSTANTS['PATH_PAGES'] . 'admin/usuario.php?id=' . $item['id'] ?>">
                                <span class="btn-icon material-symbols-outlined" title="Acessar">
                                    login
                                </span>
                            </a>
                            <form method="POST"
                                action="<?= APP_CONSTANTS['APP_URL'] . APP_CONSTANTS['PATH_PAGES'] . 'admin/usuario_excluir.php' ?>">
                                <input type="hidden" name="id" value="<?= $item['id'] ?>">
                                <button>
                                    <span class="btn-icon material-symbols-outlined" title="Excluir">
                                        delete
                                    </span>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </main>

    <?php require_once __DIR__ . '/../../components/footer.php'; ?>

    <script src="<?= APP_CONSTANTS['APP_URL'] . APP_CONSTANTS['PATH_JS'] ?>main.js"></script>
</body>

</html>