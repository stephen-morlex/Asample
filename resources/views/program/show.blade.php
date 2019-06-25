@extends('layouts.app')
@section('title', $program->name)
@section('content')
@include('partials.topNav')
@include('layouts.mainNav')

<!-- banner section -->
        <div class="title-section module">
            <div class="row">

                <div class="small-12 columns">
                    <h1>Programme</h1>
                </div><!-- Top Row /-->
                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                     <li><a href="/">Home</a></li>
                     <li class="active"><a href="{{ route('faculty.index') }}">Academics</a></li>
                     <li ><a href="{{route('program.index')}}">Programmes</a></li>
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
                 <h3>{{ $program->name }}</h3>
                 <div class="tx-div"></div>
                <img src="{{ Voyager::image( $program->image)}}" style=" width:auto;" />
            </div><!-- Course Thumb /-->
            <div class="event-content">
              <p> {!!  $program->body  !!}</p>
            </div><!-- Course content /-->
        </div><!-- Posts wrap ends /-->
        <div class="medium-3 small-12 columns sidebar">
            <div class="widget">
                <h2>Under</h2>
                <ul class="menu vertical">
                    <li><a href="{{ route('faculty.show',$program->faculty->slug) }}">{!!$program->faculty->name  !!}</a></li>
                </ul>
            </div><!-- widget ends /-->
            <div class="widget">
                <ul class="menu vertical">
                    <li><a href="{{ route('admission.show',$program->section->slug) }}"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Click here to apply</a></li>
                </ul>
            </div><!-- widget ends /-->

         </div>
    </div>
</div>
<!-- Content Section Ends /-->
<!-- Call to Action box -->
@include('partials.call')
<!-- Call to Action End /-->
@include('partials.footer')
@endsection
