@extends('back.app')

@section('dashboard', 'active')

@section('breadcrumb')
    @include('back.partials.breadcrumb', ['title' => 'Principal', 'active' => null, 'breadcrumb' => []])
@endsection

@section('body')
    <div class="middle-box text-center animated fadeInRightBig" style="margin-top: 35px;">
        {!! Html::image('assets/img/user.png', 'Sistema', ['width' => '500px']) !!}
    </div>
@endsection