<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu active pcoded-trigger">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Data List</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="nav-link {{Route::currentRouteName()=='db1.reports' ? 'active':''}}">
                            <a href="{{route('db1.reports')}}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">S1 Data List</span>
                            </a>
                        </li>

                         <li class="nav-link {{Route::currentRouteName()=='db2.reports' ? 'active':''}}">
                            <a href="{{ route('db2.reports')}}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">S2 Data List</span>
                            </a>
                        </li>
                        <li class="nav-link {{Route::currentRouteName()=='db3.reports' ? 'active':''}}">
                            <a href="{{ route('db3.reports')}}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">S3 Data List</span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="pcoded-hasmenu active pcoded-trigger">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Admin List</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="nav-link {{Route::currentRouteName()=='dashboard.admin-list' ? 'active':''}}">
                            <a href="{{route('dashboard.admin-list')}}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Admin List</span>
                            </a>
                        </li>

                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>
