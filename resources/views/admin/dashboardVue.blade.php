
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=VT323:400,500,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One:400,600" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet"></head>
    <title>SaaSsy Cloud | Admin Dashboard</title>
<body>
<header>
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-white">
        <a class="navbar-brand" href="#"><strong>SaaS</strong>sy Cloud <span class="text-muted">Admin Dashboard</span></a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <img class="ml-auto rounded-circle profile-image-sm" src="/profile/picture" />
        </div>
    </nav>
</header>
<div id="vue-main" class="container-fluid">
    <dashboard
            :navigation="layout.navigation"
            :dashboard="layout.dashboard"
        />
</div>
<footer>
    <div class="container-fluid bg-dark text-white" style="position: fixed; bottom: 0px; min-height: 50px; z-index: 1001;">
        <div class="row">
            <div class="col">
                <button type="button" class="btn btn-light float-left m-2" data-toggle="modal" data-target="#explanationModal">
                    Show Info Modal
                </button>
            </div>
        </div>
    </div>
</footer>
@include('includes.infoModal')

<script src="{{ mix('/js/manifest.js') }} "></script>
<script src="{{ mix('/js/vendor.js') }} "></script>
<script src="{{ mix('/js/app.js') }} "></script>
</body>
</html>