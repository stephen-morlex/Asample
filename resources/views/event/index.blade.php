@extends('layouts.app')
@section('content')
@include('partials.topNav')
@include('layouts.mainNav')

<!-- banner section -->
        <div class="title-section module">
            <div class="row">

                <div class="small-12 columns">
                    <h1>Events</h1>
                </div><!-- Top Row /-->

                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                       <li><a href="/">Home</a></li>
                       <li class="active"><a href="{{route('events.index')}}">Events</a></li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->
                
            </div><!-- Row /-->
        </div>
 <!-- End of the banner section -->

<!-- Content section -->
<div class="content-section module">

    <!-- Seminar/Events -->
    <div class="space-section module">
        <div class="row">

            <div class="events-wrapper">
@forelse ($events as $event)
        <div class="medium-6 small-12 columns">
                <div class="event">
                    <div class="medium-8 small-12 columns event-data">
                        <h4><a href="{{ route('event.show',$event->slug) }}">{!! $event->title !!}</a></h4>
                        <p> {!!  str_limit($event->content,250) !!}</p>
                        <p><strong>Timinings:</strong> {{ $event->start }}-{{ $event->end }}

                        <br><strong>Date:</strong> {{ $event->date }}</p>
                        <a href="{{ route('event.show',$event->slug) }}" class="button primary bordered-dark"> More details</a>
                    </div><!-- Event DAta /-->
                    <div class="medium-4 small-12 columns event-thumb">
                        <img src="{{ Voyager::image( $event->thumbnail('cropped'))}}" />
                    </div><!-- Event thumb /-->
                    <div class="clearfix"></div>
                </div><!-- Event div ends /-->
            </div><!-- Event Column Ends /-->
@empty
<h3>There is no event at the moment!</h3>
@endforelse






            </div><!-- Events Wrapper Ends /-->

        </div><!-- Row Ends /-->
    </div>
    <!-- Seminar Events Ends /-->


</div>
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

