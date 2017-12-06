@extends('layouts.frame')

@section('content')
    <section>
        <div class="container-fluid">
            <div class="row bg-white p-5 m-5">
                <div class="col m-5">
                    <h1>About SaaSsy Cloud</h1>
                    <h3>Summary</h3>
                    <p>An in-progress demo project written with PHP 7.1, Laravel 5.5, vue.js 2.5 and Bootstrap 4 beta 2.</p>
                    <h3>Theme</h3>
                    <p>The project uses a whimsical theme of a fictional SaaS company, SaaSsy Cloud, that markets extra power ups in the Super Mario Brothers World, as if it were a real place. It merely provides a comparison of product packages and a way for customers to sign up for a free trial. However, baked into the signup is a complete tracking system of all http requests with a focus on conversions. It also features automated assignment of a sticky A/B view group that demonstrate how one could use this technique to maximize visitor conversions.</p>
                    <h3>Architecture</h3>
                    <p>This project demonstrates the use of a robust data model, using elements of Domain Driven Design(DDD) and implemented in Laravel's Eloquent Active Record based ORM.</p>
                    <h3>Technology Demonstrations</h3>
                    <p>In addition to using all of the latest features of Bootstrap 4 beta, the project demonstrates several features of Laravel including custom middleware, dependency injection via Service Container binding of repositories using interfaces, and every type of Eloquent relationship.</p>
                    <h3>What's Next</h3>
                    <p>This is in progress, and an admin dashboard that visualizes the conversion data written in Vue.js will be the next major feature added, as an example implementation of a modern javascript framework.</p>
                    <h3>Motivation</h3>
                    <p>I possess extensive full stack development experience, however, as all of my work over the past seven+ years is owned by my former employer, I felt I needed a demonstration project to be able to serve as a point of discussion for potential new employers.</p>
                    <h3>Incomplete Features</h3>
                    <p>There are several missing features including:</p>
                    <ul>
                        <li>An actual developed onboarding page</li>
                        <li>The provisioning of a new subdomain for each customer signup.</li>
                        <li>The product compariosn table is not responsive. It needs more love.</li>
                    </ul>
                    <h3>Notes</h3>
                    <ul>
                        <li>This was the first project that I used bootstrap and laravel.</li>
                        <li>They were both very simple to pickup with my background of engineering and authoring robust front end and back end frameworks of my own.</li>
                        <li>This will be the first project I have ever used Vue.js.</li>
                        <li>Because I have been writing complex one page javascript applications for over a decade, using pojos and then later with jQuery, I do not expect the learning curve to be high</li>
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
