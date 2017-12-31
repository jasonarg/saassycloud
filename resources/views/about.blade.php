@extends('layouts.frame')

@section('content')
    <section>
        <div class="container-fluid">
            <div class="row bg-white p-5 m-5">
                <div class="col m-5">
                    <h1>About SaaSsy Cloud</h1>
                    <h3>Summary</h3>
                    <p>An in-progress demo project written with PHP 7.1, Laravel 5.5, Bootstrap 4 beta 2, ES6 javascript and Vue.js. The front end functionality of the
                        dashboard uses several javascript frameworks and libraries including chart.js, axios, lodash and d3.
                    </p>
                    <h3>Theme</h3>
                    <p>The project uses a whimsical theme of a fictional SaaS company, SaaSsy Cloud, that markets extra power ups in the Super Mario Brothers World, as if it were a real place. It merely provides a comparison of product packages and a way for customers to sign up for a free trial. However, baked into the signup is a complete tracking system of all http requests with a focus on conversions. It also features automated assignment of a sticky A/B view group that demonstrate how one could use this technique to maximize visitor conversions.
                    </p>
                    <h3>Architecture</h3>
                    <p>This project demonstrates the use of a robust data model, using elements of Domain Driven Design(DDD) and implemented in
                        Laravel's Eloquent Active Record based ORM. With a focus on demonstrating many different technologies.
                    </p>
                    <h3>Technology Demonstrations</h3>
                    <p>In addition to using all of the latest features of Bootstrap 4 beta, ES6, vue.js and chart.js the project demonstrates several features of Laravel including custom middleware, dependency injection via Service Container binding of repositories using interfaces, new for laravel 5.5 api resource classes and every type of Eloquent relationship.
                    </p>
                    <h3>Incomplete Features</h3>
                    <p>There are several missing features including:</p>
                    <ul>
                        <li>An actual developed onboarding page</li>
                        <li>The provisioning of a new subdomain for each customer signup.</li>
                        <li>The product comparison table is not responsive. It needs more love.</li>
                        <li>The dashboard is in progress.</li>
                    </ul>
                    <h3>What's Next</h3>
                    <p>After a brief pause to take a Udemy node.js course, I am continuing to work on Admin dashboard. Considering making a clone
                        of this project using express after the dashboard is complete to demonstrate node.js knowledge.  We'll see.
                    </p>
                    <h3>Dashboard</h3>
                    <p>Using laravel 5.5's new Resource classes to wrap the domain model with a thin layer to convert entities to
                        item and collection representations to feed a chart.js generated dashboard.

                    <p>Using Vue with axios to handle the data requests and interactivity of the dashboard to render the conversion data using
                        chart.js charts, with a little bit of help from d3.
                    </p>
                    <p>The dashboard loads by drawing a simple frame via the blade templates of laravel and loading a javascript file, scdashboard.js
                    </p>
                    <ul>
                        <li>scdashboard.js has a class (ScDashboard) and a simple onload event handler to load itself.</li>
                        <li>ScDashboard then looks at the route that it is running on, and reads in a navigation.json config file along with layout.json files for each dashboard view defined in the navigation.json config</li>
                        <li>An async GET request is made to the current route's api that pulls in the necessary data for all charts and datasets on the current view.</li>
                        <li>All charts defined on the current dashboard's layout.json file are extracted via a recursive function</li>
                        <li>While the async call is running a Vue instance is loaded via single file components to render the view.</li>
                        <li>A Vue global event bus is created to emit events coming from Vue back up to ScDashboard</li>
                        <li>Then a class that represents each chart, extending from a base ScChart, is instantiated.</li>
                        <li>Three functions are called on these chart classes, polishData, setLabels, and makeDatasets.</li>
                        <li>Then the chart is loaded into the Vue.js generated view.</li>
                    </ul>
                    <p>This design uses ScDashboard to control application state.
                    </p>
                    <ul>
                        <li>The classic architecture of data -> layout -> events -> data is used.</li>
                        <li>It keeps application management out of Vue, limiting it solely to render layout and to register events</li>
                        <li>Extending the dashboard is easily done by updating the layout.json file for creating a new dashboard, and creating new ChartXXXXX.js class for each chart.</li>

                    </ul>

                    </ul>
                </div>
            </div>
        </div>
        <div class="row" style="min-height: 500px;">
            <div class="col">

            </div>
        </div>
    </section>
@endsection
