@extends('layouts.template')

@section('titulo') Editar {{ $area->nome }} @endsection

@section('conteudo')

    <link type="text/css" rel="stylesheet" href="css/editarea.css"/>

    <main id="editArea">

        <form action="" id="editArea">

            <div class="col s12 center">
                <h3>Editar área reservável</h3>
            </div>
    
            <div class="file-field input-field">
                <div class="btn">
                  <span><i class="material-icons">add_photo_alternate</i></span>
                  <input type="file" multiple>
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text" placeholder="Alterar foto da área reservável">
                </div>
            </div>

            <div class="input-field col s12">
                <input placeholder="Salão de Festas Adulto" id="first_name" type="text" class="validate">
                <label for="first_name">Nome da área</label>
            </div>

            <div class="input-field col s12">
                <label for="textarea1">Descrição</label>
                <textarea placeholder="Alterar descrição" id="textarea1" class="materialize-textarea" data-length="300"></textarea>
            </div>

            <button class="btn waves-effect waves-light" type="submit" name="action">Editar
                <i class="material-icons right">edit</i>
            </button>

            <button id="deletebtn" class="btn waves-effect waves-light" type="submit" name="action">Deletar área
                <i class="material-icons right">delete</i>
            </button>

        </form>
    </main>

@endsection