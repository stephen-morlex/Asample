@extends('layouts.app')
@section('title', $dean->name)
@section('content')
@include('partials.topNav')
@include('layouts.mainNav')
<!-- banner section -->
        <div class="title-section module">
            <div class="row">
                <div class="small-12 columns">
                    <h1>Student Services Information</h1>
                </div><!-- Top Row /-->
                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                         <li class="active"><a href="/">Home</a></li>
                         <li class="active"><a href="{{ route('faculty.index') }}">Academics</a></li>
                        <li class="active"><a href="{{ route('dean.show',$dean->slug) }}">{{ $dean->name }}</a></li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->
            </div><!-- Row /-->
        </div>
<!-- End of the banner section -->

<!-- Content section -->
<div class="content-section module blog-page">
    <div class="row">
            <div class=" medium-12 small-12 columns about-the-author">
                    <h3 class="author-title">{{ $dean->name }}</h3>
                    <hr>
                    <div class="row">
                      <div class="small-12 medium-4 columns">
                        <div class="author-image">
                          <img src="{{ Voyager::image( $dean->image)}}">
                        </div>
                      </div>
                      <div class="small-12 medium-8 columns">
                        <h4 class="separator-left">Word from the Dean of the {{ $dean->faculty->name }}</h4>
                        <p>{!! $dean->content !!}</p>
                      </div>
                    </div>
                  </div>
    </div><!-- Row Ends /-->

</div>
<!-- Content Section Ends /-->
<!-- Call to Action box -->
@include('partials.call')
<!-- Call to Action End /-->
@include('partials.footer')
@endsection
