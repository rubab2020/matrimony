<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? env('APP_NAME') }}</title>

    {{ Html::style(mix('assets/admin/css/admin.css')) }}

    @livewireStyles

</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">

            @include('admin.sections.sidebar')

            @include('admin.sections.topbar')

            <!-- page content -->
            <div class="right_col" role="main">
                @yield('content')
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    {{ env('APP_NAME') }} © <a href="{{ url('') }}">{{ date('Y') }}</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

    {{ Html::script(mix('assets/admin/js/admin.js')) }}


    @livewireScripts
    @include('admin.sections.alert')

</body>

</html>