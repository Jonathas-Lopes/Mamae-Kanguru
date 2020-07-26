@extends('layouts.template')

@section('titulo') Avisos @endsection

@section('conteudo')
    <link rel="stylesheet" href="./css/avisos.css">

    <main id="avisos">

        <div class="container-fluid center">

            <div class="row">
                @foreach ($avisos as $item)
                    <div class="col l3 m12 s12">
                        <div class="card">

                            <div class="card-image">
                                <img src="{{$item->foto}}">
                                <h5 class="card-title"name="{{$item->id}}titulo" @if (Auth::user()->admin == 1)
                                    contenteditable="true" @endif>{{$item->titulo}}
                                </h5>
                            </div>

                            <div class="card-content">
                                <p name="{{$item->id}}descricao" @if (Auth::user()->admin == 1) 
                                    contenteditable="true" @endif>{{$item->descricao}}
                                </p>
                            </div>

                            @if (Auth::user()->admin == 1)
                                <div class="card-action">
                                    <a name="{{$item->id}}" class="delete btn waves-effect waves-light ">
                                        <i class="tiny material-icons">delete</i>
                                    </a>
                                </div>
                            @endif

                        </div>
                    </div>
                @endforeach
            </div>

            {{-- MODAL: FORM ADICIONAR AVISO --}}
            @if (Auth::user()->admin == 1)
                <a class="modal-trigger btn waves-effect waves-light" href="#modal1">
                    <i class="material-icons">add</i>
                </a>
            @endif
            
        </div>

        @if (Auth::user()->admin == 1)

            <div id="modal1" class="modal">
                <div class="modal-content">
                    <form class="row" action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col s12">
                            <h6>Adicionar um aviso na página</h6>
                        </div>

                        <div class="input-field col s12">
                            <input id="titulo" name="titulo" type="text" class="validate">
                            <label for="titulo" class="active">Título (obrigatório)</label>
                        </div>

                        <div class="input-field col s12">
                            <textarea name="descricao" id="descricao" class="materialize-textarea"></textarea>
                            <label for="descricao" class="active">Conteúdo do aviso (obrigatório)</label>
                        </div>

                        <div class="file-field input-field col s12">
                            <div class="btn">
                                <span>
                                    <i class="material-icons">add_photo_alternate</i>
                                </span>
                                <input type="file" multiple name="foto">
                            </div>

                            <div class="file-path-wrapper">
                                <input type="text" class="file-path validate"
                                placeholder="imagem (opcional)">
                            </div>

                            
                        </div>
                        <div class="modal-footer col s12">
                            <button href="#" type="submit" 
                            class="modal-close btn-flat">Criar aviso</button>
                        </div>
                    </form>
                </div>
            </div>
        @endif
    </main>

    <script src="{{asset('/js/jQuery341.js')}}"></script>
    <script src="{{asset('/js/Avisos.js')}}"></script>
@endsection