@extends('layouts.template')

@section('titulo') Eventos @endsection

@section('conteudo')
    <main id="eventos">

        <link type="text/css" rel="stylesheet" href="/css/eventos.css" />
        
        <div class="row carousel carousel-slider center" data-indicators="true">
            
            @foreach ($evento as $item)
                <div id="imagem" style="background-image:url({{$item->foto}});background-size:cover" class="carousel-item white-text">

                    <div class="conteudo center">
                        
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
                    </div>
                    {{-- Botões de usuario e admin --}}
                    <div class="botoes row">
                        @if (Auth::user()->admin == 1)
                            {{-- Botões do administrador --}}
                            <a name="{{$item->id}}" class="edit btn waves-effect"><i class="material-icons">edit</i></a>
                            <a name="{{$item->id}}" class="delete btn waves-effect"><i class="material-icons">remove</i></a>
                        @else
                            {{-- Botão do usuário --}}
                            <a class="btn-floating waves-effect waves-light modal-trigger tooltipped" data-position="top"  
                                data-target="modal2" href="#modal2" data-tooltip="confirmar presença">
                                <i class="material-icons">how_to_reg</i>
                            </a>
                        @endif
                    </div>
                </div>
            @endforeach 
        </div>

        {{-- MODAL CONFIRMAR PRESENÇA --}}
        @if (Auth::user()->admin == 0)
            <div id="modal2" class="modal white-text">
                <div class="modal-content container-fluid center-align row">

                    <div class="col s12">
                        <h5>Confirme sua presença</h5>
                    </div>

                    <div class="input-field col s12">
                        <input placeholder="nome do responsável da unidade" id="nome" type="text" class="validate">
                        <label for="nome">Responsável da unidade</label>
                    </div>

                    <div class="row center">
                        <p>Quantas pessoas da sua unidade participarão do evento?</p>

                        <div class="col s6">
                            <p>Adultos (a partir de 13 anos):</p>
                            <div class="input-field inline">
                                <input id="adultos" type="number" class="validate">
                                <label for="adultos">quantidade</label>
                            </div>
                        </div>

                        <div class="col s6">
                            <p>Crianças de 3 a 12 anos:</p>
                            <div class="input-field inline">
                                <input id="criancas" type="number" class="validate">
                                <label for="criancas">quantidade</label>
                            </div>
                        </div>
                    </div>

                    <div class="input-field col s12">
                        <textarea id="info-geral" class="materialize-textarea" placeholder="coloque detalhes da sua participação no evento"></textarea>
                        <label for="info-geral">Maiores informações:</label>
                    </div>

                    <div class="modal-footer">
                        <a href="#!" class="modal-action white-text modal-close waves-effect btn-flat">confirmar</a>
                    </div>

                </div>
            </div>
        @endif
        

        {{-- MODAL ADD EVENTO --}}
        @if (Auth::user()->admin == 1)
            <div class="row">
                <!-- botão -->
                <button class="modal-trigger waves-effect waves-light btn row" href="#modal1">
                    <i class="material-icons">add</i>
                </button>
            </div>
        
            <!-- form -->
            <div id="modal1" class="modal">
                <div class="modal-content">
                    <form class="col s12" method="post" enctype="multipart/form-data">
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
                                <textarea id="descricao_1" name="descricao_1" placeholder="parágrafo para descrição"
                                class="materialize-textarea"></textarea>
                                <label for="descricao_1"></label>
                            </div>
                            {{-- descrição 2 --}}
                            <div class="input-field col s12">
                                <textarea id="descricao_2" name="descricao_2" placeholder="novo parágrafo"
                                class="materialize-textarea"></textarea>
                                <label for="descricao_2"></label>
                            </div>
                            {{-- descrição 3 --}}
                            <div class="input-field col s12">
                                <textarea id="descricao_3" name="descricao_3" placeholder="novo parágrafo"
                                class="materialize-textarea"></textarea>
                                <label for="descricao_3"></label>
                            </div>
                            {{-- fotos --}}
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
                        </div>
                            
                        <div class="modal-footer row">
                            <button href="#" type="submit" class="modal-action modal-close 
                                waves-effect waves-green btn-flat">criar
                            </button>
                        </div>

                    </form>
                </div>
                
            </div>
        @endif

        {{-- GALERIA DE FOTOS --}}
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
