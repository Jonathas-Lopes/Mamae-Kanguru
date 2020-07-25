@extends('layouts.template')

@section('titulo') Eventos @endsection

@section('conteudo')
    <main id="eventos">

        <link type="text/css" rel="stylesheet" href="/css/eventos.css" />
        
        <div class="s12 carousel carousel-slider center" data-indicators="true">
            
            
            @foreach ($evento as $item)
                <div style="background-image:url({{$item->foto}});background-size:cover" class="carousel-item white-text">
                
                    {{-- Título evento --}}
                    <h5 class="editavel white-text" name="{{$item->id}}nome" 
                        @if (Auth::user()->admin == 1) contenteditable="true" @endif>
                        {{$item->nome}}
                    </h5>

                    {{-- Data do evento --}}
                    <h6 name="{{$item->id}}data"class="editavel white-text"
                        @if (Auth::user()->admin == 1) contenteditable="true" @endif>
                        {{$item->data}}
                    </h6>

                    {{-- Descrição --}}
                    <p name="{{$item->id}}descricao_1" id="descricao_1"
                        @if (Auth::user()->admin == 1) contenteditable="true" @endif>
                        {{$item->descricao_1}}
                    </p>

                    {{-- Descrição --}}
                    <p name="{{$item->id}}descricao_2" id="descricao_2"
                        @if (Auth::user()->admin == 1) contenteditable="true" @endif>
                        {{$item->descricao_2}}
                    </p>

                    {{-- Descrição --}}
                    <p name="{{$item->id}}descricao_3" id="descricao_3"
                        @if (Auth::user()->admin == 1) contenteditable="true" @endif>
                        {{$item->descricao_3}}
                    </p>

                    @if (Auth::user()->admin == 1)
                        {{-- Botões do administrador --}}
                        <a name="{{$item->id}}" class="edit btn-large waves-effect"><i class="material-icons">edit</i></a>
                        <a name="{{$item->id}}" class="delete btn-large waves-effect"><i class="material-icons">remove</i></a>
                    @else
                        {{-- Botão do usuário --}}
                        <a class="confirmarbtn waves-effect waves-light btn">confirmar presença</a>
                    @endif
                    
                </div>
            @endforeach
            
            

        </div>
        @if (Auth::user()->admin == 1)
            <!-- Modal Trigger -->
            <button class="modal-trigger waves-effect waves-light btn row" href="#modal1">
                <i class="material-icons">add</i>
            </button>
            @endif
        

        @if (Auth::user()->admin == 1)
            <!-- Modal Structure -->
            <div id="modal1" class="modal">
                <div class="modal-content">
                    <form class="col s12" action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col s12">
                                <h5>Adicionar próximo evento</h5>
                            </div>
                            {{-- nome do evento --}}
                            <div class="input-field col s12">
                                <input id="nome" name="nome" type="text" class="validate">
                                <label for="nome">Nome do evento</label>
                            </div>
                            {{-- data do evento --}}
                            <div class="input-field col s12">
                                <input name="data" type="date" 
                                placeholder="escolha a data do evento">
                            </div>
                            <div class="col s12">
                                <p>
                                    Utilize os campos abaixo para inserir os detalhes do evento: 
                                    o que é necessário para participar, local, atrações, comidas, bebidas...
                                </p>
                            </div>
                            {{-- descrição 1 --}}
                            <div class="input-field col s12">
                                <textarea id="descricao_1" name="descricao_1" class="materialize-textarea"></textarea>
                                <label for="descricao_1"></label>
                            </div>
                            {{-- descrição 2 --}}
                            <div class="input-field col s12">
                                <textarea id="descricao_2" name="descricao_2" class="materialize-textarea"></textarea>
                                <label for="descricao_2"></label>
                            </div>
                            {{-- descrição 3 --}}
                            <div class="input-field col s12">
                                <textarea id="descricao_3" name="descricao_3" class="materialize-textarea"></textarea>
                                <label for="descricao_3"></label>
                            </div>
                            {{-- fotos --}}
                            <div class="file-field input-field col s12">
                                <div class="btn">
                                    <span><i class="material-icons">add_photo_alternate</i></span>
                                    <input type="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" 
                                    placeholder="adicione uma imagem do evento">
                                </div>
                            </div>
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
                        <div class="modal-footer">
                            <button href="#" type="submit" class="modal-action modal-close 
                                waves-effect waves-green btn-flat">criar
                            </button>
                        </div>
                    </form>
                </div>
                
            </div>
        @endif

        <div class="galeriaeventos center container col s12">
            
            <h4 class="header">Galeria de fotos dos eventos</h4>

            @if (Auth::user()->admin == 1)
                {{-- BOTÃO ADMINISTRADOR - ADICIONAR GALERIA DE FOTOS --}}
                <div>
                    <a class="btnaddgaleria waves-effect waves-light btn">adicionar nova galeria</a>
                </div>
            @else
                <!-- Dropdown Trigger -->
                <a class='dropdown-trigger btn' href='#' data-target='dropdown1'>Escolha o evento</a>
                <!-- Dropdown Structure -->
                <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="#!">Festa de Volta às Aulas 2020</a></li>
                    <li><a href="#!">Festa de Natal 2019</a></li>
                    <li><a href="#!">Churrasco Dia das Mães 2020</a></li>
                </ul>
            @endif
        </div>

        </main>
        <script src="{{asset('/js/jQuery341.js')}}"></script>
        <script src="{{asset('/js/Eventos.js')}}"></script>
        
@endsection
