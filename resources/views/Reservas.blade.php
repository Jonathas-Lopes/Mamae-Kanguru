<<<<<<< HEAD
@extends('layouts/template')

@section('titulo')
    Reservas
@endsection

=======

@extends('layouts.template')

@section('titulo') Reservas @endsection
>>>>>>> 5bcc89be4886982988bf181c530061a65b828a1b

@section('conteudo')

<section id="reservas">
<link type="text/css" rel="stylesheet" href="./css/reservas.css" />
    <div class="container">
        <!-- Cards de cada espaço de lazer -->
        <div class="reservasmiolo row center-align">

            <!-- card ESPAÇO GOURMET -->
            <div href="/espacos" id="espaco-gourmet" class="espaco card hoverable col l12 m12 s12">
                <div class="card-image">
                    <img src="./img/condominio_espaco_gourmet.jpg" alt="Foto Espaço Gourmet">
                    <span class="card-title">Espaço Gourmet</span>
                </div>
                <div class="card-content">
                    <p class="resevas-card-content card-content">Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit.
                        Minus, error. Inventore officia eos voluptates fugiat? Dicta quas fugit porro recusandae ea
                        numquam eum,
                        consequatur, eius accusantium alias quos doloribus. Numquam!</p>
                    <!-- modal trigger ESPAÇO GOURMET -->
                    <a class="waves-effect waves-light btn modal-trigger" href="#modal1">reservar</a>
                </div>

                <!-- Modal ESPAÇO GOURMET -->
                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <h4>Modal Header</h4>
                        <p>A bunch of text</p>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
                    </div>
                </div>

            </div>

            <!-- card CHURRASQUEIRA -->
            <div href="/espacos" id="churrasqueira" class="espaco card hoverable col l12 m12 s12">
                <div class="card-image">
                    <img src="./img/condominio_churrasqueira.jpg" alt="Foto Churrasqueira">
                    <span class="card-title">Churrasqueira</span>
                </div>
                <div class="card-content">
                    <p class="resevas-card-content card-content">Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit.
                        Minus, error. Inventore officia eos voluptates fugiat? Dicta quas fugit porro recusandae ea
                        numquam eum,
                        consequatur, eius accusantium alias quos doloribus. Numquam!</p>
                    <!-- modal trigger CHURRASQUEIRA -->
                    <a class="waves-effect waves-light btn modal-trigger" href="#modal1">reservar</a>
                </div>

                <!-- Modal CHURRASQUEIRA -->
                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <h4>Modal Header</h4>
                        <p>A bunch of text</p>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
                    </div>
                </div>

            </div>

            <!-- card SALÃO DE FESTAS -->
            <div href="/espacos" id="salao-festa" class="espaco card hoverable col l12 m12 s12">
                <div class="card-image">
                    <img src="./img/condominio_salao_festas.jpg" alt="Foto Salão de Festas">
                    <span class="card-title">Salão de Festas</span>
                </div>
                <div class="card-content">
                    <p class="resevas-card-content card-content">Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit.
                        Minus, error. Inventore officia eos voluptates fugiat? Dicta quas fugit porro recusandae ea
                        numquam eum,
                        consequatur, eius accusantium alias quos doloribus. Numquam!</p>
                    <!-- modal trigger SALÃO DE FESTAS -->
                    <a class="waves-effect waves-light btn modal-trigger" href="#modal1">reservar</a>
                </div>

                <!-- Modal SALÃO DE FESTAS -->
                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <h4>Modal Header</h4>
                        <p>A bunch of text</p>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<<<<<<< HEAD
<script src="./js/jQuery341.js"></script>
<script src="./js/materialize.min.js"></script>
<script src="./js/Reservas.js"></script>


@endsection
=======
@endsection
>>>>>>> 5bcc89be4886982988bf181c530061a65b828a1b
