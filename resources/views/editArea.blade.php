@extends('layouts.template')

@section('titulo') Editar {{ $area->nome }} @endsection

@section('conteudo')

    <link type="text/css" rel="stylesheet" href="css/editarea.css"/>

    <main id="editArea">

        <form action="/editarea/{{ $area->nome }}" id="editArea" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col s12 center">
                <h3>Editar {{ $area->nome }}</h3>
            </div>
    
            <div class="file-field input-field">
                <div class="btn">
                  <span><i class="material-icons">add_photo_alternate</i></span>
                  <input name="foto" type="file" multiple>
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text" placeholder="{{ $area->foto }}">
                </div>
            </div>

            <div class="input-field col s12">
                <input name="nome" value="{{ $area->nome }}" placeholder="{{ $area->nome }}" id="nome_area" type="text" class="validate">
                <label for="nome_area">Nome da área</label>
            </div>

            <div class="input-field col s12">
                <label for="textarea1">Descrição</label>
                <textarea name="descricao_1" placeholder="{{ $area->descricao_1 }}" value="{{ $area->descricao_1 }}" id="textarea1" class="materialize-textarea" data-length="300"></textarea>
                <textarea name="descricao_2" placeholder="{{ $area->descricao_2 }}" value="{{ $area->descricao_2 }}" id="textarea2" class="materialize-textarea" data-length="300"></textarea>
                <textarea name="descricao_3" placeholder="{{ $area->descricao_3 }}" value="{{ $area->descricao_3 }}" id="textarea3" class="materialize-textarea" data-length="300"></textarea>
            </div>

            <button class="btn waves-effect waves-light" type="submit" name="action">Editar
                <i class="material-icons right">create</i>
            </button>

        </form>
    </main>

@endsection