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
    <link type="text/css" rel="stylesheet" href="./css/materialize.min.css" />
    <link type="text/css" rel="stylesheet" href="./css/cadastro.css" />

</head>

<body>

    <main class="mainform">
        <div class="container" id="cadastro">
            <div class="row">
            <div class="col s12 m12 l12 ">
                    <form class="center-align" action="Cadastro.php" method="POST">
                        <div id="nome" class="col s12 m8 l6 offset-m2">
                            <label for="nome">Nome Completo</label>
                            <input type="text" name="nome" id="nome" value="" placeholder="Maria da Silva" required>
                        </div>
                        <div id="email" class="col s12 m8 l6 offset-m2">
                            <label for="email">E-mail</label><br>
                            <input type="email" name="email" id="email" value="" placeholder="mariadasilva@email.com"
                                required>
                        </div>
                        <div id="telefone" class="col s12 m8 l6 offset-m2">
                            <label for="telefone">Telefone</label>
                            <input type="number" name="telefone" id="telefone" value="" placeholder="(99) 9 9999-9999">
                        </div>
                        <div id="condominio" class="col s12 m8 l6 offset-m2">
                            <label for="condominio">Condomínio</label>
                            <select id="condominio">
                                <option value="" disabled selected>Selecione o seu condomínio</option>
                                <option value="1">Condomínio dos Edifícios Acária</option>
                                <option value="2">Condomínio Edifício Eva Pericó Rashid</option>
                                <option value="3">Condomínio Residencial Palanque</option>
                            </select>
                        </div>
                        <div id="senha" class="col s12 m8 l6 offset-m2">
                            <label for="senha">Senha</label>
                            <input type="password" id="senha" name="senha" value="" required>
                        </div>
                        <div id="confirmacao" class="col s12 m8 l6 offset-m2">
                            <label for="confirmacao">Confirmação de Senha</label>
                            <input type="password" id="confirmacao" name="confirmacao" value="" required>
                        </div>
                        <div id="button" class="col s12 m8 l6 ">
                            <button class="botaoform btn waves-effect waves-light" type="submit" name="action">UNIR
                                
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