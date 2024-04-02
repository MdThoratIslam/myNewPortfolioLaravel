<div class="wrapper">
    <aside class="left-sidebar sidebar-dark" id="left-sidebar">
        <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Application Brand -->
            <div class="app-brand">
                <a href="{{ route('dashboard') }}">
                    <img src="{{ asset('public/backend/images/paper-plane.png') }}" alt="Logo" width="60">
                    <span class="brand-name">Oni</span>
                </a>
            </div>
            <div class="sidebar-left" data-simplebar style="height: 100%;">
                @php
                    ///$modules = \App\Models\Module::with('subModules')->where('status', 1)->get();
                    $sql = \App\Models\Module\Module::where('status_active', 1)
                        ->with('subModules')
                        ->where('is_delete',0)
                        ->select('id', 'name', 'route', 'route_type','icon')
                        ->orderBy('id', 'asc')
                        ->get();
//                    echo '<pre>';
//                    print_r($sql);die();
                    $modules = [];
                    foreach ($sql as $module)
                    {
                        $modules[] = new \App\Http\Resources\Module\ModuleResource($module);
                    }
                @endphp
                <ul class="nav sidebar-inner" id="sidebar-menu">
                    @foreach($modules as $index => $menu)
                        @if($menu->route_type == 0)
                            <li class="section-title ">{{ $menu->name }}</li>

                        @elseif($menu->route_type == 2)
                            <li class="has-sub {{ \App\UseHelpers::isActiveSubMenu($menu->subModules) ? 'expand active' : '' }}">
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#{{ strtolower(str_replace(' ', '_', $menu->name)) }}"
                                   aria-expanded="false" aria-controls="{{ strtolower(str_replace(' ', '_', $menu->name)) }}">
                                    <i class="{{ $menu['icon'] }}"></i>
                                    <span class="nav-text">{{ ucfirst($menu->name) }}</span>
                                    <b class="caret"></b>
                                </a>
                                @if($menu->subModules && count($menu->subModules) != null)
                                    <ul class="collapse {{ \App\UseHelpers::isActiveSubMenu($menu->subModules) ? 'show' : '' }}" id="{{ strtolower(str_replace(' ', '_', $menu->name)) }}" data-parent="#sidebar-menu">
                                        <div class="sub-menu">
                                            @foreach($menu->subModules as $submenu)
                                                <li class="">
                                                    <a class="sidenav-item-link {{request()->routeIs($submenu->route) ? 'active' : ''}}" href="{{route($submenu->route ?? '')}}">
                                                        <span class="nav-text">{{ ucfirst($submenu->name) }}</span>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </div>
                                    </ul>
                                @endif
                            </li>

                        @elseif($menu['route_type'] == 1)
{{--                                <li class="active">--}}
                                <li class="{{request()->routeIs($menu['route']) ? 'active' : ''}}">
                                    <a class="sidenav-item-link" href="{{$menu['route']}}">
                                        <i class="{{$menu['icon']}}"></i>
                                        <span class="nav-text">{{ ucfirst($menu->name) }}</span>
                                    </a>
                                </li>

                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="sidebar-footer">
                <div class="sidebar-footer-content">
{{--                    <ul class="d-flex" style="background-color: #491217">--}}
                    <ul class="d-flex" >
                        <li>
                            <a href="user-account-settings.html" data-toggle="tooltip" title="Profile settings">
                                <i class="mdi mdi-settings"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-toggle="tooltip" title="No chat messages">
                                <i class="mdi mdi-chat-processing"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
{{--</div>--}}
