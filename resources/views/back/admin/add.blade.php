@extends('back.app')

@section('admin.title', 'active')
@section('admin.add.title', 'active')
@section('admin.add.add', 'active')

@section('breadcrumb')
    @include('back.partials.breadcrumb', ['title' => 'Admin', 'active' => 'Add', 'breadcrumb' => []])
@endsection

@section('style_head')

@endsection

@section('body')
    <div class="col-mg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Formulario</h5>
                <div class="row">
                    <div class="ibox-content">
                        <form action="{{route('back.admin.add.post')}}" method="post" autocomplete="off" onsubmit="return checkSubmit();">
                            <div class="form-group">
                                <div class="col-lg-4 col-md-offset-2">
                                    <label class="font-noraml">Nombre de la compañia</label>
                                    <div class="input-group m-b"><span class="input-group-addon"><i class="fa fa-building-o"></i></span>
                                        <input type="text" placeholder="Nombre de la compañia " name="company_name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label class="font-noraml">Ingrese el Pais</label>
                                    <select name="country" class="form-control m-b" required>
                                        @foreach(\App\Components\Country::countries() as $country)
                                            <option value="{{$country->iso}}">{{$country->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-3">
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