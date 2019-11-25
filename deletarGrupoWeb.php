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
                    <fieldset id="field_deletarGrupo">
                        <legend id="cad_user">DELETAR GRUPO</legend>
                        <form method="post" id="form_deletarGrupo" action="./PHP/deletarGrupo.php" target="_blank">
                            <p><label for="group">Grupo </label><input type="text" name="group" id="" placeholder="Grupo"></p>
                            <p class="form-button">
                                <label></label><input type="submit" form="form_deletarGrupo" value="REMOVER"></input>
                            </p>
                        </form>
                    </fieldset>
                </div>
            </div>
        </div>
</body>

</html>
