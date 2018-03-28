<!doctype html>
<html lang="en">
@include('include.head')
<body>

<div class="container">
    <header>


        @include('include.menu')

    </header>
    <main role="main">
        @yield('content')
    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    @include('include.jsfooter')

    <footer>
        @include('include.footer')
    </footer>
</div>
</body>
</html>