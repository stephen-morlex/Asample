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
                <h2>{!! $paper->title !!}</h2>
                <div class="event-thumb">
                    <img  src="{{ Voyager::image( $paper->image ) }}"  class="thumbnail" alt="{!! $paper->title !!}"/>
                </div>
                <div class="event-content">
                    <p>{!! $paper->content !!}</p>
                </div>
        </div><!-- Posts wrap ends /-->


        <div class="medium-4 small-12 columns sidebar">
            <div class="widget">
                <h2>Call for papers</h2>
                <ul class="menu vertical">
                    @forelse($allpapers as $all)
                        <li><a href="{{ route('callforpapers.show',$all->slug) }}">{!! $all->title !!}</a></li>
                    @empty
                        <li>No requests at the moment<li>
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
