@extends('layouts.app')

@section('content')
@include('partials.topNav')
@include('layouts.mainNav')

<!-- banner section -->
        <div class="title-section module">
            <div class="row">

                <div class="small-12 columns">
                    <h1>Admission</h1>
                </div><!-- Top Row /-->

                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                       <li><a href="/">Home</a></li>
                       <li class="active"><a href="{{route('admission.index')}}">Admission</a></li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->

            </div><!-- Row /-->
        </div>
 <!-- End of the banner section -->

<!-- Content section -->
<div class="content-section">

        <div class="program-seminar">

                <div class="row">

                    <div class="courses-wrapper">

                        <div class="course-section">

                            <div class="section-title">
                                <h2><span>Admission process</span></h2>
                            </div><!-- Section Title Ends /-->



                      <div class="medium-17 small-12 columns">

                            <ol class="progress-indicator">
                                    <li class="is-complete" data-step="1" >
                                            <span>Chose a program</span>
                                    </li>

                                    <li class="is-complete" data-step="2">
                                            <span>Apply</span>
                                    </li>
                                    <li class="is-complete" data-step="3">
                                            <span>Verification of your certificate</span>
                                    </li>
                                    <li class="is-complete" data-step="4">
                                            <span>Take an Entrance exam</span>
                                    </li>
                                    <li class="is-complete" data-step="5">
                                            <span>Join University</span>
                                    </li>
                                  </ol>



                     </div><!-- product Ends here -->
                        <div class="clearfix"></div>
       </div><!-- Courses Section Ends /-->
                </div><!-- Row Ends /-->
            </div>
            <!-- Our Teachers /-->
        </div>

    <div class="seminar-events">

        <div class="row">
                <div class="course-section">

                    <div class="section-title">
                        <h2><span>Our Programmes</span></h2>
                    </div><!-- Section Title Ends /-->

              @forelse ($sections as $section)

               <div class="medium-3 small-12 columns">
                        <div class="single-product">
                            <div class="product-img thumbnail"
                            data-aos="fade-up" data-aos-duration="2000"
                            >
                                <a href="{{route('admission.show',$section->slug)}}">
                                    <img   class="front-image" src="{{ Voyager::image( $section->thumbnail('cropped'))}}">
                                </a>
                                <div class="add-to-cart-top">
                                        <a href="{{route('admission.show',$section->slug)}}" class="button primary">{{$section->name}}</a>
                                </div>
                            </div>
                            <div class="product-info"
                            data-aos="zoom-in"data-aos-anchor-placement="bottom-bottom" data-aos-duration="3000"
                            >
                                <h6><a href="{{route('admission.show',$section->slug)}}">{{$section->name}}</a></h6>
                               <div class="tx-div"></div>
                            </div>
                        </div>
                    </div><!-- product Ends here -->

              @empty
                    <h4 align="center"> there is no program at the moment !</h4>
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
                 <h2><i class="fa fa-phone" aria-hidden="true"></i> 	If you Have Any Questions Call Us On <span>+(254) 709-691-000</span></h2>
             </div>
             <div class="medium-2 small-12 columns">
                 <a href="{{ route('contact.index') }}" class="button secondary">Appointment</a>
             </div>
        </div><!-- row /-->
      </div>

<!-- Call to Action End /-->

@include('partials.footer')
@endsection
