<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu active pcoded-trigger">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="nav-link {{Request::segment(1)=='home' ? 'active':''}}">">
                            <a href="" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Personal Profile</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Personal Detail</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
