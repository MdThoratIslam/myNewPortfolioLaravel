<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
                <img src="assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" height="20" />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                @php
                    ///$modules = \App\Models\Module::with('subModules')->where('status', 1)->get();
                    $sql = \App\Models\Module\Module::where('status_active', 1)
                        ->with('subModules')
                        ->where('is_delete',0)
                        ->select('id', 'name', 'route', 'route_type','icon')
                        ->orderBy('priority', 'asc')
                        ->get();
                    $modules = [];
                    foreach ($sql as $module)
                    {
                        $modules[] = new \App\Http\Resources\Module\ModuleResource($module);
                    }
                @endphp
                @foreach($modules as $module)
                    @if($module->route_type == 0)
                        <li class="nav-section">
                            <span class="sidebar-mini-icon"><i class="fa fa-ellipsis-h"></i></span>
                            <h4 class="text-section">{{ $module->name }}</h4>
                        </li>
                    @elseif($module->route_type == 1)
                        <li class="nav-item">
                            <a class="app-menu__item {{ request()->routeIs($module->route) ? 'active' : '' }}" href="{{ route($module->route) }}">
                                <i class="app-menu__icon {{ $module->icon }}"></i>
                                <p>{{ ucfirst($module->name) }}</p>
                            </a>
                        </li>
                    @elseif($module->route_type == 2)
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#module-{{ $module->id }}" class="collapsed" aria-expanded="false">
                                <i class="fas fa-layer-group"></i>
                                <p>{{ ucfirst($module->name) }}</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="module-{{ $module->id }}">
                                <ul class="nav nav-collapse">
                                    @foreach($module->subModules as $subModule)
                                        <li>
                                            <a href="{{ route($subModule->route) }}" class="{{ request()->routeIs($subModule->route) ? 'active' : '' }}">
                                                <span class="sub-item">{{ $subModule->name }}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                    @elseif($module->route_type == 3)
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#module-{{ $module->id }}" class="collapsed" aria-expanded="false">
                                <i class="fas fa-layer-group"></i>
                                <p>{{ ucfirst($module->name) }}</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="module-{{ $module->id }}">
                                <ul class="nav nav-collapse">
                                    @foreach($module->subModules as $subModule)
                                        <li>
                                            <a data-bs-toggle="collapse" href="#subModule-{{ $subModule->id }}" class="collapsed" aria-expanded="false">
                                                <span class="sub-item">{{ $subModule->name }}</span>
                                                <span class="caret"></span>
                                            </a>
                                            <div class="collapse" id="subModule-{{ $subModule->id }}">
                                                <ul class="nav nav-collapse">
                                                    @foreach($subModule->childModules as $childModule)
                                                        <li>
                                                            <a href="{{ route($childModule->route) }}" class="{{ request()->routeIs($childModule->route) ? 'active' : '' }}">
                                                                <span class="sub-item">{{ $childModule->name }}</span>
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</div>
