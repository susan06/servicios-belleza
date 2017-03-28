@extends('back.app')

@section('developer.title', 'active')
@section('developer.permissions', 'active')
@section('developer.permissions.update', 'active')

@section('breadcrumb')
    @include('back.partials.breadcrumb', ['title' => 'Sistema de Compras', 'active' => 'Modificar Permiso', 'breadcrumb' => []])
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
                <h5>Modificar Permiso</h5>
                <div class="row">
                    <div class="ibox-content">
                        <form action="{{route('back.security.permission.update',$permission->id)}}" method="post" enctype="multipart/form-data" autocomplete="off" onsubmit="return checkSubmit();">
                            <div class="form-group">
                                <div class="col-lg-6">
                                    <label class="font-noraml">Nombre</label>
                                    <div class="input-group m-b"><span class="input-group-addon"><i class="fa fa-building-o"></i></span>
                                        <input type="text" value="{{$permission->name}}" name="name" class="form-control" required>
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