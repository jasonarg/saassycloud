
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
@include('includes.head')
</head>
<body>
@include('includes.header')
@yield('content')
<footer>
    <div class="container-fluid bg-dark text-white" style="min-height: 250px;">
@include('includes.footerPole')
@include('includes.footer')
@include('includes.infoModal');
@yield('inlinejs');
</body>
</html>
