<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Directorio</title>

    <link rel="stylesheet" type="text/css" href="semantic-ui/semantic.css">
    <link rel="stylesheet" type="text/css" href="homepage.css">
    <link rel="stylesheet" type="text/css" href="iconfonts/flaticon.css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
    <script src="semantic-ui/semantic.js"></script>
    <script src="homepage.js"></script>
    <script>
        $(function () {
            $('.ui.card').popup();
        });
    </script>
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body id="home">
@include('web.partials.top')
@yield('content')
@include('web.partials.footer')
<div class="ui small modal login">
    <div class="header center">Inicia Sesion</div>
    <div class="content">
        <form class="ui form" autocomplete="off">
            <div class="field">
                <label for="username" >Usuario</label>
                <input type="text" name="username" placeholder="Usuario">
            </div>
            <div class="field">
                <label for="password">Contraseña</label>
                <input type="password" name="password" placeholder="Password">
            </div>
            <button class="ui button" type="submit">Entrar</button>
        </form>
    </div>
</div>

<div class="ui small modal register">
    <div class="header center">Registrarse</div>
    <div class="content">
        <form class="ui form" autocomplete="off">
            <div class="field">
                <label for="username" >Usuario</label>
                <input type="text" name="username" placeholder="Usuario">
            </div>
            <div class="field">
                <label for="email" >Correo</label>
                <input type="email" name="email" placeholder="Correo">
            </div>
            <div class="field">
                <label for="password">Contraseña</label>
                <input type="password" name="password" placeholder="*********">
            </div>
            <div class="field">
                <label for="confirm-password">Confirmar Contraseña</label>
                <input type="password" name="confirm-password" placeholder="********">
            </div>
            <button class="ui button" type="submit">Registrarse</button>
        </form>
    </div>
</div>

<script type="application/javascript">
   $(document).on('click','#login',function () {
       $('.login').modal('show');
   });
   $(document).on('click','#register',function () {
       $('.register').modal('show');
   });
</script>
</body>
</html>
