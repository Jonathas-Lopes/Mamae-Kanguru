@extends('layouts.template')

@section('titulo') Editar aviso @endsection

@section('conteudo')

    <link rel="stylesheet" href="../css/editAviso.css">

    <main id="editAviso" class="center">

        <form action="" id="editAviso" class="container">

            <div class="center-align row">
                <h5>Editar aviso</h5>
            </div>

            <div class="input-field row">
                <input placeholder="Título do aviso" id="first_name" type="text" class="validate">
                <label for="first_name">Título do aviso</label>
            </div>
    
            <div class="input-field row">
                <textarea placeholder="Conteúdo do aviso" id="textarea1" class="materialize-textarea"></textarea>
                <label for="textarea1">Conteúdo do aviso</label>
            </div>

            <div class="file-field input-field row">
                <div class="btn">
                  <span><i class="material-icons">add_a_photo</i></span>
                  <input type="file" multiple>
                </div>
                <div class="file-path-wrapper">
                  <input placeholder="Insira aqui uma imagem" class="file-path validate" type="text" placeholder="Upload one or more files">
                </div>
            </div>

            <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">add</i></a>
    
        </form>

    </main>

    <script src="../js/jQuery341.js"></script>
    <script src="../js/materialize.min.js"></script>
    <script src="../js/editAviso.js"></script>

@endsection