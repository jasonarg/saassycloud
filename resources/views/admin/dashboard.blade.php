
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
                            <a class="nav-link" href="#">Page Views</a>
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
        <main id="dashboard" role="main" class="col-sm-9 ml-sm-auto col-md-10 py-5 my-3 bg-light" data-dashboard="overview">
            <div class="row justify-content-between">
                <div class="col-md-2 mt-3 overview-head-item">
                    <span class="d-block text-muted">Page Views</span>
                    <h4 class="">48,340</h4>
                </div>
                <div class="col-md-2 mt-3 overview-head-item">
                    <span class="d-block text-muted">Sessions</span>
                    <h4 class="">21,729</h4>
                </div>
                <div class="col-md-2 mt-3 overview-head-item">
                    <span class="d-block text-muted">Converions</span>
                    <h4 class="">3,729</h4>
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
            <div class="row justify-content-center mb-0 pb-0">
                <div class="col-md-12 mt-2 mb-0 px-2 pb-0">
                    <div class="m-0 px-2 py-2 bg-white border">
                    <h6 id="mainChartTitle" class="d-inline-block text-info my-1">SaaSsy Cloud Analytics: Overview</h6>
                        <input type="text" class="form-input float-right pl-3 mb-1" style="width: 280px; font-size: .8rem;" placeholder="November 18, 2017 - December 18, 2017"/>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center my-0">
                <div class="col-md-12 mt-0 mb-2 p-2">
                    <div id="" class="chartWrapper my-0 mx-0 p-3 bg-white border">
                        <canvas id="overviewCombined" class="scChart" style="height:400px;width: content-box;"></canvas>
                    </div>
                </div>
            </div>

            <div class="row justify-content-around mt-0 mb-0">
                <div class="col-md-4 px-2">
                    <div class="mx-0 px-0 bg-white border" style="height: 250px;">
                        <canvas id="overviewAbCompareTotal" class="scChart" style="height:200px;width: content-box;"></canvas>
                    </div>
                </div>
                <div class="col-md-4 px-2">
                    <div class="mx-0 px-0 bg-white border" style="height: 250px;">
                        <canvas id="overviewAbCompareReferral" class="scChart" style="height:200px;width: content-box;"></canvas>

                    </div>
                </div>
                <div class="col-md-4 px-2">
                    <div class="mx-0 px-0 bg-white border" style="height: 250px;">
                        <canvas id="overviewAbCompareMonthlyVsAnnual" class="scChart" style="height:200px;width: content-box;"></canvas>
                    </div>
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
<script src="/js/manifest.js"></script>
<script src="/js/vendor.js"></script>
<script src="/js/app.js"></script>
</body>
</html>
