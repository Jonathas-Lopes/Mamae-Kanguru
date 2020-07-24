@extends('layouts.template')

@section('titulo') Painel @endsection

@section('conteudo')

    <link type="text/css" rel="stylesheet" href="/css/painel.css" />

    <section id="painel">
            
        <div class="container-fluid">

            <div class="row">
                @foreach ($paineis as $item)
                    <div class="col s12 m12 l4">
                        <div class="card-panel hoverable">
                            <div  class="card-image">
                                <img src='{{$item->foto}}'>
                                <h5 name="{{$item->id}}titulo" @if (Auth::user()->nome == $item->nome) contenteditable="true" @endif class="card-title editavel">{{$item->titulo}}</h5>
                            </div>
                            <div class="card-content">
                                <p name="{{$item->id}}descricao" @if (Auth::user()->nome == $item->nome) contenteditable="true" @endif>{{$item->descricao}}</p>
                            </div>
                            <div class="card-action">
                                 <p>{{ $item->nome }}</p>
                                
                                @if (Auth::user()->admin == 0)
                                    @if (Auth::user()->nome == $item->nome)
                                     <a name={{$item->id}} class="edit btn-floating btn waves-effect waves-light"><i
                                        class="tiny material-icons">edit</i>
                                    </a> 
                                    <a name={{$item->id}} class="delete btn-floating btn waves-effect waves-light"><i
                                        class="tiny material-icons">delete</i>
                                    </a>
                                    @else
                                        <a class="botaoresponder btn-floating btn waves-effect waves-light"><i
                                            class="tiny material-icons">send</i>
                                        </a>
                                    @endif
                                @endif

                                @if (Auth::user()->admin == 1)
                                    <a name={{$item->id}} class="delete btn-floating btn waves-effect waves-light"><i
                                        class="tiny material-icons">delete</i>
                                    </a>
                                @endif

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
          @if (Auth::user()->admin == 0)
             <!-- Modal para inserção de cards -->
             <a class="botaoanuncio modal-trigger btn-floating btn-large waves-effect" href="#modal1"><i
                class="material-icons">add</i>
             </a>
          @endif
        </div>
    
        
    
        <!-- Modal Structure -->
        @if (Auth::user()->admin == 0)
         <div id="modal1" class="modal modal-fixed-footer modalPainel">
            <div class="modal-content">
    
                <form class="col s12" action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col">
    
                        <div>
                            <h6>Coloque um título para o seu produto ou serviço, descreva-o com detalhes e capriche na foto.
                            </h6>
                        </div>
    
                        <!-- Título -->
                        <div class="input-field">
                            <input id="tituloanuncio" name="titulo" type="text" class="validate">
                            <label class="active"  for="tituloanuncio">Título do anúncio</label>
                        </div>
    
                        <!-- Descrição -->
                        <div class="input-field">
                            <textarea id="descricaoanuncio" name="descricao"  class="materialize-textarea"></textarea>
                            <label class="active" for="descricaoanuncio">Descrição do anúncio</label>
                        </div>
    
                        <!-- Upload da imagem -->
                        <div class="file-field input-field center-align">
                            <div class="btn">
                              <span><i class="material-icons">
                                add_photo_alternate</i></span>
                              <input type="file" multiple name="foto">
                            </div>
                            <div class="file-path-wrapper">
                              <input class="file-path validate" type="text" placeholder="adicione uma imagem para o seu anúncio">
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
        @endif
    </section>

    <script src="{{asset('/js/jQuery341.js')}}"></script>
    <script src="{{asset('/js/Painel.js')}}"></script>
        
@endsection