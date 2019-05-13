@extends('layouts.app')

@section('content')
@include('partials.topNav')
@include('layouts.mainNav')

<!-- banner section -->
        <div class="title-section module">
            <div class="row">

                <div class="small-12 columns">
                    <h1>Programs</h1>
                </div><!-- Top Row /-->

                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                     <li><a href="/">Home</a></li>
                     <li class="active"><a href="">Academics</a></li>
                     <li ><a href="{{route('program.index')}}">Programs</a></li>
                     <li class="active"><a href="#">{{ $sectionName }}</a></li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->
                
            </div><!-- Row /-->
        </div>

<!-- End of the banner section -->


        <!-- Content section -->
        <div class="content-section space-section module testimonial-page">

            <div class="row">

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

              
            </div><!-- Row Ends /-->

        </div>
        <!-- Content Section Ends /-->

@include('partials.footer')
@endsection
