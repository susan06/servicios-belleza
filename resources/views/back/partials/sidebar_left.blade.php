<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header" style="padding-bottom: 10px; padding-top: 40px;">
                <div class="dropdown profile-element" style="text-align: center;">
                    <div>
                        {!! Html::image('assets/img/user.png', 'Template.com', ['width' => '180px']) !!}

                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">{{Auth::user()->username}}</strong>
                            </span>
                            <span class="text-muted text-xs block">Template.com <b class="caret"></b></span>
                        </span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="{{route('auth.logout')}}">Cerrar sesión</a></li>
                        </ul>
                    </div>
                </div>
                <div class="logo-element">
                    TP
                </div>
            </li>
            @foreach(\Config::get('sidebar_item') as $itemIndex => $item)
                @can('permission', [$item->permission])
                    <li class="@yield($item->id)" id="{{$item->id or ''}}">
                        <a @if($item->url !== null) href="{{route($item->url)}}" @endif>
                            <i class="fa fa-{{$item->icon or ''}}"></i>
                            <span class="nav-label">{{$item->trans}}</span>
                            @if(isset($item->subMenu))
                                @if(count($item->subMenu) > 0)
                                    <span class="fa arrow"></span>
                                @endif
                            @endif
                        </a>
                        @if(isset($item->subMenu))
                            @if(count($item->subMenu) > 0)
                                <ul class="nav nav-second-level collapse">
                                    @foreach($item->subMenu as $subItemIndex => $subItem)
                                        @can('permission', [$subItem->permission])
                                            <li class="@yield($subItem->id)" id="{{$subItem->id or ''}}">
                                                <a @if($subItem->url !== null) href="{{route($subItem->url)}}" @endif>
                                                    @if($subItem->icon !== null)
                                                        <i class="fa fa-{{$subItem->icon or ''}}"></i>
                                                    @endif
                                                    {{$subItem->trans}}
                                                    @if(isset($subItem->subMenu))
                                                        @if(count($subItem->subMenu) > 0)
                                                            <span class="fa arrow"></span>
                                                        @endif
                                                    @endif
                                                </a>
                                                @if(isset($subItem->subMenu))
                                                    @if(count($subItem->subMenu) > 0)
                                                        <ul class="nav nav-third-level">
                                                            @foreach($subItem->subMenu as $subItemIndex2 => $subItem2)
                                                                @can('permission', [$subItem2->permission])
                                                                    <li class="@yield($subItem2->id)" id="{{$subItem2->id or ''}}">
                                                                        <a @if($subItem2->url !== null) href="{{route($subItem2->url)}}" @endif>
                                                                            @if($subItem2->icon !== null)
                                                                                <i class="fa fa-{{$subItem2->icon or ''}}"></i>
                                                                            @endif
                                                                            {{$subItem2->trans}}
                                                                        </a>
                                                                    </li>
                                                                @endcan
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                @endif
                                            </li>
                                        @endcan
                                    @endforeach
                                </ul>
                            @endif
                        @endif
                    </li>
                @endcan
            @endforeach
        </ul>
    </div>
</nav>