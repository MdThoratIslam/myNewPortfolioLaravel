<div class="page-wrapper">
    <header class="main-header" id="header">
        <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
            <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
            </button>
            <a href="{{route('web_site')}}" class="page-title btn btn-sm btn-outline-smoke p-0" target="_blank">
                Web Site <i class="mdi mdi-web text-info"></i>
            </a>
            <div class="navbar-right ">
                <ul class="nav navbar-nav">
                    <li class="custom-dropdown">
                        <button class="notify-toggler custom-dropdown-toggler">
                            <i class="mdi mdi-bell-outline icon"></i>
                            <span class="badge badge-xs rounded-circle email-count">1</span>
                        </button>
                        <div class="dropdown-notify">
                            <header>
                                <div class="nav nav-underline" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="all-tabs" data-toggle="tab" href="#all" role="tab" aria-controls="nav-home" aria-selected="true">
                                        Email <span id="email-count" class="email-count">(0)</span>
                                    </a>
                                </div>
                            </header>
                            <div class="" data-simplebar style="height: 325px;">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tabs">
                                    </div>
                                </div>

                            </div>
                            <footer class="border-top dropdown-notify-footer">
                                <div class="d-flex justify-content-between align-items-center py-2 px-4">
                                    <span>Last updated 3 min ago</span>
                                    <a id="refress-button" href="javascript:" class="btn mdi mdi-cached btn-refress"></a>
                                </div>
                            </footer>
                        </div>
                    </li>
                    <!-- User Account -->
                    <li class="dropdown user-menu">
                        <button class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <img src="{{asset('public/backend/images/logo.png')}}" class="user-image rounded-circle" alt="User Image" />
                            <span class="d-none d-lg-inline-block">
                                {{auth()->user()->name}}
                            </span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <a class="dropdown-link-item" href="user-profile.html">
                                    <i class="mdi mdi-account-outline"></i>
                                    <span class="nav-text">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-link-item" href="email-inbox.html">
                                    <i class="mdi mdi-email-outline"></i>
                                    <span class="nav-text">Message</span>
                                    <span class="badge badge-pill badge-primary">24</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-link-item" href="user-activities.html">
                                    <i class="mdi mdi-diamond-stone"></i>
                                    <span class="nav-text">Activitise</span></a>
                            </li>
                            <li>
                                <a class="dropdown-link-item" href="user-account-settings.html">
                                    <i class="mdi mdi-settings"></i>
                                    <span class="nav-text">Account Setting</span>
                                </a>
                            </li>

{{--                            <li class="dropdown-footer">--}}
{{--                                <a class="dropdown-link-item" href="sign-in.html">--}}
{{--                                    <i class="mdi mdi-logout"></i> Log Out--}}
{{--                                </a>--}}
{{--                            </li>--}}
                            <li class="dropdown-footer">
                                <form action="{{ route('logout') }}" method="POST" style="display: none;" id="logout-form">
                                    @csrf <!-- CSRF token for security -->
                                </form>

                                <a class="dropdown-link-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="mdi mdi-logout"></i> Log Out
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
