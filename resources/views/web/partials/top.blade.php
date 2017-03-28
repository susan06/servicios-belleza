<div class="ui inverted masthead centered segment">
    <div class="ui page grid">
        <div class="column">

            <div class="ui secondary pointing menu">
                <a class="logo item">
                    Directorio
                </a>
                <a class="item" id="inicio" href="{{route('web.index')}}">
                    <i class="flaticon-home"></i> Inicio
                </a>
                <a class="item" id="buscar"  href="{{route('web.search')}}">
                    <i class="flaticon-mail"></i> Busqueda Avanzada
                </a>
                <a class="item" id="spa"  href="{{route('web.spas')}}">
                    <i class="flaticon-heart"></i> Spa
                </a>
                <a class="item" id="directorio" >
                    <i class="flaticon-heart"></i> Mi directorio
                </a>
                <div class="right menu">
                    <div class="item">
                        <div class="ui icon input">
                            <input placeholder="Buscar..." type="text">
                            <i class="flaticon-position link icon"></i>
                        </div>
                    </div>

                    @if (Auth::guest())
                        <a id="login" class="ui item">Ingresa</a>
                        <a id="register" class="ui item">Registrate</a>
                    @else

                        <a class="ui item" href="{{ url('/logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>

                    @endif
                </div>
            </div>

            <div class="ui hidden transition information">
                <h1 class="ui inverted centered header">
                    Recomienda, comparte y descubre los mejores Spa y centros de belleza de tu ciudad!
                </h1>

            </div>
        </div>
    </div>
</div>