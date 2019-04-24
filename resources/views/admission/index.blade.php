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


            </ul>
          </nav>
        </div>
      </div>
<div class="content-section">

    <br>
    <div class="seminar-events">

        <div class="row">

            <div class="courses-wrapper">

                <div class="course-section">

                    <div class="section-title">
                        <h2><span>Our Programmes</span></h2>
                    </div><!-- Section Title Ends /-->

              @forelse ($sections as $section)

              <div class="medium-6 small-12 columns">
                    <div class="course">
                        <div class="course-thumb">
                            <img src="{{ Voyager::image( $section->image ) }}" alt="{{ $section->name }}" />

                        </div>
                        <h3>{{ $section->name }} Admission</h3>
                        <a href="{{ route('admission.show', $section->slug) }}" class="secondary button">Enroll now</a>
                    </div>
                    <br>
                </div><!-- First Course /-->


              @empty

              @endforelse

                    <div class="clearfix"></div>
                </div><!-- Courses Section Ends /-->



        </div><!-- Row Ends /-->

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
