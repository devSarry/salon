<!DOCTYPE html>
<html lang="en">


@include('main.partials.head', ['title' => 'Hiusmaa'])


    <body id="page-top" class="index">

    @include('main.partials.navigation')

        @yield('content')

    @include('main.partials.footer')

    @include('main.partials.javascripts')

    </body>

</html>