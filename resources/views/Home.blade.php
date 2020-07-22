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

            @if(Auth::user()->admin == 0)
            <!-- Modal Trigger -->
            <a class="btn-floating btn-large waves-effect modal-trigger" data-target="modal1" href="#modal1">
                <i class="material-icons">edit</i>
            </a>
            @endif
        </div>

        @if(Auth::user()->admin == 0)
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
                                @if(Auth::user()->genero == 'feminino')
                                    <input class="with-gap" name="genero" type="radio" checked value="feminino"/>
                                @else
                                    <input class="with-gap" name="genero" type="radio" value="feminino"/>
                                @endif
                                
                                <span>feminino</span>
                            </label>
                            <label class="radious-buttons">
                                @if(Auth::user()->genero == 'masculino')
                                    <input class="with-gap" name="genero" type="radio" checked value="masculino"/>
                                @else
                                    <input class="with-gap" name="genero" type="radio" value="masculino"/>
                                @endif
                                <span>masculino</span>
                            </label>
                            <label class="radious-buttons">
                                @if(Auth::user()->genero == 'outro')
                                    <input class="with-gap" name="genero" type="radio" checked value="outro"/>
                                @else
                                    <input class="with-gap" name="genero" type="radio" value="outro"/>
                                @endif
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
                            <input name="telefone" value="{{ Auth::user()->telefone }}" placeholder="Interfone: #1604 (exemplo)" id="telefone" type="text" class="validate">
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
        @endif

        {{-- Links side bar --}}
        <div class="sobre">
            <article>
                <h6 class="nomeusuario center-align">{{ Auth::user()->nome }}</h6>
            </article>
            <div>
                <a class="linksperfil waves-effect waves btn-flat">Mensagens privadas</a>
                <a class="linksperfil waves-effect waves btn-flat">Configurações</a>
            </div>
            @if (Auth::user()->admin == 0)
                <div class="blocohashtags center-align">
                    <a class="hashtags waves-effect waves btn-flat">#procuro</a>
                    <a class="hashtags waves-effect waves btn-flat">#ofereço</a>
                    <a class="hashtags waves-effect waves btn-flat">#aviso</a>
                </div>   
            @endif
        </div>
    </section>

    <section class="assuntos">
        {{-- Mensagens instantâneas --}}
        @if (Auth::user()->admin == 0)
            <article class="card">
                {{-- textarea --}}
                <div class="textarea">
                    <form method="POST" action="/home/mensagem" class="input-field">
                        @csrf
                        <div class="col s12">
                            <textarea name="mensagem" value="" id="textarea1" class="materialize-textarea"></textarea>
                            <label for="textarea1">Escreva aqui a sua mensagem</label>
                        </div>
                        <div class="col s12">
                            <label class="radious-buttons">
                                <input name="hashtag" type="radio" value="procuro"/>
                                <span>#procuro</span>
                            </label>
                            <label class="radious-buttons">
                                <input name="hashtag" type="radio" value="ofereco"/>
                                <span>#ofereço</span>
                            </label>
                            <label class="radious-buttons">
                                <input name="hashtag" type="radio" value="aviso"/>
                                <span>#aviso</span>
                            </label>
                        </div>
                        <div class="col s12">
                            <button type="submit" class="enviar btn-floating btn waves-effect waves-light">
                                <i class="material-icons">send</i>
                            </button>
                        </div>
                    </form>
                </div>
            </article>
        @endif

        <div id="mensagens">
            
        </div>
            
    </section>
    
    <script src="js/mensagens.js"></script>

@endsection

