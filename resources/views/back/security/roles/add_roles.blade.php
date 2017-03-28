@extends('back.app')

@section('developer.title', 'active')
@section('developer.roles', 'active')
@section('developer.roles.add', 'active')

@section('breadcrumb')
    @include('back.partials.breadcrumb',['title' => 'Sistema de Compras', 'active' => 'Crear Rol', 'breadcrumb' => []])
@endsection

@section('style_head')
    {!! Html::style('assets/back/css/plugins/cropper/cropper.min.css') !!}

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
                <h5>Modificar Rol</h5>
                <div class="row">
                    <div class="ibox-content">
                        <form action="{{route('back.security.roles.create')}}" method="post" enctype="multipart/form-data" autocomplete="off" onsubmit="return checkSubmit();">
                            <div class="form-group">
                                <div class="col-lg-6">
                                    <label class="font-noraml">Nombre</label>
                                    <div class="input-group m-b"><span class="input-group-addon"><i class="fa fa-building-o"></i></span>
                                        <input type="text"  name="name" class="form-control" required>
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