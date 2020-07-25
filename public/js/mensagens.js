var promise;

function carregarMensagens(){

    let headers = new Headers();

    promise = fetch('/home/mensagens', {
        method: 'GET',
        headers: headers
    }).then(
        function(response){
            return response.json();
        }
    ).then(
        function(mensagens){  
            exibirMensagens(mensagens);
        }
    )
}

function exibirMensagens(mensagens){
    let historico = document.getElementById("mensagens");
    historico.innerText = '';

    for(m of mensagens){
        criarMensagem(m);
    }
}

function criarMensagem(mensagem){
    let historico = document.getElementById("mensagens");

    // criar card
    let card = document.createElement('article');
    card.setAttribute('class', 'card');

    // criar hora da mensagem
    let hora = document.createElement('p');
    hora.setAttribute('id', 'hora');
    let horaDataEnvio = mensagem.hora_envio;
    horaDataEnvio = horaDataEnvio.split(' ');
    let dataEnvio = horaDataEnvio[0].split('-');
    let horaEnvio = horaDataEnvio[1].split(':');
    let horaMensagem = horaEnvio[0] + ':' + horaEnvio[1] + ' ' + dataEnvio[2] + '/' + dataEnvio[1] + '/' + dataEnvio[0];

    hora.append(horaMensagem);

    // criar informações usuario
    let h6 = document.createElement('h6');
    let img = document.createElement('img');
    img.setAttribute('class', 'circle');
    
    if(mensagem.foto != null){
        img.setAttribute('src', mensagem.foto);
    } else if(mensagem.foto == null && mensagem.genero == 'feminino'){
        img.setAttribute('src', './img/foto_moradora.jpg');
    } else {
        img.setAttribute('src', './img/foto_morador.jpg');
    }

    img.setAttribute('alt', 'Foto Perfil');
    let nomeUsuario = mensagem.nome;

    h6.append(img);
    h6.append(nomeUsuario);

    // criar texto da mensagem
    let textoMensagem = document.createElement('p');
    textoMensagem.innerText = mensagem.mensagem;

    // criar interfone
    let interfone = document.createElement('p');
    if(mensagem.telefone != null){
        interfone.setAttribute('class', 'interfone');
        interfone.innerText = "Interfone: " + mensagem.telefone;
    }
    

    // criar hashtag
    let hashtag = document.createElement('h5');
    if(mensagem.hashtag != null){
        hashtag.innerText = '#' + mensagem.hashtag;
    }
    
    // criar botão de excluir mensagem
    let cardMensagem = document.getElementById('mensagem-card');
    let nomeSideBar = document.getElementById('nome-usuario');
    let botaoExcluirMensagem = document.createElement('a');

    if(cardMensagem == null || nomeSideBar.innerText == mensagem.nome){ 
        botaoExcluirMensagem.className = "botaoresponder btn-floating btn waves-effect waves-light";
        botaoExcluirMensagem.setAttribute('href', 'home/mensagem/' + mensagem.id);

        let icone = document.createElement('i');
        icone.className = 'material-icons botao-excluir';
        icone.setAttribute('value', mensagem.id);
        icone.innerText = 'delete';

        botaoExcluirMensagem.append(icone);
    }
    

    // adicionar elementos no card
    card.append(hora);
    card.append(h6);
    card.append(textoMensagem);
    if(mensagem.telefone != null){
        card.append(interfone);
    }
    if(mensagem.hashtag != null){
        card.append(hashtag);
    }
    if(botaoExcluirMensagem != null){
        card.append(botaoExcluirMensagem);
    }

    // adicionar card no histórico
    historico.append(card);
}

function filtrarMensagens(hashtag){

    let headers = new Headers();

    fetch('/home/mensagens/' + hashtag, {
        method: 'GET',
        headers: headers
    }).then(
        function(response){
            return response.json();
        }
    ).then(
        function(mensagens){
            console.log(mensagens);
            exibirMensagens(mensagens);
        }
    )
}

if(document.getElementById('procuro') != null){
   let botaoProcuro = document.getElementById('procuro');
    let botaoOfereco = document.getElementById('ofereço');
    let botaoAviso = document.getElementById('aviso');

    botaoProcuro.onclick = function(evt){
        filtrarMensagens(botaoProcuro.id);
    }

    botaoOfereco.onclick = function(evt){
            filtrarMensagens(botaoOfereco.id);
        }

    botaoAviso.onclick = function(evt){
            filtrarMensagens(botaoAviso.id);
        }

    carregarMensagens(); 
} else {
    carregarMensagens();
}

function excluirMensagem(id){

    let headers = new Headers();

    fetch('/home/mensagem/' + id, {
        method: 'DELETE',
        headers: headers
    }).then(
        function(response){
            return response.json();
        }
    ).then(
        function(mensagens){
            exibirMensagens(mensagens);
        }
    )
}

// document.onload = function(evt){
//     if(document.querySelectorAll('.botao-excluir')){
//         let botoesExcluir = document.querySelectorAll('.botao-excluir');
//         console.log(botoesExcluir);
//         let listaBotoes = Array.from(botoesExcluir);

//         botoesExcluir.forEach(element => console.log(element) );
//         console.log(listaBotoes);
//     }
// }

