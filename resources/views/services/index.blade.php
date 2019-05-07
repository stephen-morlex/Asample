@extends('layouts.app')

@include('partials.topNav')
@include('layouts.mainNav')
<br>
<div class="row">
        <div class=" small-12 columns">
          <nav aria-label="You are here:" role="navigation">
            <ul class="breadcrumbs">
              <li class="active"><a href="/">Home</a></li>
              <li class="active"><a href="{{ route('faculty.index') }}">Faculties, Schools and Instituate</a></li>
            </ul>
          </nav>
        </div>
      </div>

@section('content')

<!-- Content section -->
        <div class="content-section module single-products-page products-page">
            <div class="row">
            	
               
                
            </div><!-- Row Ends /-->
        </div>
        <!-- Content Section Ends /-->
        
		<!-- Related Products -->
       
        	<div class="row">
            	<div class="section-title-wrapper">
                    <div class="section-title">
                        <h2>Student Services Information</h2>
                        <br>
                    </div>
                </div><!-- title ends -->
                
                <div class="products-wrap">
                @forelse ($services as $service)
                    <div class="medium-4 small-12 columns">
                        <div class="single-product" 
                         data-aos="zoom-in-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="3000"
                        >
                            <div class="product-img thumbnail">
                                <a href="{{route('services.show',$service->slug)}}">
                                    <img   class="front-image" src="{{ Voyager::image( $service->thumbnail('cropped'))}}">
                                </a>
                                <div class="add-to-cart-top">
                                        <a href="{{route('services.show',$service->slug)}}" class="button primary">{{$service->name}}</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <h6><a href="{{route('services.show',$service->slug)}}">{{$service->name}}</a></h6>
                               <div class="tx-div"></div>
                            </div>
                        </div>
                    </div><!-- product Ends here -->
                @empty
                    
                @endforelse
                	
                </div><!-- products wrap -->
                
            </div><!-- Row Ends -->
        </div>
        <!-- Related Products Ends /-->
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
