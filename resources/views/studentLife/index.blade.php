@extends('layouts.app')
@section('title', 'Students Life')
@section('content')
@include('partials.topNav')
@include('layouts.mainNav')

<!-- banner section -->
        <div class="title-section module">
            <div class="row">

                <div class="small-12 columns">
                    <h1>Student Experience</h1>
                </div><!-- Top Row /-->

                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                       <li><a href="/">Home</a></li>
                       <li class="active"><a href="{{route('student.index')}}">Student Experience</a></li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->

            </div><!-- Row /-->
        </div>
 <!-- End of the banner section -->

<!-- Content section -->
    <!-- Seminar/Events -->
    <div class="module">
        <div class="row">
            @forelse ($studentLife as $s)
                    <div class="medium-9 small-12 columns">
                            <div class="event-thumb">
                            <img src="{{ Voyager::image( $s->image ) }}" alt="Something0" class="thumbnail" />
                        </div><!-- Event Thumb /-->
                        <div class="event-content">
                            <p>{!! $s->content !!}!!}</p>
                        </div><!-- Events content /-->
                        </div><!-- Events Wrapper Ends /-->
             @empty
                        <h3>there is no content at the moment !</h3>
            @endforelse




            <div class="medium-3 small-12 columns sidebar">
                <div class="row">
                <div class="widget">
                        <h2>More about student experience</h2>

                    @foreach ($studentSide as $ss)


                    <ol class="menu vertical">

                        <li> <i class="fa fa-list"><a href="{{ route('student.show', $ss->slug) }}">  {{ $ss->name }}</a></i></li>
                    </ol>
                    @endforeach
                </div><!-- widget ends /-->

            <div class="widget">
                    <h2>Popular News</h2>
                    @foreach ($newsSide as $item)

                     <div class="popular-post">
                            <a href="{{ route('news.show', $item->slug) }}"><strong>{{ $item->title }}</strong></a>
                            <p><img alt="" src="{{ Voyager::image( $item->thumbnail('small'))}}" class="float-left" />{!! str_limit($item->content, $limit = 50) !!} <a href="{{ route('news.show', $item->slug) }}">Read more...</a></p>
                    </div>

                    @endforeach


                </div><!-- widget ends /-->

            </div><!-- right bar ends here /-->

        </div><!-- Row Ends /-->

        </div><!-- Row Ends /-->
    </div>
    <!-- Seminar Events Ends /-->


<!-- Content Section Ends /-->


<!-- Call to Action box -->
<div class="call-to-action">
   <div class="row">
        <div class="medium-10 small-12 columns">
            <h2><i class="fa fa-phone" aria-hidden="true"></i> 	If you Have Any Questions Call Us On <span>(010)123-456-7890</span></h2>
        </div>
        <div class="medium-2 small-12 columns">
            <a href="#" class="button secondary">Appointment</a>
        </div>
   </div><!-- row /-->
 </div>
<!-- Call to Action End /-->
@include('partials.footer')
@endsection

