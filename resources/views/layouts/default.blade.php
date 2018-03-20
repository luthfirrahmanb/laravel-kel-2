<!doctype html>
<html>

<body>
        @include('includes.header')
    <div class="container">

   

        <div id="main" class="row">

                @yield('content')

        </div>

        <footer class="row">
            @include('includes.footer')
        </footer>

    </div>
</body>
</html>
