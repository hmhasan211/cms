@extends('welcome')
@section('title','Services')

@section('content')
    <div role="main" class="main">
        <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url(img/page-header/page-header-services.jpg);">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="text-10">Our <strong>Services</strong></h1>
                        <span class="sub-title">We Are Here To Help You</span>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb breadcrumb-light d-block text-center">
                            <li><a href="#">Home</a></li>
                            <li class="active">Pages</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

      	<div class="container py-5">
                
          
					<div class="row pb-4 mt-2">
                        @foreach ($services as $service)

						<div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter">
							<div class="feature-box feature-box-style-2">
								<div class="feature-box-icon">
									<i class="icons icon-support text-color-primary"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="font-weight-bold mb-2">{{$service->title}}</h4>
									<p>{{$service->description}}</p>
								</div>
							</div>
						</div>
						
                        @endforeach		

					</div>
		</div>				

				<section class="section section-primary border-top-0 mb-0">
					<div class="container">
						<div class="row counters counters-sm counters-text-light">
							<div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
								<div class="counter">
									<strong data-to="40000" data-append="+">0</strong>
									<label class="opacity-5 text-4 mt-1">Happy Clients</label>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
								<div class="counter">
									<strong data-to="3500" data-append="+">0</strong>
									<label class="opacity-5 text-4 mt-1">Answered Tickets</label>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
								<div class="counter">
									<strong data-to="16">0</strong>
									<label class="opacity-5 text-4 mt-1">Pre-made Demos</label>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="counter">
									<strong data-to="3000" data-append="+">0</strong>
									<label class="opacity-5 text-4 mt-1">Development Hours</label>
								</div>
							</div>
						</div>
					</div>
				</section>

               <div class="container-fluid">
              
              @foreach ($services as $service)
                    
					<div class="row align-items-center bg-color-grey">
						<div class="col-lg-6 p-0">
							<section class="parallax section section-parallax custom-parallax-bg-pos-left custom-sec-left h-100 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}" data-image-src="img/generic/generic-corporate-3-1-full.jpg" style="min-height: 315px;">
							</section>
						</div>
						<div class="col-lg-6 p-0">
							<section class="section section-no-border h-100 m-0">
								<div class="row m-0">
									<div class="col-half-section col-half-section-left">
										<div class="overflow-hidden">
											<h4 class="mb-0 appear-animation" data-appear-animation="maskUp"><a href="#" class="text-4 font-weight-bold pt-2 d-block text-dark text-decoration-none pb-1">{{$service->title}}</a></h4>
										</div>
										<div class="overflow-hidden mb-2">
											<p class="mb-0 lead text-4 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">{{$service->sub_title}}</p>
										</div>
										<p class="text-2 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">{{$service->description}}</p>
									</div>
								</div>
							</section>
						</div>
					</div>
                    @endforeach 
				</div>

                <div class="container">
					<div class="row py-5 mt-5 mb-4">
						<div class="col-md-6 mb-5 mb-md-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
							<div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark testimonial-remove-right-quote mb-0">
								<div class="testimonial-author">
									<img src="img/clients/client-1.jpg" class="img-fluid rounded-circle mb-0" alt="">
								</div>
								<blockquote>
									<p class="text-color-dark text-5 line-height-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ornare, risus vel tristique pharetra.</p>
								</blockquote>
								<div class="testimonial-author">
									<p><strong class="font-weight-extra-bold text-3 mb-1">John Doe</strong><span>Okler</span></p>
								</div>
							</div>
						</div>
						<div class="col-md-6 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
							<div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark testimonial-remove-right-quote mb-0">
								<div class="testimonial-author">
									<img src="img/clients/client-2.jpg" class="img-fluid rounded-circle mb-0" alt="">
								</div>
								<blockquote>
									<p class="text-color-dark text-5 line-height-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum sollicitudin risus, non lacini.</p>
								</blockquote>
								<div class="testimonial-author">
									<p><strong class="font-weight-extra-bold text-3 mb-1">Melinda Doe</strong><span>Okler</span></p>
								</div>
							</div>
						</div>
					</div>
				</div>

    </div>

@endsection
