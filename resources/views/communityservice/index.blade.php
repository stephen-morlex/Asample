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
        </div>
        <div class="small-12 columns">
            <ul class="breadcrumbs">
                <li><a href="/">Home</a></li>
                <li class="active"><a href="#">Community service</a></li>
            </ul>
        </div>
    </div><!-- Row /-->
</div>
<!-- End of the banner section -->


<div class="content-section module blog-page">
    <div class="row">

        <div class="medium-8 small-12 columns posts-wrap">
            @forelse($first_community_service as $community_service)
                <h2>{!! $community_service->title !!}</h2>
                <div class="event-thumb">
                    <img  src="{{ Voyager::image( $community_service->image ) }}"  class="thumbnail" alt="{!! $community_service->title !!}"/>
                </div>
                <div class="event-content">
                    <p>{!! $community_service->content !!}</p>
                </div>
            @empty
                <h2>No community service at the moment<h2>
            @endforelse
        </div><!-- Posts wrap ends /-->
        <div class="medium-4 small-12 columns sidebar">
            <div class="widget">
                <h2> Community Services</h2>
                <ul class="menu vertical">
                    @forelse($community_services as $community_service)
                        <li><a href="{{ route('communityservice.show',$community_service->slug) }}">{!! $community_service->title !!}</a></li>
                    @empty
                        <li>No community service at the moment<li>
                    @endforelse
                </ul>
            </div>
        </div><!-- right bar ends here /-->
    </div><!-- Row Ends /-->
</div>
<!-- Call to Action box -->
@include('partials.call')
<!-- Call to Action End /-->
@include('partials.footer')
@endsection
