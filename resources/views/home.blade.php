@extends('layouts.main')

@section('title', 'Getting started with Laravel Lumen')

@section('content')
    <div class="jumbotron">
        <h1 class="display-3">API Documentation</h1>
        <p class="lead">This document aims to help understand the API structure for new team taking over the project. It will explain how HTTP requests are handled and relevent documentation useful from learning Laravel Lumen for newbies</p>
        <p><a class="btn btn-lg btn-success" href="{{url('selfie/v1/projects')}}" role="button">View Current Projects</a></p>
    </div>

    <div class="row marketing">
        <div class="about">
            <h4>Project Overview</h4>
            <p>The 3D Mini Selfie Project stems from Richard Garsthagen who is the creator of the website
                <a href="http://www.pi3dscan.com" target="_blank">www.pi3dscan.com</a> and the originator of the Raspberry Pi 3D scanning model. On Richard’s
                website, he has blogs, videos, and information about 3D scanning with Raspberry Pi’s
                which will be prove to be very helpful as we move towards working on the project.</p>
            <p>The aim of this project is to essentially replicate what Richard Garsthagen has done, but in
                a smaller size. This is due to limitations we adhere to such as time and cost constraints.
                With the assistance of our client Andrew Leahy and academic supervisor Chris Boulamatsis,
                we hope to successfully implement the knowledge that has been gathered from Richard
                Garsthagen’s documentation and resources, the previous student’s work as well as hands
                on experience to overcome any obstacles and deliver an excellent product.</p>
        </div>
        <div class="lumen">
            <h4>Using Laravel's Lumen</h4>
            <p><a href='https://lumen.laravel.com/' target="_blank">Lumen</a> is a stripped down version of the Laravel Web Framework specifically built for APIs. As part of the 3D Mini Selfie project, we have implemented this framework to build this API. Please see the <a href="https://github.com/Thomas-Obale/Selfie_Project_Web_API" target="_blank">Github repository</a> to access the full project with some instructions within the <code>readme.md</code> file on how you could get started with using the API</p>

            <h6>Using Laravel Lumen</h6>
            <p>The 3D Mini Selfie  API is made of routes and the whole collection of routes are located in the <a href="https://github.com/Thomas-Obale/Selfie_Project_Web_API/blob/master/routes/web.php" target="_blank">routes/web.php</a> directory. To learn/read more about routes, please refer back to the <a href="https://lumen.laravel.com/docs/5.5/routing" target="_blank">Lumen documentation</a></p>

            <p>Other useful Lumen documentation you may need to understand what has already been done with the API, please refer to the following documentations</p>
            <ul>
                <li><a href="https://laravel.com/docs/5.5/migrations" target="_blank">Database Migrations</a></li>
                <li><a href="https://laravel.com/docs/5.5/eloquent" target="_blank">Laravel Elequent</a></li>
                <li><a href="https://lumen.laravel.com/docs/5.5/controllers" target="_blank">Controllers</a></li>
                <li><a href="https://laravel.com/docs/5.5/helpers" target="_blank">Usefull Helper Functions</a></li>
            </ul>
        </div>
    </div>
@endsection
