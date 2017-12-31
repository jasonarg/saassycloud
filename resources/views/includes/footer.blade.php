<div class="row pt-3">
    <div class="col-md-6">

    </div>
    <div class="col-md-6 clearfix">
        @if (Auth::guest())
        <a href="/login" class="text-muted float-right display-block">Login</a>
        @else
            <a href="#" class="text-muted float-right display-block" onclick="event.preventDefault();document.getElementById('logout-form-footer').submit();">Logout</a>

            <form id="logout-form-footer" action="{{ route('logout') }}" method="POST"
                  style="display: none;">
                {{ csrf_field() }}
            </form>
        @endif
    </div>
</div>
        <div class="row pt-5 pl-3">
            <div class="col-md-4">
                <h2 class="text-white"><strong class="font-weight-bold">SaaS</strong>sy Cloud <small class="text-muted font-weight-light">Warp ahead<super class="">&reg;</super></small></h2>
                <h6 class="text-white font-weight-light">Magic software
                    <span class="text-muted font-weight-light">for magic plumbers</h6>
                <button type="button" class="btn btn-light float-left mt-auto" data-toggle="modal" data-target="#explanationModal">
                    Show Info Modal
                </button>
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
<script src="{{ asset('js/manifest.js') }}"></script>
<script src="{{ asset('js/vendor.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>