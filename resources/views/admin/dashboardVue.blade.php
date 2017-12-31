
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
<div id="explanationModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="demoSiteAbour" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">SaaSsy Cloud Demo Site</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body bg-light">
                <nav>
                    <div class="nav nav-tabs justify-content-end text-info" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-welcome-tab" data-toggle="tab" href="#nav-welcome" role="tab" aria-controls="nav-welcome" aria-selected="true">Welcome</a>
                        <a class="nav-item nav-link" id="nav-signup-tab" data-toggle="tab" href="#nav-signup" role="tab" aria-controls="nav-signup" aria-selected="false">Sign Up Site</a>
                        <a class="nav-item nav-link" id="nav-dashboard-tab" data-toggle="tab" href="#nav-dashboard" role="tab" aria-controls="nav-dashboard" aria-selected="false">Dashboard</a>
                        <a class="nav-item nav-link" id="nav-datamodel-tab" data-toggle="tab" href="#nav-datamodel" role="tab" aria-controls="nav-datamodel" aria-selected="false">Data Model</a>
                        <a class="nav-item nav-link" id="nav-technologies-tab" data-toggle="tab" href="#nav-technologies" role="tab" aria-controls="nav-technologies" aria-selected="false">Technologies Used</a>
                    </div>
                </nav>
                <div class="tab-content bg-white" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-welcome" role="tabpanel" aria-labelledby="nav-welcome-tab">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <h5 class="display-4">Welcome!</h5>
                                    <p>My name is Jason Ross. I am a full stack Software Engineer who loves building things.
                                        This is a simple demo site where the aim is NOT to sell power-ups, but to demonstrate my skills as a Software Engineer.</p>
                                    <p>You can find the source code for this site on my <a class="text-info text-underline" href="https://github.com/jasonarg">public profile</a> on <span class="fa fa-github"></span> GitHub,
                                        specifically at <a class="text-info" href="https://github.com/jasonarg/saassycloud">https://github.com/jasonarg/saassycloud/</a>.
                                    </p>
                                    <ul>
                                        <li>The tabs above describe the architecture of this site, each detailing the design patterns, technologies, frameworks and libraries used for the main two sections, the sign up site and the admin dashboard.</li>
                                        <li>You can access this modal on any page of the site by clicking on the "Show Info Modal" button on the footer.</li>
                                    </ul>
                                    <p>Thanks for checking it out! If you have any questions, suggestions, or would like to discuss anything tech related, drop me a line at
                                        jason.ch.ross@gmail.com
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-signup" role="tabpanel" aria-labelledby="nav-signup-tab">signup</div>
                    <div class="tab-pane fade" id="nav-dashboard" role="tabpanel" aria-labelledby="nav-dashboard-tab">dashboard</div>
                    <div class="tab-pane fade" id="nav-datamodel" role="tabpanel" aria-labelledby="nav-datamodel-tab">data model</div>
                    <div class="tab-pane fade" id="nav-technologies" role="tabpanel" aria-labelledby="nav-technologies-tab">technologies used</div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-info" data-dismiss="modal">Got It!</button>
            </div>
        </div>
    </div>
</div>
<script src="/js/manifest.js"></script>
<script src="/js/vendor.js"></script>
<script src="/js/app.js"></script>
</body>
</html>