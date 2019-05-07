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
            </ul>
          </nav>
        </div>
      </div>
<div class="content-section">
<br>
    <!-- Seminar/Events -->
    <div class="module">
        <div class="row">
@foreach ($studentLife as $s)
                <div class="medium-9 small-12 columns">
                <div class="event-thumb">
                <img src="{{ Voyager::image( $s->image ) }}" alt="Something0" class="thumbnail" />
            </div><!-- Event Thumb /-->
            <div class="event-content">
                <p>{!! $s->content !!}!!}</p>
            </div><!-- Events content /-->
            </div><!-- Events Wrapper Ends /-->
@endforeach

            <div class="medium-3 small-12 columns sidebar">

                <div class="widget">
                        <h2>More about student experience</h2>

                    @foreach ($studentSide as $ss)


                    <ol class="menu vertical">

                        <li> <i class="fa fa-list"><a href="{{ route('student.show', $ss->slug) }}">  {{ $ss->name }}</a></i></li>
                    </ol>
                    @endforeach
                </div><!-- widget ends /-->

                <div class="widget">
                    <h2>Training Methodology</h2>

                    <ol class="menu vertical">
                        <li><a href="courses.html">Lectures & demos by industry experts</a></li>
                        <li><a href="courses.html">Project driven hands-on approach</a></li>
                        <li><a href="courses.html">Focus on latest tools, technologies & industry practices</a></li>
                        <li><a href="courses.html">Projects, assignments & quizzes for student’s evaluation</a></li>
                    </ol>
                </div><!-- widget ends /-->


            </div><!-- right bar ends here /-->

        </div><!-- Row Ends /-->

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

            <div class="contact-form">

                <div class="row">
                    <div class="medium-6 small-12 columns">
                        <label>
                            <input type="text" value="" placeholder="Your name here..." />
                        </label>
                    </div>
                    <div class="medium-6 small-12 columns">
                        <label>
                            <input type="text" value="" placeholder="Your last name here..." />
                        </label>
                    </div>
                </div><!-- Row Ends /-->

                <div class="row">
                    <div class="medium-6 small-12 columns">
                        <label>
                            <input type="text" value="" placeholder="Enter your Website ..." />
                        </label>
                    </div>
                    <div class="medium-6 small-12 columns">
                        <label>
                            <input type="text" value="" placeholder="Reason contacting us ..." />
                        </label>
                    </div>
                </div><!-- Row Ends /-->

                <div class="row">
                    <div class="medium-6 small-12 columns">
                        <label>
                            <select>
                                <option value="1">Chose Course</option>
                                <option value="2">Course One</option>
                                <option value="3">Course Two</option>
                            </select>
                        </label>
                    </div>
                    <div class="medium-6 small-12 columns">
                        <label>
                            <select>
                                <option value="1">Chose Teacher</option>
                                <option value="2">Teacher One</option>
                                <option value="3">Teacher Two</option>
                            </select>
                        </label>
                    </div>
                </div><!-- Row Ends /-->

                <div class="row">
                    <div class="medium-12 small-12 columns">
                        <label>
                            <textarea rows="4" placeholder="Your message ..."></textarea>
                        </label>
                        <input type="submit" class="button primary bordered-light" value="Send your message" />
                    </div>
                </div><!-- Row Ends /-->

            </div><!-- Contact form /-->

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

