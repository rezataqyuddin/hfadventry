@include('layouts.head')

<body>
    <div id="app">
        @include('layouts.header')

        <main class="uk-section">
            @yield('content')
        </main>
    </div>

    @yield('script')
</body>
</html>
