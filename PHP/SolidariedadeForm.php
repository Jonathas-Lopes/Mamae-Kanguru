<form class="container center col s12" action="" method="get" enctype="multipart/form-data">

    <h4 class="center">Divulgue uma nova ação voluntária</h4>
    <!-- Título -->
    <div class="input-field col s6">
        <input id="tituloanuncio" type="text" class="validate">
        <label id="tituloanuncio" class="active" for="tituloanuncio">Título</label>
    </div>
    <!-- Descrição -->
    <div class="input-field col s12">
        <textarea id="descricaoanuncio" class="materialize-textarea"></textarea>
        <label id="descricaoanuncio" class="active" for="descricaoanuncio">Sobre a ação</label>
    </div>
    <!-- Link -->
    <div class="input-field col s6">
        <input id="tituloanuncio" type="text" class="validate">
        <label id="tituloanuncio" class="active" for="tituloanuncio">Link para maiores informações</label>
    </div>
    <!-- Botão para upload da imagem -->
    <form id="botaoanexo" action="#">
        <div class="file-field input-field">
            <div class="btn">
                <span><i class="material-icons">attach_file</i></span>
                <input type="file">
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
            </div>
        </div>
    </form>
    <!-- Botão de submit -->
    <button class="botaoenviar btn waves-effect waves-light" type="submit" name="action">Enviar
        <i class="material-icons right">send</i>
    </button>

</form>