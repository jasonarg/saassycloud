<div id="explanationModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="demoSiteAbout" aria-hidden="true">
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
                        <a class="nav-item nav-link" id="nav-domainmodel-tab" data-toggle="tab" href="#nav-domainmodel" role="tab" aria-controls="nav-domainmodel" aria-selected="false">Domain Model</a>
                        <a class="nav-item nav-link" id="nav-technologies-tab" data-toggle="tab" href="#nav-technologies" role="tab" aria-controls="nav-technologies" aria-selected="false">Technologies Used</a>
                    </div>
                </nav>
                <div class="tab-content bg-white pt-3" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-welcome" role="tabpanel" aria-labelledby="nav-welcome-tab">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <h5 class="display-4">Hello World!</h5>
                                    <p>My name is Jason Ross. I am a full stack Software Engineer who loves building things.
                                        This is a simple demo site where the aim is not to sell power-ups, but to demonstrate Software Engineering skills.</p>
                                    <p>You can find the source code for this site on my <a class="text-info text-underline" href="https://github.com/jasonarg">public profile</a> on <span class="fa fa-github"></span>
                                        GitHub, specifically at <a class="text-info" href="https://github.com/jasonarg/saassycloud">https://github.com/jasonarg/saassycloud/</a>.
                                    </p>
                                    <ul>
                                        <li>The sign up site is made with Laravel 5.5 on top of PHP 7.1.  The layout uses Bootstrap 4, beta 2. More details can be found on the Sign Up Site tab above.</li>
                                        <li>The <a href="/admin/dashboard" class="text-info">admin dashboard</a> is mostly made with javascript. Primarily ECMAScript 6 ( ES6 ), Vue.js and chart.js with some
                                            help from some common libraries. More details can be found on the Dashboard tab above.</li>
                                        <li>The tabs above describe the architecture of this site, each detailing the design patterns, technologies, frameworks and libraries used for the main two sections,
                                            the sign up site and the admin dashboard. The Domain Model tab shows the Domain Model and the underlying relational data model used for this site, and the Technologies Used tab is a simple list of technologies.</li>
                                        <li>You can access this modal on any page of the site by clicking on the "Show Info Modal" button on the footer.</li>
                                    </ul>
                                    <p>Thanks for checking it out! If you have any questions, suggestions, or would like to discuss anything tech related, drop me a line at
                                        jason.ch.ross@gmail.com
                                    </p>
                                    <p>I will be setting up another version of this site using node.js, express and a NoSQL data store, MongoDB for the backend.
                                        That project's source code (will live) lives at <a class="text-info" href="https://github.com/jasonarg/saassycloud-node" >https://github.com/jasonarg/saassycloud-node</a>.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-signup" role="tabpanel" aria-labelledby="nav-signup-tab">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <h5 class="display-4">Concept</h5>
                                    <p>This demo site is a simple sign up site for a fictional SaaS product, SaaSsy Cloud.
                                        It consists of a home page and a product package comparison page that funnels potential
                                        customers to a three step form to sign up for a free trial.
                                    </p>
                                    <p>Behind the scenes, all site requests and input are tracked and recorded in a normalized relational database.
                                        When a new session is started and the visitor lands on the comparison page, a new
                                        ConversionOpportunity object is created, where one of two A/B testing views is assigned to that
                                        visitor's session.
                                    </p>
                                    <p>This A/B view is permanent throughout the session lifetime.  This allows for easy A/B testing
                                        and performance comparisons.  It allows you to see which layout is more effective at converting
                                        opportunities to trial users, and then to keep refining and experimenting with different layouts, prices,
                                        or anything really, to maximize profitability or user satisfaction.
                                    </p>
                                    <p>The Dashboard tab above talks in depth about the functionality of the analytics generated by the
                                       Session, SessionRequest, SessionResponse and ConversionOpportunity objects that are invoked on nearly
                                        every page view.
                                    </p>
                                    <h5 class="display-4">Architecture</h5>
                                    <p>SaaSsy Cloud runs on a robust Domain Model implemented in Laravel's Eloquent ORM, an Active
                                        Record implementation. I am a firm believer in Eric Evan's Domain Driven Design. I believe a good domain model
                                        has many benefits, including reducing development time, extending the serviceable life of a piece of software,
                                        improving the software's usefulness and maximizing stakeholder satisfaction.
                                    </p>
                                    <p>Above the persistence layer, the application uses the tried and true MVC pattern as implemented by Laravel.
                                    </p>
                                    <p>The Model, built on top of Eloquent, has three domains, namespaced separately from each other. Core, Product and Tracking.
                                    The model is accessed via Application Services which use the Repository pattern to access the ActiveRecord models themselves in order to
                                        do typical CRUD operations.
                                    </p>
                                    <p>The Views of the site use laravel's blade templates.  For the most part, they use the typical layout pattern with page specific content yielded to them.
                                        Common partials/includes are also used extensively. The views generate html markup which use Bootstrap 4 to create responsive layouts
                                        in Bootstrap's ubiquitous grid system.
                                    </p>
                                    <p>The Controllers used are very lightweight.  The web routes of SaaSsy Cloud call controllers that
                                        use Laravel's famous Dependency Injection / Inversion of Control implementation, Service Container, to map concrete implementations of interfaces (or contracts) that
                                        are used by controllers to access the domain model through repositories.
                                    </p>
                                    <p>In addition to the MVC components, this app also takes advantage of custom middleware to track user activity.  These
                                        middleware components invoke application services that track session activity, conversion and sign up form progress. Laravel's
                                        storage system is also used for keeping files out of the public view.
                                    </p>
                                    <p>Beyond the HTML side of things, this app also uses Laravel 5.5's new Resource classes to wrap the domain model
                                        in a thin layer to create a REST API using JSON as the payload. This API is used to feed the Admin Dashboard, described in the next tab.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-dashboard" role="tabpanel" aria-labelledby="nav-dashboard-tab">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <h4 class="display-4">Concept</h4>
                                    <p>The admin dashboard displays the data recorded throughout the sign up site.
                                    </p>
                                    <p>It is written purely in javascript using new ES6 features such as classes, arrow functions, string templates,
                                        block scope variables (let), modules and promises (the node.js version of SaaSsy Cloud will use ES8 Async/Await).
                                    </p>
                                    <p>
                                        The dashboard uses Vue.js, a reactive javascript user interface library very similar to Facebook's React and Google's Angular frameworks,
                                        to render the Bootstrap 4 HTML 5 markup and to listen to events that change the range of the dashboard data.
                                        The final major piece of the dashboard is the chart.js canvas based charting library, to render the charts of the dashboard.
                                    </p>
                                    <h4 class="display-4">Architecture</h4>
                                    <p>The dashboard is controlled by a single ES6 Class, ScDashboard, which reads in JSON files for
                                        navigation layout and dashboard layout.
                                    These JSON files inform ScDashboard how to layout a given dashboard (the rows and columns of charts
                                        needed), what data to request from the API via Axios,
                                        and where to look for the rough data polishing, dataset creation and label creation functions
                                        for each chart of a given dashboard (it looks for a class
                                        that extends ScChart, and is loaded by the proxyClassLoader function.
                                    </p>
                                    <p>These JSON files also contain the data structures Vue.js needs in order to compose all of it's components.
                                    </p>
                                    <p>Instead of using Vue's Vuex, similar to React's Redux, to control the application state, I decided
                                        to use ScDashboard as the central nervous system of the Dashboard.
                                        No good reason, I just wanted to do it manually, and besides, this dashboard is not that complex as far as
                                        javascript apps go. The node.js version of SaaSsy Cloud will use an App State manager to demonstrate my proficiency with those tools.
                                    </p>
                                    <p class="font-weight-bold">
                                        Below is a lo-fi diagram of the dashboard architecture and how application state is managed.
                                    </p>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col">
                                                <img class="img-thumbnail mx-auto mb-4 d-block" src="/i/dashboard-architecture-small.jpg" alt="Dashboard Architecture">
                                                <h5>Application Flow</h5>
                                                <ol class="mb-5" style="font-size: 0.9rem;">
                                                    <li>ScDashboard is instantiated</li>
                                                    <li>constructor calls this.getRoute()
                                                        <ul>
                                                            <li>getRoute() sets this.route to the current route</li>
                                                        </ul>
                                                    </li>
                                                    <li>constructor calls this.loadConfig()
                                                        <ul>
                                                            <li>loads the config/navigation.json file</li>
                                                            <li>loads all of the layout.json files for each dashboard in navigation.json</li>
                                                            <li>sets this.scdbData.layout.dashboard equal to the dashboard name matching the current route</li>
                                                            <li>sets the default date range for the data</li>
                                                        </ul>
                                                    </li>
                                                    <li>constructor calls this.loadData()
                                                        <ul>
                                                            <li>aysnc call is made with axios using a promise to the api route matching the current dashboard name and the current date range</li>
                                                            <li>promise chain is registered to complete after the data returns</li>
                                                            <li>this.polishDataAndLoadIntoChart() is registered as the fulfilled promise function</li>
                                                        </ul>
                                                    </li>
                                                    <li>constructor calls this.loadView()
                                                        <ul>
                                                            <li>the Vue.js instance is loaded</li>
                                                            <li>this.scdb.data is passed into the instance as the data property</li>
                                                            <li>the top level single file component, Dashboard.vue is loaded with all reactive properties initialized
                                                                <ul>
                                                                    <li>all ancestor components are then loaded with their needed props passed down accordingly</li>
                                                                    <li>the components loaded are defined in the layout.json file for the current dashboard</li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>constructor calls this.loadEventListeners()
                                                        <ul>
                                                            <li>registers two event listeners for when data is changed</li>
                                                            <li>changeRange event is emitted from the RangePicker.vue component
                                                                <ul>
                                                                    <li>updates scdbData range property, triggers a new loadData() call to get new data for the selected date range</li>
                                                                </ul>
                                                            </li>
                                                            <li>changeDashboard event is emitted from the SbNavListItem.vue component
                                                                <ul>
                                                                    <li>currently does nothing (i need to define the other dashboards), but will set the current dashboard config to the selected listItem</li>
                                                                    <li>then will call loadData and layout the new dashboard</li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>promise from loadData is fulfilled</li>
                                                    <li>a listing of each chart of the current dashboard is recursively extracted from the layout.json file data</li>
                                                    <li>each chart's config class is instantiated
                                                        <ul>
                                                            <li>these classes extend ScChart</li>
                                                            <li>they all have three methods, polishData, setLabels, and makeDatasets</li>
                                                        </ul>
                                                    </li>
                                                    <li>the result data from the api is polished according to each chart's needs</li>
                                                    <li>all data sets and chart labels are generated based on the functions defined in each of the chart config class</li>
                                                    <li>for each chart of the current dashboard
                                                        <ul>
                                                            <li>if the chart has not been loaded before, a new Chart.js Chart class is instantiated and associated to the correct vdom element. a reference to this chart is stored in this.scdbData</li>
                                                            <li>else, the Chart.js update api is used to update the data of the existing Chart instance</li>
                                                        </ul>
                                                    </li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="py-5">This architecture allows for easy addition of new datasets, charts and dashboards.
                                        You just copy a concrete ScChart class, modify the data manipulation functions, and edit or add a layout.json file.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-domainmodel" role="tabpanel" aria-labelledby="nav-domainmodel-tab">
                        <h4 class="display-4">Domain Model</h4>
                        <p>This is the first project that I have implemented a Domain Model in the Active Record design pattern. Previously I have used
                            a custom written temporal Data Mapper based ORM, similar to Java's Hibernate or PHP's Doctrine to implement Domain Models.
                            While Data Mapper ORMs are incredibly powerful and flexible, I have found this project to be a breeze to implement and not
                            too many trade offs were needed to use Active Record. I do have extensive Active Record (along with Table Data Gateways and
                            Data Access Objects) experience, just not in conjunction with a true Domain Model.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="nav-technologies" role="tabpanel" aria-labelledby="nav-technologies-tab">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <h4 class="display-4">Back End</h4>
                                    <ul>
                                        <li>PHP 7.1</li>
                                        <li>Laravel 5.5
                                            <ul>
                                                <li>Eloquent ORM
                                                    <ul>
                                                        <li>Many to One Relationships</li>
                                                        <li>One to One Relationships</li>
                                                        <li>Many to Many Relationships</li>
                                                        <li>Polymorphic Relationships</li>
                                                        <li>Polymorphic Many to Many Relationships</li>
                                                        <li>Repositories</li>
                                                        <li>Repository Interfaces</li>
                                                        <li>Eager Loading</li>
                                                    </ul>
                                                </li>
                                                <li>Migrations</li>
                                                <li>API Resource Classes
                                                    <ul>
                                                        <li>Item</li>
                                                        <li>Collections</li>
                                                    </ul>
                                                </li>
                                                <li>Storage
                                                    <ul>
                                                        <li>Public</li>
                                                        <li>Private (User content)</li>
                                                    </ul>
                                                </li>
                                                <li>Customized Auth</li>
                                                <li>Custom Middleware</li>
                                                <li>Mix (a Webpack wrapper)</li>
                                                <li>Named Routes</li>
                                                <li>Blade Templates</li>
                                                <li>Views</li>
                                                <li>Service Container</li>
                                            </ul>
                                        </li>
                                        <li>MariaDB 10
                                            <ul>
                                                <li>Relational Data Model in 1NF</li>
                                            </ul>
                                        </li>
                                        <li>Active Record</li>
                                        <li>RESTful JSON API</li>
                                        <li>Domain Model</li>
                                    </ul>
                                    <h4 class="display-4">Front End</h4>
                                    <ul>
                                        <li>javascript
                                            <ul>
                                                <li>ES6 ( ECMAScript 6)</li>
                                                <li>Vue.js 2.x</li>
                                                <li>Chart.js</li>
                                                <li>d3</li>
                                                <li>axios</li>
                                                <li>lodash</li>
                                                <li>json-loader</li>
                                            </ul>
                                        </li>
                                        <li>Bootstrap 4</li>
                                        <li>SASS</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <p class="text-muted">
                    <i>Disclaimer: If you do review this site, there are obviously many elements that are
                        over-engineered and other elements that have no business being in a production site. This is a demo
                        site, my goal was just to show I know how to do certain things.
                    </i>
                </p>
                <button type="button" class="btn btn-outline-info" data-dismiss="modal">Got It!</button>
            </div>
        </div>
    </div>
</div>