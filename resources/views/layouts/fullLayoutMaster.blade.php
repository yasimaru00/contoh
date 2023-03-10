@isset($pageConfigs)
    {!! Helper::updatePageConfig($pageConfigs) !!}
@endisset

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="{{ env('MIX_CONTENT_DIRECTION') === 'rtl' ? 'rtl' : 'ltr' }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="login-page" content="{{ url('auth/login') }}">
        <meta name="url-whitelist" content="{{ url('portal-guest') }}">

        <title>@yield('title') - Vuexy Vuejs, HTML & Laravel Admin Dashboard Template</title>
        <link rel="shortcut icon" type="image/x-icon" href="images/logo/favicon.ico">

        {{-- Include core + vendor Styles --}}
        @include('panels/styles')
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/sweetalert2.min.css')) }}">

    </head>

    {{-- {!! Helper::applClasses() !!} --}}
    @php
    $configData = Helper::applClasses();
    @endphp

    <body class="vertical-layout vertical-menu-modern 1-column {{ $configData['blankPageClass'] }} {{ $configData['bodyClass'] }} {{($configData['theme'] === 'light') ? '' : $configData['theme'] }} data-menu="vertical-menu-modern" data-col="1-column"  data-layout="{{ $configData['theme'] }}">

        <!-- BEGIN: Content-->
        <div class="app-content content">
            <div class="content-wrapper">
                <div class="content-body">

                    {{-- Include Startkit Content --}}
                    @yield('content')

                </div>
            </div>
        </div>
        <!-- End: Content-->

        {{-- include default scripts --}}
        @include('panels/scripts')
        <script src="{{ asset('js/core/zesthub.js') }}"></script>
        <script src="{{ asset(mix('vendors/js/extensions/sweetalert2.all.min.js')) }}"></script>

    </body>
</html>
