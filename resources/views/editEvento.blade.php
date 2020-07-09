@extends('layouts.template')

@section('titulo')
    Editar evento
@endsection

@section('conteudo')

    <main id="editEvento">

        <link type="text/css" rel="stylesheet" href="./css/addEvento.css" />

        <form id="addEvento" class="col s12">

            <div class="col s12 center">
                <h3>Editar evento</h3>
            </div>

            <div class="input-field col s12">
                <input placeholder="Celebração do condimínio" id="first_name" type="text" class="validate">
                <label for="first_name">Nome do evento</label>
            </div>

            <div class="col s12">
                <label placeholder="Clique aqui para escolher o dia do evento" id="dataevento">Data do evento</label>
                <input type="text" class="datepicker">
            </div>

            <div class="input-field col s12">
                <input placeholder="13h55" id="first_name" type="text" class="validate">
                <label for="first_name">Horário do evento</label>
            </div>

            <div class="input-field col s12">
                <label for="textarea1">Descrição</label>
                <textarea placeholder="Parágrafo" id="textarea1" class="materialize-textarea" data-length="300"></textarea>
                <textarea placeholder="Novo parágrafo" id="textarea1" class="materialize-textarea" data-length="300"></textarea>
                <textarea placeholder="Novo parágrafo" id="textarea1" class="materialize-textarea" data-length="300"></textarea>
            </div>

            <div class="file-field input-field">
                <div class="btn">
                  <span><i class="material-icons">add_photo_alternate</i></span>
                  <input type="file" multiple>
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text" placeholder="Adicione uma imagem interessante para seu evento">
                </div>
            </div>

            <button class="btn waves-effect waves-light" type="submit" name="action">Criar
                <i class="material-icons right">create</i>
            </button>
    
        </form>
    </main>

    <script src="{{ asset('/js/addEvento.js') }}"></script>
    
@endsection