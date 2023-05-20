<!DOCTYPE html>
<html>
<head>
    <title>Meine App</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
<header>
    <!-- Header-Inhalt -->
</header>

<div class="content">
    @yield('content')
</div>

<footer>
    <!-- Footer-Inhalt -->
</footer>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
@yield('scripts')
</body>
</html>
