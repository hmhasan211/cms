@extends('welcome')
@section('title','Team')

@section('content')
<div role="main" class="main">
    <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-5" style="background-image: url(img/page-header/page-header-background.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1>Our <strong>Team</strong></h1>
                    <span class="sub-title">We are proud to introduce you to our team.</span>
                </div>
                
            </div>
        </div>
    </section>

    <div class="container py-4">

        <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="team" data-option-key="filter">
            <li class="nav-item active" data-option-value="*"><a class="nav-link text-1 text-uppercase active" href="#">Show All</a></li>
            <li class="nav-item" data-option-value=".leadership"><a class="nav-link text-1 text-uppercase" href="#">Leadership</a></li>
            <li class="nav-item" data-option-value=".marketing"><a class="nav-link text-1 text-uppercase" href="#">Marketing</a></li>
            <li class="nav-item" data-option-value=".development"><a class="nav-link text-1 text-uppercase" href="#">Development</a></li>
            <li class="nav-item" data-option-value=".design"><a class="nav-link text-1 text-uppercase" href="#">Design</a></li>
        </ul>

        <div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
            <div class="row team-list sort-destination" data-sort-id="team">
                @foreach ($teams as $team)
                   
                <div class="col-12 col-sm-6 col-lg-3 isotope-item leadership">
                    <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                        <span class="thumb-info-wrapper">
                            <a href="about-me.html">
                                <img src="{{ $team->image }}" class="img-fluid" alt="">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">{{ $team->name }}</span>
                                    <span class="thumb-info-type">{{ $team->designition }}</span>
                                </span>
                            </a>
                        </span>
                        <span class="thumb-info-caption">
                            <span class="thumb-info-caption-text">{{ $team->about }}</span>
                            <span class="thumb-info-social-icons mb-4">
                                
                                <a target="_blank" href="http://www.facebook.com"><i class="fab fa-facebook-f"></i><span>{{ $team->facebook }}</span></a>
                                <a target="_blank" href="http://www.facebook.com"><i class="fab fa-facebook-f"></i><span>{{ $team->twitter }}</span></a>
                                <a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>{{ $team->linkedin }}</span></a>
                            </span>
                        </span>
                    </span>
                </div>
                 @endforeach
            </div>

        </div>

    </div>

</div>

@endsection
