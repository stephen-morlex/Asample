@extends('layouts.app')

@section('content')
@include('partials.topNav')
@include('layouts.mainNav')
<!-- Content section -->
<br>
<div class="row">
        <div class=" small-12 columns">
          <nav aria-label="You are here:" role="navigation">
            <ul class="breadcrumbs">
              <li class="active"><a href="/">Home</a></li>
              <li class="active"><a href="{{ route('services.index') }}">Student Services Information</a></li>
            </ul>
          </nav>
        </div>
      </div>

<!-- Call to Action box -->

<!-- Content section -->
<br>
<div class="content-section module blog-page">

    <div class="row">

            <div class="our-store grey-bg">
                    <div class="row">
                        <div class="section-title-wrapper">
                            <div class="section-title">
                                <h2>Student Services Information</h2>
                            </div>
                        </div><!-- title ends -->

                        <div class="products-wrap">
                           @foreach ($services as $sr)
                           <div class="medium-3 small-12 columns">
                                <div class="single-product">
                                    <div class="product-img thumbnail">
                                        <a href="{{ route('services.show',$sr->slug) }}">
                                            <img alt="" class="front-image" src="images/product2.jpg">
                                        </a>

                                        <div class="add-to-cart-top">
                                                <a href="{{ route('services.show',$sr->slug) }}" class="button primary">{{ $sr->name }}</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h6><a href="{{ route('services.show',$sr->slug) }}">{{ $sr->name }}</a></h6>
                                    </div>
                                </div>
                            </div>
                           @endforeach

                        </div><!-- products wrap -->

                    </div><!-- Row Ends -->
                </div>
    </div><!-- Row Ends /-->

</div>
<!-- Content Section Ends /-->

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
