@extends('layouts.app')
@section('content')
@include('partials.topNav')
@include('layouts.mainNav')

<!-- banner section -->
<div class="title-section module">
    <div class="row">
        <div class="small-12 columns">
            <h1>Community service</h2>
            <div class="tx-div"></div>
        </div><!-- Top Row /-->
        <div class="small-12 columns">
            <ul class="breadcrumbs">
                <li><a href="/">Home</a></li>
                <li class="active"><a href="{{ route('communityservice.index') }}">Community service</a></li>
                <li class="active"><a href="#">{!! $communityservice->title  !!}</a></li>
            </ul><!-- Breadcrumbs /-->
        </div><!-- Bottom Row /-->
    </div><!-- Row /-->
</div>
<!-- End of the banner section -->


<div class="content-section module blog-page">
    <div class="row">

        <div class="medium-8 small-12 columns posts-wrap">
            <h2>{!! $communityservice->title  !!}</h2>
            <div class="event-thumb">
                <img  src="{{ Voyager::image( $communityservice->image ) }}"  class="thumbnail" alt="{!! $communityservice->title !!}"/>
            </div>
            <div class="event-content">
                <p>{!! $communityservice->content  !!}</p>
            </div>
        </div><!-- Posts wrap ends /-->

        <div class="medium-4 small-12 columns sidebar">
            <div class="widget">
                <h2>Community service</h2>
                <ul class="menu vertical">
                    @forelse($communityservices as $communityservice)
                        <li><a href="{{ route('communityservice.show',$communityservice->slug) }}">{!! $communityservice->title !!}</a></li>
                    @empty
                        <li>No community service at the moment<li>
                    @endforelse
                </ul>
            </div>
        </div>

    </div><!-- Row Ends /-->
</div>


<!-- Call to Action box -->
@include('partials.call')
<!-- Call to Action End /-->
@include('partials.footer')
@endsection
