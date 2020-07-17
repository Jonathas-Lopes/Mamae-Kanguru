@extends('layouts.template')

@section('titulo') Avisos @endsection

@section('conteudo')

    <link type="text/css" rel="stylesheet" href="./css/avisos.css"/>

    <section id="avisos">

        <div class="container-fluid">

            <div class="row">
                {{-- CARDS DE AVISO --}}
                @foreach ($avisos as $item)
                    <div class="col l4 m12 s12">
                        <div class="card z-depth-2 hoverable">

                            <div class="card-image">
                                <img src="{{$item->foto}}">
                                <h5 name="{{$item->id}}titulo" @if (Auth::user()->id == 1) contenteditable="true" @endif class="card-title">{{$item->titulo}}</h5>
                            </div>

                            <div class="card-content">
                                <p name="{{$item->id}}descricao" @if (Auth::user()->id == 1) contenteditable="true" @endif>{{$item->descricao}}</p>
                            </div>

                            @if (Auth::user()->admin == 1)
                            <a name={{$item->id}} class="delete btn-floating btn waves-effect waves-light"><i
                                class="tiny material-icons">delete</i>
                            </a>
                            @endif

                        </div>
                    </div>
                @endforeach
            </div>

        </div>

        {{-- FORMULARIO MODAL ADICIONAR CARD --}}
        @if (Auth::user()->admin == 1)
        <a class="botaoanuncio waves-effect waves-light btn modal-trigger" href="#modal1">
            <i class="material-icons">add</i>
        </a>
        @endif

        <div id="modal1" class="modal modal-fixed-footer">
            <div class="modal-content container-fluid center">
    
                <form class="row" action="" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="col s12">
                        <h6>Criar aviso</h6>
                    </div>

                    <div class="input-field col s12">
                        <input id="titulo" name="titulo" type="text" class="validate">
                        <label class="active"  for="titulo">Título (obrigatório)</label>
                    </div>

                    <div class="input-field col s12">
                        <textarea id="descricao" name="descricao"  class="materialize-textarea"></textarea>
                        <label class="active" for="descricao">Detalhes do aviso (obrigatório)</label>
                    </div>

                    <div class="file-field input-field col s12">
                        <div class="btn">
                            <span><i class="material-icons">
                                add_photo_alternate</i>
                            </span>
                            <input type="file" multiple name="foto">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" 
                            placeholder="imagem (opcional)">
                        </div>
                    </div>

                    <div class="modal-footer col s12">
                        <button href="#" type="submit" class="modal-close btn-flat">Adicionar aviso</button>
                    </div>

                </form>
            </div>
        </div>

    </section>

    <script src="./js/jQuery341.js"></script>
    <script src="./js/Avisos.js"></script>

@endsection