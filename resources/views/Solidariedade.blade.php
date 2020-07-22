@extends('layouts.template')

@section('titulo') Solidariedade @endsection

@section('conteudo')

    <link type="text/css" rel="stylesheet" href="./css/solidariedade.css">

    <main id="solidariedade">

        <div class="container-fluid">

            <div class="row">
                @foreach ($solidariedade as $item)
                    <div class="col l4 m12 s12">
                        <div class="card">
                            <div class="card-image">
                                <img src="{{$item->foto}}">
                                <h5 name="{{$item->id}}titulo" @if (Auth::user()->nome == $item->nome) contenteditable="true" @endif class="card-title">{{$item->titulo}}</h5>
                                        
                                @if (Auth::user()->admin == 0)
                                    @if (Auth::user()->nome == $item->nome)
                                        <a name={{$item->id}} class="edit halfway-fab btn-floating btn waves-effect waves-light">
                                            <i class="tiny material-icons">edit</i>
                                        </a>
                                        <a name={{$item->id}} class="delete halfway-fab btn-floating btn waves-effect waves-light">
                                            <i class="tiny material-icons">delete</i>
                                        </a>                                        
                                    @else
                                        <a name={{$item->link}} class="btn-floating halfway-fab waves-effect tooltipped"
                                            data-position="bottom" data-delay="50" data-tooltip="saiba mais">
                                            <i class="material-icons">link</i>
                                        </a>
                                    @endif
                                @endif

                                @if (Auth::user()->admin == 1)
                                    {{-- BOTÃO DELETAR ADMIN --}}
                                    <a name={{$item->id}} class="deletar btn-floating halfway-fab waves-effect red">
                                        <i class="material-icons">delete</i>
                                    </a>
                                @endif

                            </div>
                            <div class="card-content">
                                <p name="{{$item->id}}descricao" @if (Auth::user()->nome == $item->nome)contenteditable="true" 
                                    @endif>{{$item->descricao}}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row center">
                @if (Auth::user()->admin == 0)
                    <!-- Modal para inserção de CARDS -->
                    <a id="botaoanuncio" class="modal-trigger btn-floating btn-large waves-effect" 
                        href="#modal1"><i class="material-icons">add</i>
                    </a>
                @endif
            </div>

        </div>

        {{-- MODAL - formulário --}}
        <div id="modal1" class="modal modal-fixed-footer center">
            <div class="modal-content">

                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <p class="center">Divulgue uma nova ação voluntária</p>
                    <!-- Título -->
                    <div class="input-field">
                        <input name="titulo" id="tituloanuncio" type="text" class="validate">
                        <label for="tituloanuncio" class="active" for="tituloanuncio">Título</label>
                    </div>
                    <!-- Descrição -->
                    <div class="input-field">
                        <textarea name="descricao" id="descricaoanuncio" class="materialize-textarea"></textarea>
                        <label id="descricaoanuncio" class="active" for="descricaoanuncio">
                            Sobre a ação
                        </label>
                    </div>
                    <!-- Link -->
                    <div class="input-field">
                        <input name="link" id="link" type="text" class="validate">
                        <label for="link" class="active">
                            Link para maiores informações
                        </label>
                    </div>
                    <!-- Botão para upload da imagem -->
                    <div class="file-field input-field">
                        <div class="btn">
                            <span><i class="material-icons">attach_file</i></span>
                            <input type="file" multiple name="foto">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>

                    <!-- Botão para criar o anúncio -->
                    <div class="modal-footer">
                        <button href="#" class="modal-close waves-effect btn-flat" type="submit" 
                            name="action">Divulgar ação
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    
    <script src="../js/Solidariedade.js"></script>
    
@endsection
