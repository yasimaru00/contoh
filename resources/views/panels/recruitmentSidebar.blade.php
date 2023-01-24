@php
    $configData = Helper::applClasses();
@endphp
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow expanded" data-scroll-to-active="true" style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="dashboard-analytics">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">E-Recruitment</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block primary collapse-toggle-icon" data-ticon="icon-disc"></i></a></li>
        </ul> 
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="navigation-header">
                <span>Admin</span>
            </li>
            <li class="nav-item">
                <a href="{{ url('company') }}">
                    <i class="feather icon-shield"></i>
                    <span class="menu-title" data-i18n="">Companies</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('user') }}">
                    <i class="feather icon-users"></i>
                    <span class="menu-title" data-i18n="">Users</span>
                </a>
            </li>
            <li class="nav-item has-sub">
                <a href="#">
                    <i class="feather icon-list"></i>
                    <span class="menu-title" data-i18n="">Data Master</span>
                    <!-- <span class="badge badge-primary badge-pill float-right mr-2 test ">New</span> -->
                </a>
                <ul class="menu-content" style="">
                    <li class="">
                        <a href="{{ url('master/employment') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-title" data-i18n="">Employments</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ url('master/level') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-title" data-i18n="">Levels</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ url('master/field') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-title" data-i18n="">Fields</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ url('master/education') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-title" data-i18n="">Educations</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ url('master/perk') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-title" data-i18n="">Perks</span>
                        </a> 
                    </li>
                </ul>
            </li>
            <li class="navigation-header">
                <span>Recruiter</span>
            </li>
            <li class="nav-item">
                <a href="{{ url('vacancy') }}">
                    <i class="feather icon-briefcase"></i>
                    <span class="menu-title" data-i18n="">Vacancies</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('applicant') }}">
                    <i class="feather icon-user-plus"></i>
                    <span class="menu-title" data-i18n="">Applicants</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('interview') }}">
                    <i class="feather icon-mic"></i>
                    <span class="menu-title" data-i18n="">Interview</span>
                </a>
            </li>
            <li class="navigation-header">
                <span>Job Seeker</span>
            </li>
            <li class="nav-item">
                <a href="{{ url('portal') }}">
                    <i class="feather icon-search"></i>
                    <span class="menu-title" data-i18n="">Job Portal</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('profile') }}">
                    <i class="feather icon-user"></i>
                    <span class="menu-title" data-i18n="">Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('application') }}">
                    <i class="feather icon-file-text"></i>
                    <span class="menu-title" data-i18n="">Applications</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('application-form') }}">
                    <i class="feather icon-file-text"></i>
                    <span class="menu-title" data-i18n="">Application Form</span>
                </a>
            </li>


            @if(false)
            {{-- Foreach menu item starts --}}
            @foreach($menuData[0]->menu as $menu)
                @if(isset($menu->navheader))
                    <li class="navigation-header">
                        <span>{{ $menu->navheader }}</span>
                    </li>
                @else
                  {{-- Add Custom Class with nav-item --}}
                  @php
                    $custom_classes = "";
                    if(isset($menu->classlist)) {
                      $custom_classes = $menu->classlist;
                    }
                    $translation = "";
                    if(isset($menu->i18n)){
                        $translation = $menu->i18n;
                    }
                  @endphp
                  <li class="nav-item {{ (request()->is($menu->url)) ? 'active' : '' }} {{ $custom_classes }}">
                        <a href="{{ $menu->url }}">
                            <i class="{{ $menu->icon }}"></i>
                            <span class="menu-title" data-i18n="{{ $translation }}">{{ $menu->name }}</span>
                            @if (isset($menu->badge))
                                <?php $badgeClasses = "badge badge-pill badge-primary float-right" ?>
                                <span class="{{ isset($menu->badgeClass) ? $menu->badgeClass.' test' : $badgeClasses.' notTest' }} ">{{$menu->badge}}</span>
                            @endif
                        </a>
                        @if(isset($menu->submenu))
                            @include('panels/submenu', ['menu' => $menu->submenu])
                        @endif
                    </li>
                @endif
            @endforeach
            {{-- Foreach menu item ends --}}
            @endif
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
