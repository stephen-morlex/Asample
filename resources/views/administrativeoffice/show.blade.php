@extends('layouts.app')
@section('content')
@include('partials.topNav')
@include('layouts.mainNav')

<!-- banner section -->
<div class="title-section module">
    <div class="row">
        <div class="small-12 columns">
            <h1>Administrative Offices</h2>
            <div class="tx-div"></div>
        </div><!-- Top Row /-->
        <div class="small-12 columns">
            <ul class="breadcrumbs">
                <li><a href="/">Home</a></li>
                <li class="active"><a href="{{ route('administrativeoffice.index') }}">Administrative Offices</a></li>
                <li class="active"><a href="#">{!! $administrative_office->title  !!}</a></li>
            </ul><!-- Breadcrumbs /-->
        </div><!-- Bottom Row /-->
    </div><!-- Row /-->
</div>
<!-- End of the banner section -->


<div class="content-section module blog-page">
    <div class="row">

        <div class="medium-8 small-12 columns posts-wrap">
            <h3>{!! $administrative_office->title  !!}</h3>
            <div class="event-thumb">
                <img  src="{{ Voyager::image( $administrative_office->image ) }}" alt="{!! $administrative_office->title !!}"/>
            </div>
            <div class="event-content">
                <p>{!! $administrative_office->content  !!}</p>
            </div>
        </div><!-- Posts wrap ends /-->

        <div class="medium-4 small-12 columns sidebar">
            <div class="widget">
                <h2> Administrative Offices</h2>
                <ul class="menu vertical">
                    @forelse($administrative_offices as $administrative)
                        <li><a href="{{ route('administrativeoffice.show',$administrative->slug) }}">{!! $administrative->title !!}</a></li>
                    @empty
                        <li>No administrative offices at the moment<li>
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
