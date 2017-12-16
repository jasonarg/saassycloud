
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
    <link href="//localhost:3000/css/app.css" rel="stylesheet"></head>
    <title>SaaSsy Cloud | Admin Dashboard</title>
<body>
<header class="sticky-top">
    <img src="/profile/picture" />
</header>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <div id="userCard">
                <h5>Welcome {{Auth::user()->contact->person->firstName}}</h5>
            </div>
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Overview <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Reports</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Analytics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Export</a>
                </li>
            </ul>
        </div>
        <main class="col-md-10">

        </main>
    </div>
</div>

<footer>
    <div class="container-fluid bg-dark text-white" style="min-height: 250px;">
        <div class="position-relative">
            <img src="/i/mario-jump.png" alt="" id="marioJump" class="">
            <img src="/i/flag-pole.png" alt="" id="flagPole" class="">
        </div><div class="row pt-3">
            <div class="col-md-6">

            </div>
            <div class="col-md-6">
                <a href="/login" class="text-muted float-right">Login</a>
            </div>
        </div>
        <div class="row pt-5 pl-3">
            <div class="col-md-4">
                <h2 class="text-white"><strong class="font-weight-bold">SaaS</strong>sy Cloud <small class="text-muted font-weight-light">Warp ahead<super class="">&reg;</super></small></h2>
                <h6 class="text-white font-weight-light">Magic software
                    <span class="text-muted font-weight-light">for magic plumbers</h6>
                <div class="pushBottom smallPrint d-none d-md-block">
                    <a href="/" class="text-muted">Home</a> |
                    <a href="/about" class="text-white">About</a> |
                    <a href="/privacy" class="text-muted">Privacy Policy</a> |
                    <a href="/terms" class="text-muted">Terms of Use</a>
                </div>
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4 mt-5 pt-5">
                <h6 class="text-white text-right">Made with Lots of <i class="fa fa-heart text-pink"></i> &amp; <i class="fa fa-coffee text-brown"></i>
                    <br>in Charm City</h6>
                <p class="text-right font-weight-light pt-3 pb-0 mb-0 text-white finePrint">
                    Helping save princesses since 1985
                </p>
                <p class="text-right font-weight-light pt-0 pb-3 my-0 text-muted finePrint textGroup">
                    Copyright &copy; 2017 Nobody Inc. No rights reserved.
                </p>

            </div>
        </div>
    </div>
</footer>
<script src="//localhost:3000/js/app.js"></script>
</body>
</html>
