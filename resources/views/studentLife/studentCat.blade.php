@extends('layouts.app')

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
          <div class="content-section course-page">

                <!-- Seminar/Events -->
                <div class="module">
                    <div class="row">

                        <div class="courses-wrapper">

                            <div class="course-section">
<br>
                              @foreach ($studentLife as $item)
                              <div class="medium-4 small-12 columns">
                                    <div class="course">
                                        <div class="course-thumb">
                                                <a href="{{ route('student.show', $item->slug) }}">
                                            <img src="/images/print.jpg" alt="Graphic Design" />
                                             </a>
                                        </div>
                                        <a href="{{ route('student.show', $item->slug) }}"><h3>{!! $item->name !!}</h3></a>

                                    </div>
                                </div><!-- First Course /-->


                              @endforeach
                              <br>


                                <div class="clearfix"></div>

                              {{ $studentLife->links() }}
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
