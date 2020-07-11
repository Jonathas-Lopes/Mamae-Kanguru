@extends('layouts.template')

@section('titulo') Criar área reservável @endsection

@section('conteudo')

    <link type="text/css" rel="stylesheet" href="css/editarea.css"/>

    <main id="editArea">

        <form action="/addarea" id="editArea" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col s12 center">
                <h3>Criar área reservável</h3>
            </div>
    
            <div class="file-field input-field">
                <div class="btn">
                  <span><i class="material-icons">add_photo_alternate</i></span>
                  <input name="foto" type="file" multiple>
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text" placeholder="Adicionar imagem do espaço">
                </div>
            </div>

            <div class="input-field col s12">
                <input name="nome" placeholder="Salão de Festas Adulto" id="nome_area" type="text" class="validate">
                <label for="nome_area">Nome da área</label>
            </div>

            <div class="input-field col s12">
                <label for="textarea1">Descrição</label>
                <textarea name="descricao_1" placeholder="Adicionar parágrafo" id="textarea1" class="materialize-textarea" data-length="300"></textarea>
                <textarea name="descricao_2" placeholder="Adicionar novo parágrafo" id="textarea2" class="materialize-textarea" data-length="300"></textarea>
                <textarea name="descricao_3" placeholder="Adicionar novo parágrafo" id="textarea3" class="materialize-textarea" data-length="300"></textarea>
            </div>

            <button class="btn waves-effect waves-light" type="submit" name="action">Criar
                <i class="material-icons right">create</i>
            </button>

        </form>
    </main>

@endsection