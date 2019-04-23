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


    <!-- Our Teachers -->
    <div class="blog-posts module grey-bg">
            <div class="row">
                    <div class="columns">
                      <div class="orbit" role="region" aria-label="Favorite Text Ever" data-orbit>
                        <ul class="orbit-container">
                          <button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
                          <button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
                          <li class="is-active orbit-slide">
                            <div class="docs-example-orbit-slide">
                                    <div class="testimonial">
                                            <div class="testimonial-thumb">

                                            </div><!-- Testimonial Thumb /-->
                                            <div class="testimonial-detail">
                                                <h4>Very happy to find this institute!</h4>
                                                <p>After graduation we were very worried about our children what he will do as he does not have any work experience but when he joined this abc institute this he became so professional!</p>
                                                <cite>Maria Doe</cite>
                                            </div><!-- Testimonial Detail /-->
                                            <div class="clearfix"></div>
                                         </div>
                            </div>
                          </li>
                          <li class="is-active orbit-slide">
                                <div class="docs-example-orbit-slide">
                                        <div class="testimonial">
                                                <div class="testimonial-thumb">

                                                </div><!-- Testimonial Thumb /-->
                                                <div class="testimonial-detail">
                                                    <h4>Very happy to find this institute!</h4>
                                                    <p>After graduation we were very worried about our children what he will do as he does not have any work experience but when he joined this abc institute this he became so professional!</p>
                                                    <cite>Maria Doe</cite>
                                                </div><!-- Testimonial Detail /-->
                                                <div class="clearfix"></div>
                                             </div>
                                </div>
                              </li>
                              <li class="is-active orbit-slide">
                                    <div class="docs-example-orbit-slide">
                                            <div class="testimonial">
                                                    <div class="testimonial-thumb">

                                                    </div><!-- Testimonial Thumb /-->
                                                    <div class="testimonial-detail">
                                                        <h4>Very happy to find this institute!</h4>
                                                        <p>After graduation we were very worried about our children what he will do as he does not have any work experience but when he joined this abc institute this he became so professional!</p>
                                                        <cite>Maria Doe</cite>
                                                    </div><!-- Testimonial Detail /-->
                                                    <div class="clearfix"></div>
                                                 </div>
                                    </div>
                                  </li>
                                  <li class="is-active orbit-slide">
                                        <div class="docs-example-orbit-slide">
                                                <div class="testimonial">
                                                        <div class="testimonial-thumb">

                                                        </div><!-- Testimonial Thumb /-->
                                                        <div class="testimonial-detail">
                                                            <h4>Very happy to find this institute!</h4>
                                                            <p>After graduation we were very worried about our children what he will do as he does not have any work experience but when he joined this abc institute this he became so professional!</p>
                                                            <cite>Maria Doe</cite>
                                                        </div><!-- Testimonial Detail /-->
                                                        <div class="clearfix"></div>
                                                     </div>
                                        </div>
                                      </li>
                        </ul>
                        <nav class="orbit-bullets">
                          <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
                          <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
                          <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
                          <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
                        </nav>
                      </div>
                    </div>
                  </div>
    </div>
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
                            <img src="{{ Voyager::image( $section->image ) }}" alt="Graphic Design" />

                        </div>
                        <h3>{{ $section->name }} Program</h3>
                        <a href="{{ route('program.section', $section->slug) }}" class="secondary button">Enroll now</a>
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

  <!-- Content section -->
  <div class="content-section space-section module testimonial-page">

      <div class="row">

            <div class="section-title">
                    <h2><span>Our Programmes</span></h2>
                </div><!-- Section Title Ends /-->

          <div class="medium-9 small-12 columns test-wrap">

            @forelse ($programs as $pro)

            <div class="medium-12 small-12 columns">
                    <div class="testimonial">

                                <a href="{{ route('program.show',$pro->slug) }}"><span class="label success">Details</span></a>
                        <div class="testimonial-thumb">
                            <img src="images/logo.jpg" alt="John Doe" />
                        </div><!-- Testimonial Thumb /-->
                        <div class="testimonial-detail">
                            <h4>{{ $pro->name }}</h4>
                            <p>{!! Markdown::convertToHtml(str_limit($pro->body,95)) !!}</p>
                            <a href="{{ route('program.section', $pro->section->slug) }}"><cite>{{ $pro->section->name }}  program</cite></a>
                        </div><!-- Testimonial Detail /-->
                        <div class="clearfix"></div>
                     </div> <!-- Testimonial /-->
                 </div><!-- Column Ends /-->
            @empty
                    <h2>Sorry there are no programs at the moment</h2>
            @endforelse




          </div><!-- testimonial wrap /-->

          <div class="medium-3 small-12 columns sidebar">
              <div class="widget">
                  <h2>Submit Testimonial</h2>

                  <div class="widget-content">
                      <form>
                          <input type="text" placeholder="Your name..." />
                          <input type="text" placeholder="Your Email ...." />
                          <select>
                              <option>Select rating</option>
                              <option>1 Start</option>
                              <option>2 Start</option>
                              <option>3 Start</option>
                              <option selected>4 Start</option>
                              <option>5 Start</option>
                          </select>
                          <select>
                              <option>Select Service</option>
                              <option>Service 1</option>
                              <option>Service 2</option>
                              <option>Service 3</option>
                          </select>
                          <select>
                              <option>Select Doctor</option>
                              <option>Doctor 1</option>
                              <option>Doctor 2</option>
                              <option>Doctor 3</option>
                          </select>
                          <input type="text" placeholder="Reason of satisfaction..." />
                          <label>Select Your Image
                              <input type="file" />
                         </label>
                         <textarea placeholder="Your review..." rows="2"></textarea>
                         <input type="submit" class="button primary" />
                      </form>
                  </div>

              </div><!-- widget Ends /-->

         </div><!-- right bar ends here /-->

      </div><!-- Row Ends /-->

  </div>
  <!-- Content Section Ends /-->



@include('partials.footer')
@endsection
