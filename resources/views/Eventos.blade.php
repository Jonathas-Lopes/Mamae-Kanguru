@extends('layouts.template')

@section('titulo')
    Eventos
@endsection

@section('conteudo')
    <main id="eventos">

        <link type="text/css" rel="stylesheet" href="./css/eventos.css" />

        <div class="carousel carousel-slider center" data-indicators="true">

            <div class="carousel-item indigo darken-4 white-text">
                {{-- Título evento --}}
                <h4 class="white-text">Churrasco de Dia dos Pais</h4>
                {{-- Data do evento --}}
                <h5>08/08/2020 - sábado</h5>
                {{-- Horário do evento --}}
                <h5>A partir das 11h00</h5>
                {{-- Descrição do evento --}}
                <p class="white-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate asperiores exercitationem nihil facilis! Assumenda suscipit veritatis aspernatur distinctio, voluptatem ullam molestiae tempora voluptatum dignissimos consequatur debitis rerum asperiores consequuntur possimus!</p>
                <p class="white-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate asperiores exercitationem nihil facilis! Assumenda suscipit veritatis aspernatur distinctio, voluptatem ullam molestiae tempora voluptatum dignissimos consequatur debitis rerum asperiores consequuntur possimus!</p>
                <p class="white-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate asperiores exercitationem nihil facilis! Assumenda suscipit veritatis aspernatur distinctio, voluptatem ullam molestiae tempora voluptatum dignissimos consequatur debitis rerum asperiores consequuntur possimus!</p>
                @if (Auth::user()->admin == 1)
                    {{-- Botões do administrador --}}
                    <a class="editarbtn btn-floating btn-large waves-effect"><i class="material-icons">edit</i></a>
                    <a class="deletarbtn btn-floating btn-large waves-effect"><i class="material-icons">remove</i></a>
                @else
                    {{-- Botão do usuário --}}
                    <a class="confirmarbtn waves-effect waves-light btn">confirmar presença</a>
                @endif
            </div>

            <div class="carousel-item green darken-4 white-text">
                {{-- Título evento --}}
                <h4 class="white-text">Dias das Crianças</h4>
                {{-- Data do evento --}}
                <h5>11/10/2020 - domingo</h5>
                {{-- Horário do evento --}}
                <h5>A partir das 10h00</h5>
                {{-- Descrição do evento --}}
                <p class="white-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate asperiores exercitationem nihil facilis! Assumenda suscipit veritatis aspernatur distinctio, voluptatem ullam molestiae tempora voluptatum dignissimos consequatur debitis rerum asperiores consequuntur possimus!</p>
                <p class="white-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate asperiores exercitationem nihil facilis! Assumenda suscipit veritatis aspernatur distinctio, voluptatem ullam molestiae tempora voluptatum dignissimos consequatur debitis rerum asperiores consequuntur possimus!</p>
                <p class="white-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate asperiores exercitationem nihil facilis! Assumenda suscipit veritatis aspernatur distinctio, voluptatem ullam molestiae tempora voluptatum dignissimos consequatur debitis rerum asperiores consequuntur possimus!</p>
                @if (Auth::user()->admin == 1)
                    {{-- Botões do administrador --}}
                    <a class="editarbtn btn-floating btn-large waves-effect"><i class="material-icons">edit</i></a>
                    <a class="deletarbtn btn-floating btn-large waves-effect"><i class="material-icons">remove</i></a>
                @else
                    {{-- Botão do usuário --}}
                    <a class="confirmarbtn waves-effect waves-light btn">confirmar presença</a>
                @endif
            </div>
            
            <div class="carousel-item orange darken-4 white-text">
                {{-- Título evento --}}
                <h4 class="white-text">Dias das Bruxas</h4>
                {{-- Data do evento --}}
                <h5>31/10/2020 - sábado</h5>
                {{-- Horário do evento --}}
                <h5>A partir das 18h00</h5>
                {{-- Descrição do evento --}}
                <p class="white-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate asperiores exercitationem nihil facilis! Assumenda suscipit veritatis aspernatur distinctio, voluptatem ullam molestiae tempora voluptatum dignissimos consequatur debitis rerum asperiores consequuntur possimus!</p>
                <p class="white-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate asperiores exercitationem nihil facilis! Assumenda suscipit veritatis aspernatur distinctio, voluptatem ullam molestiae tempora voluptatum dignissimos consequatur debitis rerum asperiores consequuntur possimus!</p>
                <p class="white-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate asperiores exercitationem nihil facilis! Assumenda suscipit veritatis aspernatur distinctio, voluptatem ullam molestiae tempora voluptatum dignissimos consequatur debitis rerum asperiores consequuntur possimus!</p>
                @if (Auth::user()->admin == 1)
                    {{-- Botões do administrador --}}
                    <a class="editarbtn btn-floating btn-large waves-effect"><i class="material-icons">edit</i></a>
                    <a class="deletarbtn btn-floating btn-large waves-effect"><i class="material-icons">remove</i></a>
                @else
                    {{-- Botão do usuário --}}
                    <a class="confirmarbtn waves-effect waves-light btn">confirmar presença</a>
                @endif
            </div>

            <div class="carousel-item red darken-4 white-text">
                {{-- Título evento --}}
                <h4 class="white-text">Sorteio do Salão (Natal e Ano Novo)</h4>
                {{-- Data do evento --}}
                <h5>01/11/2020 - domingo</h5>
                {{-- Horário do evento --}}
                <h5>A partir das 20h00</h5>
                {{-- Descrição do evento --}}
                <p class="white-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate asperiores exercitationem nihil facilis! Assumenda suscipit veritatis aspernatur distinctio, voluptatem ullam molestiae tempora voluptatum dignissimos consequatur debitis rerum asperiores consequuntur possimus!</p>
                <p class="white-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate asperiores exercitationem nihil facilis! Assumenda suscipit veritatis aspernatur distinctio, voluptatem ullam molestiae tempora voluptatum dignissimos consequatur debitis rerum asperiores consequuntur possimus!</p>
                <p class="white-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate asperiores exercitationem nihil facilis! Assumenda suscipit veritatis aspernatur distinctio, voluptatem ullam molestiae tempora voluptatum dignissimos consequatur debitis rerum asperiores consequuntur possimus!</p>
                @if (Auth::user()->admin == 1)
                    {{-- Botões do administrador --}}
                    <a class="editarbtn btn-floating btn-large waves-effect"><i class="material-icons">edit</i></a>
                    <a class="deletarbtn btn-floating btn-large waves-effect"><i class="material-icons">remove</i></a>
                @else
                    {{-- Botão do usuário --}}
                    <a class="confirmarbtn waves-effect waves-light btn">confirmar presença</a>
                @endif
            </div>
        </div>

        <div class="galeriaeventos center container col s12">
            
            <h4 class="header">Galeria de fotos dos eventos</h4>

            @if (Auth::user()->admin == 1)
                {{-- BOTÃO ADMINISTRADOR - ADICIONAR GALERIA DE FOTOS --}}
                <div>
                    <a class="btnaddgaleria waves-effect waves-light btn">adicionar nova galeria</a>
                </div>
            @else
                <!-- Dropdown Trigger -->
                <a class='dropdown-trigger btn' href='#' data-target='dropdown1'>Escolha o evento</a>
                <!-- Dropdown Structure -->
                <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="#!">Festa de Volta às Aulas 2020</a></li>
                    <li><a href="#!">Festa de Natal 2019</a></li>
                    <li><a href="#!">Churrasco Dia das Mães 2020</a></li>
                </ul>
            @endif
        </div>

        </main>
        <script src="./js/jQuery341.js"></script>
        <script src="./js/Eventos.js"></script>
        
@endsection
