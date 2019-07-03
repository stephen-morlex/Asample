@extends('layouts.app')
@section('content')
@include('partials.topNav')
@include('layouts.mainNav')

<!-- banner section -->
<div class="title-section module">
    <div class="row">
        <div class="small-12 columns">
            <h1>Scholarship</h2>
            <div class="tx-div"></div>
        </div>
        <div class="small-12 columns">
            <ul class="breadcrumbs">
                <li><a href="/">Home</a></li>
                <li class="active"><a href="#">Scholarships</a></li>
                <li class="active"><a href="#">{{ $scholarships->title }}</a></li>
            </ul>
        </div>
    </div><!-- Row /-->
</div>
<!-- End of the banner section -->


<div class="content-section module blog-page">
    <div class="row">

        <div class="medium-8 small-12 columns posts-wrap">
                <h3>{!! $scholarships->title !!}</h3>
                {{-- <div class="event-thumb">
                    <img  src="{{ Voyager::image( $scholarships->image ) }}"  class="thumbnail" alt="{!! $scholarships->title !!}"/>
                </div> --}}
                <!-- <div class="event-content">
                    <p>{!! $scholarships->content !!}</p>
                </div> -->
        </div><!-- Posts wrap ends /-->


        <div class="medium-4 small-12 columns sidebar">
            <div class="widget">
                <h2>All Scholarships</h2>
                <ul class="menu vertical">
                    @forelse($allscholarships as $all)
                        <li><a href="{{ route('scholarships.show',$all->slug) }}">{!! $all->title !!}</a></li>
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
