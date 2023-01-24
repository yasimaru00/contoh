@if($configData["mainLayoutType"] == 'horizontal')
  <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu {{ $configData['navbarColor'] }} navbar-fixed">
      <div class="navbar-header d-xl-block d-none">
          <ul class="nav navbar-nav flex-row">
              <li class="nav-item"><a class="navbar-brand" href="dashboard-analytics">
                  <div class="brand-logo"></div></a></li>
          </ul>
      </div>
  @else
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu {{ $configData['navbarClass'] }} navbar-light navbar-shadow {{ $configData['navbarColor'] }}">
  @endif
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav bookmark-icons">
                        <!--
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo" data-toggle="tooltip" data-placement="top" title="Todo"><i class="ficon feather icon-check-square"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat" data-toggle="tooltip" data-placement="top" title="Chat"><i class="ficon feather icon-message-square"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email" data-toggle="tooltip" data-placement="top" title="Email"><i class="ficon feather icon-mail"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calender" data-toggle="tooltip" data-placement="top" title="Calendar"><i class="ficon feather icon-calendar"></i></a></li>
                        -->
                    </ul>
                    <ul class="nav navbar-nav">
                        <!--
                        <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon feather icon-star warning"></i></a>
                            <div class="bookmark-input search-input">
                                <div class="bookmark-input-icon"><i class="feather icon-search primary"></i></div>
                                <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="0" data-search="laravel-search-list" />
                                <ul class="search-list search-list-bookmark"></ul>
                            </div>
                        </li>
                        -->
                    </ul>
                </div>
                <ul class="nav navbar-nav float-right">
                    {{--
                    <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#" data-language="en"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="#" data-language="fr"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#" data-language="de"><i class="flag-icon flag-icon-de"></i> German</a><a class="dropdown-item" href="#" data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a></div>
                    </li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>
                    <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span class="badge badge-pill badge-primary badge-up">5</span></a>
                        @include('panels/recruitmentNotification')
                    </li>
                    --}}
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none">
                                <span class="user-name text-bold-600" id="auth-name">{{ session('user_name') ?: 'Wow, how yout get in here?' }}</span>
                                <span class="user-status">
                                    <span id="auth-company">{{ session('company_name') ?: 'Please logout' }}</span>
                                    <small id="auth-role">{{ session('role_name') ?: ':)' }}</span>
                                </span>
                            </div>
                            <span><img class="round" src="{{asset('images/portrait/small/avatar-s-11.jpg') }}" alt="avatar" height="40" width="40" /></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="page-user-profile"><i class="feather icon-user"></i> Edit Profile</a>
                            <div class="dropdown-divider"></div>
                            <span class="dropdown-item" onClick="logout()" id="btn-logout" data-href="{{ url('api/v1/passport/logout') }}" redirect-href="{{ url('auth/login') }}"><i class="feather icon-power"></i> Logout</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->
