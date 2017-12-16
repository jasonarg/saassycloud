
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('admin.includes.head')
</head>
<body>
@include('admin.includes.header')
@yield('content')
<footer>
    <div class="container-fluid bg-dark text-white" style="min-height: 250px;">
@include('admin.includes.footer')
</body>
</html>
