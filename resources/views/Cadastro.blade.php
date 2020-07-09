<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <!-- <script type="text/javascript" src="js/index.js"></script>-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.css') }}" />
    {{-- <link type="text/css" rel="stylesheet" href="{{ asset('css/cadastro.css') }}" /> --}}
    <link type="text/css" rel="stylesheet" href="{{ asset('css/login.css') }}" />

</head>

<body>

    <main class="mainform">
        <div class="container-fluid" id="cadastro">
            <div class="row">
                <div class="col s12 m12 l8 imagem-login">
                    
                </div>

                <div id="cadastro-conteiner" class="col s10 m10 l4 offset-s1 offset-m1 form">
                    <img src="../img/LogoVerde.png" alt="Logo Uniu">
                    <form class="center-align" action="/cadastro" method="POST">
                        @csrf
                        <div id="nome">
                            <label for="nome">Nome Completo</label>
                            <input type="text" name="nome" id="nome" value="" placeholder="Maria da Silva" required>
                        </div>
                        <div id="email">
                            <label for="email">E-mail</label><br>
                            <input type="email" name="email" id="email" value="" placeholder="mariadasilva@email.com"
                                required>
                        </div>
                        <div id="genero">
                            <label for="genero">Gênero</label>
                            <select id="genero">
                                <option value="" disabled selected>Selecione o seu gênero</option>
                                <option value="F">Feminino</option>
                                <option value="M">Masculino</option>
                                <option value="OUTRO">Outro</option>
                            </select>
                        </div>
                        <div id="senha">
                            <label for="senha">Senha</label>
                            <input type="password" id="senha" name="senha" value="" required>
                        </div>
                        <div id="confirmacao">
                            <label for="confirmacao">Confirmação de Senha</label>
                            <input type="password" id="confirmacao" name="confirmacao" value="" required>
                        </div>
                        <div id="button">
                            <button class="botaoform btn waves-effect waves-light" type="submit" name="action" style="background-color: #f7b930;">Unir
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>



    <script src="../js/jQuery341.js"></script>
    <script src="../js/materialize.min.js"></script>
    <script src="../js/Cadastro.js"></script>
    <script src="../js/modules.js"></script>
    <script src="../js/index.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

</body>

</html>