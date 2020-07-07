@extends('layouts.template')

@section('titulo') Cadastro @endsection

@section('conteudo')

    <link type="text/css" rel="stylesheet" href="./css/cadastro.css"/>

    <main class="mainform">
        <div class="container" id="cadastro">
            <div class="row">
                <div class="col s12 m6 l8 imagem-login">
                        <img src="../img/login1.jpg" alt="ilustração login">
                        <img src="../img/login2.jpg" alt="ilustração login">
                    </div>

                <div class="col s12 m6 l4 form">
                    <img src="../img/LogoVerde.png" alt="Logo Uniu">
                    <form class="center-align" action="" method="POST">
                            @csrf
                        <div id="nome" class="col s12 m6 l6 offset-m2 offset-l3">
                            <label for="nome">Nome Completo</label>
                            <input type="text" name="nome" id="nome" value="" placeholder="Maria da Silva" required>
                        </div>

                        <div id="genero" class="col s12 m6 l6 offset-m2 offset-l3">
                            <label for="genero">Gênero</label>
                            <input type="text" name="genero" id="genero" value="" placeholder="escreva o seu gênero" required>
                        </div>
                        
                        {{-- Tentativa de usar o select --}}
                        {{-- <div class="input-field col s12 m6 l6 offset-m2 offset-l3">
                            <select name="genero" id="genero">
                              <option value="feminino">feminino</option>
                              <option value="masculino">masculino</option>
                              <option value="outro">outro</option>
                            </select>
                            <label for="genero">Gênero</label>
                        </div> --}}

                        <div id="email" class="col s12 m6 l6 offset-m2 offset-l3">
                            <label for="email">E-mail</label><br>
                            <input type="email" name="email" id="email" value="" placeholder="mariadasilva@email.com"
                                required>
                        </div>
                        <div id="telefone" class="col s12 m6 l6 offset-m2 offset-l3">
                            <label for="telefone">Telefone</label>
                            <input type="number" name="telefone" id="telefone" value="" placeholder="(99) 9 9999-9999">
                        </div>
                        <div id="senha" class="col s12 m6 l6 offset-m2 offset-l3">
                            <label for="senha">Senha</label>
                            <input type="password" id="senha" name="senha" value="" required>
                        </div>
                        <div id="confirmacao" class="col s12 m6 l6 offset-m2 offset-l3">
                            <label for="confirmacao">Confirmação de Senha</label>
                            <input type="password" id="confirmacao" name="confirmacao" value="" required>
                        </div>
                        <div id="button" class="col s12 m6 l6 offset-l6 offset-m8 offset-s9">
                            <button class="botaoform btn waves-effect waves-light" type="submit" name="action" style="background-color: #f7b930;">Unir
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="./js/Cadastro.js"></script>
    </main>

@endsection