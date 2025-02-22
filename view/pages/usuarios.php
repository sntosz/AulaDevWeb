<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require "../components/head.php"?>
</head>
<body>
    <!-- arquivo responsável pela tela Categorias -->
    
    <!-- navegação -->
    <header class="navbar">
        <nav>
            <img src="user.jpg" alt="imagem-usuario">
        </nav>
    </header>

    <!-- lateral -->
    <aside class="sidebar">
        <nav>
            <img src="logo.jpg" alt="logo">
            <ul>
                <li>
                    <a href="Home.php">Home</a>
                </li>
                <a href="artigos.php">Artigos</a>
                <li>
                    <a href="categorias.php">Categorias</a>
                </li>
                <a href="usuarios.php">Usuários</a>
            </ul>
        </nav>
    </aside>

    <main class="content">
        <h1>Categoria</h1>
        <nav>
            <ul>
                <li>Aba 1</li>
                <li>Aba 2</li>
            </ul>
        </nav>
        <article>
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>João</td>
                        <td>
            </table>
        </article>
    </main>

    <!-- rodapé -->
    <footer class="footer">
        <span>v1.0.0</span>
    </footer>
</body>
</html>