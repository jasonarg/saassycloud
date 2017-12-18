
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
                <h6 class="float-left mt-3 text-dark" >Welcome <br><span class="text-info"><?php  echo Auth::user()->contact->person->firstName; ?></span></h6>
            </div>
            <ul class="nav">
                <li class="nav-item">Analytics
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sessions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Conversions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Upgrades</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Revenue</a>
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
        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 py-5 my-3 bg-light">
            <div class="row justify-content-between">
                <div class="col-md-2 mt-3 overview-head-item">
                    <span class="d-block text-muted">Sessions</span>
                    <h4 class="">21,729</h4>
                </div>
                <div class="col-md-2 mt-3 overview-head-item">
                    <span class="d-block text-muted">Converions</span>
                    <h4 class="">3,729</h4>
                </div>
                <div class="col-md-2 mt-3 overview-head-item">
                    <span class="d-block text-muted">Upgrades</span>
                    <h4 class="">950</h4>
                </div>
                <div class="col-md-2 mt-3 overview-head-item">
                    <span class="d-block text-muted">Sales</span>
                    <h4 class="">1,729</h4>
                </div>
                <div class="col-md-2 mt-3 overview-head-item">
                    <span class="d-block text-muted">Revenue</span>
                    <h4 class="">$421,729</h4>
                </div>
            </div>

            <div class="row justify-content-center mb-0">
                <div class="col-md-12 my-2 p-2">
                    <div id="" class="chartWrapper mx-0 p-3 bg-white border" style="min-height: 400px;">
                        <canvas id="canvas"></canvas>
                    </div>
                </div>
            </div>

            <div class="row justify-content-around mt-0 mb-0">
                <div class="col-md-4 px-2">
                    <div class="mx-0 px-0 bg-white border" style="height: 250px;"></div>
                </div>
                <div class="col-md-4 px-2">
                    <div class="mx-0 px-0 bg-white border" style="height: 250px;"></div>
                </div>
                <div class="col-md-4 px-2">
                    <div class="mx-0 px-0 bg-white border" style="height: 250px;"></div>
                </div>
            </div>

            <div class="row justify-content-around mt-3">
                <div class="col-md-4 px-2">
                    <div class="mx-0 px-0 bg-white border" style="height: 515px;"></div>
                </div>
                <div class="col-md-8 px-3">
                    <div class="row">
                        <div class="col-md-12 px-2">
                            <div class="mx-0 px-0 bg-white border" style="height: 250px;"></div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12 px-2">
                            <div class="mx-0 px-0 bg-white border" style="height: 250px;"></div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>
</div>

<footer>
    <div class="container-fluid bg-dark text-white" style="position: fixed; bottom: 0px; height: 50px; z-index: 1001;">
        <div class="row pt-3">

        </div>
    </div>
</footer>
<style>

    .bar {
        fill: steelblue;
    }

    .axis text {
        font: 10px sans-serif;
    }

    .axis path,
    .axis line {
        fill: none;
        stroke: #000;
        shape-rendering: crispEdges;
    }

    .x.axis path {
        display: none;
    }

</style>

<script src="/js/manifest.js"></script>
<script src="/js/vendor.js"></script>
<script src="/js/app.js"></script>
<script>

    function load() {
        console.log("load event detected!");
    }

    var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    var config = {
        type: 'line',
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: "Sessions",
                backgroundColor: window.chartColors.red,
                borderColor: window.chartColors.red,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ],
                fill: true,
            }, {
                label: "Conversions",
                fill: true,
                backgroundColor: window.chartColors.blue,
                borderColor: window.chartColors.blue,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ],
            }, {
                label: "Upgrades",
                fill: true,
                backgroundColor: window.chartColors.green,
                borderColor: window.chartColors.green,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ],
            }, {
                label: "Sales",
                fill: true,
                backgroundColor: window.chartColors.yellow,
                borderColor: window.chartColors.yellow,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ],
            }]
        },
        options: {
            responsive: true,
            title:{
                display:true,
                text:'SaaSsy Cloud Analytics: Overview'
            },
            tooltips: {
                mode: 'index',
                intersect: false,
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            scales: {
                xAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Month'
                    }
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Value'
                    }
                }]
            }
        }
    };

    window.onload = function() {
        load();
        var ctx = document.getElementById("canvas").getContext("2d");

        axios.get('/signup/compare')
            .then(function (response) {
                console.log(response);
            }).then(function(){
                axios.get('/')
                    .then((response)=>{
                        console.log(response);
                        window.myLine = new Chart(ctx, config);
                    })
            })
            .catch(function (error) {
                console.log(error);
            });




    };

    var colorNames = Object.keys(window.chartColors);


</script>
</body>
</html>
