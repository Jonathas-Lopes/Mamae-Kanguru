<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- <script type="text/javascript" src="js/index.js"></script>-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/login.css') }}" />

</head>

<body>

    <main>
        <div class="container-fluid center-align" id="cadastro">
            <div class="row">
                <div class="col l4"></div>
                <div class="col l4 s12 m12 login">
                    <div class="logo">
                        <img src="{{ asset('/img/2NomeBranco.png') }}">

                    </div>
                    <h1>Login</h1>
                    <form action="/login" method="POST">
                        @csrf
                        <div id="email">
                            <label for="email">E-mail</label><br>
                            <input type="email" name="email" id="email" value="" placeholder="mariadasilva@email.com" required>
                        </div>
                        <div id="senha">
                            <label for="senha">Senha</label>
                            <input type="password" id="senha" name="senha" value="" required>
                        </div>
                        <div id="button">
                            <button class="botaoform btn waves-effect waves-light" type="submit" name="action">Enviar
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col l4"></div>
            </div>
        </div>

    </main>

</body>

<script src="{{ asset('/js/jQuery341.js') }}"></script>
<script src="{{ asset('/js/materialize.min.js') }}"></script>
<script src="{{ asset('/js/modules.js') }}"></script>



</body>

</html>