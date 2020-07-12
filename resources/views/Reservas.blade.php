@extends('layouts/template')

@section('titulo')
    Reservas
@endsection

@section('conteudo')

    <section id="reservas" >
            <link type="text/css" rel="stylesheet" href="./css/reservas.css" />
        
        <div class=" row center  center-align ">

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
       
    </section>
    <script src="./js/jQuery341.js"></script>
    <script src="./js/Reservas.js"></script>
@endsection
