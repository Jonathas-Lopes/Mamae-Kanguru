
@extends('layouts.template')

@section('titulo')
    Painel
@endsection


@section('conteudo')
    <section id="painel">
            <link type="text/css" rel="stylesheet" href="./css/painel.css" />
        <div class="container-fluid row">
            <!-- cards dos anúncios -->
            @foreach ($paineis as $item)
                <div class="col s12 m4 l4">
                    <div class="card-panel hoverable">
                        <div class="card-image">
                            <img src='{{$item->foto}}' alt="Foto da costureira de     máscaras caseiras">
                        <span class="card-title">{{$item->titulo}}</span>
                        </div>
                        <div class="card-content">
                            <p>{{$item->descricao}}</p>
                        </div>
                        <div class="card-action">
                            <p><a href="#">neusaandrade</a></p>
                            <a class="botaoresponder btn-floating btn waves-effect waves-light"><i
                                    class="tiny material-icons">send</i></a>
                        </div>
                    </div>
                </div>
            @endforeach
    
        </div>
    
        <!-- botão para inserção de um anúncio -->
        <!-- Modal Trigger -->
        <a class="botaoanuncio modal-trigger btn-floating btn-large waves-effect waves-light" href="#modal1"><i
                    class="material-icons">add</i>
            </a>
    
        <!-- Modal Structure -->
        <div id="modal1" class="modal modal-fixed-footer">
            <div class="modal-content">
    
                <form class="formpainel col s12" action="/Painel" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col">
    
                        <div>
                            <p>Coloque um título para o seu produto ou serviço, descreva-o com detalhes e capriche na foto.
                            </p>
                        </div>
    
                        <!-- Título -->
                        <div class="input-field">
                            <input id="tituloanuncio" name="titulo" value="titulo" type="text" class="validate">
                            <label id="tituloanuncio" class="active"  for="tituloanuncio">Título do anúncio</label>
                        </div>
    
                        <!-- Descrição -->
                        <div class="input-field">
                            <textarea id="descricaoanuncio" name="descricao"  class="materialize-textarea"></textarea>
                            <label id="descricaoanuncio" class="active" for="descricaoanuncio">Descrição do anúncio</label>
                        </div>
    
                        <!-- Upload da imagem -->
                        <div class="file-field input-field center-align">
                            <div id="botaoanuncio" class="waves-effect waves-light btn">
                                <span id="botaoanuncio">Imagem</span>
                                <input type="file" name="foto">
                            </div>
                        </div>
    
                        <!-- Botão criar -->
                        <div class="modal-footer">
                            <button href="#" type="submit" class="modal-close btn-flat">Criar anúncio</button>
                        </div>
    
                    </div>
    
                </form>
            </div>
    
        </div>
    
    </section>
    <script src="./js/jQuery341.js"></script>
    <script src="./js/Painel.js"></script>
        
@endsection