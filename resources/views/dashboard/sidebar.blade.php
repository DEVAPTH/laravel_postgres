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
                        <li class="nav-link {{Route::currentRouteName()=='dashboard.s1-report-lists' ? 'active':''}}">
                            <a href="{{route('dashboard.s1-report-lists')}}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">S1 Data List</span>
                            </a>
                        </li>

                         <li class="nav-link {{Route::currentRouteName()=='dashboard.s2-report-lists' ? 'active':''}}">
                            <a href="{{ route('dashboard.s2-report-lists')}}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">S2 Data List</span>
                            </a>
                        </li>
                        <li class="nav-link {{Route::currentRouteName()=='dashboard.s3-report-lists' ? 'active':''}}">
                            <a href="{{ route('dashboard.s3-report-lists')}}" class="waves-effect waves-dark">
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

                    <ul class="pcoded-submenu">
                        <li class="nav-link {{Route::currentRouteName()=='dashboard.admin-list' ? 'active':''}}">
                            <form action="/logout" method="POST">
                                @csrf
                                <a href="auth-sign-in-social.html">
                                    <i class="feather icon-log-out"></i>
                                    <button type="submit" class="btn btn-outline-warning ">Logout</button>
                                </a>
                            </form>
                        </li>

                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>
