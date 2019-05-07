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
                        <h2>Faculties, Schools and Instituate</h2>
                        <p>we have more than <strong>{{$faculties->count() }}</strong> Faculties, Schools and Instituate!</p>
                    </div>
                </div><!-- title ends -->
                
                <div class="products-wrap">
                @forelse ($faculties as $f)
                    <div  class="medium-4 small-12 columns" >
                        <div class="single-product">
                            <div class="product-img thumbnail" data-aos="zoom-in-down" data-aos-anchor-placement="bottom-bottom" data-aos-duration="1000">
                                <a href="{{route('faculty.show',$f->slug)}}">
                                    <img   class="front-image" src="{{ Voyager::image( $f->thumbnail('cropped'))}}">
                                </a>
                                <div class="add-to-cart-top">
                                        <a href="{{route('faculty.show',$f->slug)}}" class="button primary">{{$f->name}}</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <h6><a href="{{route('faculty.show',$f->slug)}}">{{$f->name}}</a></h6>
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
