@extends('layouts.template')

@section('titulo') Solidariedade @endsection

@section('conteudo')

    <link type="text/css" rel="stylesheet" href="../css/solidariedade.css">

    <main id="solidariedade">

        <div class="container-fluid center">

            <div class="row">

                <div class="col l4 m12 s12">
                    <div class="card">
                        <div class="card-image">
                            <img src="../img/doacao-de-sangue.jpg">
                            <span class="card-title">Doação de Sangue</span>
                            @if (Auth::user()->admin == 1)
                                {{-- BOTÃO DELETAR ADMIN --}}
                                <a class="deletar btn-floating halfway-fab waves-effect red">
                                    <i class="material-icons">delete</i>
                                </a>
                            @else
                                {{-- BOTÃO LINK USUÁRIO --}}
                                <a class="btn-floating halfway-fab waves-effect tooltipped"
                                    data-position="bottom" data-delay="50" data-tooltip="saiba mais">
                                    <i class="material-icons">favorite_border</i>
                                </a> 
                            @endif
                        </div>
                        <div class="card-content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Quis vel magnam quasi molestias, atque
                                eum porro. Veniam vitae illo odit pariatur, 
                                adipisci omnis natus quidem eos, 
                                repudiandae assumenda recusandae commodi?
                            </p>
                        </div>
                    </div>
                </div>
    
                <div class="col l4 m12 s12">
                    <div class="card">
                        <div class="card-image">
                            <img src="../img/campanha_alimentos.jpg">
                            <span class="card-title">Campanha de alimentos</span>
                            @if (Auth::user()->admin == 1)
                                {{-- BOTÃO DELETAR ADMIN --}}
                                <a class="deletar btn-floating halfway-fab waves-effect waves-light red">
                                    <i class="material-icons">delete</i>
                                </a>
                            @else
                                {{-- BOTÃO LINK USUÁRIO --}}
                                <a class="btn-floating halfway-fab waves-effect tooltipped"
                                    data-position="bottom" data-delay="50" data-tooltip="saiba mais">
                                    <i class="material-icons">favorite_border</i>
                                </a> 
                            @endif
                        </div>
                        <div class="card-content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Quis vel magnam quasi molestias, atque
                                eum porro. Veniam vitae illo odit pariatur, 
                                adipisci omnis natus quidem eos, 
                                repudiandae assumenda recusandae commodi?
                            </p>
                        </div>
                    </div>
                </div>
    
                <div class="col l4 m12 s12">
                    <div class="card">
                        <div class="card-image">
                            <img src="../img/doacao_casacos.jpeg">
                            <span class="card-title">Campanha do agasalho</span>
                            @if (Auth::user()->admin == 1)
                                {{-- BOTÃO DELETAR ADMIN --}}
                                <a class="deletar btn-floating halfway-fab waves-effect waves-light red">
                                    <i class="material-icons">delete</i>
                                </a>
                            @else
                                {{-- BOTÃO LINK USUÁRIO --}}
                                <a class="btn-floating halfway-fab waves-effect tooltipped"
                                    data-position="bottom" data-delay="50" data-tooltip="saiba mais">
                                    <i class="material-icons">favorite_border</i>
                                </a> 
                            @endif
                        </div>
                        <div class="card-content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Quis vel magnam quasi molestias, atque
                                eum porro. Veniam vitae illo odit pariatur, 
                                adipisci omnis natus quidem eos, 
                                repudiandae assumenda recusandae commodi?
                            </p>
                        </div>
                    </div>
                </div>
    
                <div class="col l4 m12 s12">
                    <div class="card">
                        <div class="card-image">
                            <img src="../img/voluntarios.jpg">
                            <span class="card-title">Casa de Repouso</span>
                            @if (Auth::user()->admin == 1)
                                {{-- BOTÃO DELETAR ADMIN --}}
                                <a class="deletar btn-floating halfway-fab waves-effect waves-light red">
                                    <i class="material-icons">delete</i>
                                </a>
                            @else
                                {{-- BOTÃO LINK USUÁRIO --}}
                                <a class="btn-floating halfway-fab waves-effect tooltipped"
                                    data-position="bottom" data-delay="50" data-tooltip="saiba mais">
                                    <i class="material-icons">favorite_border</i>
                                </a> 
                            @endif
                        </div>
                        <div class="card-content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Quis vel magnam quasi molestias, atque
                                eum porro. Veniam vitae illo odit pariatur, 
                                adipisci omnis natus quidem eos, 
                                repudiandae assumenda recusandae commodi?
                            </p>
                        </div>
                    </div>
                </div>
    
                <div class="col l4 m12 s12">
                    <div class="card">
                        <div class="card-image">
                            <img src="../img/bazar-beneficente.jpg">
                            <span class="card-title">Bazar beneficente</span>
                            @if (Auth::user()->admin == 1)
                                {{-- BOTÃO DELETAR ADMIN --}}
                                <a class="deletar btn-floating halfway-fab waves-effect waves-light red">
                                    <i class="material-icons">delete</i>
                                </a>
                            @else
                                {{-- BOTÃO LINK USUÁRIO --}}
                                <a class="btn-floating halfway-fab waves-effect tooltipped"
                                    data-position="bottom" data-delay="50" data-tooltip="saiba mais">
                                    <i class="material-icons">favorite_border</i>
                                </a> 
                            @endif
                        </div>
                        <div class="card-content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Quis vel magnam quasi molestias, atque
                                eum porro.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Modal para inserção de CARDS -->
            <a id="botaoanuncio" class="modal-trigger btn-floating btn-large waves-effect" 
                href="#modal1"><i class="material-icons">add</i>
            </a>

        </div>

        {{-- MODAL - formulário --}}
        <div id="modal1" class="modal modal-fixed-footer center">
            <div class="modal-content">

                <form action="" method="post" enctype="multipart/form-data">

                    <p class="center">Divulgue uma nova ação voluntária</p>
                    <!-- Título -->
                    <div class="input-field">
                        <input id="tituloanuncio" type="text" class="validate">
                        <label id="tituloanuncio" class="active" for="tituloanuncio">Título</label>
                    </div>
                    <!-- Descrição -->
                    <div class="input-field">
                        <textarea id="descricaoanuncio" class="materialize-textarea"></textarea>
                        <label id="descricaoanuncio" class="active" for="descricaoanuncio">
                            Sobre a ação
                        </label>
                    </div>
                    <!-- Link -->
                    <div class="input-field">
                        <input id="tituloanuncio" type="text" class="validate">
                        <label id="tituloanuncio" class="active" for="tituloanuncio">
                            Link para maiores informações
                        </label>
                    </div>
                    <!-- Botão para upload da imagem -->
                    <div class="file-field input-field">
                        <div class="btn">
                            <span><i class="material-icons">attach_file</i></span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>

                    <!-- Botão para criar o anúncio -->
                    <div class="modal-footer">
                        <a href="#" class="modal-close waves-effect btn-flat" type="submit" 
                            name="action">Divulgar ação
                        </a>
                    </div>
                </form>
            </div>
        </div>

    </main>

    <script src="../js/jQuery341.js"></script>
    <script src="../js/Solidariedade.js"></script>
@endsection
