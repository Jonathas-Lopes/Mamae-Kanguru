<section id="painel">
<link type="text/css" rel="stylesheet" href="./css/painel.css">
    <div class="row container-fluid">

        <!-- cards dos anúncios -->
        <div class="col s12 m4 l4">
            <div class="card-panel hoverable">
                <div class="card-image">
                    <img src="./img/mascarasCaseiras.jpg" alt="Foto da costureira de máscaras caseiras">
                    <span class="card-title">Máscaras caseiras</span>
                </div>
                <div class="card-content">
                    <p>Facere amet, minima veniam porro quod adipisci? Libero, nisi quia blanditiis maiores beatae
                        dolore saepe omnis repellat. Necessitatibus temporibus reiciendis veritatis sequi.</p>
                </div>
                <div class="card-action">
                    <p><a href="#">@neusaandrade</a></p>
                    <a class="botaoresponder btn-floating btn waves-effect waves-light"><i
                            class="tiny material-icons">send</i></a>
                </div>
            </div>
        </div>

        <div class="col s12 m4 l4">
            <div class="card-panel hoverable">
                <div class="card-image">
                    <img src="./img/pizzaria.jpg" alt="Foto da Promoção da pizzaria">
                    <span class="card-title">Babbo Pizzeria</span>
                </div>
                <div class="card-content">
                    <p>Necessitatibus temporibus reiciendis veritatis sequi.</p>
                </div>
                <div class="card-action">
                    <p><a href="#">@moderador</a></p>
                    <a class="botaoresponder btn-floating btn waves-effect waves-light"><i
                            class="tiny material-icons">send</i></a>
                </div>
            </div>
        </div>

        <div class="col s12 m4 l4">
            <div class="card-panel hoverable">
                <div class="card-image">
                    <img src="./img/marmitas.jpg" alt="Foto da marmita">
                    <span class="card-title">Marmitas</span>
                </div>
                <div class="card-content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere amet, minima veniam porro quod
                        adipisci? Libero, nisi quia blanditiis maiores beatae dolore saepe omnis repellat.
                        Necessitatibus temporibus reiciendis veritatis sequi.</p>
                </div>
                <div class="card-action">
                    <p><a href="#">@claudioramalho</a></p>
                    <a class="botaoresponder btn-floating btn waves-effect waves-light"><i
                            class="tiny material-icons">send</i></a>
                </div>
            </div>
        </div>

        <div class="col s12 m4 l4">
            <div class="card-panel hoverable">
                <div class="card-image">
                    <img src="./img/carroUsado.jpg" alt="Foto do carro a venda">
                    <span class="card-title">Jeep Renegade 2019</span>
                </div>
                <div class="card-content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere amet, minima veniam porro quod
                        adipisci? Libero, nisi quia blanditiis maiores beatae dolore saepe omnis repellat.
                        Necessitatibus temporibus reiciendis veritatis sequi.</p>
                </div>
                <div class="card-action">
                    <p><a href="#">@amandasilva</a></p>
                    <a class="botaoresponder btn-floating btn waves-effect waves-light"><i
                            class="tiny material-icons">send</i></a>
                </div>
            </div>
        </div>

        <div class="col s12 m4 l4">
            <div class="card-panel hoverable">
                <div class="card-image">
                    <img src="./img/docinhos.jpg" alt="Foto dos docinhos para festa">
                    <span class="card-title">Docinhos</span>
                </div>
                <div class="card-content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere amet, minima veniam porro quod
                        adipisci? Libero, nisi quia blanditiis maiores beatae dolore saepe omnis repellat.
                        Necessitatibus temporibus reiciendis veritatis sequi.</p>
                </div>
                <div class="card-action">
                    <p><a href="#">@diananogueira</a></p>
                    <a class="botaoresponder btn-floating btn waves-effect waves-light"><i
                            class="tiny material-icons">send</i></a>
                </div>
            </div>
        </div>

        <div class="col s12 m4 l4">
            <div class="card-panel hoverable">
                <div class="card-image">
                    <img src="./img/cadeiraGamerUsada.jpg" alt="Foto da cadeira usada">
                    <span class="card-title">Cadeira Gamer Usada</span>
                </div>
                <div class="card-content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere amet, minima veniam porro quod
                        adipisci? Libero, nisi quia blanditiis maiores beatae dolore saepe omnis repellat.
                        Necessitatibus temporibus reiciendis veritatis sequi.</p>
                </div>
                <div class="card-action">
                    <p><a href="#">@juniormarcondes</a></p>
                    <a class="botaoresponder btn-floating btn waves-effect waves-light"><i
                            class="tiny material-icons">send</i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- botão para inserção de um anúncio -->
    <!-- Modal Trigger -->
    <a class="botaoanuncio modal-trigger btn-floating btn-large waves-effect waves-light" href="#modal1"><i
                class="material-icons">add</i>
        </a>

    <!-- Modal Structure -->
    <div id="modal1" class="modal modal-fixed-footer">
        <div class="modal-content">

            <form class="formpainel col s12" action="" method="post" enctype="multipart/form-data">

                <div class="col">

                    <div>
                        <p>Coloque um título para o seu produto ou serviço, descreva-o com detalhes e capriche na foto.
                        </p>
                    </div>

                    <!-- Título -->
                    <div class="input-field">
                        <input id="tituloanuncio" type="text" class="validate">
                        <label id="tituloanuncio" class="active" for="tituloanuncio">Título do anúncio</label>
                    </div>

                    <!-- Descrição -->
                    <div class="input-field">
                        <textarea id="descricaoanuncio" class="materialize-textarea"></textarea>
                        <label id="descricaoanuncio" class="active" for="descricaoanuncio">Descrição do anúncio</label>
                    </div>

                    <!-- Upload da imagem -->
                    <div class="file-field input-field center-align">
                        <div id="botaoanuncio" class="waves-effect waves-light btn">
                            <span id="botaoanuncio">Imagem</span>
                            <input type="file">
                        </div>
                    </div>

                    <!-- Botão criar -->
                    <div class="modal-footer">
                        <a href="#" class="modal-close btn-flat">Criar anúncio</a>
                    </div>

                </div>

            </form>
        </div>

    </div>

</section>

<script src="./js/jQuery341.js"></script>
<script src="./js/materialize.min.js"></script>
<script src="./js/Painel.js"></script>