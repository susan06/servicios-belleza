<div class="row border-bottom">
    <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

            <div role="search" class="navbar-form-custom" action="#template" onsubmit="return false;">
                <div class="form-group">
                    <input type="text" placeholder="template" class="form-control" name="top-search" id="top-search" readonly>
                </div>
            </div>
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li>
                <span class="m-r-sm text-muted welcome-message">Bienvenido
                    <strong>
                       {{Auth::user()->username}}
                    </strong>
                </span>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                    <i class="fa fa-envelope"></i> <span class="label label-warning">0</span>
                </a>
                <ul class="dropdown-menu dropdown-messages">
                    <li>
                        <div class="center_align">
                            {!! Html::image('assets/img/notify.png', 'template.com', ['class' => 'animated swing']) !!}
                            <div class="ui one statistics">
                                <div class="statistic">
                                    <div class="label label-primary" style="color: white;">Estás al día</div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell"></i> <span class="label label-warning">0</span>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <div class="center_align">
                            {!! Html::image('assets/img/notify.png', 'template.com', ['class' => 'animated swing']) !!}
                            <div class="ui one statistics">
                                <div class="statistic">
                                    <div class="label label-primary" style="color: white;">Estás al día'</div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{route('auth.logout')}}">
                    <i class="fa fa-sign-out"></i>Cerrar sesión
                </a>
            </li>
            @yield('mt_extra_options')
        </ul>
    </nav>
</div>