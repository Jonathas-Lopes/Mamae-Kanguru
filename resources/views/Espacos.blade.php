@extends('layouts.template')

@section('titulo') Reservas @endsection

@section('conteudo')

    <link type="text/css" rel="stylesheet" href="/css/espacos.css"/>

    <main id="areasReservas" class="row center">

        {{-- carousel de imagens --}}
        <div class="col s12">
            <div class="carousel">
                
                <a class="carousel-item">
                    <img src="/file/img/condominio_churrasqueira.jpg">
                </a>
                <a class="carousel-item">
                    <img src="/file/img/condominio_churrasqueira1.jpg">
                </a>
                <a class="carousel-item">
                    <img src="/file/img/condominio_churrasqueira2.jpg">
                </a>
                
            </div>
        </div>

        @if (Auth::user()->admin == 1)
           {{-- BOTÃO PARA ADICIONAR FOTOS NA AREA --}}
            <div class="file-field input-field row center">
                <a class="btn waves-effect white grey-text darken-text-2 tooltipped"
                    data-position="top" data-tooltip="adicionar foto">
                    <i class="material-icons">add_photo_alternate</i>
                    <input type="file" multiple name="uploads[]">
                </a>
            </div> 
        @endif

        @foreach ($espaco as $item)

            {{-- nome da área --}}
            <div class="col s12">
                <h3 class="center-align">{{$item->nome}}</h3>
            </div>

            {{-- agenda / date picker --}}
            <form method="POST" enctype="multipart/form-data" action="/espacos/agenda">
                    @csrf
                <div class="col s12">
                    <input name="data" placeholder="clique aqui para verificar a disponibilidade" type="date" class="">
                </div>
                <div class="col s12">
                    <input name="descricao" placeholder="coloque uma descrição breve" type="text" class="">
                </div>
                <input name="usuario_id" value="{{ Auth::user()->id }}" type="hidden">
                <input name="area_id" value="{{$item->id}}" type="hidden">
                {{-- botão reservar --}}
                @if (Auth::user()->admin == 1)
                <div class="col s12">
                    <button type="submit" class="btn waves-effect tooltipped"
                        data-position="top" data-tooltip="reservar">
                        <i class="material-icons">event_available</i>
                    </button>
                </div>   
                @endif
                @if (Auth::user()->admin == 0)
                <div class="col s12">
                    <button type="submit" class="btn-floating waves-effect btn-large tooltipped"
                        data-position="top" data-tooltip="reservar">
                        <i class="material-icons">event_available</i>
                    </button>
                </div>   
                @endif
            </form>

            {{-- descrição --}}
            <div class="card white col s12 center-align">
                <h5 class="card-title">Sobre o espaço</h5>
                
                <p>{{$item->descricao_1}}</p>
                <p>{{$item->descricao_2}}</p>
                <p>{{$item->descricao_3}}</p>
            
            </div>

        @endforeach

        
        {{-- Tag PADRÃO  DE TODOS OS ESPAÇOS - Regras de Utilização --}}
        <div class="card white col s12 center-align">
            <h5 class="card-title">Regras de Utilização</h5>
            <p class="card-content">As Regras de Utilização vêm para auxiliar no bom funcionamento e manutenção do espaço e no bom relacionamento com os demais condôminos.</p>
            <p class="card-content">Por favor, antes de reservar, fique ciente e certifique-se de que você poderá cumprir as Regras de Utilização durante todo o período da sua reserva.</p>
            <ol class="card-content">
                <li>Os espaços só poderão ser reservados pelos moradores, que se responsabilizarão pelo bom uso, manutenção do local e eventuais danos a propriedade.</li>
                <li>Ao retirar e entregar as chaves do espaço na portaria, o morador responsável da unidade deve assinar o livro de reservas na portaria.</li>
                <li>Enviar lista de convidados com nomes completos até 24 horas antes do evento. Informe aos seus convidados que eles deverão apresentar o documento de  identidade na portaria antes de ingressar no condomínio.</li>
                <li>O  mesmo vale para prestadores de serviço que trabalharão na montagem/desmontagem ou durante o evento: uma lista deve ser enviada com os nomes completos e os mesmos deverão se identificar na portaria com um documento de  identidade.</li>
                <li>Durante o evento, os convidados não podem  utilizar outros espaços de lazer do condomínio que não façam  parte da área locada, como quadra, sauna, academia, entre outros.</li>
                <li>De acordo com as  normas vigentes do condomínio e lei municipal, não é permitida qualquer atividade que produza barulho excessivo ou que perturbe o sossego dos moradores antes das 8h00 e após às 22h00 (ou 23h00 aos sábados). Sendo assim, é vetado o uso de aparelhos de som fora do horário permitido.</li>
                <li>Em caso de perturbação do silêncio e da ordem, o evento deve ser encerrado imediatamente e as devidas providências serão tomadas com base em votação extraordinária em assembléia.</li>
                <li>Caso haja eventos agendados no dia seguinte, ao final do evento, o local deve ser entregue limpo e o lixo deve ser retirado das lixeiras do espaço. Se informe com  a portaria sobre a agenda.</li>
            </ol> 
        </div>

        {{-- Tag PADRÃO  DE TODOS OS ESPAÇOS - Manual de Boas Práticas --}}
        <div class="card white col s12 center-align">
            <h5 class="card-title">Manual de Boas Práticas</h5>
            <p class="card-content">Esse Manual foi elaborado para garantir que o seu evento seja bem sucedido e ocorra da melhor maneira possível. Essas regras não são obrigatória, mas somente uma sugestão.</p>
            <p class="card-content">Mas, lembramos que o morador da unidade que reservou o espaço será responsabilizado por eventuais ocorrências de qualquer natureza.</p>
            <p class="card-content">Sendo assim, as boas práticas recomendadas são:</p>
            <ol class="card-content">
                <li>Se ao entrar no espaço pela primeira vez, antes do seu evento, e notar algum dano ao espaço ou aos itens que fazem parte do mesmo, notifique imediatamente o porteiro para evitar problemas futuros.</li>
                <li>Para eventos com  mais de 70 pessoas, recomendamos a contratação de um agente de segurança particular, que assegurará que as Regras de Utilização sejam cumpridas por todos os convidados, bem como zelará pela segurança em geral. Lembramos também que cada espaço possui uma capacidade  máxima de lotação. Por favor, respeite-a para evitar problemas graves durante o seu evento.</li>
                <li>Para evitar acidentes, recomendamos que evite usar utensílios de materiais que, ao quebrarem, sejam cortantes, como o vidro.</li>
                <li>Também recomendamos que usem bebidas em latas ou garrafas de plástico ao invés de vidro, pelo motivo exposto anteriormente.</li>
                <li>Depois das 22 horas (23 aos sábados), peça para os seus convidados para permanecerem nas áreas fechadas do espaço. Assim não incomodará os vizinhos que querem descansar e evitará situações desconfortáveis ou até a interrupção do seu evento.</li>
                <li>Não incentive seus convidados a trazerem os seus bichinhos de estimação para o evento. Tendo em vista que eles podem se assustar com a quantidade de pessoas, ter atitudes agressivas pelo excesso de barulho ou danificar os móveis do salão.</li>
            </ol>
        </div>
        <script src="{{asset('/js/jQuery341.js')}}"></script>
        <script src="{{asset('/js/Reservas.js')}}"></script>

    </main>

@endsection