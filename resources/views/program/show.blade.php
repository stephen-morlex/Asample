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
              <li class="active"><a href="{{ route('program.index') }}">programmes</a></li>
<<<<<<< HEAD
              <li><a href="#">{{ $program->name }}</a></li>
=======
              <li><a href="#">{!!$program->faculty->name  !!} &nbsp|  {{ $program->name }}</a></li>
>>>>>>> 5051e1df1e87d04e8ddf9b6144c96224bb54b21f

            </ul>
          </nav>
        </div>
      </div>
<hr style="color:red 2px;">
<div class="content-section module blog-page">

    <div class="row">

        <div class="medium-9 small-12 columns posts-wrap">

            <div class="event-thumb">
                <img src="{{ Voyager::image( $program->image)}}"  class="thumbnail" />
            </div><!-- Course Thumb /-->


            <div class="event-content">
                <h2>{{ $program->name }}</h2>
                <p></p>

                    <p>{!!  $program->body  !!}</p>
                </div><!-- Course content /-->

        </div><!-- Posts wrap ends /-->

        <div class="medium-3 small-12 columns sidebar">

            <div class="widget">
                <h2>Under</h2>

                <ul class="menu vertical">
                    <li><a href="{{ route('faculty.show',$program->faculty->slug) }}">{!!$program->faculty->name  !!}</a></li>

                </ul>
            </div><!-- widget ends /-->
    </div><!-- Row Ends /-->

</div>
<!-- Content Section Ends /-->

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
