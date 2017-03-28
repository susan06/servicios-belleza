@extends('back.app')

@section('admin.title', 'active')
@section('admin.banner.title', 'active')
@section('admin.banner.all', 'active')

@section('breadcrumb')
    @include('back.partials.breadcrumb',['title' => 'Sistema de Compras', 'active' => 'Todos los Banners', 'breadcrumb' => []])
@endsection

@section('style_head')
    {!! Html::style('assets/back/css/plugins/dataTables/datatables.min.css') !!}
@endsection

@section('body')
    <div class="col-mg-12">
        <div class="wrapper wrapper-content animated fadeInUp">
            <div class="ibox">
                <div class="ibox-title">
                    <h3>Todos los Banners</h3>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table id="banner" class="table table-striped table-bordered table-hover dataTables-example" border="0" cellspacing="0">
                            <thead>
                                <tr class="gradeX">
                                    <th>Prioridad</th>
                                    <th>Estatus</th>
                                    <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($banners as $item => $value)
                                    <tr>
                                        <td>{{$value->priority}}</td>
                                        <td>{{(($value->status ? 'Activado' : 'Desactivado'))}}</td>
                                        <td><a href="{{route('back.banner.edit',['id' => $value->id])}}" class="label label-danger">Editar</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script_body_app')
    {!! Html::script('assets/back/js/plugins/dataTables/datatables.min.js') !!}
@endsection

@section('script_body')

    <script type="text/javascript">
        $(function () {
            $('#banner').DataTable({
                "language": {
                    "lengthMenu":   "Mostrar _MENU_ registros por pagina",
                    "zeroRecords":  "No se encontraron resultados en la busqueda",
                    "info":         "Pagina _PAGE_ de _PAGES_",
                    "infoEmpty":    "No esta disponible",
                    "infoFiltered": "(filtered from _MAX_ total records)",
                    "search":       "Buscar:",
                    "paginate":     {
                        "previous": "Anterior",
                        "next":     "Siguiente"
                    }
                }
            });
        });
    </script>
@endsection