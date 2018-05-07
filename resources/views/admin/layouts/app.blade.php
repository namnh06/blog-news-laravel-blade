<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | {{config('app.name','Laravel')}}</title>
    <link rel="stylesheet" href="{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css')}}">
</head>

<body>

@includeIf('admin.layouts.nav')

    <div class="container">
        @yield('content')
    </div>

@includeIf('admin.layouts.footer')

<script>
@yield('script')
</script>


</body>

</html>
