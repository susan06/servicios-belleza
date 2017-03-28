@extends('web.partials.app')
@section('content')

    <br>
    <br>
    <center>
        <div class="ui grid" style="   width: 70%;">
            <div class="four wide column" style="margin-left: 10px;">
                <strong>
                    Busqueda Avanzada
                </strong>
                <table class="ui celled padded table">
                    <thead>
                        <tr>
                            <th colspan="2" class="single line">Caracteristicas</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="cursor: pointer">
                                <span>Reserva Online </span>
                            </td>
                            <td style="cursor: pointer">
                                <div class="ui label">
                                    23
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="cursor: pointer">
                                <span>Wifi </span>
                            </td>
                            <td style="cursor: pointer">
                                <div class="ui label">
                                    54
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="cursor: pointer">
                                <span>Nuevos </span>
                            </td>
                            <td style="cursor: pointer">
                                <div class="ui label">
                                    16
                                </div>
                            </td>
                        </tr>
                    <tfoot>
                        <tr>
                            <th colspan="2" style="cursor: pointer" class="single line"><a style="cursor: pointer" href="#">Mas +</a></th>

                        </tr>
                    </tfoot>
                    </tbody>
                </table>
                <table class="ui celled padded table">
                    <thead>
                        <tr>
                            <th colspan="2" class="single line">Por Precio</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="cursor: pointer">
                                <span>Hasta  Bs. 6 mil</span>
                            </td>
                            <td style="cursor: pointer">
                                <div class="ui label">
                                    23
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="cursor: pointer">
                                <span>De  Bs. 6 mil a Bs. 12 mil</span>
                            </td>
                            <td style="cursor: pointer">
                                <div class="ui label">
                                    98
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="cursor: pointer">
                                <span>De  Bs. 12 mil a Bs. 25 mil </span>
                            </td>
                            <td style="cursor: pointer">
                                <div class="ui label">
                                    85
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="nine wide column">
                <h2 class="ui sub header">
                    Resultados para: </h2>
                <span>Se han encontrado (1120) resultados</span>
                <div class="ui divider"></div>
                <div class="ui top attached tabular menu right">
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
            <div class="three wide column" style="margin-left: -20px;">
                <div style="width: auto;">
                    <img src="http://fakeimg.pl/250x600/?text=Ads" style="width: 100%">
                </div>
            </div>
        </div>
    </center>
    <br>
    <script>
        $('.menu .item').tab();
        $('#buscar').addClass('active');
    </script>
@endsection
