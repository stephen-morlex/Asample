@extends('layouts.app')
@section('title', $sectionName)
@section('content')
@include('partials.topNav')
@include('layouts.mainNav')

<!-- banner section -->
        <div class="title-section module">
            <div class="row">
                <div class="small-12 columns">
                    <h1>Programmes</h1>
                </div><!-- Top Row /-->
                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                     <li><a href="/">Home</a></li>
                     <li class="active"><a href="">Academics</a></li>
                     <li ><a href="{{route('program.index')}}">Programmes</a></li>
                     <li class="active"><a href="#">{{ $sectionName }}</a></li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->
            </div><!-- Row /-->
        </div>
<!-- End of the banner section -->
<div class="content-section space-section module testimonial-page">
     <div class="row">
        <div class="medium-8 small-12 columns test-wrap">
             @forelse ($programs as $pro)
                 <div class="medium-12 small-12 columns">
                     <div class="testimonial">
                            <a href="{{ route('program.show',$pro->slug) }}"></a>
                        <div class="testimonial-thumb">
                        <a href="{{ route('program.show',$pro->slug) }}"> <img src="{{ Voyager::image( $pro->thumbnail('cropped'))}}" alt="John Doe" /></a>
                        </div><!-- Testimonial Thumb /-->
                         <div class="testimonial-detail">
                            <h4>{{ $pro->name }}</h4>
                            <a href="{{ route('program.section', $pro->section->slug) }}"><cite>{{ $pro->section->name }} programm</cite></a>
                        </div><!-- Testimonial Detail /-->
                             <div class="clearfix"></div>
                    </div> <!-- Testimonial /-->
                </div><!-- Column Ends /-->
                  @empty
                     <h2>Sorry there are no programs at the moment</h2>
                  @endforelse
                  <div class="small-12 small-centered text-center columns">
                        {{ $programs->links('pagination') }}
                </div>
        </div><!-- testimonial wrap /-->

        <div class="medium-4 small-12 columns sidebar">
            <div class="widget">
                 <h2>Upcoming Events</h2>
                     @foreach ($latestEvents as $event)
                        <div class="popular-post">
                            <a href="{{ route('event.show',$event->slug) }}"><strong>{{ $event->title }}</strong></a>
                            <p><img alt="" src="{{ Voyager::image( $event->thumbnail('small'))}}" class="float-left" />{!! str_limit( $event->content,50) !!} <a href="{{ route('event.show',$event->slug) }}">Read more...</a></p>
                        </div>
                     @endforeach
            </div><!-- widget ends /-->
        </div><!-- right bar ends here /-->
    </div><!-- Row Ends /-->
</div>
<!-- Call to Action box -->
@include('partials.call')
<!-- Call to Action End /-->
@include('partials.footer')
@endsection
