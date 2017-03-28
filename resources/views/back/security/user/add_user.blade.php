@extends('back.app')

@section('developer.title', 'active')
@section('developer.user', 'active')
@section('developer.user.add', 'active')

@section('breadcrumb')
    @include('back.partials.breadcrumb', ['title' => 'Sistema de Compras', 'active' => 'Crear Usuario', 'breadcrumb' => []])
@endsection

@section('style_head')

    <script>
        var statSend = false;
        function checkSubmit() {
            if (!statSend) {
                statSend = true;
                return true;
            } else {
                alert("El formulario ya se esta enviando...");
                return false;
            }
        }

        function checkSubmit() {
            document.getElementById("btsubmit").innerHTML = 'Enviando...';
            document.getElementById("btsubmit").disabled  = true;
            return true;
        }
    </script>
@endsection

@section('body')
    <div class="col-mg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Agregar Usuario</h5>
                <div class="row">
                    <div class="ibox-content">
                        <form action="{{route('back.security.user.create')}}" method="post" autocomplete="off" onsubmit="return checkSubmit();">
                            <div class="form-group">
                                <div class="col-lg-3">
                                    <label class="font-noraml">Nombre</label>
                                    <div class="input-group m-b"><span class="input-group-addon"><i class="fa fa-link"></i></span>
                                        <input type="text" name="username" class="form-control" required placeholder="Juan Carlos">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <label class="font-noraml">Contraseña</label>
                                    <div class="input-group m-b"><span class="input-group-addon"><i class="fa fa-link"></i></span>
                                        <input type="password" name="password" class="form-control" required  placeholder="******">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <label class="font-noraml">Correo Electronico</label>
                                    <div class="input-group m-b"><span class="input-group-addon"><i class="fa fa-link"></i></span>
                                        <input type="email" name="email" class="form-control" required placeholder="juan_carlos@domain.com">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <label class="font-noraml">Estatus</label>
                                    <div class="input-group m-b"><span class="input-group-addon"><i class="fa fa-link"></i></span>
                                        <select name="status" class="form-control m-b" required>
                                            @foreach(\App\Http\Controllers\BackController::status() as $index => $value)
                                                <option value="{{$index}}">{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12" align="center">
                                    <input type="submit" id="btsubmit" value="Enviar" class="btn btn-primary pull-right" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script_body_app')

@endsection

@section('script_body')
    <script type="text/javascript">

    </script>

@endsection