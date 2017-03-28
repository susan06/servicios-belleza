<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2 style="margin-top: 20px;">{{$title}}</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{\URL::route('back.index')}}">Admin</a>
            </li>

            @foreach($breadcrumb AS $breadcrumb_index => $bread)
                <li>
                    <a>{{$bread}}</a>
                </li>
            @endforeach

            @if(!is_null($active))
                <li class="active">
                    <strong>{{$active}}</strong>
                </li>
            @endif
        </ol>
    </div>
    <div class="col-sm-8">
        <div class="title-action">
            @yield('breadcrumb_action')
        </div>
    </div>
</div>