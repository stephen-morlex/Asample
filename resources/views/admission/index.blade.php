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
              <li class="active"><a href="{{ route('program.index') }}">programmes</a></li>


            </ul>
          </nav>
        </div>
      </div>

<div class="content-section">
    <h2>CSS3 Horizontal Timeline</h2>
<p id="note">Since the flex property only works in Chrome, if your are using other browers please set the $chrome variable to false. <br/> It seems there is a CSS3 transform bug in Safari.</p>
<ul id='timeline'>
  <li class='entry'>
    <input checked='checked' class='radio' id='trigger5' name='trigger' type='radio'>
    <label for='trigger5'>
      <span>
        Lorem ipsum dolor sit amet
      </span>
    </label>
    <span class='date'>16 May 2013</span>
    <span class='circle'></span>
    <div class='content'>
      <h3>Lorem ipsum dolor sit amet (16 May 2013)</h3>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio ea necessitatibus quo velit natus cupiditate qui alias possimus ab praesentium nostrum quidem obcaecati laborum non ipsam ullam tempore reprehenderit illum eligendi cumque mollitia temporibus! Natus dicta qui est optio rerum.
      </p>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio ea necessitatibus quo velit natus cupiditate qui alias possimus ab praesentium nostrum quidem obcaecati nesciunt! Molestiae officiis voluptate excepturi rem veritatis eum aliquam qui non ipsam ullam tempore reprehenderit illum temporibus! qui est optio rerum.
      </p>
    </div>
  </li>
  <li class='entry'>
    <input class='radio' id='trigger4' name='trigger' type='radio'>
    <label for='trigger4'>
      <span>
        Lorem ipsum dolor sit amet
      </span>
    </label>
    <span class='date'>15 May 2013</span>
    <span class='circle'></span>
    <div class='content'>
      <h3>Lorem ipsum dolor sit amet (15 May 2013)</h3>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio ea necessitatibus quo velit natus cupiditate qui alias possimus ab praesentium nostrum quidem obcaecati nesciunt! Molestiae officiis voluptate excepturi rem veritatis eum aliquam.
      </p>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio ea necessitatibus quo velit natus cupiditate qui alias possimus ab praesentium nostrum quidem voluptate excepturi rem veritatis eum aliquam qui laborum non ipsam ullam tempore reprehenderit illum eligendi cumque mollitia temporibus! Natus dicta qui est optio rerum.
      </p>
    </div>
  </li>
  <li class='entry'>
    <input class='radio' id='trigger3' name='trigger' type='radio'>
    <label for='trigger3'>
      <span>
        Lorem ipsum dolor sit amet
      </span>
    </label>
    <span class='date'>14 May 2013</span>
    <span class='circle'></span>
    <div class='content'>
      <h3>Lorem ipsum dolor sit amet (14 May 2013)</h3>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio ea necessitatibus quo velit natus cupiditate qui alias possimus ab praesentium nostrum quidem obcaecati nesciunt! Molestiae officiis voluptate excepturi rem veritatis eum aliquam qui laborum non ipsam ullam tempore reprehenderit illum eligendi cumque mollitia temporibus! Natus dicta qui est optio rerum.
      </p>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio ea necessitatibus quo velit natus cupiditate qui alias possimus ab praesentium nostrum quidem obcaecati nesciunt!
      </p>
    </div>
  </li>
  <li class='entry'>
    <input class='radio' id='trigger2' name='trigger' type='radio'>
    <label for='trigger2'>
      <span>
        Lorem ipsum dolor sit amet
      </span>
    </label>
    <span class='date'>13 May 2013</span>
    <span class='circle'></span>
    <div class='content'>
      <h3>Lorem ipsum dolor sit amet (13 May 2013)</h3>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio ea necessitatibus quo velit natus cupiditate qui alias possimus ab praesentium nostrum quidem obcaecati nesciunt!
      </p>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio ea necessitatibus quo velit natus cupiditate qui alias possimus ab praesentium nostrum quidem obcaecati nesciunt! Molestiae officiis voluptate excepturi rem veritatis eum aliquam qui laborum non ipsam ullam tempore reprehenderit illum eligendi cumque mollitia temporibus! Natus dicta qui est optio rerum.
      </p>
    </div>
  </li>
  <li class='entry'>
    <input class='radio' id='trigger1' name='trigger' type='radio'>
    <label for='trigger1'>
      <span>
        Lorem ipsum dolor sit amet
      </span>
    </label>
    <span class='date'>12 May 2013</span>
    <span class='circle'></span>
    <div class='content'>
      <h3>Lorem ipsum dolor sit amet (12 May 2013)</h3>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio ea necessitatibus quo velit natus cupiditate qui alias possimus ab praesentium nostrum quidem obcaecati nesciunt! Molestiae officiis voluptate excepturi rem veritatis eum aliquam qui laborum non ipsam ullam tempore reprehenderit illum eligendi cumque mollitia temporibus! Natus dicta qui est optio rerum.
      </p>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio ea necessitatibus quo velit natus cupiditate qui alias possimus ab praesentium nostrum quidem obcaecati nesciunt!
      </p>
    </div>
  </li>
</ul>
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
