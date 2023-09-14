<!DOCTYPE html>
<html lang="en">
@include('layouts.header')

<body>
    <main class="main" id="top">
        <div class="container-fluid px-0">
            @include('layouts.menu-bar')
            @include('layouts.top-bar')
            @yield('content')
        </div>
        <script>
            var navbarTopStyle = localStorage.getItem('phoenixNavbarTopStyle');
            var navbarTop = document.querySelector('.navbar-top');
            if (navbarTopStyle === 'darker') {
                navbarTop.classList.add('navbar-darker');
            }

            var navbarVerticalStyle = localStorage.getItem('phoenixNavbarVerticalStyle');
            var navbarVertical = document.querySelector('.navbar-vertical');
            if (navbarVerticalStyle === 'darker') {
                navbarVertical.classList.add('navbar-darker');
            }
        </script>
    </main>
    @include('layouts.scripts')
    @yield('page-js')
</body>

</html>
