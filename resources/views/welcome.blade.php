@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12 m12">
                <div class="carousel carousel-slider center">
                    <div class="carousel-fixed-item center">
                        <a class="btn waves-effect white grey-text darken-text-2">Read more</a>
                    </div>
                    <div class="carousel-item red white-text" href="#one!">
                        <h2>All-New ScheduleIn 3.0</h2>
                        <p class="white-text">InfiniteDATA will release the third version of its WLA software...</p>
                    </div>
                    <a class="carousel-item" href="#one!"><img src="images/istock-492539318-2000x1421.jpg"></a>
                    <div class="carousel-item amber white-text" href="#two!">
                        <h2>InfiniteDATA puts up its Manila site</h2>
                        <p class="white-text">Led by site manager and InfiniteDATA customer success manager Ariel Kenneth Ampol, InfiniteDATA ........</p>
                    </div>
                    <div class="carousel-item green white-text" href="#three!">
                        <h2>Automate NOW! Warsaw #3 on October 24!</h2>
                        <p class="white-text">For the third time, more than 700 IT professionals will gather for Automate NOW! which focuses on data warehousing, automation, big data, business intelligence......</p>
                    </div>
                    <div class="carousel-item blue white-text" href="#four!">
                        <h2>Fourth Panel</h2>
                        <p class="white-text">This is your fourth panel</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m6">
                <div class="card blue darken-4">
                    <div class="card-content white-text">
                        <span class="card-title">Upcoming this month</span>
                        <ul class="collection grey-text text-darken-4">
                            <li class="collection-item avatar">
                                <img src="images/istock-492539318-2000x1421.jpg" alt="" class="circle">
                                <span class="title">Automate NOW! Warsaw</span>
                                <p>Aug 20 / Wednesday</p>
                                <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                            </li>
                            <li class="collection-item avatar">
                                <i class="material-icons circle">build</i>
                                <span class="title">Patch 30 Release</span>
                                <p>Sept 4 / Friday</p>
                                <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                            </li>
                            <li class="collection-item avatar">
                                <i class="material-icons circle green">computer</i>
                                <span class="title">Title</span>
                                <p>First Line</p>
                                <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                            </li>
                            <li class="collection-item avatar">
                                <i class="material-icons circle red">play_arrow</i>
                                <span class="title">Title</span>
                                <p>First Line</p>
                                <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                            </li>
                            <li class="collection-item avatar">
                                <i class="material-icons circle red">play_arrow</i>
                                <span class="title">Title</span>
                                <p>First Line</p>
                                <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-action">
                        <a href="#" style="color: white">e-Leave Tool</a>
                        <a href="#" style="color: white">See full calendar</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m6">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="images/card.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Where are we now?<i class="material-icons right">more_vert</i></span>
                        <p><a href="#">Download EMA for WLA: Q4 (2017)</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Where are we now?<i class="material-icons right">close</i></span>
                        <p>InfiniteDATA is a software company that provides solutions on data warehousing, business intelligence, workload scheduling, and automation. InfiniteDATA's ScheduleIN is given the recognition by the Enterprise Management Associates (EMA) Radar for Workload Automation Q4: 2017 for its Strong Value and as a Vendor to Watch given that the product has come a long way in just six years since 2012 considering the average age of products in this category is over 20 years.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <!-- <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5> -->
            </div>
        </div>
    </div>
    <div class="parallax"><img src="{{URL::asset('/images/istock-492539318-2000x1421.jpg')}}" alt="Unsplashed background img 2">
    </div>
</div>
<div class="container">
    <div class="section">
<div class="row">
    <div class="col s12 m4">
        <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">folder_open</i></h2>
            <h5 class="center">Latest Documents</h5>
            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
            <a class="waves-effect waves-light btn-small">See all documents</a>
        </div>
    </div>
    <div class="col s12 m4">
        <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">laptop</i></h2>
            <h5 class="center">Patch Releases</h5>
            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
            <a class="waves-effect waves-light btn-small">Electronic Service Delivery</a>
        </div>
    </div>
    <div class="col s12 m4">
        <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">insert_chart</i></h2>
            <h5 class="center">CS Stats</h5>
            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
        </div>
    </div>
</div>
</div>
</div>
<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <!-- <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5> -->
            </div>
        </div>
    </div>
    <div class="parallax"><img src="images/IMG_2162.jpg" alt="Unsplashed background img 3">
    </div>
</div>

@endsection