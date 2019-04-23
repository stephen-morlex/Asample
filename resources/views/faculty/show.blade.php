@extends('layouts.app')

@section('content')
@include('partials.topNav')
@include('partials.header')


<!-- Content section -->
<br>
<div class="row">
        <div class=" small-12 columns">
          <nav aria-label="You are here:" role="navigation">
            <ul class="breadcrumbs">
              <li class="active"><a href="/">Home</a></li>
              <li class="active"><a href="{{ route('faculty.index') }}">Faculties, Schools and Instituate</a></li>
              <li class="active"><a href="{{ route('faculty.show',$faculty->slug) }}">{{ $faculty->name }}</a></li>
            </ul>
          </nav>
        </div>
      </div>
<hr style="color:red 2px;">
<div class="content-section module blog-page">

    <div class="row">

        <div class="medium-9 small-12 columns posts-wrap">

            <div class="event-thumb">

                <img  src="{{ Voyager::image( $faculty->image ) }}"  class="thumbnail" />

            </div><!-- Course Thumb /-->


            <div class="event-content">
                <h2>{{ $faculty->name }}</h2>
                <p></p>

                    <p>{!! $faculty->description  !!}</p>
                    <hr>
                    <p>{!! $faculty->content !!}</p>
                </div><!-- Course content /-->

        </div><!-- Posts wrap ends /-->

        <div class="medium-3 small-12 columns sidebar">
            <div class="widget">
                <h2>Programmes</h2>

                <ol class="menu vertical">

                </ol>
            </div><!-- widget ends /-->

            <div class="widget">
                <h2>{!! $faculty->name !!} Brochure</h2>

                <ol class="menu vertical">
                    <li><a href="courses.html">
                            <?php $file = (json_decode($faculty->file))[0]->download_link; ?>
                            <a href="{{ Voyager::image( $file ) }}" target="_blank">{{$faculty->Nom}}Click here to download Brochure</a>
                    </a></li>

                </ol>
            </div><!-- widget ends /-->

            <div class="widget">
                <h2>In takes</h2>

                <ul class="menu vertical">
                    <li><a href="#">January - April</a></li>
                    <li><a href="#">May - july</a></li>
                    <li><a href="#">August - December</a></li>
                </ul>
            </div><!-- widget ends /-->



            <div class="widget">
                <h2> Some People also interested in</h2>

                <ul class="menu vertical">
                    @foreach ($alsoInterested as $f)
                    <li><a href="{{ route('faculty.show',$f->slug) }}">{{ $f->name }}</a></li>
                    @endforeach
                </ul>
            </div><!-- widget ends /-->




            <div class="clearfix"></div>
            </div><!-- widget ends /-->

        </div><!-- right bar ends here /-->

    </div><!-- Row Ends /-->

</div>
<!-- Content Section Ends /-->

<!-- Our Teachers -->

<div class="why-cuea content-area module">

    <div class="row">

        <div class="our-process-wrapper">

            <div class="medium-8 medium-offset-3 small-12 columns our-process">
                <h2>Why Cuea!</h2>

                <div class="process">
                    <div class="number"><i class="fa fa-heart" aria-hidden="true"></i></div>
                    <div class="right-info">
                        <h3>Select a Course you like and Explore it!</h3>
                        <p> Chartered Private University accredited by Commission of University Education.</p>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- process /-->

                <div class="process">
                    <div class="number"><i class="fa fa-users" aria-hidden="true"></i></div>
                    <div class="right-info">
                        <h3>Join a Seminar To know More about it!</h3>
                        <p> 34 solid years of offering education grounded on values
                            leading regional and international University.</p>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- process /-->

                <div class="process">
                    <div class="number"><i class="fa fa-globe" aria-hidden="true"></i></div>
                    <div class="right-info">
                        <h3>Get Enrolled and start better future with us!</h3>
                        <p>Rich diversity: Over 20 nationalities and 100+ programmes on offer</p>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- process /-->
                <div class="process">
                        <div class="number"><i class="fa fa-share" aria-hidden="true"></i></div>
                        <div class="right-info">
                            <h3>Get Enrolled and start better future with us!</h3>
                            <p> Innovative and marketable graduates</p>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- process /-->
                    <div class="process">
                            <div class="number"><i class="fa fa-cogs" aria-hidden="true"></i></div>
                            <div class="right-info">
                                <h3>Get Enrolled and start better future with us!</h3>
                                <p>Thirsty Crow should Call us at: 123-123-1234 to drink water asap before all seats are reserved.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div><!-- process /-->
            </div><!-- Left Process Ends /-->

<!--                    <div class="medium-4 small-12 columns our-testimonials"></div> Our Testimonials Ends /-->

        </div><!-- Events Wrapper Ends /-->

    </div><!-- Row Ends /-->
</div>


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
