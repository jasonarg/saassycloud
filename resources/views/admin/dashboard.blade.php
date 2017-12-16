
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
    <?php dump(Auth::user()->contact->person); ?>
</header>
<section>
    <div class="jumbotron jumbotron-billboard m-0">
        <div class="img d-block"></div>
        <div class="container-fluid pushTop pt-3 pb-4">
            <div class="row p-0">
                <div class="col-md-5 raiseUp px-5 py-5">
                    <h1 class="display-3 text-white font-weight-bold">Conquer the Cloud Kingdom</h1>
                    <p class="mt-5">
                        <a class="btn btn-info btn-lg" href="/signup/compare" role="button">Take the Challenge</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row bg-white text-dark text-center justify-content-around">
            <div class="col-md-3 p-5 mx-3">
                <img src="i/superMushroom.png" class="barIcon" alt="">
                <h2 class="font-weight-bold">Power Up!</h2>
                <p class="lead">Super size your abilities with SaaSsy Cloud power ups.</p>
                <a href="" class="text-info">Updates released often to power up your SaaSsy Cloud experience</a>
            </div>
            <div class="col-md-3 p-5 mx-3">
                <img src="i/flower.png" class="barIcon" alt="">
                <h2 class="font-weight-bold">Spit Hot Fire!</h2>
                <p class="lead">Bowser and the koopas will feel the heat.</p>
                <a href="" class="text-info">SaaSsy Cloud customers outperform other magic plumbers in every world</a>
            </div>
            <div class="col-md-3 p-5 mx-3">
                <img src="i/star.png" class="barIcon" alt="">
                <h2 class="font-weight-bold">Be Invincible!</h2>
                <p class="lead">Nothing's gonna bring you down with SaaSsy Cloud.</p>
                <a href="" class="text-info">99.999% uptime guarantee, your quest is our quest</a>
            </div>
        </div>
    </div>
</section>
<!-- Products and Benefits -->
<section>
    <div class="container-fluid bg-light" style="">
        <div class="row">
            <div class="col py-5">
                <h2 class="fluidSectionHeader text-dark">Tools for Magic Plumbers of All Sizes</h2>
                <h4 class="fluidSectionSubHeader text-secondary">From Kingdoms Far and Near</h4>
            </div>
        </div>
        <div class="row pb-5 text-secondary justify-content-center">
            <div class="col-md-4 px-2">
                <h5 class="text-dark text-center">Allies</h5>
                <div class="card my-3">
                    <div class="card-body">
                        <h4 class="card-title text-dark ">Yoshi</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, ut!</p>

                    </div>
                </div>
                <div class="card my-3">
                    <div class="card-body">
                        <h4 class="card-title text-dark ">Yellow Yoshi</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, ut!</p>

                    </div>
                </div>
                <div class="card my-3">
                    <div class="card-body">
                        <h4 class="card-title text-dark ">Red Yoshi</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, ut!</p>

                    </div>
                </div>
                <div class="card my-3">
                    <div class="card-body">
                        <h4 class="card-title text-dark ">Toad</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, ut!</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4 px-2">
                <h5 class="text-dark text-center">Outfits</h5>
                <div class="card my-3">
                    <div class="card-body">
                        <h4 class="card-title text-dark ">Frog Suit</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, ut!</p>

                    </div>
                </div>
                <div class="card my-3">
                    <div class="card-body">
                        <h4 class="card-title text-dark ">Penguin Suit</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, ut!</p>

                    </div>
                </div>
                <div class="card my-3">
                    <div class="card-body">
                        <h4 class="card-title text-dark ">Raccoon Suit</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, ut!</p>

                    </div>
                </div>
                <div class="card my-3">
                    <div class="card-body">
                        <h4 class="card-title text-dark ">Tanooki Suit</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, ut!</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid">
        <div class="row bg-white" style="min-height: 500px;">
            <div class="col">

            </div>
        </div>
    </div>
</section>
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
