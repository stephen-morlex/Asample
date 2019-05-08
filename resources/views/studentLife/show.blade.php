@extends('layouts.app')

@section('content')
@include('partials.topNav')
@include('layouts.mainNav')
<!-- Content section -->
<br>
<div class="row">
        <div class=" small-12 columns">
          <nav aria-label="You are here:" role="navigation">
            <ul class="breadcrumbs">
              <li class="active"><a href="/">Home</a></li>
              <li class="active"><a href="{{ route('student.index') }}">student experience</a></li>
              <li class="active"><a href="#">{{ $student->name }}</a></li>
            </ul>
          </nav>
        </div>
      </div>


      <!-- Content section -->
      <div class="content-section">
<br>
          <!-- Seminar/Events -->
          <div class="module">
              <div class="row">

                  <div class="medium-9 small-12 columns">
                       <div class="event-thumb">
                          <img src="/images/3.jpg" style="height:368;" class="thumbnail" />
                      </div><!-- Event Thumb /-->
                      <div class="event-content">
                       <p>{!! $student->content !!}</p>
                      </div><!-- Events content /-->
                  </div><!-- Events Wrapper Ends /-->

                  <div class="medium-3 small-12 columns sidebar">


                <div class="widget">
                        <h2>More about student experience</h2>

                    @foreach ($studentSide as $ss)


                    <ol class="menu vertical">

                        <li> <i class="fa fa-align-left"><a href="{{ route('student.show', $ss->slug) }}">  {{ $ss->name }}</a></i></li>
                    </ol>
                    @endforeach
                </div><!-- widget ends /-->

                  </div><!-- Sidebar Ends /-->

              </div><!-- Row Ends /-->
          </div>
          <!-- Seminar Events Ends /-->

          <!-- Our Teachers -->
          <div class="seminar-events">
              <div class="row">

                  <div class="section-title-wrapper light-title">
                      <div class="section-title">
                          <h2>Reserve Your Seat</h2>
                          <p>Fill in the Form below to reserve your Seat Asap!</p>
                      </div>
                  </div> <!-- Title Ends /-->

                  {{--  somecontetn need to be added here  --}}

              </div><!-- row /-->
          </div>
          <!-- Our Teachers /-->

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

