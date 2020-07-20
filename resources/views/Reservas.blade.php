@extends('layouts/template')

@section('titulo')
    Reservas
@endsection

@section('conteudo')

    <section id="reservas" >
            <link type="text/css" rel="stylesheet" href="/css/reservas.css" />
        
        <div class="row center center-align">

            @foreach ($reservas as $item)
                    
        
                <div class="col l4 m12 s12" >
                        <div id="{{$item->nome}}" class="espaco card hoverable ">
                            <div class="card-image">
                                <img src='{{$item->foto}}' alt="Foto Espaço Gourmet">
                                <span class="card-title">{{$item->nome}}</span>
                            </div>
                            <div class="card-content">
                                <p class="card-content">{{$item->descricao_1}}</p>
                                
                                <a class="waves-effect waves-light btn " href="/espacos/area/{{$item->nome}}">reservar</a>
                            </div>
                        </div>
                </div>
            @endforeach        
          
        </div>

        {{-- MODAL PARA ADICIONAR ÁREA --}}
        @if (Auth::user()->admin == 1)
            <div class="row center center-align">
                <a class="btn-floating btn-large waves-effect waves-light modal-trigger tooltipped" 
                    data-position="top" data-tooltip="criar área reservável" href="#modal1">
                    <i class="material-icons">add</i>
                </a>
            </div>
        @endif

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

       
    </section>
    <script src="./js/jQuery341.js"></script>
    <script src="./js/Reservas.js"></script>
@endsection
