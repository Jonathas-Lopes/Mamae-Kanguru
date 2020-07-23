<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('titulo')</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>

    <body>
        <header>
            <nav class="#48beae">
                <div class="navbar">
                    <a href="/home" class="logo"><img class="imagem-1" src="{{ asset('/img/2NomeBrancoCortado.png') }}" alt="Logo"></a>
                    <ul class="abas hide-on-med-and-down">
                        @auth
                        <li class="tooltipped" data-position="bottom" data-tooltip="reservar">
                            <a href="/reservas"><i class="material-icons">date_range</i></a>
                        </li>
                        <li class="tooltipped" data-position="bottom" data-tooltip="doar">
                            <a href="/solidariedade"><i class="material-icons">emoji_people</i></a></li>
                        <li class="tooltipped" data-position="bottom" data-tooltip="vender">
                            <a href="/painel"><i class="material-icons">point_of_sale</i></a>
                        </li>
                        <li class="tooltipped" data-position="bottom" data-tooltip="eventos">
                            <a href="/eventos"><i class="material-icons">cake</i></a>
                        </li>
                        <li class="tooltipped" data-position="bottom" data-tooltip="avisos">
                            <a href="/avisos"><i class="material-icons">announcement</i></a>
                        </li>
                        <li class="tooltipped" data-position="bottom" data-tooltip="logout">
                            <a href="/login/logout"><i class="material-icons">login</i></a>
                        </li>
                        @endauth
                    </ul>
                    <ul class="abas mobile-menu hide-on-large-only">
                        <li class="menus"><a data-target="slide-out" class="sidenav-trigger triger-index" href="#"><i class=" material-icons">menu</i></a></li>
                        <li class=""><a href="/home"><i class="material-icons">home</i></a></li>
                        <li class=""><a href="#"><i class="material-icons">message</i></a></li>
                        <li class=""><a href="#"><i class="material-icons">notifications</i></a></li>

                        <li class=""><a><i class="material-icons pesquisa-close">search</i></a></li>
                    </ul>
                </div>
            </nav>

            <section id="slide-out" class="sidenav sidenave-index perfil-mobile show-on-medium-and-up">
                <div class="foto-perfil">
                    <img class="circle" src="{{ Auth::user()->foto }}" alt="Foto perfil">
                    <a class="btn-floating btn-large waves-effect waves-light">
                        <i class="material-icons">edit</i>
                    </a>
                </div>
                <div class="sobre">
                    <article>
                        <h6 class="nomeusuario center-align">{{ Auth::user()->nome }}</h6>
                    </article>
                    <div>
                        <a class="linksperfil waves-effect waves btn-flat">Mensagens privadas</a>
                    </div>
                    <div>
                        <ul class="abas center-align">
                            <li class=""><a href="/reservas">reservar</a></li>
                            <li class=""><a href="/solidariedade">doar</a></li>
                            <li class=""><a href="/painel">vender</a></li>
                            <li class=""><a href="/eventos">eventos</a></li>
                            <li class=""><a href="/avisos">avisos</a></li>
                        </ul>

                    </div>
                    <div class="blocohashtags center-align">
                        <a class="hashtags waves-effect waves btn-flat">#procuro</a>
                        <a class="hashtags waves-effect waves btn-flat">#ofereço</a>
                        <a class="hashtags waves-effect waves btn-flat">#aviso</a>
                    </div>
                </div>
            </section>
        </header>

        <main>
            @yield('conteudo')
        </main>

        <footer id="footer" class="row">
            <div class="page-footer">
                <p>&copy; 2020 Copyright Mamãe-Kanguru</p>
                <img class="logofooter center" src="/img/2NomeBranco.png" alt="Logo UNIU">
                <a class="botaosuporte waves-effect waves-teal btn-flat white-text"><i class="large material-icons right">contact_support</i>Suporte</a>
            </div>
        </footer>

        <script src="{{asset('/js/jQuery341.js')}}"></script>
        <script src="{{asset('/js/materialize.min.js')}}"></script>
        <script src="{{asset('/js/index.js')}}"></script>

    </body>

</html>