@extends('layouts.app')
@section('title',  'Students Life')
@section('content')
@include('partials.topNav')
@include('layouts.mainNav')

<!-- banner section -->
        <div class="title-section module">
            <div class="row">

                <div class="small-12 columns">
                    <h1>Student Experience</h1>
                </div><!-- Top Row /-->

                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                       <li><a href="/">Home</a></li>
                       <li class="active"><a href="{{route('student.index')}}">Student Experience</a></li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->

            </div><!-- Row /-->
        </div>
 <!-- End of the banner section -->

<!-- Content section -->
          <div class="content-section course-page">

                   <div class="row">

            <div class="products-wrap">
            @forelse ($studentLife as $item)
                <div class="medium-4 small-12 columns">
                    <div class="single-product"
                     data-aos="zoom-in-up"  data-aos-duration="3000"
                    >
                        <div class="product-img thumbnail">
                            <a href="{{route('student.show',$item->slug)}}">
                                <img   class="front-image" src="{{ Voyager::image( $item->thumbnail('cropped'))}}">
                            </a>
                            <div class="add-to-cart-top">
                                    <a href="{{route('student.show',$item->slug)}}" class="button primary">{{$item->name}}</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <h6><a href="{{route('student.show',$item->slug)}}">{{$item->name}}</a></h6>
                           <div class="tx-div"></div>
                        </div>
                    </div>
                </div><!-- product Ends here -->
            @empty
                <h4 align="center">There is no services at moment!</h4>
            @endforelse
            <div class="small-12 small-centered text-center columns">
                    {{ $studentLife->links('pagination') }}
            </div>
            </div><!-- products wrap -->
        </div><!-- Row Ends -->

            </div>
            <!-- Content Section Ends /-->
            <!-- Call to Action box -->
            @include('partials.call')
            <!-- Call to Action End /-->
@include('partials.footer')
@endsection
