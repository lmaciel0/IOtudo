<?php
    session_start();

    if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])){
        echo "<script>window.location = 'dashboard.php'</script>";
    }
?>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Sistema de acesso</title>
        <link rel="stylesheet" type="text/css" href="style/acesso.css" />
        <script type="text/javascript" src="script/jquery.js"></script>
        <script type="text/javascript" src="script/acesso.js"></script>
    </head>
    <body>
        <header>Sistema de acesso</header>

        <div id="mensagem"></div>

        <div id="formulario">
            
            <!-- Inicio da aba de login -->
        
            <form id="formularioLogin">
                <span class="title">Acesse sua conta</span>

                <div id="linha">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" />
                </div>

                <div id="linha" class="senha">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" />
                </div>

                <div id="button">
                    <button id="btnEntrar">Entrar</button>
                    <a href="javascript:void(0)" id="esqueciSenha">Esqueci minha senha</a>
                </div>
            </form>

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

            <div id="textoCadastro">
                <span class="title">Não possui uma conta?</span>
                <span class="subtitle">***Adicionar um texto***</span>
                <button id="btnCadastro" class="change">Cadastrar</button>
            </div>

            <div id="textoLogin">
                <span class="title">Já possui uma conta?</span>
                <span class="subtitle">***Adicionar um texto***</span>
                <button id="btnLogin" class="change">Entrar</button>
            </div>
        </div>

        <footer>Sistema de acesso &copy; 2022</footer>

    </body>
</html>