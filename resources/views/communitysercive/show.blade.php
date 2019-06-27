@extends('layouts.app')
@section('content')
@include('partials.topNav')
@include('layouts.mainNav')

<!-- banner section -->
<div class="title-section module">
    <div class="row">
        <div class="small-12 columns">
            <h1>Community Sercive</h2>
            <div class="tx-div"></div>
        </div><!-- Top Row /-->
        <div class="small-12 columns">
            <ul class="breadcrumbs">
                <li><a href="/">Home</a></li>
                <li class="active"><a href="{{ route('communitysercive.index') }}">Community Sercive</a></li>
                <li class="active"><a href="#">{!! $communitysercive->title  !!}</a></li>
            </ul><!-- Breadcrumbs /-->
        </div><!-- Bottom Row /-->
    </div><!-- Row /-->
</div>
<!-- End of the banner section -->


<div class="content-section module blog-page">
    <div class="row">

        <div class="medium-8 small-12 columns posts-wrap">
            <h3>{!! $communitysercive->title  !!}</h3>
            <div class="event-thumb">
                <img  src="{{ Voyager::image( $communitysercive->image ) }}" alt="{!! $communitysercive->title !!}"/>
            </div>
            <div class="event-content">
                <p>{!! $communitysercive->content  !!}</p>
            </div>
        </div><!-- Posts wrap ends /-->

        <div class="medium-4 small-12 columns sidebar">
            <div class="widget">
                <h2>Community Sercive</h2>
                <ul class="menu vertical">
                    @forelse($communitysercives as $communitysercive)
                        <li><a href="{{ route('communitysercive.show',$communitysercive->slug) }}">{!! $communitysercive->title !!}</a></li>
                    @empty
                        <li>No community sercive at the moment<li>
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
