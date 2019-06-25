@extends('layouts.app')
@section('title', 'Student Services')
@section('content')
@include('partials.topNav')
@include('layouts.mainNav')

<!-- banner section -->
        <div class="title-section module">
            <div class="row">

                <div class="small-12 columns">
                    <h1>Student Service Information</h1>
                </div><!-- Top Row /-->

                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                         <li class="active"><a href="/">Home</a></li>
                         <li class="active"><a href="">Academics</a></li>
                         <li class="active"><a href="{{ route('services.index') }}">Student Service Information</a></li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->

            </div><!-- Row /-->
        </div>

<!-- End of the banner section -->

<!-- Content section -->

 <div class="content-section module single-products-page products-page">
        <!-- Content Section Ends /-->
		<!-- Related Products -->
        	<div class="row">
                <div class="products-wrap">
                @forelse ($services as $service)
                    <div class="medium-4 small-12 columns">
                        <div class="single-product"
                         data-aos="zoom-in-up"  data-aos-duration="3000"
                        >
                            <div class="product-img thumbnail">
                                <a href="{{route('services.show',$service->slug)}}">
                                    <img class="front-image" src="{{ Voyager::image( $service->thumbnail('cropped'))}}">
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
                    <h4 align="center">There is no services at moment!</h4>
                @endforelse

                </div><!-- products wrap -->

            </div><!-- Row Ends -->
        </div>
        <!-- Related Products Ends /-->
        <!-- Call to Action box -->
        @include('partials.call')
        <!-- Call to Action End /-->
@include('partials.footer')
@endsection


