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
        </div>
        <div class="small-12 columns">
            <ul class="breadcrumbs">
                <li><a href="/">Home</a></li>
                <li class="active"><a href="#">Administrative Offices</a></li>
            </ul>
        </div>
    </div><!-- Row /-->
</div>
<!-- End of the banner section -->
<div class="content-section module blog-page">
    <div class="row">
        <div class="medium-8 small-12 columns posts-wrap">
            @forelse($administratives as $administrative)
                <h3>{!! $administrative->title !!}</h3>
                <div class="tx-div"></div>
                <div class="event-thumb">
                    <img  src="{{ Voyager::image( $administrative->image ) }}" alt="{!! $administrative->title !!}" onerror="this.style.display='none'"/>
                </div>
                <div class="event-content">
                    <p>{!! $administrative->content !!}</p>
                </div>
            @empty
                <h2>No administrative office at the moment<h2>
            @endforelse
        </div><!-- Posts wrap ends /-->
        <div class="medium-4 small-12 columns sidebar">
            <div class="widget">
                <h2> Administrative Offices</h2>
                <ul class="menu vertical">
                 <li><a href="{{ route('chaplaincy.index') }}">Chaplaincy</a></li>
                    @forelse($administrative_offices as $administrative_office)
                        <li><a href="{{ route('administrativeoffice.show',$administrative_office->slug) }}">{!! $administrative_office->title !!}</a></li>
                    @empty
                        <li>No administrative offices at the moment<li>
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
