# SaaSsy Cloud

[Live Demo Site](https://saassycloud.com/)

## Summary
An in-progress demo project written with PHP 7.1, Laravel 5.5, Bootstrap 4 beta 2. The front end functionality of the 
dashboard uses several javascript frameworks and libraries including chart.js, vue.js and several well known utility libraries 
including axios, lodash and d3.

## Theme
The project uses a whimsical theme of a fictional SaaS company, SaaSsy Cloud, that markets extra power ups in the Super Mario Brothers World, as if it were a real place. It merely provides a comparison of product packages and a way for customers to sign up for a free trial. However, baked into the signup is a complete tracking system of all http requests with a focus on conversions. It also features automated assignment of a sticky A/B view group that demonstrate how one could use this technique to maximize visitor conversions.

## Architecture
This project demonstrates the use of a robust data model, using elements of Domain Driven Design(DDD) and implemented in
 Laravel's Eloquent Active Record based ORM. With a focus on demonstrating many different technologies.

## Technology Demonstrations
In addition to using all of the latest features of Bootstrap 4 beta, ES6, vue.js and chart.js the project demonstrates several features of Laravel including custom middleware, dependency injection via Service Container binding of repositories using interfaces, new for laravel 5.5 api resource classes and every type of Eloquent relationship.

## Motivation
I possess extensive full stack development experience, however, all of my work over the past seven+ years is owned by my former employer. I needed a demonstration project to be able to serve as a point of validation and discussion for potential new employers.

## Incomplete Features
There are several missing features including:
* An actual developed onboarding page
* The provisioning of a new subdomain for each customer signup
* The comparison table is not responsive. It needs more love.
* The dashboard is in progress.

## What's Next
After a brief pause to take a Udemy node.js course, I am continuing to work on Admin dashboard. Considering making a clone 
of this project using express after the dashboard is complete to demonstrate node.js knowledge.  We'll see.

## Dashboard
Using laravel 5.5's new Resource classes to wrap the domain model with a thin layer to convert entities to
item and collection representations to feed a chart.js generated dashboard.

Using Vue with axios to handle the data requests and interactivity of the dashboard to render the conversion data using 
chart.js charts, with a little bit of help from d3.