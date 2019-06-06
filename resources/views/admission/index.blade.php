@extends('layouts.app')
@section('title', 'Admission')
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
    <div class="financial">
            @foreach ($financial as $item)
            <div class="row">
                 <div class="medium-6 columns medium-push-6  gallery-image" >
                         <div class="img-box" data-aos="zoom-in-left"   data-aos-duration="2500"
                         data-aos-easing="ease-in-sine">
                                 <a href="{{ route('services.show',$item->slug) }}">
                                 <img class="thumbnail" src="{{ Voyager::image( $item->image)}}">
                                 <div class="transparent-box">
                                   <div class="caption">
                                     {{--  <p>{{ $item->name }}</p>  --}}
                                     <p class="opacity-low">{{ $item->name}}</p>
                                   </div>
                                 </div>
                                 </a>
                               </div>
                 </div>
                 <div class="medium-6 columns medium-pull-6" data-aos="zoom-in-right"  data-aos-duration="3000"
                 data-aos-easing="ease-in-sine">
                 <a href="{{ route('services.show',$item->slug) }}"><h2>{{ $item->name }}.</h2></a>
                 <p>{!! str_limit($item->content,300) !!}<a href="{{ route('services.show', $item->slug) }}"><strong>Read More &raquo;</strong></a></p>
                 </div>
                 </div>
            @endforeach
            <hr>
            @foreach ($internationlStudent as $internationlStudent)
            <div class="row">
                 <div class="medium-6 columns " data-aos="zoom-in-right"  data-aos-duration="3000"
                 data-aos-easing="ease-in-sine">
                 <div class="img-box" data-aos="zoom-in-left"   data-aos-duration="2500"
                         data-aos-easing="ease-in-sine">
                                 <a href="{{ route('services.show',$internationlStudent->slug) }}">
                                 <img class="thumbnail" src="{{ Voyager::image( $internationlStudent->image)}}">
                                 <div class="transparent-box">
                                   <div class="caption">
                                     {{--  <p>{{ $internationlStudent->name }}</p>  --}}
                                     <p class="opacity-low">{{ $internationlStudent->name}}</p>
                                   </div>
                                 </div>
                                 </a>
                               </div>
                 </div>
                 <div class="medium-6 columns " data-aos="zoom-in-right"  data-aos-duration="3000"
                 data-aos-easing="ease-in-sine">
                 <a href="{{ route('services.show',$internationlStudent->slug) }}"><h2>{{ $internationlStudent->name }}.</h2></a>
                 <p>{!! str_limit($internationlStudent->content,300) !!}<a href="{{ route('services.show', $internationlStudent->slug) }}"><strong>Read More &raquo;</strong></a></p>
                 </div>
                 </div>
            @endforeach
         </div>
         <!-- Content Area Ends /-->


</div>
<!-- Content Section Ends /-->
<!-- Content Area Starts -->
<!-- Call to Action box -->
@include('partials.call')
<!-- Call to Action End /-->
@include('partials.footer')
@endsection
