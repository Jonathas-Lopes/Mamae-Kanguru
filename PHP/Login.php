<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- <script type="text/javascript" src="js/index.js"></script>-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" />
    <link type="text/css" rel="stylesheet" href="../css/style.css" />

</head>

<body>

    <main class="mainlogin">
        <div class="container" id="cadastro">
            <div class="row">
                <form action="Login.php" method="POST">
                    <div id="email" class="col s12 m8 l6 offset-m2 offset-l3">
                        <label for="email">E-mail</label><br>
                        <input type="email" name="email" id="email" value="" placeholder="mariadasilva@email.com" required>   
                    </div>
                    <div id="senha" class="col s12 m8 l6 offset-m2 offset-l3">
                        <label for="senha">Senha</label>
                        <input type="password" id="senha" name="senha" value="" required>
                    </div>
                    <div id="button" class="col s12 m8 l6 offset-l7 offset-m8 offset-s9">
                        <button class="botaoform btn waves-effect waves-light" type="submit" name="action">Enviar
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </main>

    <footer id="footer" class="row">
        <div class="page-footer">
            <p>&copy; 2020 Copyright Mamãe-Kanguru</p>
            <img class="logofooter center" src="../Templates/2NomeBranco.png" alt="Logo UNIU">
            <a class="botaosuporte waves-effect waves-teal btn-flat white-text"><i
                    class="large material-icons right">contact_support</i>Suporte</a>
        </div>
    </footer>

    <script src="../js/jQuery341.js"></script>
    <script src="../js/materialize.min.js"></script>
    <script src="../js/modules.js"></script>
    <script src="../js/index.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

</body>

</html>