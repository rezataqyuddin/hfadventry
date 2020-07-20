<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="icon" href="img/favicon.ico">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS FILES -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/uikit@latest/dist/css/uikit.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/override.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/js/uikit-icons.min.js"></script>
</head>

<body class="">
    <div class="uk-section uk-section-default uk-padding-remove">
        <div class="uk-child-width-1-2@m uk-flex uk-flex-middle" uk-grid>
            <div class="uk-first-column uk-visible@m uk-background-cover uk-height-viewport uk-flex uk-flex-center uk-flex-middle" style="background-image: url('{{ asset('img/green-leaf-on-green-surface-1696735.jpg') }}') ;">
            </div>
            @yield('content')
        </div>
    </div>
</body>

</html>