@if(count($errors) > 0)
    <div class="alert alert-danger">
        <strong>{{trans('general.error_whoops')}}</strong>
        <br><br>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(\Session::has('message'))
    <div class="alert alert-info">{{\Session::get('message')}}</div>
@endif