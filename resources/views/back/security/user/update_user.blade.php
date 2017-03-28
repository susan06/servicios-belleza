@extends('back.app')

@section('developer.title', 'active')
@section('developer.user', 'active')
@section('developer.user.update', 'active')

@section('breadcrumb')
    @include('back.partials.breadcrumb',['title' => 'Sistema de Compras', 'active' => 'Modificar Usuario', 'breadcrumb' => []])
@endsection

@section('style_head')
    {!! Html::style('assets/back/bower_components/multiselect/css/multi-select.css') !!}

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
                <h5>Modificar Usuario</h5>
                <div class="row">
                    <div class="ibox-content">
                        <form action="{{route('back.security.user.update',$user->id)}}" method="post" autocomplete="off" onsubmit="return checkSubmit();">
                            <div class="form-group">
                                <div class="col-lg-3">
                                    <label class="font-noraml">Nombre de usuario</label>
                                    <div class="input-group m-b"><span class="input-group-addon"><i class="fa fa-building-o"></i></span>
                                        <input type="text" value="{{$user->username}}" disabled class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <label class="font-noraml">Estatus</label>
                                    <div class="input-group m-b"><span class="input-group-addon"><i class="fa fa-link"></i></span>
                                        <select name="status" class="form-control m-b" required>
                                            @foreach(\App\Http\Controllers\BackController::status() as $index => $value)
                                                <option value="{{$index}}" {{($user->status == $index ? 'selected' : '')}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="input-group m-b">
                                        <label class="font-noraml">Roles</label>
                                        <select id='sel' multiple='multiple' name="rol[]">
                                            @foreach($roles as $item => $value)
                                                <option value="{{$value->id}}"  {{isset($array[$value->id]) ? 'selected' : ''}} > {{$value->name}}</option>
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
    {!! Html::script('assets/back/bower_components/multiselect/js/jquery.multi-select.js') !!}
@endsection

@section('script_body')
    <script type="text/javascript">

        $('#sel').multiSelect({ keepOrder: true });

    </script>

@endsection