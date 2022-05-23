<?php
    session_start();

    if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])){
        echo "<script>window.location = 'dashboard.php'</script>";
    }
?>

<html>
    <head>
        <meta charset="UTF-8" />
        <title>Aba de Cadastro</title>
        <link rel="stylesheet" type="text/css" href="style/acesso.css" />
        <script type="text/javascript" src="script/jquery.js"></script>
        <script type="text/javascript" src="script/acesso.js"></script>
        <script type="text/javascript" src="script/cadastro.js"></script>
    </head>
    
    <body>

        <header>
            Cadastra-se
        </header>

        <!-- configurar mensagem de erro para notificar quando já houver cadastro no banco de dados-->
            <div id="mensagem"></div>

        <div id="formulario">

            <!-- Inicio da aba de cadastro -->

            <form id="formularioCadastro">
                <span class="title">Crie sua conta</span>

                <div id="linha">
                    <label for="nomeCadastro">Nome</label>
                    <input type="text" name="nomeCadastro" id="nomeCadastro" />
                </div>

                <!-- AJustar no banco o login de usuario-->

                <div id="linha">
                    <label for="nomeUsuario">Usuario</label>
                    <input type="text" name="nomeUsuario" id="nomeUsuario" />
                </div>

                <!-- AJustar no banco o grupo-->

                <div id="linha">
                    <label for="nomeGrupo">Grupo</label>
                    <input type="text" name="nomeGrupo" id="nomeGrupo" />
                </div>

                <div id="linha">
                    <label for="emailCadastro">Email</label>
                    <input type="text" name="emailCadastro" id="emailCadastro" />
                </div>

                <div id="linha">
                    <label for="senhaCadastro">Senha</label>
                    <input type="password" name="senhaCadastro" id="senhaCadastro" />
                </div>

                <div id="button">
                    <button id="btnCadastrar">Cadastrar</button>
                </div>
            </form>

        </div>

    </body>

</html>