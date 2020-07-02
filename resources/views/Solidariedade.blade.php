
@extends('layouts.template')

@section('titulo') Solidariedade @endsection

@section('conteudo')
    <!-- Área de cards com as ações -->
    <div class="areadecards container-fluid row">

        <div class="col l4 m12 s12">
            <div class="card z-depth-2 hoverable">
                <span class="card-title">Doação de Sangue</span>
                <div class="card-image">
                    <img src="./img/doacao_sangue.png">
                </div>
                <div class="card-content hide-on-small-only">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis vel magnam quasi molestias, atque
                        eum porro. Veniam vitae illo odit pariatur, adipisci omnis natus quidem eos, repudiandae
                        assumenda recusandae commodi?</p>
                </div>
                <div class="card-action">
                    <a href="#">Saiba mais</a>
                </div>
            </div>
        </div>
        <div class="col l4 m12 s12">
            <div class="card z-depth-2 hoverable">
                <span class="card-title">Campanha de alimentos</span>
                <div class="card-image">
                    <img src="./img/campanha_alimentos.jpg">
                </div>
                <div class="card-content hide-on-small-only">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis vel magnam quasi molestias, atque
                        eum porro. Veniam vitae illo odit pariatur, adipisci omnis natus quidem eos, repudiandae
                        assumenda recusandae commodi?</p>
                </div>
                <div class="card-action">
                    <a href="#">Saiba mais</a>
                </div>
            </div>
        </div>
        <div class="col l4 m12 s12">
            <div class="card z-depth-2 hoverable">
                <span class="card-title">Campanha do agasalho</span>
                <div class="card-image">
                    <img src="./img/doacao_casacos.jpeg">
                </div>
                <div class="card-content hide-on-small-only">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis vel magnam quasi molestias, atque
                        eum porro. Veniam vitae illo odit pariatur, adipisci omnis natus quidem eos, repudiandae
                        assumenda recusandae commodi?</p>
                </div>
                <div class="card-action">
                    <a href="#">Saiba mais</a>
                </div>
            </div>
        </div>
        <div class="col l4 m12 s12">
            <div class="card z-depth-2 hoverable">
                <span class="card-title">Casa de Repouso</span>
                <div class="card-image">
                    <img src="./img/voluntarios.jpg">
                </div>
                <div class="card-content hide-on-small-only">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis vel magnam quasi molestias, atque
                        eum porro. Veniam vitae illo odit pariatur, adipisci omnis natus quidem eos, repudiandae
                        assumenda recusandae commodi?</p>
                </div>
                <div class="card-action">
                    <a href="#">Saiba mais</a>
                </div>
            </div>
        </div>
        <div class="col l4 m12 s12">
            <div class="card z-depth-2 hoverable">
                <span class="card-title">Bazar beneficente</span>
                <div class="card-image">
                    <img src="./img/bazar-beneficente.png">
                </div>
                <div class="card-content hide-on-small-only">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis vel magnam quasi molestias, atque
                        eum porro.</p>
                </div>
                <div class="card-action">
                    <a href="#">Saiba mais</a>
                </div>
            </div>
        </div>

    </div>
    <!-- Modal Trigger -->
    <a class="botaoanuncio modal-trigger btn-floating btn-large waves-effect waves-light" href="#modal1"><i
            class="material-icons">add</i></a>

    <!-- Modal Structure -->
    <div id="modal1" class="modal modal-fixed-footer">
        <div class="modal-content">

            <form class="container center col s12" action="" method="post" enctype="multipart/form-data">

                <p class="center">Divulgue uma nova ação voluntária</p>
                <!-- Título -->
                <div class="input-field col s12">
                    <input id="tituloanuncio" type="text" class="validate">
                    <label id="tituloanuncio" class="active" for="tituloanuncio">Título</label>
                </div>
                <!-- Descrição -->
                <div class="input-field col s12">
                    <textarea id="descricaoanuncio" class="materialize-textarea"></textarea>
                    <label id="descricaoanuncio" class="active" for="descricaoanuncio">Sobre a ação</label>
                </div>
                <!-- Link -->
                <div class="input-field col s12">
                    <input id="tituloanuncio" type="text" class="validate">
                    <label id="tituloanuncio" class="active" for="tituloanuncio">Link para maiores informações</label>
                </div>
                <!-- Botão para upload da imagem -->
                <div class="file-field input-field col s12">
                    <div class="btn">
                        <span><i class="material-icons">attach_file</i></span>
                        <input type="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
            </form>
        </div>

        <!-- Botão para criar o anúncio -->
        <div class="modal-footer  col s12">
            <a href="#" class="modal-close waves-effect btn-flat" type="submit" name="action">Divulgar ação</a>
        </div>
    </div>
</section>

@endsection
