<!DOCTYPE html>
<html>
    <head>
        {!! Html::meta(null, null, ['charset' => 'utf-8']) !!}
        {!! Html::meta('viewport', 'width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no') !!}

        <title>@yield('title', 'Principal') &raquo; </title>
        {!! Html::meta('author', 'Estarly Olivar') !!}

        {!! Html::favicon('assets/img/favicon.png', ['id' => 'favicon']) !!}

        {!! Html::style('assets/back/css/plugins.css') !!}
        {!! Html::style('assets/back/css/app.css') !!}

        @yield('style_head')
    </head>
    <body>
        {!! Html::script('assets/back/js/jquery-2.1.1.js') !!}

        <div class="middle-box text-center loginscreen animated fadeInDown">
            <div>
                <div>

                    <h1 class="logo-name">Kels</h1>

                </div>
                <h3>Bienvenido a Kels+</h3>
                {{--<p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.--}}
                    {{--<!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->--}}
                {{--</p>--}}
                <p>Iniciar Sesion.</p>
                <form class="form-horizontal" role="form" method="POST" action="{{route('auth.login.post') }}">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username" required="" name="username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" required="" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                    <a href="{{ url('/password/reset') }}">
                        <small>Recuperar Contraseña</small>
                    </a>
                    <p class="text-muted text-center">
                        {{--<small>Do not have an account?</small>--}}
                    </p>
                    {{--<a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>--}}
                </form>
                <p class="m-t">
                    <small>Todo los derechos reservador &copy; {{date('Y')}}</small>
                </p>
            </div>
        </div>

        {!! Html::script('assets/back/js/bootstrap.min.js') !!}
        {!! Html::script('assets/back/js/plugins/metisMenu/jquery.metisMenu.js') !!}
        {!! Html::script('assets/back/js/plugins/slimscroll/jquery.slimscroll.min.js') !!}

        {!! Html::script('assets/back/js/boot.js') !!}

        {!! Html::script('assets/back/js/plugins/gritter/jquery.gritter.min.js') !!}
        {!! Html::script('assets/back/js/plugins/toastr/toastr.min.js') !!}
        {!! Html::script('assets/back/js/plugins/tinycon/tinycon.min.js') !!}

        @yield('script_body_app')

        {!! Html::script('assets/back/js/app.js') !!}

        @yield('script_body')

        <script type="text/javascript">
            $(function () {
                Tinycon.setBubble();

                @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                        toastr.error('{{$error}}', '{{__('¡Vaya! ¡Algo salió mal!')}}');
                @endforeach
            @endif
            @if(session()->has('message'))
            toastr.success('{!! session()->get('message') !!}', 'Sistema');
                @endif

                @if(session()->has('warning'))
                    toastr.error('{!! session()->get('warning') !!}', 'Sistema');
                @endif
            });
        </script>
    </body>
</html>

