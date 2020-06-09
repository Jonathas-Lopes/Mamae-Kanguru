<section id="avisos">
<link type="text/css" rel="stylesheet" href="./css/avisos.css" />

    <!-- Área de cards com as ações -->
    <div class="container-fluid ">
        <div class="row cardsavisos">
            <div class="col l4 m12 s12">

                <div class="card z-depth-2 hoverable">
                    <span class="card-title">Reposição álcool gel</span>
                    <p class="card-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quam
                        eveniet
                        rem corrupti officia accusamus similique aspernatur repudiandae, perferendis assumenda incidunt
                        accusantium, consequatur nisi minima nulla, praesentium hic ea blanditiis.</p>
                </div>
            </div>
            <div class="col l4 m12 s12">
                <div class="card z-depth-2 hoverable">
                    <span class="card-title">Vagas de garagem</span>
                    <p class="card-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quam
                        eveniet
                        rem corrupti officia accusamus similique aspernatur repudiandae, perferendis assumenda incidunt
                        accusantium, consequatur nisi minima nulla, praesentium hic ea blanditiis.</p>
                </div>

            </div>

            <div class="col l4 m12 s12">
                <div class="card z-depth-2 hoverable">
                    <span class="card-title">Horários para reformas e mudanças</span>
                    <p class="card-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quam
                        eveniet
                        rem corrupti officia accusamus similique aspernatur repudiandae, perferendis assumenda incidunt
                        accusantium, consequatur nisi minima nulla, praesentium hic ea blanditiis.</p>
                </div>
            </div>
            <div class="col l4 m12 s12">
                <div class="card z-depth-2 hoverable">
                    <div class="card-image">
                        <img src="./img/leiturabiometrica.jpeg" alt="Foto leitura biométrica">
                        <span class="card-title">Biometria na portaria</span>
                    </div>
                    <div class="card-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, incidunt fugiat asperiores
                            laborum voluptatibus natus hic ullam dolor! Hic cupiditate doloremque inventore est cum ea
                            beatae fugit eos modi earum.</p>
                    </div>
                </div>
            </div>
            <div class="col l4 m12 s12">
                <div class="card z-depth-2 hoverable">
                    <div class="card-image">
                        <img src="./img/novafuncionaria.jpg" alt="Foto nova funcionária">
                        <span class="card-title">Nova funcionária</span>
                    </div>
                    <div class="card-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, incidunt fugiat asperiores
                            laborum voluptatibus natus hic ullam dolor! Hic cupiditate doloremque inventore est cum ea
                            beatae fugit eos modi earum.</p>
                    </div>
                </div>
            </div>

        </div>
        <!-- Modal Trigger -->
        <a class="botaoanuncio modal-trigger btn-floating btn-large waves-effect waves-light" href="#modal1"><i
                class="material-icons">add</i>
        </a>

        <!-- Modal Structure -->
        <div id="modal1" class="modal modal-fixed-footer">
            <div class="modal-content">

                <form class="container center col s12" action="" method="post" enctype="multipart/form-data">

                    <!-- Escolha do tipo de aviso -->
                    <p>
                        <label class="radious-buttons">
                            <input class="with-gap" name="group1" type="radio" />
                            <span>Aviso comum</span>
                        </label>
                        <label class="radious-buttons">
                            <input class="with-gap" name="group1" type="radio" />
                            <span>Em destaque</span>
                        </label>
                        <label class="radious-buttons">
                            <input class="with-gap" name="group1" type="radio" />
                            <span>Com imagem</span>
                        </label>
                    </p>

                    <!-- Título -->
                    <div class="input-field row">
                        <input id="tituloaviso" type="text" class="validate">
                        <label id="tituloaviso" class="active" for="tituloaviso">Título</label>
                    </div>

                    <!-- Descrição -->
                    <div class="input-field row">
                        <textarea id="descricaoaviso" class="materialize-textarea"></textarea>
                        <label id="descricaoaviso" class="active" for="descricaoaviso">Conteúdo do aviso</label>
                    </div>

                    <!-- Botão para upload da imagem -->
                    <div class="file-field input-field row">
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
    </div>
</section>
<script src="./js/jQuery341.js"></script>
<script src="./js/materialize.min.js"></script>
<script src="./js/Avisos.js"></script>