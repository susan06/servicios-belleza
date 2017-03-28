@extends('back.app')

@section('admin.title', 'active')@section('admin.banner.title', 'active')@section('admin.banner.add', 'active')

@section('breadcrumb')
    @include('back.partials.breadcrumb', ['title' => 'Sistema de Compras', 'active' => 'Crear Banner', 'breadcrumb' => []])
@endsection

@section('style_head')
    <link href={{asset("assets/back/css/plugins/cropper/cropper.min.css")}} rel="stylesheet">
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
                <h5>Agregar Banner</h5>
                <div class="row">
                    <div class="ibox-content">
                        <form action="{{route('back.banner.add.post')}}" method="post" autocomplete="off" onsubmit="return checkSubmit();">
                            <div class="form-group">
                                <div class="col-lg-3">
                                    <label class="font-noraml">Prioridad</label>
                                    <div class="input-group m-b"><span class="input-group-addon"><i class="fa fa-link"></i></span>
                                        <select name="priority" class="form-control m-b" required>
                                            @foreach(\App\Http\Controllers\BackController::priority() as $index => $value)
                                                <option value="{{$index}}">{{$value}}</option>
                                            @endforeach
                                        </select>
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
                                <div class="col-lg-6">
                                    <div class="ibox">
                                        <div class="ibox-title">
                                            <h3>Imagen:</h3>
                                            <div class="ibox-content">
                                                <div class="row">
                                                    <div class="hide">
                                                        <div class="image-crop">
                                                            <img src="{!! asset('upload/banner/') !!}" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h4>Foto</h4>
                                                        <div class="img-preview img-preview-sm"></div>
                                                        <div class="btn-group" style="float:left;">
                                                            <label title="Subir Foto del Aliado" for="inputImage" class="btn btn-info btn-xs">
                                                                <input type="file" accept="image/*" name="archive[]" id="inputImage" class="hide">
                                                                Subir
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button  type="submit" class="btn btn-primary btn-xs" style="float: right; margin-top: -20px;"> Guardar</button>
                                            </div>
                                        </div>
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
    {!! Html::script('assets/back/js/plugins/cropper/cropper.min.js') !!}
@endsection

@section('script_body')
    <script type="text/javascript">
        $(document).ready(function () {

            var $image = $(".image-crop > img");
            $($image).cropper({
                aspectRatio: 1.618,
                preview:     ".img-preview",
                done:        function (data) {
                }
            });

            var $inputImage = $("#inputImage");
            if (window.FileReader) {
                $inputImage.change(function () {
                    var fileReader = new FileReader(),
                        files      = this.files,
                        file;

                    if (!files.length) {
                        return;
                    }

                    file = files[0];

                    if (/^image\/\w+$/.test(file.type)) {
                        fileReader.readAsDataURL(file);
                        fileReader.onload = function () {
                            $inputImage.val();
                            $image.cropper("reset", true).cropper("replace", this.result);
                        };
                    } else {
                        showMessage("Please choose an image file.");
                    }
                });
            } else {
                $inputImage.addClass("hide");
            }
        });
    </script>

@endsection