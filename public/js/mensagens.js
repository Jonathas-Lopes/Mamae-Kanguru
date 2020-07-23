function carregarMensagens(){

    let headers = new Headers();

    fetch('/home/mensagens', {
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

carregarMensagens();

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
    let horaMensagem = mensagem.hora_envio;
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
    interfone.setAttribute('class', 'interfone');
    interfone.innerText = "Interfone: " + mensagem.telefone;

    // criar hashtag
    let hashtag = document.createElement('h5');
    if(mensagem.hashtag != null){
        hashtag.innerText = '#' + mensagem.hashtag;
    }
    
    // criar botão de enviar mensagem
    let botaoEnviarMensagem = document.createElement('a');
    botaoEnviarMensagem.className = "botaoresponder btn-floating btn waves-effect waves-light";

    let icone = document.createElement('i');
    icone.setAttribute('class', 'material-icons');
    icone.innerText = 'reply';

    botaoEnviarMensagem.append(icone);

    // adicionar elementos no card
    card.append(hora);
    card.append(h6);
    card.append(textoMensagem);
    card.append(interfone);
    if(mensagem.hashtag != null){
        card.append(hashtag);
    }
    card.append(botaoEnviarMensagem);

    // adicionar card no histórico
    historico.append(card);
}