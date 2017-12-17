
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
<div class="container-fluid">
    <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block sidebar text-white pl-2">
            <div class="user-card my-4 clearfix">
                <img class="float-left rounded-circle profile-image-md mr-3 p-0" src="/profile/picture" />
                <span class="float-left mt-3" >Welcome <br><span class="text-active"><?php  echo Auth::user()->contact->person->firstName; ?></span></h6>
            </div>
            <ul class="nav">
                <li class="nav-item">Analytics
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Conversions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sessions</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">Lists
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sites</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sessions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sites</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Views</a>
                        </li>
                    </ul>
                </li>
            </ul>

        </nav>
        <main class="col-md-10">

        </main>
    </div>
</div>
<section style="min-height: 800px;">

</section>

<footer>
    <div class="container-fluid bg-dark text-white" style="min-height: 250px;">
        <div class="row pt-3">
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
