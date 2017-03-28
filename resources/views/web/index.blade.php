@extends('web.partials.app')
@section('content')
    <br>
    <br>
    <center>
        <div class="ui grid" style="   width: 70%;">
            <div class="four wide column" style="margin-left: 10px;">
                <div style="width: auto;">
                    <img src="http://fakeimg.pl/250x600/?text=Ads" style="width: 100%">
                </div>
            </div>
            <div class="six wide column">
                <div class="ui card" style="width: 100%;">
                    <div class="image">
                        <img src="https://i.blogs.es/21a9ef/elba2/650_1200.jpg">
                    </div>
                    <div class="content">
                        <a class="header">Estética Esther's</a>
                        <div class="meta">
                            <span class="date">Registrado en 2017</span>
                        </div>
                        <div class="description">
                            Tu bienestar es nuetra prioridad
                        </div>
                    </div>
                    <div class="extra content">
                        <a>
                            <i class="user icon"></i>
                            22 Friends
                        </a>
                    </div>
                </div>
                <div class="ui card" style="width: 100%;">
                    <div class="content">
                        <a class="header">Nuevos Spa</a>
                        <div class="ui items">
                            <div class="item">
                                <a class="ui tiny image">
                                    <img src="http://media5.letsbonus.com/products/102000/102911/13299905407873-0-368x276.jpg">
                                </a>
                                <div class="content">
                                    <a class="header">Centro Visage Spa</a>
                                    <div class="description">
                                        <p>Febrero 2017</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <a class="ui tiny image">
                                    <img src="http://www.nuevaestetica.com/sites/default/files/styles/imagen_noticia/public/castello_di_vicarello_65005925-h1-spa_5.jpg?itok=OuuqYhK8">
                                </a>
                                <div class="content">
                                    <a class="header">Sananda Spa</a>
                                    <div class="description">
                                        <p>Septiembre 2016</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <a class="ui tiny image">
                                    <img src="http://hotelprincesaparc.com/wp-content/uploads/2014/06/spa-03.jpg">
                                </a>
                                <div class="content">
                                    <a class="header">DepiLive</a>
                                    <div class="description">
                                        <p>Mayo 2016</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui card" style="width: 100%;">
                    <div class="content">
                        <a class="header">Los Spa Mas Populares</a>
                        <div class="ui items">
                            <div class="item">
                                <div class="content">
                                    <a><strong>1.</strong> Saddha Spa</a>

                                </div>
                            </div>
                            <div class="item">
                                <div class="content">
                                    <a><strong>2.</strong> Sananda Spa</a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="content">
                                    <a><strong>3.</strong> Centro Visage Spa</a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="content">
                                    <a><strong>4.</strong> DepiLive</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="six wide column" style="margin-left: -20px;">
                <div class="ui top attached tabular menu">
                    <a class="item active" data-tab="service">Servicio</a>
                    <a class="item" data-tab="ambiance">Ambiente</a>
                    <a class="item" data-tab="one">Atención</a>
                    <a class="item " data-tab="other">Precio</a>
                </div>
                <div class="ui bottom attached tab segment active" data-tab="service">
                    <div class="ui items">
                        <div class="item">
                            <div class="image">
                                <img src="http://www.nuevaestetica.com/sites/default/files/styles/imagen_noticia/public/castello_di_vicarello_65005925-h1-spa_5.jpg?itok=OuuqYhK8">
                            </div>
                            <div class="content">
                                <a class="header">Saddha Spa</a>
                                <div class="meta">
                                    <span>Description</span>
                                </div>
                                <div class="description">
                                    <p></p>
                                </div>
                                <div class="extra">
                                    Additional Details
                                </div>
                            </div>
                        </div>
                        <div class="ui divider"></div>
                        <div class="item">
                            <div class="image">
                                <img src="http://hotelprincesaparc.com/wp-content/uploads/2014/06/spa-03.jpg">
                            </div>
                            <div class="content">
                                <a class="header">DepiLive</a>
                                <div class="meta">
                                    <span>Description</span>
                                </div>
                                <div class="description">
                                    <p></p>
                                </div>
                                <div class="extra">
                                    Additional Details
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui bottom attached tab segment" data-tab="ambiance">
                    Ambiente
                </div>
                <div class="ui bottom attached tab segment " data-tab="one">
                    Atención
                </div>
                <div class="ui bottom attached tab segment " data-tab="other">
                    Precio
                </div>
            </div>
        </div>
    </center>
    <br>


    <script>
        $(function () {
            $('.menu .item').tab();

            $('#inicio').addClass('active');
        });
    </script>
@endsection
