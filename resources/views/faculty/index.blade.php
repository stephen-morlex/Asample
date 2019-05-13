  @extends('layouts.app')


	@section('content')
	@include('partials.topNav')
	@include('layouts.mainNav')

<!-- banner section -->
		<div class="title-section module">
			<div class="row">

				<div class="small-12 columns">
					<h1>Faculties, Schools and Instituate</h1>
				</div><!-- Top Row /-->

				<div class="small-12 columns">
					<ul class="breadcrumbs">
						 <li class="active"><a href="/">Home</a></li>
						 <li class="active"><a href="">Academics</a></li>
			  			<li class="active"><a href="#">Faculties, Schools and Instituate</a></li>
					</ul><!-- Breadcrumbs /-->
				</div><!-- Bottom Row /-->
				
			</div><!-- Row /-->
		</div>

<!-- End of the banner section -->

		  <!-- Content section -->
		  <div class="content-section course-page">
				<!-- Seminar/Events -->
				<div class="module">
					<div class="row">

						<div class="courses-wrapper">

							<div class="course-section">

							   <!--  <div class="section-title">
									<h2><span>Faculties, Schools & Institutes</span></h2>
								</div> -->

									@forelse ($faculties as $fa)

									<!-- <div class="medium-6 small-12 columns">

										<div class="course">

											<div class="course-thumb animated zoomInRight delay-1s">
												<a href="{{ route('faculty.show', $fa->slug) }}">
												<img src="{{ Voyager::image($fa->image) }}" alt="{{ $fa->name }}" title="{{ $fa->name }}" />
												 </a>
											</div>
											<h3>{{ Str::limit($fa->name) }}</h3>
										 <a  class="middle" href="{{ route('faculty.show',$fa->slug) }}" class="secondary button">More About {{ Str::limit($fa->name,50) }}</a>
									  <br>
										</div><br>
									</div> -->


									<div class="medium-3 small-12 columns">
									  <div class="single-product">
										  <div class="product-img thumbnail" data-aos="fade-up"data-aos-anchor-placement="bottom-bottom" data-aos-duration="2000">
											  <a href="{{ route('faculty.show', $fa->slug) }}">
												  <img   class="front-image" src="{{ Voyager::image($fa->image) }}" alt="{{ $fa->name }}">
											  </a>
											  <div class="add-to-cart-top" >
													  <a href="{{ route('faculty.show', $fa->slug) }}" class="button primary">{{$fa->name}}</a>
											  </div>
										  </div>
										  <div class="product-info" data-aos="zoom-in"data-aos-anchor-placement="bottom-bottom" data-aos-duration="3000">
											  <h6><a href="{{ route('faculty.show', $fa->slug) }}">{{$fa->name}}</a></h6>
											 <div class="tx-div"></div>
										  </div>
									  </div>
								  </div><!-- product Ends here -->



									@empty
											<h3> There is no faculties uploaded yet.</h3>
									@endforelse


								<div class="clearfix"></div>
							</div><!-- Courses Section Ends /-->

						</div><!-- Events Wrapper Ends /-->

					</div><!-- Row Ends /-->
				</div>
				<!-- Seminar Events Ends /-->

			</div>
			<!-- Content Section Ends /-->





		<!-- Call to Action box -->
		<div class="call-to-action">
		   <div class="row">
				<div class="medium-10 small-12 columns">
					<h2><i class="fa fa-phone" aria-hidden="true"></i> 	If you Have Any Questions Call Us On <span>(010)123-456-7890</span></h2>
				</div>
				<div class="medium-2 small-12 columns">
					<a href="#" class="button secondary">Appointment</a>
				</div>
		   </div><!-- row /-->
		 </div>
		<!-- Call to Action End /-->



@include('partials.footer')
@endsection


