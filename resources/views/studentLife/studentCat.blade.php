@extends('layouts.app')

@section('content')
@include('partials.topNav')
@include('layouts.mainNav')


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

<!-- Content section -->
<div class="content-section course-page">
<br>
    <!-- Seminar/Events -->
    <div class="module">
        <div class="row">

            <div class="courses-wrapper">

                <div class="course-section">


@forelse ($studentLife as $item)

<div class="medium-4 small-12 columns">
        <a href="{{ route('student.show', $item->slug) }}">
    <div class="course">
        <div class="course-thumb">

            <img src="/images/print.jpg" alt="Graphic Design" />
        </div>
        <h3>{{ $item->name }}</h3>

        <p style="">{!! (str_limit($item->content,50)) !!}</p>
        {{--  <ul class="no-bullet">
            <li><i class="fa fa-clock-o" aria-hidden="true"></i> <strong>Timing: </strong>8:00-9:00 / Wednesday and Sunday only</li>
            <li><i class="fa fa-calendar" aria-hidden="true"></i> <strong>Starting From: </strong>November 28, 2013</li>
        </ul>
        <a href="#" class="secondary button">Register Yourself!</a>  --}}
    </div>
        </a>
</div><!-- First Course /-->
@empty

@endforelse


                    <div class="clearfix"></div>
                </div><!-- Courses Section Ends /-->

        </div><!-- Row Ends /-->
    </div>
    <!-- Seminar Events Ends /-->

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
