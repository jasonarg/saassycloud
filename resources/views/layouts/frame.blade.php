
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
@include('includes.head')
</head>
<body>
@include('includes.header')
@yield('content')
<footer>
    <div class="container-fluid" style="min-height: 250px;">
@include('includes.footerPole')
@include('includes.footer')
</body>
</html>
