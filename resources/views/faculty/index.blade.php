@extends('layouts.app')

@include('partials.topNav')
@include('layouts.mainNav')
<br>
<div class="row">
        <div class=" small-12 columns">
          <nav aria-label="You are here:" role="navigation">
            <ul class="breadcrumbs">
              <li class="active"><a href="/">Home</a></li>
              <li class="active"><a href="{{ route('faculty.index') }}">Faculties, Schools and Instituate</a></li>
            </ul>
          </nav>
        </div>
      </div>

@section('content')

   <br>
   <br>

          <!-- Content section -->
          <div class="content-section course-page">

                <!-- Seminar/Events -->
                <div class="module">
                    <div class="row">

                        <div class="courses-wrapper">

                            <div class="course-section">

                                <div class="section-title">
                                    <h2><span>Faculties, Schools & Institutes</span></h2>
                                </div><!-- Section Title Ends /-->
                                <hr style=" border: 5px solid #e79800;
                                border-radius: 5px;">

                                    @forelse ($faculties as $fa)

                                    <div class="medium-6 small-12 columns">

                                        <div class="course">
                                            <h3>{{ Str::limit($fa->name) }}</h3>
                                            <div class="course-thumb animated zoomInRight delay-1s">
                                                <a href="{{ route('faculty.show', $fa->slug) }}">
                                                <img src="{{ Voyager::image( $fa->thumbnail('cropped'))}}" alt="{{ Str::limit($fa->name) }}" />
                                                 </a>
                                            </div>
                                         <a  class="middle" href="{{ route('faculty.show',$fa->slug) }}" class="secondary button">More About {{ Str::limit($fa->name,50) }}</a>
                                      <br>
                                        </div>
                                    </div><!-- First Course /-->

                                    @empty
                                            <h3> There is no faculties uploaded yet.</h3>
                                    @endforelse


                                <div class="clearfix"></div>
                            </div><!-- Courses Section Ends /-->


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
