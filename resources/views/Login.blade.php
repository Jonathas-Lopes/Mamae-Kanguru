<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/login.css') }}" />

</head>

<body>

    <main class="mainlogin">
        <div class="container-fluid" id="cadastro">
            <div class="row">
                <div class="col s12 m6 l8 imagem-login">
                    
                </div>
                <div id="cadastro-conteiner" class="col s10 m10 l4 offset-s1 offset-m1 form">
                    <img src="../img/LogoVerde.png" alt="Logo Uniu">
                    <form action="/login" method="POST">
                        @csrf
                        <div id="email" >
                            <label for="email">E-mail</label><br>
                            <input type="email" name="email" id="email" value="" placeholder="mariadasilva@email.com" required>   
                        </div>
                        <div id="senha">
                            <label for="senha">Senha</label>
                            <input type="password" id="senha" name="senha" value="" required>
                        </div>
                        <div id="links">
                            <a href="#"><p>Esqueci minha senha</p></a>
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
</body>

<script src="{{ asset('/js/jQuery341.js') }}"></script>
<script src="{{ asset('/js/materialize.min.js') }}"></script>
<script src="{{ asset('/js/modules.js') }}"></script>



</body>

</html>