<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'PMC Klinik') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- <link rel="icon" href="img/favicon.ico"> -->
    <!-- CSS FILES -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/uikit@latest/dist/css/uikit.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/override.css')}}"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- <script src="{{ asset('uikit/css/style.css') }}" type="text/javascript"></script> -->

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    
    <![endif]-->
    <script>
        window.Laravel = <?= json_encode(['csrfToken' => csrf_token(),]) ?>;
    </script>

    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/js/uikit-icons.min.js"></script>
</head>