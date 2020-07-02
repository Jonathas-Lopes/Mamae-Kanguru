@extends('layouts.template')

@section('titulo')
    Eventos
@endsection

@section('conteudo')
    <section id="eventos">
        <link type="text/css" rel="stylesheet" href="./css/eventos.css" />

            <div class="eventodestaque container col s12 m7">
                <h2 class="header">Próximos eventos</h2>
                <div class="card horizontal">
                    <div class="card-image">
                        <img src="./img/festa-junina.jpg" alt="Foto Festa Junina">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <span class="card-title">Festa Junina 2020</span>
                            <h6>28/06</h5>
                            <h6>A partir das 11h00</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, commodi tenetur. Corporis accusamus ratione eligendi ipsa aliquam ut, voluptas, deleniti dignissimos veritatis libero laborum aspernatur necessitatibus minima. Sapiente, ipsum dolorum.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="galeriaeventos center container col s12 m7">
                <h2 class="header">Galeria de fotos dos eventos</h2>
                <!-- Dropdown Trigger -->
                <a class='dropdown-trigger btn' href='#' data-target='dropdown1'>Escolha o evento</a>

                <!-- Dropdown Structure -->
                <ul id='dropdown1' class='dropdown-content'>
                <li><a href="#!">Festa de Volta às Aulas 2020</a></li>
                <li><a href="#!">Festa de Natal 2019</a></li>
                <li><a href="#!">Halloween 2019</a></li>
                </ul>
            </div>


        </section>
        <script src="./js/jQuery341.js"></script>
        <script src="./js/materialize.min.js"></script>
        <script src="./js/Eventos.js"></script>
        
@endsection
