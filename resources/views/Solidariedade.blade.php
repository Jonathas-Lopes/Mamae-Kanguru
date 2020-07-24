@extends('layouts.template')

@section('titulo') Solidariedade @endsection

@section('conteudo')

    <link type="text/css" rel="stylesheet" href="/css/solidariedade.css">

    <main id="solidariedade">

        <div class="container-fluid">
            <div class="row">

                @foreach ($solidariedade as $item)
                    <div class="col l4 s12">
                        <div class="card">
                            <div class="card-image">

                                <img src="{{$item->foto}}">
                                <h5 name="{{$item->id}}titulo" @if (Auth::user()->nome == $item->nome) 
                                    contenteditable="true" @endif class="card-title">{{$item->titulo}}
                                </h5>

                                {{-- bloco de botões dos cards --}}
                                @if (Auth::user()->admin == 0)

                                    {{-- se usuário é o dono do card --}}
                                    @if (Auth::user()->nome == $item->nome)
                                        <div id="card-usuario">
                                            <a name={{$item->id}} class="edit halfway-fab btn-floating btn 
                                                waves-effect waves-light">
                                                <i class="tiny material-icons">edit</i>
                                            </a>
                                            <a name={{$item->id}} class="delete halfway-fab btn-floating btn 
                                                waves-effect waves-light">
                                                <i class="tiny material-icons">delete</i>
                                            </a>
                                        </div>
                                    @elseif (!$item->link == null)
                                        <a name={{$item->link}} class="btn-floating halfway-fab waves-effect 
                                            tooltipped" data-position="bottom" data-delay="50" href="{{$item->link}}"
                                            data-tooltip="saiba mais"><i class="material-icons">link</i>
                                        </a>
                                    @endif

                                @else
                                    {{-- botão de deletar do admin --}}
                                    <a name={{$item->id}} class="delete halfway-fab btn-floating btn 
                                        waves-effect waves-light">
                                        <i class="tiny material-icons">delete</i>
                                    </a>
                                @endif
                            </div>

                            <div class="card-content">
                                <p name="{{$item->id}}descricao" @if (Auth::user()->nome == $item->nome)
                                    contenteditable="true" @endif> {{$item->descricao}}
                                </p>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Modal para inserção de CARDS -->
            @if (Auth::user()->admin == 0)
                <div class="row center">
                    <a id="botaoanuncio" class="modal-trigger btn-floating btn-large waves-effect" 
                        href="#modal1"><i class="material-icons">add</i>
                    </a>
                </div>
            @endif

        </div>

        {{-- MODAL - formulário --}}
        @if (Auth::user()->admin == 0)
            <div id="modal1" class="modal modal-fixed-footer center">
                <div class="modal-content">

                    <form class="row" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col s12">
                            <p class="center">Divulgue uma nova ação voluntária</p>
                        </div>
                        <!-- Título -->
                        <div class="input-field col s12">
                            <input name="titulo" id="titulo" type="text" class="validate">
                            <label for="titulo" class="active">Título</label>
                        </div>
                        <!-- Descrição -->
                        <div class="input-field col s12">
                            <textarea name="descricao" class="materialize-textarea"></textarea>
                            <label id="descricao" class="active" for="descricao">
                                Sobre a ação
                            </label>
                        </div>
                        <!-- Link -->
                        <div class="input-field col s12">
                            <input name="link" id="link" type="text" class="validate">
                            <label for="link" class="active">
                                Link para maiores informações
                            </label>
                        </div>
                        <!-- Botão para upload da imagem -->
                        <div class="file-field input-field col s12">
                            <div class="btn">
                                <span><i class="material-icons">attach_file</i></span>
                                <input type="file" multiple name="foto">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text"
                                placeholder="adicione uma imagem">
                            </div>
                        </div>
                        <!-- Botão para criar o anúncio -->
                        <div class="modal-footer col s12">
                            <button href="#" class="modal-close waves-effect btn-flat" type="submit" 
                                name="action">Divulgar ação
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        @endif

    </main>
    <script src="{{asset('/js/jQuery341.js')}}"></script>
    <script src="{{asset('/js/Solidariedade.js')}}"></script>
    
@endsection
