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
              <li><a href="#0">{{ $sectionName }}</a></li>

            </ul>
          </nav>
        </div>
      </div>


        <!-- Content section -->
        <div class="content-section space-section module testimonial-page">

            <div class="row">

                  <div class="section-title">
                          <h2><span>{{ $sectionName }} Program</span></h2>
                      </div><!-- Section Title Ends /-->

                <div class="medium-9 small-12 columns test-wrap">

                  @forelse ($programs as $pro)

                  <div class="medium-12 small-12 columns">
                          <div class="testimonial">
                                <a href="{{ route('program.show',$pro->slug) }}"><span class="label success">Details</span></a>
                              <div class="testimonial-thumb">
                                 <a href="{{ route('program.show',$pro->slug) }}"> <img src="{{ asset('images/logo.jpg') }}" alt="John Doe" /></a>
                              </div><!-- Testimonial Thumb /-->
                              <div class="testimonial-detail">
                                  <a href="{{ route('program.show',$pro->slug) }}"><h4>{{ $pro->name }}!</h4>
                                  <p>{!! Markdown::convertToHtml(str_limit($pro->body,180)) !!}</p>
                                </a>
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
