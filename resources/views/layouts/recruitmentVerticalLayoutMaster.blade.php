    <body class="vertical-layout vertical-menu-modern 2-columns {{ $configData['blankPageClass'] }} {{ $configData['bodyClass'] }}  {{($configData['theme'] === 'light') ? '' : $configData['theme'] }}  {{ $configData['navbarType'] }} {{ $configData['sidebarClass'] }} {{ $configData['footerType'] }}" data-menu="vertical-menu-modern" data-col="2-columns"  data-layout="{{ $configData['theme'] }}">
        {{-- Include Sidebar --}}
        @include('panels.recruitmentSidebar')

        <!-- BEGIN: Content-->
        <div class="app-content content">
            <!-- BEGIN: Header-->
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>

            {{-- Include Navbar --}}
            @include('panels.recruitmentNavbar')

            <div class="content-wrapper">
                {{-- Include Breadcrumb --}}
                @if($configData['pageHeader'] == true)
                    @include('panels.recruitmentBreadcrumb')
                @endif

                <div class="content-body">
                    {{-- Include Page Content --}}
                    @yield('content')
                </div>
            </div>

        </div>
        <!-- End: Content-->

        <div class="sidenav-overlay"></div>
        <div class="drag-target"></div>

        {{-- include footer --}}
        @include('panels/footer')

        {{-- include default scripts --}}
        <script src="{{ asset('js/core/zesthub.js') }}"></script>
        @include('panels/scripts')
        <script src="{{ asset(mix('vendors/js/extensions/sweetalert2.all.min.js')) }}"></script>
        <script>
            checkCookies();
        </script>
    </body>
</html>
