@extends('layouts.template')

@section('titulo') Avisos @endsection

@section('conteudo')
<section id="avisos">

    <link type="text/css" rel="stylesheet" href="./css/avisos.css"/>

    <div class="container-fluid ">
        
        {{-- CARDS DE AVISO --}}
        @foreach ($avisos as $item)

            <div class="col l4 m12 s12">
                <div class="card z-depth-2 hoverable">
                    <div class="card-image">
                        <img src="{{$item->foto}}">
                        <span class="card-title">{{$item->titulo}}</span>
                    </div>
                    <div class="card-content">
                        <p>{{$item->descricao}}</p>
                    </div>
                </div>
            </div>
            
        @endforeach
        
        @if (Auth::user()->admin == 1)
            <!-- Modal Trigger -->
            <a class="botaoanuncio modal-trigger btn-floating btn-large 
                waves-effect waves-light" href="#modal1">
                <i class="material-icons">add</i>
            </a>
        @endif

        <!-- Modal Structure -->
        <div id="modal1" class="modal modal-fixed-footer">
            <div class="modal-content">

                <form class="center col s12" action="" method="post" enctype="multipart/form-data">

                    <div class="row">
                        <h5>Inserir aviso</h5>
                    </div>

                    <div class="row">
                        <!-- Título -->
                        <div class="input-field row">
                            <input id="tituloaviso" type="text" class="validate" name="titulo">
                            <label id="tituloaviso" class="active" for="tituloaviso">Título</label>
                        </div>
                    </div>
                    
                    <div class="row">
                        <!-- Descrição -->
                        <div class="input-field row">
                            <textarea id="descricaoaviso" class="materialize-textarea" name="descricao"></textarea>
                            <label id="descricaoaviso" class="active" for="descricaoaviso">Conteúdo do aviso</label>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Botão para upload da imagem -->
                        <div class="file-field input-field row">
                            <div class="btn">
                                <span><i class="material-icons">attach_file</i></span>
                                <input type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" name="foto">
                            </div>
                        </div>
                    </div>
                    
                </form>
            </div>

            <!-- Botão para criar o anúncio -->
            <div class="modal-footer  col s12">
                <button href="#" class="modal-close waves-effect btn-flat" 
                    type="submit" name="action">Divulgar ação
                </button>
            </div>
        </div>
    </div>
</section>
<script src="./js/jQuery341.js"></script>
<script src="./js/Avisos.js"></script>

@endsection