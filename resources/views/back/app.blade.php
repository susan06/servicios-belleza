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

        <div id="wrapper">
            @include('back.partials.sidebar_left')

            <div id="page-wrapper" class="gray-bg">
                @include('back.partials.menu_top')

                @yield('breadcrumb')

                <div class="wrapper wrapper-content">
                    @yield('body')
                </div>

                @include('back.partials.footer')
                @yield('partials_footer')
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