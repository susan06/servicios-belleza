@extends('back.app')

@section('account', 'active')

@section('breadcrumb')
    @include('back.partials.breadcrumb', ['title' => 'Sistema de Compras', 'active' => 'Datos de Perfil', 'breadcrumb' => []])
@endsection

@section('style_head')

@endsection

@section('body')
    <div class="row">
        <form action="{{route('back.account.update')}}" method="post" autocomplete="off" >
            <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-title">
                        <h3>Detalles de la Cuenta:</h3>
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-md-3">
                                    <p><strong>Nombres:</strong></p>
                                    <input class="form-control " type="text" name="firstname" maxlength="40" value="{{\Auth::user()->firstname}}" required>
                                    <input type="hidden" name="id" value="{{\Auth::user()->id}}">
                                </div>
                                <div class="col-md-3">
                                    <p><strong>Apellidos:</strong></p>
                                    <input class="form-control abc" type="text" name="lastname" maxlength="40" value="{{\Auth::user()->lastname}}" required>
                                </div>
                                <div class="col-md-3">
                                    <p><strong>Contraseña: </strong></p>
                                    <input class="form-control" type="password" name="password" placeholder=" * * * * * * * * ">
                                </div>
                                <div class="col-md-3">
                                    <p><strong>Nombre e Usuario:</strong></p>
                                    <input class="form-control " disabled value="{{\Auth::user()->username}}" >
                                </div>
                                <div class="col-md-12" align="right">
                                    <p></p>
                                    <button class="btn btn-success">Guardar Cambios</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
@endsection

@section('script_body_app')

@endsection

@section('script_body')

@endsection