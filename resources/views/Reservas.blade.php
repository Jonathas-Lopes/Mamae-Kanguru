@extends('layouts/template')

@section('titulo') Reservas @endsection

@section('conteudo')

    <section id="reservas">

        <link type="text/css" rel="stylesheet" href="/css/reservas.css" />
        
        <div class="row center center-align">

            @foreach ($reservas as $item)
                <div class="col l4 m12 s12" >
                    <div id="{{$item->nome}}" class="espaco card hoverable ">
                        <div class="card-image">
                            <img src='{{$item->foto}}' alt="Foto Espaço Gourmet">
                            <span class="card-title">{{$item->nome}}</span>
                        </div>
                        @if (Auth::user()->admin == 0)
                            <div class="card-content">
                                <p class="card-content">{{$item->descricao_1}}</p>
                                <a class="btn-floating waves-effect waves-light tooltipped"
                                    data-position="bottom" data-tooltip="ver mais" 
                                    href="/espacos/area/{{$item->nome}}">
                                    <i class="material-icons">more_horiz</i>
                                </a>
                            </div>
                        @endif
                        @if (Auth::user()->admin == 1)
                            <div class="card-content">
                                <p class="card-content">{{$item->descricao_1}}</p>
                                <a class="btn waves-effect waves-light tooltipped"
                                    data-position="bottom" data-tooltip="ver mais" 
                                    href="/espacos/area/{{$item->nome}}">
                                    <i class="material-icons">more_horiz</i>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

        @if (Auth::user()->admin == 0)
        <div class="row center center-align">
            {{-- MODAL DAS RESERVAS DO USUÁRIO --}}
            {{-- botão --}}
            <a class="waves-effect waves-light btn-floating modal-trigger tooltipped row"
                href="#modal2" data-position="top" data-tooltip="minhas reservas">
                <i class="material-icons">date_range</i>
            </a> 
        </div>
        @endif

        {{-- MODAL DAS RESERVAS DO USUÁRIO --}}
        @if (Auth::user()->admin == 0)
            {{-- modal --}}
            <div id="modal2" class="modal">
                <div class="modal-content row center center-align">
                    <H6 class="col s12">Minhas reservas</H6>
                    {{-- AQUI VAI A LISTA DE RESERVAS DO USUARIO LOGADO --}}
                    <div class="ativo card center black-text col s6">
                        <span>Churrasqueira</span>
                        <p>25/09/2020</p>
                        <a class="btn-floating btn-small waves-effect waves-light tooltipped"
                            data-position="bottom" data-tooltip="cancelar reserva">
                            <i class="material-icons">event_busy</i>
                        </a>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-action modal-close waves-effect btn-flat">
                        <i class="material-icons white-text">close</i>
                    </a>
                </div>
            </div>
        @endif

        {{-- MODAL PARA ADICIONAR ÁREA ADMIN--}}
        @if (Auth::user()->admin == 1)
            {{-- botão --}}
            <div class="row center center-align">
                <a class="btn-small waves-effect waves-light modal-trigger tooltipped" 
                    data-position="top" data-tooltip="criar área reservável" href="#modal1">
                    <i class="material-icons">add</i>
                </a>
            </div>
            {{-- modal --}}
            <div id="modal1" class="modal">
                <div class="modal-content">
                    <form action="" method="post">
                        @csrf

                        <div class="input-field col s12">
                            <input placeholder="Salão de festas" id="area" type="text" class="validate">
                            <label for="area">Nome da área (obrigatório)</label>
                        </div>
        
                        <div class="file-field input-field col s12">
                            <div class="btn">
                                <span><i class="material-icons">add_photo_alternate</i></span>
                                <input type="file" multiple name="uploads[]">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" 
                                placeholder="adicione aqui fotos do espaço">
                            </div>
                        </div>
        
                        <div class="input-field col s12">
                            <textarea id="descricao_1" class="materialize-textarea"></textarea>
                            <label for="descricao_1">Descrição (obrigatório)</label>
                        </div>
        
                        <div class="input-field col s12">
                            <textarea id="descricao_2" class="materialize-textarea"></textarea>
                            <label for="descricao_2">Descrição</label>
                        </div>
        
                        <div class="input-field col s12">
                            <textarea id="descricao_3" class="materialize-textarea"></textarea>
                            <label for="descricao_3">Descrição</label>
                        </div>
        
                        <div class="modal-footer col s12">
                            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">
                                Criar
                            </a>
                        </div>

                    </form>

                </div>
            </div>
        @endif
       
    </section>
    <script src="{{asset('/js/jQuery341.js')}}"></script>
    <script src="{{asset('/js/Reservas.js')}}"></script>
    
@endsection
