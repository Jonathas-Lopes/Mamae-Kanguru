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