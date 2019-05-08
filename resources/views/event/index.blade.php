@extends('layouts.app')

@include('partials.topNav')
@include('layouts.mainNav')
<br>
<div class="row">
        <div class=" small-12 columns">
          <nav aria-label="You are here:" role="navigation">
            <ul class="breadcrumbs">
              <li class="active"><a href="/">Home</a></li>
              <li class="active"><a href="#">Faculties, Schools and Instituate</a></li>
            </ul>
          </nav>
        </div>
      </div>

@section('content')

<!-- Content section -->
<div class="content-section module">

    <!-- Seminar/Events -->
    <div class="space-section module">
        <div class="row">

            <div class="events-wrapper">

                @foreach ($events as $event)
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
                @endforeach







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

