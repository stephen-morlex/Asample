@extends('layouts.app')

@section('content')
@include('partials.topNav')
@include('layouts.mainNav')

<!-- banner section -->
        <div class="title-section module">
            <div class="row">

                <div class="small-12 columns">
                    <h1>Programs</h1>
                </div><!-- Top Row /-->

                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                     <li><a href="/">Home</a></li>
                     <li class="active"><a href="">Academics</a></li>
                     <li ><a href="{{route('program.index')}}">Programs</a></li>
                      <li><a href="{{route('program.show',$program->slug)}}"> {{ $program->name }}</a></li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->
                
            </div><!-- Row /-->
        </div>

<!-- End of the banner section -->

<!-- Content section -->
<div class="content-section module blog-page">

    <div class="row">

        <div class="medium-9 small-12 columns posts-wrap">

            <div class="event-thumb">
                <img src="{{ Voyager::image( $program->image)}}"  class="thumbnail" />
            </div><!-- Course Thumb /-->


            <div class="event-content">
                <h2>{{ $program->name }}</h2>
                <p></p>

                    <p>{!!  $program->body  !!}</p>
                </div><!-- Course content /-->

        </div><!-- Posts wrap ends /-->

        <div class="medium-3 small-12 columns sidebar">

            <div class="widget">
                <h2>Under</h2>

                <ul class="menu vertical">
                    <li><a href="{{ route('faculty.show',$program->faculty->slug) }}">{!!$program->faculty->name  !!}</a></li>

                </ul>
            </div><!-- widget ends /-->
    </div><!-- Row Ends /-->

</div>
<!-- Content Section Ends /-->

<!-- Call to Action box -->
<div class="call-to-action">
   <div class="row">
        <div class="medium-10 small-12 columns">
            <h2><i class="fa fa-phone" aria-hidden="true"></i> 	If you Have Any Questions Call Us On <span>(010)123-456-7890</span></h2>
        </div>
        <div class="medium-2 small-12 columns">
            <a href="{{route('contact.index')}}" class="button secondary">Appointment</a>
        </div>
   </div><!-- row /-->
 </div>
<!-- Call to Action End /-->




@include('partials.footer')
@endsection
