@extends('layouts.template')

@section('titulo') Editar usuário @endsection

@section('conteudo')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>    
    <link type="text/css" rel="stylesheet" href="./css/editarUsuario.css"/>

    <main id="editarUsuario" class="container">

        <div id="editarUsuario" class="col s12">

            <form class="col s12">

                <div class="col s12 center">
                    <h3>Editar usuário</h3>
                </div>

                <div class="file-field input-field">
                    <div class="btn">
                        <span><i class="material-icons">add_a_photo</i></span>
                        <input type="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>

                <div class="input-field col s12">
                <input placeholder="Nome completo" id="first_name" type="text" class="validate">
                </div>

                <div class="form-group">
                    <select class="form-control" id="sel1">
                        <option selected>Gênero</option>
                        <option>feminino</option>
                        <option>masculino</option>
                        <option>outro</option>
                    </select>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                      <input placeholder="E-mail" id="email" type="email" class="validate">
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                      <input placeholder="(99) 99999-9999" id="email" type="email" class="validate">
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                      <input placeholder="Senha" id="password" type="password" class="validate">
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                      <input placeholder="Confirme a sua senha" id="password" type="password" class="validate">
                    </div>
                </div>

                <button class="btn waves-effect waves-light" type="submit" name="action">Editar
                    <i class="material-icons right">edit</i>
                </button>
        

            </form>
        </div>
    </main>

@endsection