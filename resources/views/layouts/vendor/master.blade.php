<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>BBS | @yield('title')</title>
    <script>
        window.laravel = {
            csrfToken: '{{ csrf_token() }}'
        }
    </script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ getOrginalUrl(returnSiteSetting('favicon')) }}" />

    @include('layouts.vendor.style')
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>

<body>
    <!-- BEGIN HEADER -->
    @include('layouts.vendor.header')

    <!-- BEGIN CONTENT -->
    @yield('content')
 
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    @include('layouts.vendor.script')
   
</body>
</html>
