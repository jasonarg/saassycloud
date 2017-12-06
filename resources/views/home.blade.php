@extends('layouts.frame')

@section('content')
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
                    @foreach( $allies as $ally)
                        <div class="card my-3">
                            <div class="card-body">
                                <h4 class="card-title text-dark ">{{ $ally->name }}</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, ut!</p>

                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-4 px-2">
                    <h5 class="text-dark text-center">Outfits</h5>
                    @foreach( $outfits as $outfit)
                        <div class="card my-3">
                            <div class="card-body">
                                <h4 class="card-title text-dark ">{{ $outfit->name }}</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, ut!</p>

                            </div>
                        </div>
                    @endforeach
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
@endsection
