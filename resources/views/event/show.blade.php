@extends('layouts.app')

@include('partials.topNav')
@include('partials.header')
<br>
<div class="row">
        <div class=" small-12 columns">
          <nav aria-label="You are here:" role="navigation">
            <ul class="breadcrumbs">
              <li class="active"><a href="/">Home</a></li>
              <li class="active"><a href="{{ route('events.index') }}">Events</a></li>
              <li class="active"><a href="#">{{ $event->title }}</a></li>
            </ul>
          </nav>
        </div>
      </div>

@section('content')


<!-- Content section -->
        <div class="content-section">

            <!-- Seminar/Events -->
            <div class="module">
                <div class="row">

                    <div class="medium-9 small-12 columns">
                     	<div class="event-thumb">
                        	<img src="{{ Voyager::image( $event->image ) }}" class="thumbnail" />
                        </div><!-- Event Thumb /-->
						<div class="event-content">
                        	<p> {!! $event->content !!}</p>

                        </div><!-- Events content /-->
                    </div><!-- Events Wrapper Ends /-->

                    <div class="medium-3 small-12 columns sidebar">

                        <div class="widget">
                        	<h2>{{ $event->title }}</h2>
                           	<ul class="no-bullet special-icon-margin">
                                <li><i class="fa fa-clock-o"></i> <strong>Startind:</strong> {{ $event->start }}</li>
                                <li><i class="fa fa-clock-o"></i> <strong>Ending:</strong> {{ $event->end }}</li>
                            	<li><i class="fa fa-calendar"></i> <strong>Date:</strong>{{ $event->date }}</li>
                            	<li><i class="fa fa-location-arrow"></i> <strong>Location:</strong> {{ $event->location }}</li>
                                <li><i class="fa fa-phone"></i> <strong>Call:</strong> {{ $event->number }}</li>
                            </ul>
                            {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d286851.9103813513!2d-122.1651158!3d37.4064828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fa6b1117280ff%3A0xebbf998e5df289ab!2sMenlo+Park%2C+CA!5e0!3m2!1sen!2s!4v1471984430727" height="225"></iframe> --}}
                        </div><!-- Widget Ends /-->

                    </div><!-- Sidebar Ends /-->

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
