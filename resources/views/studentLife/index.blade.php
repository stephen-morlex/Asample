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
              <li class="active"><a href="#">student experience</a></li>
            </ul>
          </nav>
        </div>
      </div>
<div class="content-section">
<br>
    <!-- Seminar/Events -->
    <div class="module">
        <div class="row">
            @forelse ($studentLife as $s)
                    <div class="medium-9 small-12 columns">
                            <div class="event-thumb">
                            <img src="{{ Voyager::image( $s->image ) }}" alt="Something0" class="thumbnail" />
                        </div><!-- Event Thumb /-->
                        <div class="event-content">
                            <p>{!! $s->content !!}!!}</p>
                        </div><!-- Events content /-->
                        </div><!-- Events Wrapper Ends /-->
             @empty
                        <h3>there is no content at the moment !</h3>
            @endforelse




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
                        <h2>Popular News</h2>

                        @forelse ($newsSide as $newsSide)
                             <div class="popular-post">
                                <a href="#"><strong>My new post title come out</strong></a>
                                <p><img alt="" src="images/blogthumb.jpg" class="float-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at velit in neque efficitur vehicula. <a href="#">Read more...</a></p>
                             </div>
                        @empty
                                <h4>No popular news</h4>
                        @endforelse



                    </div>

            </div><!-- right bar ends here /-->

        </div><!-- Row Ends /-->

        </div><!-- Row Ends /-->
    </div>
    <!-- Seminar Events Ends /-->


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

