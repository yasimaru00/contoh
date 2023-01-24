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
        <meta name="base-url" content="{{ url('/') }}">
        <meta name="url-whitelist" content="{{ url('portal-guest') }}">

        <title>@yield('title') : E-Recruitment</title>
        <link rel="shortcut icon" type="image/x-icon" href="images/logo/favicon.ico">

        {{-- Include core + vendor Styles --}}
        @include('panels/styles')
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/sweetalert2.min.css')) }}">

    </head>

    {{-- {!! Helper::applClasses() !!} --}}
    @php
        $configData = Helper::applClasses();
    @endphp

    @extends('layouts.recruitmentVerticalLayoutMaster')
