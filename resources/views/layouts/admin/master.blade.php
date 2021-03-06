<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    {!! HTML::style('/css/admin-all.css') !!}

    @yield('css')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

@yield('content')
{!! HTML::script('js/admin-all.js') !!}
@if(Session::has('flash_notification.message'))
    <script>
        $(function() {
            @if(Session::get('flash_notification.level') == 'danger')
                toastr.error('{{ Session::get('flash_notification.message') }}');
            @else
                toastr.{{ Session::get('flash_notification.level') }}('{{ Session::get('flash_notification.message') }}');
            @endif
        });
    </script>
@endif
@yield('js')

</body>

</html>
