@extends('layouts.template')

@section('titulo') Home @endsection

@section('conteudo')
    <section class="perfil hide-on-med-and-down">
        <div class="foto-perfil">
            @if(Auth::user()->foto != null)
                <img class="circle" src="{{$perfil->foto}}" alt="Foto perfil">
            @elseif(Auth::user()->genero == 'feminino')
                <img class="circle" src="./img/foto_moradora.jpg" alt="Foto perfil">
            @else
                <img class="circle" src="./img/foto_morador.jpg" alt="Foto perfil">
            @endif

            <!-- Modal Trigger -->
            <a class="btn-floating btn-large waves-effect modal-trigger" data-target="modal1" href="#modal1">
                <i class="material-icons">edit</i>
            </a>
        </div>

        <!-- Modal Structure -->
        <div id="modal1" class="modal">
            <div class="modal-content">
                <h5 class="center-align">Editar usuário</h5>
                <form class="col s12" action="/editarUsuario" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- foto usuário --}}
                    <div class="file-field input-field">
                        <div class="btn">
                            <span><i class="material-icons">add_a_photo</i></span>
                            <input type="file" name="foto">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Troque a sua foto">
                        </div>
                    </div>
                    {{-- nome --}}
                    <div class="input-field col s12">
                    <input placeholder="{{ Auth::user()->nome }}" name="nome" value="{{ Auth::user()->nome }}" id="first_name" type="text" class="validate">
                    </div>
                    {{-- gênero --}}
                    <p class="genero">
                        <label class="radious-buttons">
                            <input class="with-gap" name="genero" type="radio" value="feminino"/>
                            <span>feminino</span>
                        </label>
                        <label class="radious-buttons">
                            <input class="with-gap" name="genero" type="radio" value="masculino"/>
                            <span>masculino</span>
                        </label>
                        <label class="radious-buttons">
                            <input class="with-gap" name="genero" type="radio" value="outro"/>
                            <span>outros</span>
                        </label>
                    </p>
                    {{-- e-mail --}}
                    <div class="row">
                        <div class="input-field col s12">
                        <input placeholder="E-mail" name="email" value="{{ Auth::user()->email }}" id="email" type="email" class="validate">
                        </div>
                    </div>
                    {{-- telefone --}}
                    <div class="row">
                        <div class="input-field col s12">
                        <input name="telefone" value="{{ Auth::user()->telefone }}" placeholder="(99) 99999-9999" id="email" type="text" class="validate">
                        </div>
                    </div>
                    {{-- senha --}}
                    <div class="row">
                        <div class="input-field col s12">
                        <input name="senha" placeholder="Senha" id="password" type="password" class="validate">
                        </div>
                    </div>
                    {{-- confirmação senha --}}
                    <div class="row">
                        <div class="input-field col s12">
                        <input placeholder="Confirme a sua senha" id="password" type="password" class="validate">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit">Editar</button>
                    </div>

                </form>
            </div>
            
        </div>

        {{-- Links side bar --}}
        <div class="sobre">
            <article>
                <h6 class="nomeusuario center-align">{{ Auth::user()->nome }}</h6>
            </article>
            <div>
                <a class="linksperfil waves-effect waves btn-flat">Mensagens privadas</a>
                <a class="linksperfil waves-effect waves btn-flat">Configurações</a>
            </div>
            <div class="blocohashtags center-align">
                <a class="hashtags waves-effect waves btn-flat">#procuro</a>
                <a class="hashtags waves-effect waves btn-flat">#ofereço</a>
                <a class="hashtags waves-effect waves btn-flat">#aviso</a>
            </div>
        </div>
    </section>

    {{-- Mensagens instantâneas --}}
    <section class="assuntos">
        {{-- textarea --}}
        <div class="textarea row">
            <div class="input-field col s12">
                <textarea value="" id="textarea1" class="materialize-textarea"></textarea>
                <label for="textarea1">Escreva aqui a sua mensagem</label>
            </div>
        </div>

        <article class="card">
            <h6><img class="circle" src="./img/foto_moradora2.jpg" alt="Foto perfil">Valéria Costa</h6>
            <p>No último sábado desse mês vou levar doações para a casa de repouso. Quem tiver doações para entregar, pode aproveitar que tem espaço no carro.</p>
            <h5>#ofereço</h5>
            <a class="botaoresponder btn-floating btn waves-effect waves-light"><i class="material-icons">send</i></a>
        </article>
        <article class="card">
            <h6><img class="circle" src="./img/foto_morador.jpg" alt="Foto perfil">Francisco Matos</h6>
            <p>Alguém possui indicação de diarista?</p>
            <h5>#procuro</h5>
            <a class="botaoresponder btn-floating btn waves-effect waves-light"><i class="material-icons">send</i></a>
        </article><article class="card">
            <h6><img class="circle" src="./img/foto_morador1.jpg" alt="Foto perfil">Bruno Galvão</h6>
            <p>Todos os dias levo meu filho ao colégio São João às 7:10. Sei que tem outras crianças que estudam lá. Se alguém quiser carona, tenho mais três vagas no carro.</p>
            <h5>#ofereço</h5>
            <a class="botaoresponder btn-floating btn waves-effect waves-light"><i class="material-icons">send</i></a>
        </article><article class="card">
            <h6><img class="circle" src="./img/foto_moradora.jpg" alt="Foto perfil">Helena Cardin</h6>
            <p>Olá! Estou doando um jogo de taças de vinho. São de vidro e está faltando uma. São 5 no total.</p>
            <h5>#ofereço</h5>
            <a class="botaoresponder btn-floating btn waves-effect waves-light"><i class="material-icons">send</i></a>
        </article><article class="card">
            <h6><img class="circle" src="./img/foto_morador2.jpg" alt="Foto perfil">Carlos Ruiz</h6>
            <p>Alguém tem vaga de garagem disponível para alugar?</p>
            <h5>#procuro</h5>
            <a class="botaoresponder btn-floating btn waves-effect waves-light"><i class="material-icons">send</i></a>
        </article><article class="card">
            <h6><img class="circle" src="./img/foto_moradora1.JPG" alt="Foto perfil">Sandra Maria Alves</h6>
            <p>Quem aqui vai na aula de zumba no SESC toda terça e quinta às 10:30 da manhã? Eu e a Clotilde do 71B vamos e quem quiser, pode ir com a gente.</p>
            <h5>#ofereço</h5>
            <a class="botaoresponder btn-floating btn waves-effect waves-light"><i class="material-icons">send</i></a>
        </article>
        </article><article class="card">
            <h6><img class="circle" src="./img/foto_morador3.jpg" alt="Foto perfil">Pedro Trindade</h6>
            <p>Estou precisando dedetizar o apê. Alguém tem indicação de profissional ou empresa que faz esse serviço?</p>
            <h5>#procuro</h5>
            <a class="botaoresponder btn-floating btn waves-effect waves-light"><i class="material-icons">send</i></a>
        </article>
</section>

@endsection

