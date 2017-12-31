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
                                        This is a simple demo site where the aim is NOT to sell power-ups, but to demonstrate Software Engineering skills.</p>
                                    <p>You can find the source code for this site on my <a class="text-info text-underline" href="https://github.com/jasonarg">public profile</a> on <span class="fa fa-github"></span>
                                        GitHub, specifically at <a class="text-info" href="https://github.com/jasonarg/saassycloud">https://github.com/jasonarg/saassycloud/</a>.
                                    </p>
                                    <ul>
                                        <li>The sign up site is made with Laravel 5.5 on top of PHP 7.1.  The layout uses Bootstrap 4, beta 2. More details can be found on the Sign Up Site tab above.</li>
                                        <li>The <a href="/admin/dashboard" class="text-info">admin dashboard</a> is mostly made with javascript. Primarily ECMAScript 6 ( ES6 ), Vue.js and chart.js with some
                                            help from some common libraries. More details can be found on the Dashboard tab above.</li>
                                        <li>The tabs above describe the architecture of this site, each detailing the design patterns, technologies, frameworks and libraries used for the main two sections,
                                            the sign up site and the admin dashboard. The Data Model tab shows the relational data model used for this site, and the Technologies Used tab is a simple list of technologies.</li>
                                        <li>You can access this modal on any page of the site by clicking on the "Show Info Modal" button on the footer.</li>
                                    </ul>
                                    <p>Thanks for checking it out! If you have any questions, suggestions, or would like to discuss anything tech related, drop me a line at
                                        jason.ch.ross@gmail.com
                                    </p>
                                    <p>I will be setting up another version of this site using node.js, express and a NoSQL data store, MongoDB for the backend.
                                        That project's source code lives at <a class="text-info" href="https://github.com/jasonarg/saassycloud-node" >https://github.com/jasonarg/saassycloud-node</a>.
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
                <p class="text-muted"><i>Disclaimer: If you do review this site, there are obviously many elements that are over-engineered and other elements that have no business being in a production site. This is a demo site, my goal was just to show I know how to do certain things.</i></p>

                <button type="button" class="btn btn-outline-info" data-dismiss="modal">Got It!</button>
            </div>
        </div>
    </div>
</div>