@extends('layouts.app')
@section('content')
@include('partials.topNav')
@include('layouts.mainNav')
 <!-- banner section -->
        <div class="title-section module">
            <div class="row">

                <div class="small-12 columns">
                    <h1>About Cuea</h1>
                </div><!-- Top Row /-->

                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                       <li><a href="/">Home</a></li>
                       <li class="active"><a href="{{route('about.index')}}">About cuea</a></li>
                       <li class="active"><a href="#">{{ $about->title }}</a></li>

                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->
                
            </div><!-- Row /-->
        </div>
 <!-- End of the banner section -->
 
<!-- Content Area Starts -->
<div class="content-area module faq">
 <div class="row">

     <div class="medium-8 small-12 columns">


         <ul class="accordion" data-accordion>

            <li class="accordion-item is-active" data-accordion-item>
                <a href="#" class="accordion-title">{!! $about->title !!}</a>
                <div class="accordion-content" data-tab-content
                    data-aos="fade-up"
                    data-aos-anchor-placement="center-bottom"
                    data-aos-delay="100"
                >
                  {!! $about->content !!}
                </div>
            </li>

         </ul> <!-- reasons accordion ends -->
     </div>
     <div class="medium-3 small-12 columns sidebar">
            @foreach ($abouts as $item)

                        <div class="icon-box">
                            <div class="icon-side float-left">
                                <i class="fa fa-book" aria-hidden="true"></i>
                            </div><!-- icon side /-->
                            <div class="info-side float-left">
                                <a href="{{ route('about.show',$item->slug) }}"><p><strong>{{ $item->title }}</strong><br></a>
                                    <hr>
                                </p>
                            </div><!-- info side /-->
                            <div class="clearfix"></div>
                        </div><!-- icon-box /-->
            @endforeach

        </div>
 </div><!-- row / -->
</div>
<!-- Content Area Ends /-->



<!-- Call to Action box -->
<div class="call-to-action">
   <div class="row">
        <div class="medium-10 small-12 columns">
            <h2><i class="fa fa-phone" aria-hidden="true"></i>  If you Have Any Questions Call Us On <span>(010)123-456-7890</span></h2>
        </div>
        <div class="medium-2 small-12 columns">
            <a href="#" class="button secondary">Appointment</a>
        </div>
   </div><!-- row /-->
 </div>
<!-- Call to Action End /-->



@include('partials.footer')
@endsection
