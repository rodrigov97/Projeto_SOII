<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./CSS/Bootstrap/bootstrap.css">
    <link rel="stylesheet" href="./CSS/Bootstrap/bootstrap-grid.css">
    <link rel="stylesheet" href="./CSS/Bootstrap/bootstrap-reboot.css">
    <link rel="stylesheet" href="./CSS/Style.css">
    <script src="./CSS/fontawesome-free-5.11.2-web/js/all.js"></script>
    <script src="./CSS/fontawesome-free-5.11.2-web/js/v4-shims.js"></script>
    <script src="./JS/Bootstrap/bootstrap.js"></script>
    <script src="./JS/Bootstrap/bootstrap.bundle.js"></script>
</head>

<body>
    <div class="sidebar-container">
        <div class="sidebar-logo">Projeto SO II</div>
        <ul class="sidebar-navigation">
            <li class="header">Menu</li>
            <li><a href="index.html"><i class="fa fa-home icon-margin" aria-hidden="true"></i>Home</a></li>
            <li class="header">Usuário</li>
            <li><a href="novoUsuarioWeb.html"><i class="fa fa-user icon-margin" aria-hidden="true"></i>Novo Usuário</a>
            </li>
            <li><a href="removerUsuarioWeb.html"><i class="fa fa-remove icon-margin" aria-hidden="true"></i>Remover Usário</a></li>
            <li class="header">Grupo</li>
            <li><a href="novoGrupoWeb.html"><i class="fa fa-users icon-margin" aria-hidden="true"></i>Criar Grupo</a></li>
            <li><a href="deletarGrupoWeb.html"><i class="fa fa-remove icon-margin" aria-hidden="true"></i>Remover Grupo</a></li>
            <li class="header">Info</li>
            <li><a href="infoWeb.html"><i class="fa fa-info-circle icon-margin" aria-hidden="true"></i>Info</a></li>
        </ul>
    </div>
    <div class="content-container">
        <div class="container-fluid">
            <!-- Coloque o conteúdo da página aqui-->
            <div class="jumbotron">
                <div class="form-style" id="content">
                    <fieldset id="field_novoUsuario">
                        <legend id="cad_user">CADASTRO DE NOVO USUÁRIO</legend>
                        <form method="post" id="form_novoUsuario" action="./PHP/novoUsuario.php" target="_blank">
                            <p><label for="user">Login do Usuário</label><input type="text" name="username" id="" placeholder="Nome do usuário"></p>
                            <p><label for="password">Senha </label><input type="password" name="passwd" id="" placeholder="Senha"></p>
                            <p><label for="repeatPassword">Repetir Senha </label><input type="password" name="confirmedPasswd" id="" placeholder="Repita a senha"></p>
                            <p><label for="gecos">Gecos</label><textarea name="gecos" id="" cols="45" rows="5" placeholder="Digite Informações do Usuário"></textarea></p>
                            <p class="form-button">
                                <label></label><input type="submit" form="form_novoUsuario" value="REGISTRAR"></input>
                            </p>
                        </form>
                        <legend id="cad_user" style="margin-top: 20px;" style="width: 100%;">ADICIONAR USUÁRIO NO GRUPO</legend>
                        <form method="post" id="form_adicionarUsuarioGrupo" action="./PHP/adicionarUsuarioGrupo.php" target="_blank">
                            <p><label for="user">Login do Usuário</label><input type="text" name="username" id="" placeholder="Nome do usuário"></p>
                            <p><label for="group">Grupo</label><input type="text" name="group" id="" placeholder="Grupo"></p>
                            <p class="form-button">
                                <label></label><input type="submit" form="form_adicionarUsuarioGrupo" value="ADICIONAR"></input>
                            </p>
                        </form>
                    </fieldset>
                </div>
            </div>
        </div>
</body>

</html>
