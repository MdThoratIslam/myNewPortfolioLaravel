<div class="wrapper">
    <aside class="left-sidebar sidebar-dark" id="left-sidebar">
        <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
                <a href="{{route('dashboard')}}">
                    <img src="{{asset('backend')}}/images/paper-plane.png" alt="Logo" width="60">
                    <span class="brand-name">Oni</span>
                </a>
            </div>
            <div class="sidebar-left" data-simplebar style="height: 100%;">
                <!-- sidebar menu -->
                <ul class="nav sidebar-inner" id="sidebar-menu">
                    <li class="active">
                        <a class="sidenav-item-link" href="index.html">
                            <i class="mdi mdi-briefcase-account-outline"></i>
                            <span class="nav-text">Business Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="sidenav-item-link" href="analytics.html">
                            <i class="mdi mdi-chart-line"></i>
                            <span class="nav-text">Analytics Dashboard</span>
                        </a>
                    </li>
                    <li class="section-title">
                        Apps
                    </li>
                    <li>
                        <a class="sidenav-item-link" href="chat.html">
                            <i class="mdi mdi-wechat"></i>
                            <span class="nav-text">Chat</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="sidebar-footer">
                <div class="sidebar-footer-content">
                    <ul class="d-flex">
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
